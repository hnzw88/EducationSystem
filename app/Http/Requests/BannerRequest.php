<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image.*'=>['required','image','mimes:png,jpeg,jpg'],
           
        ];
    }
    public function attributes()
    {
        return[
            'image'=>'バナー画像',
        ];
    }
    public function messages()
    {
        return[
            'image.required'=>':attributeを選択してください',
            'image.image'=>':attribute は画像ファイルで選択してください',
            'image.mimes'=>':attributeの形式はjpeg,png,jpgで選択してください'
        ];
        
    }
}
