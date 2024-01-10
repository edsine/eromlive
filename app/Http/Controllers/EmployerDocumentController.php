<?php

namespace App\Http\Controllers;

use App\Mail\PaymentStatusMail;
use App\Models\Employee;
use App\Models\Employer;
use App\Models\EmployerDocuments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EmployerDocumentController extends Controller
{

    public function index()
    {
        $employer_documents = EmployerDocuments::where('employer_id', auth()->user()->id)->get();
        return view('documents.index', compact(['employer_documents']));
    }

    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_document' => 'required|string|max:255',
            'title_document_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed file types and size
            'survey_document' => 'required|string|max:255',
            'survey_document_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sand_search_report' => 'required|string|max:255',
            'sand_search_report_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cac_certificate' => 'required|string|max:255',
            'cac_certificate_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pre_post_dredge_survey_drawings' => 'required|string|max:255',
            'pre_post_dredge_survey_drawings_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'eia_report' => 'required|string|max:255',
            'eia_report_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $title = $request->input('title_document');
        $title_document_file = $request->file('title_document_file');
        $path = 'documents/';
        $name = \Auth::user()->id . '_documents.' . $title_document_file->getClientOriginalExtension();
        // Move the uploaded file to the desired location
        $title_document_file->move(public_path('storage/'.$path), $name);
        // Build the full path to the saved file
        $path1 = $path . $name;

        $title2 = $request->input('survey_document');
        $survey_document_file = $request->file('survey_document_file');
        $name2 = \Auth::user()->id . '_documents.' . $survey_document_file->getClientOriginalExtension();
        // Move the uploaded file to the desired location
        $survey_document_file->move(public_path('storage/'.$path), $name2);
        // Build the full path to the saved file
        $path2 = $path . $name2;

        $title3 = $request->input('sand_search_report');
        $sand_search_report_file = $request->file('sand_search_report_file');
        $name3 = \Auth::user()->id . '_documents.' . $sand_search_report_file->getClientOriginalExtension();
        // Move the uploaded file to the desired location
        $sand_search_report_file->move(public_path('storage/'.$path), $name3);
        // Build the full path to the saved file
        $path3 = $path . $name3;

        $title4 = $request->input('cac_certificate');
        $cac_certificate_file = $request->file('cac_certificate_file');
        $name4 = \Auth::user()->id . '_documents.' . $cac_certificate_file->getClientOriginalExtension();
        // Move the uploaded file to the desired location
        $cac_certificate_file->move(public_path('storage/'.$path), $name4);
        // Build the full path to the saved file
        $path4 = $path . $name4;

        $title5 = $request->input('pre_post_dredge_survey_drawings');
        $pre_post_dredge_survey_drawings_file = $request->file('pre_post_dredge_survey_drawings_file');
        $name5 = \Auth::user()->id . '_documents.' . $pre_post_dredge_survey_drawings_file->getClientOriginalExtension();
        // Move the uploaded file to the desired location
        $pre_post_dredge_survey_drawings_file->move(public_path('storage/'.$path), $name5);
        // Build the full path to the saved file
        $path5 = $path . $name5;

        $title6 = $request->input('eia_report');
        $eia_report_file = $request->file('eia_report_file');
        $name6 = \Auth::user()->id . '_documents.' . $eia_report_file->getClientOriginalExtension();
        // Move the uploaded file to the desired location
        $eia_report_file->move(public_path('storage/'.$path), $name6);
        // Build the full path to the saved file
        $path6 = $path . $name6;

        EmployerDocuments::create([
            'employer_id' => auth()->user()->id,
            'title' => $title,
            'file_path' => $path1,
        ]);
        EmployerDocuments::create([
            'employer_id' => auth()->user()->id,
            'title' => $title2,
            'file_path' => $path2,
        ]);
        EmployerDocuments::create([
            'employer_id' => auth()->user()->id,
            'title' => $title3,
            'file_path' => $path3,
        ]);
        EmployerDocuments::create([
            'employer_id' => auth()->user()->id,
            'title' => $title4,
            'file_path' => $path4,
        ]);
        EmployerDocuments::create([
            'employer_id' => auth()->user()->id,
            'title' => $title5,
            'file_path' => $path5,
        ]);
        EmployerDocuments::create([
            'employer_id' => auth()->user()->id,
            'title' => $title6,
            'file_path' => $path6,
        ]);

        return redirect('/documents/index')->with('success', 'Document uploaded successfully.');
    }
}