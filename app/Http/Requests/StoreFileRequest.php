<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('file_create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'series_id' => [
                'required'
            ],
            'date_received' => [
                'nullable',
                'date_format:' . config('panel.date_format'),
            ],
            'start_date' => [
                'nullable',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date' => [
                'nullable',
                'date_format:' . config('panel.date_format'),
                
            ],
        ];  
    }
}
