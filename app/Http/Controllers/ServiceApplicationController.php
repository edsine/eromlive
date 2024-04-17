<?php

namespace App\Http\Controllers;

use App\Models\Request;
use App\Models\Service;
use App\Models\ServiceApplication;
use Illuminate\Support\Facades\Auth;
use App\Models\ServiceApplicationDocument;
use App\Http\Requests\StoreServiceApplicationRequest;
use App\Http\Requests\UpdateServiceApplicationRequest;
use App\Http\Requests\StoreServiceApplicationDocumentRequest;
use App\Models\ApplicationFormFee;
use App\Models\DocumentUpload;
use App\Models\ProcessingType;
use Illuminate\Support\Facades\DB;

class ServiceApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $services = Service::where('branch_id', $user->branch->id)->get();

        //$service_applications = ServiceApplication::where('user_id', $user->id)->paginate(10);
        $service_applications = ServiceApplication::with('processingType')->where('user_id', $user->id)
            ->select('service_applications.*', 'processing_types.name as pname')
            ->join('processing_types', 'service_applications.service_type_id', '=', 'processing_types.id')
            ->paginate(10);

        $service_app = ServiceApplication::where('user_id', $user->id)->first();
        /* if($service_app){
        $pro_type = ProcessingType::where('service_id', $service_app->service_id)->get();
        } */

        return view('service_applications.index', compact('services', 'service_applications', 'service_app'));
    }

    public function getProcessingTypes(ProcessingType $processingType, $id)
{
    $service = Service::find($id);
    $processingTypes = $processingType->where('branch_id', $service->branch_id)->get();
    //$processingTypes = $service->processingTypes()->get();
    return response()->json($processingTypes);
}

    public function documentIndex($id)
    {
        $user = Auth::user();

        $service_application = ServiceApplication::findOrFail($id);

        $documents = ServiceApplicationDocument::where('service_application_id', $service_application->id)->paginate(10);

        if($service_application){
        $doc_uploads = DocumentUpload::where('branch_id', $user->branch->id)->where("service_id",$service_application->service_id)->get();
        }

        return view('service_applications.documents', compact('documents', 'service_application', 'doc_uploads'));
    }

    public function resubmitDocuments($id)
    {
        $user = Auth::user();

        $service_application = ServiceApplication::findOrFail($id);
        $service_application->current_step = 5;
        $service_application->status_summary = 'Waiting for document and payment verification';
        $service_application->save();

        return redirect(route('service-applications.index', $service_application->id))->with('success', 'Documents resubmitted for verification.');
    }

    public function documentStore(StoreServiceApplicationDocumentRequest $request, $service_application_id)
    {
        // Retrieve all input data from the request
        $input = $request->all();
        
        // Define the documents array mapping input names to file input names
        $documents = [
            'title_document' => 'title_document_file',
        ];
    
        // Find the service application by ID
        $service_application = ServiceApplication::findOrFail($service_application_id);
    
        // Define the storage path and get the user ID
        $path = 'documents/';
        $userID = Auth::id(); // Use Auth::id() to get the authenticated user's ID
    
        // Array to store file paths
        $filePaths = [];
    
        // Iterate through the documents array and process each file
        //foreach ($documents as $titleInput => $fileInput) {
        foreach ($request->file('title_document_file') as $index => $file) {
            // Generate a unique file name
            $name = $this->generateFileName($file);

            // Move the file to the storage directory
            $file->move(public_path('storage/' . $path), $name);

            // Construct the file path
            $filePath = $path . $name;

            // Store the file path in the array
            $filePaths[$request->title_document[$index]] = $filePath;

            ServiceApplicationDocument::create([
                'service_application_id' => $service_application->id,
                'name' => $request->title_document[$index],
                'path' => $filePath,
            ]);
           
        }
    
        // Save the user ID to the input data
        $input['user_id'] = $userID;
    
        // Iterate through the file paths and create ServiceApplicationDocument records
       /*  foreach ($filePaths as $title => $filePath) {
            ServiceApplicationDocument::create([
                'service_application_id' => $service_application->id,
                'name' => $title,
                'path' => $filePath,
            ]);
        } */
    
        // Update the current step of the service application
        $service_application->current_step = 5;
        $service_application->save();
    
        // Redirect back with success message
        /* return redirect(route('service-applications.documents.index', $service_application->id))
            ->with('success', 'Documents saved successfully.'); */
            return redirect(route('service-applications.index'))
            ->with('success', 'Documents saved successfully.');
    }
    
    // Function to generate a unique file name
    private function generateFileName($file)
    {
        $userID = auth()->id();
        $timestamp = time();
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        return "{$userID}_{$timestamp}_{$originalName}";
    }

    public function applicationFormPayment($service_application_id)
    {
        $payments = $payments = auth()->user()->payments()->orderBy('created_at', 'DESC')->get();

        $pending_payment = auth()->user()->payments()
            ->where('payment_type', 1)
            ->where('payment_status', 0)
            ->get()->last();

        return view('service_applications.application_form_payment', compact('payments', 'service_application_id', 'pending_payment'));
    }

    public function processingFeePayment($service_application_id)
    {
        $payments = auth()->user()->payments()->orderBy('created_at', 'DESC')->get();

        $pending_payment = auth()->user()->payments()
            ->where('payment_type', 2)
            ->where('payment_status', 0)
            ->get()->last();

        $service_application = ServiceApplication::findOrFail($service_application_id);

        return view('service_applications.processing_fee_payment', compact('payments', 'pending_payment', 'service_application', 'service_application_id'));
    }

    public function inspectionFeePayment($service_application_id)
    {
        $payments = auth()->user()->payments()->orderBy('created_at', 'DESC')->get();

        $pending_payment = auth()->user()->payments()
            ->where('payment_type', 3)
            ->where('payment_status', 0)
            ->get()->last();

        $service_application = ServiceApplication::findOrFail($service_application_id);

        return view('service_applications.inspection_fee_payment', compact('payments', 'pending_payment', 'service_application', 'service_application_id'));
    }

    public function equipmentFeePayment($service_application_id)
    {
        $payments = auth()->user()->payments()->orderBy('created_at', 'DESC')->get();

        $pending_payment = auth()->user()->payments()
            ->where('payment_type', 5)
            ->where('payment_status', 0)
            ->get()->last();

        $service_application = ServiceApplication::findOrFail($service_application_id);

        return view('service_applications.equipment_fee_payment', compact('payments', 'pending_payment', 'service_application'));
    }

    public function downloadPermit($service_application_id)
    {
        $service_application = ServiceApplication::findOrFail($service_application_id);

        return view('service_applications.permit', compact('service_application'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceApplicationRequest $request)
    {
        $input = $request->all();
        $path = 'documents/';
        $userID = Auth::user()->id;

        $input['user_id'] = $userID;

        $serviceApplication = ServiceApplication::create($input);

        return redirect(route('service-applications.index'))->with('success', 'Application created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceApplication $serviceApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceApplication $serviceApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceApplicationRequest $request, ServiceApplication $serviceApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceApplication $serviceApplication)
    {
        //
    }
}
