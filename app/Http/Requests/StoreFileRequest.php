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
            'content_id' => [
                'required',
                Rule::unique('files')->where(function($query) {
                    $query->where('series_id', '=', request()->series_id);
                })
            ],
            'title_of_content' => [
                'required'
            ],
            'type_of_content' => [
                'required'
            ],
            'type_of_file' => [
                'required'
            ],
            'episode' => [
                'required'
            ],
            'duration' => [
                'required'
            ],
            'file_extension' => [
                'required'
            ],
            'resolution' => [
                'required'
            ],
            'path' => [
                'required'
            ],
            'storage' => [
                'required'
            ],
            'year' => [
                'required'
            ],
            'file_size' => [
                'required'
            ],
            'series_id' => [
                'required'
            ],
            'date_received' => [
                'date_format:' . config('panel.date_format'),
                'required',
            ],
            'start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];  
    }
}
