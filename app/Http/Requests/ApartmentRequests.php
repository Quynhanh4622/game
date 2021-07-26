<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequests extends FormRequest
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
            'name'=>'required|min:10|max:50',
            'address'=>'required',
            'price'=>'numeric',
            'avatar'=>'required',
            'status'=>'required|min:1|max:3'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên căn hộ.',
            'name.min'=>'Tên phải tối thiểu 10 ký tự.',
            'name.max'=>'Tên phải tối đa 50 ký tự.',
            'description.required'=>'Vui lòng nhập địa chỉ.',
            'price.numeric'=>'Hình đại diện phải là link ảnh.',
            'status.required'=>'Trạng thái bán là số',
            'status.min'=>'Trạng thái nhỏ nhất là 1.',
            'status.max'=>'Trạng thái lớn nhất là 3.'

        ];
    }
}
