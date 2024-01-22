<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreServiceApplicationDocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_document' => 'required|string|max:255',
            'title_document_file' => 'required|file|mimes:pdf|max:2048',
            'survey_document' => 'required|string|max:255',
            'survey_document_file' => 'required|file|mimes:pdf|max:2048',
            'sand_search_report' => 'required|string|max:255',
            'sand_search_report_file' => 'required|file|mimes:pdf|max:2048',
            'cac_certificate' => 'required|string|max:255',
            'cac_certificate_file' => 'required|file|mimes:pdf|max:2048',
            'pre_post_dredge_survey_drawings' => 'required|string|max:255',
            'pre_post_dredge_survey_drawings_file' => 'required|file|mimes:pdf|max:2048',
            'eia_report' => 'required|string|max:255',
            'eia_report_file' => 'required|file|mimes:pdf|max:2048',
        ];
    }
}
