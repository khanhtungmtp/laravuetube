<?php

namespace App\Http\Requests\Channels;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChanelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->channel->user_id === auth()->user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required',
            'image'       => 'image',
            'description' => 'max:1000'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'image'    => ':attribute chỉ hỗ trợ hình có đuôi jpg,jpeg,png,gif',
            'max'      => ':attribute chỉ cho phép dưới 1000 từ'
        ];
    }

    public function attributes()
    {
        return [
            'name'        => 'Tên kênh',
            'image'       => 'Hình ảnh kênh',
            'description' => 'Mô tả kênh'
        ];
    }
}
