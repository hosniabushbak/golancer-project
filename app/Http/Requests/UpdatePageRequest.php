<?php

namespace App\Http\Requests;

use App\Models\Page;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('page_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:pages,title,' . request()->route('page')->id,
            ],
            'description' => [
                'required',
            ],
            'banner' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'buttons' => [
                'string',
                'required',
                'unique:pages,buttons,' . request()->route('page')->id,
            ],
        ];
    }
}
