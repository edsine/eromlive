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

class ServiceApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $services = Service::all();

        $service_applications = ServiceApplication::where('user_id', $user->id)->paginate(10);

        return view('service_applications.index', compact('services', 'service_applications'));
    }

    public function documentIndex($id)
    {
        $user = Auth::user();

        $service_application = ServiceApplication::findOrFail($id);

        $documents = ServiceApplicationDocument::where('service_application_id', $service_application->id)->paginate(10);

        return view('service_applications.documents', compact('documents', 'service_application'));
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
        $input = $request->all();

        $documents = [
            'title_document' => 'title_document_file',
            'survey_document' => 'survey_document_file',
            'sand_search_report' => 'sand_search_report_file',
            'cac_certificate' => 'cac_certificate_file',
            'pre_post_dredge_survey_drawings' => 'pre_post_dredge_survey_drawings_file',
            'eia_report' => 'eia_report_file',
        ];

        $service_application = ServiceApplication::findOrFail($service_application_id);

        $path = 'documents/';
        $userID = Auth::user()->id;

        $file_paths = [];

        foreach ($documents as $titleInput => $fileInput) {
            $title = $request->input($titleInput);
            $file = $request->file($fileInput);

            if ($file) {
                $name = $userID . '_documents.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/' . $path), $name);
                $filePath = $path . $name;

                $file_paths[$title] = $filePath;
            }
        }


        $input['user_id'] = $userID;

        foreach ($file_paths as $title => $file_path) {
            $documents =  ServiceApplicationDocument::create([
                'service_application_id' => $service_application->id,
                'name' => $title,
                'path' => $file_path,
            ]);
        }

        $service_application->current_step = 4;
        $service_application->save();

        return redirect(route('service-applications.documents.index', $service_application->id))->with('success', 'Documents saved successfully.');
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

        return view('service_applications.processing_fee_payment', compact('payments', 'pending_payment', 'service_application'));
    }

    public function inspectionFeePayment($service_application_id)
    {
        $payments = auth()->user()->payments()->orderBy('created_at', 'DESC')->get();

        $pending_payment = auth()->user()->payments()
            ->where('payment_type', 3)
            ->where('payment_status', 0)
            ->get()->last();

        $service_application = ServiceApplication::findOrFail($service_application_id);

        return view('service_applications.inspection_fee_payment', compact('payments', 'pending_payment', 'service_application'));
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
