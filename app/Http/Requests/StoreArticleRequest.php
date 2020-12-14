<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //php artisan make:request StoreArticleRequest
    //Giống request bình thường nhưng có thêm 1 vài tính năng đặc biệt

    //authorize xác nhận người dùng có quyền hay không. để failed thì lúc nào cũng lỗi hết
    //rules là request phải thỏa mãn 1 số rule

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
        // laravel validation rule
        return [
            'title' => 'min:10|max:20',
            'noidung' => 'min:20'
        ];
    }
}
