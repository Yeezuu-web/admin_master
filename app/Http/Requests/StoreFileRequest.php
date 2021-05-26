<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;

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
                'string',
                'required'
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
            'me' => [
                'required'
            ],
            'khmer_dub' => [
                'required'
            ],
            'path' => [
                'required'
            ],
            'storage' => [
                'required'
            ],
            'date_received' => [
                'required'
            ],
            'year' => [
                'required'
            ],
            'poster' => [
                'required'
            ],
            'trailer_promo' => [
                'required'
            ],
            'synopsis' => [
                'required'
            ],
            'file_size' => [
                'required'
            ],
            'start_date' => [
                'required'
            ],
            'end_date' => [
                'required'
            ],
            'period_of_time' => [
                'required'
            ]
        ];  
    }
}
