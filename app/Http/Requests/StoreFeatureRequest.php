<?php

namespace App\Http\Requests;

use App\Models\Feature;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFeatureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('feature_create');
    }

    public function rules()
    {
        return [
            'icon' => [
                'string',
                'required',
            ],
            'btn_link' => [
                'string',
                'required',
            ],
            'content' => [
                'required',
            ],
        ];
    }
}
