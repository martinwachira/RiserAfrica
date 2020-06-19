<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProjectDetails extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'projectName' => 'required|min:5',
            'type_of_projects_id' => 'required|integer',
            'projectDemographic' => 'required|integer',
            'projectDetails' => 'required',
            'typeOfAssistanceRequiredId' => 'required|integer',
            'projectProposerId ' => 'required|integer',
            'financialBreakDownDocumentLocation' => 'required',
            'businessCaseDocumentLocation' => 'required',
            'asistanceRequiredToRefineDocuments' => 'required',
            'approved' => 'required',
            'approvedById' => 'required|integer'
        ];
    }
}
