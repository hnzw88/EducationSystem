<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurriculumRequest extends FormRequest
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
            'title' => 'required | max:255',
            'thumbnail' => 'nullable|image|max:10000',
            'description'=>'max:10000',
            'video_url'=>'required|url',
            'alway_delivery_flg'=>'nullable',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください。',
            'titleame.max' => 'タイトルは25文字以内で入力してください。',
            'thumbnail.required' => '画像を入れて下さい',
            'thumbnail.image' => '画像ファイルを選択してください。',
            'thumbnail.max' => 'ファイルサイズは～までです。',
            'description.max' => 'コメントを10000文字以内にしてください。',
            'video_url.required' => 'URLを入力してください',
            'video_url.url' => 'URL形式で入力してください。',
        ];
    }

    }