<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainSearchRequest extends FormRequest
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
            'city_id' => '',
            'detail_id' => ''
        ];
    }

    public function getCity()
    {
        return $this->get('city_id');
    }

    public function getDetail()
    {
        return $this->get('detail_id');
    }
}
