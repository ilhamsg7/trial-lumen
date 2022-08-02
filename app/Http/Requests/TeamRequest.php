<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;

class TeamRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array {
        switch($this->method){
            case 'POST':
                return [
                    'name' => 'required|string|max:255|unique:teams,name',
                    'principal' => 'required|string',
                    'headquarters' => 'required|string',
                    'team_country' => 'required|string',
                    'first_join' => 'required|year',
            ]; break;
            case 'PUT':
                return [
                    'name' => 'required|string|max:255|unique:teams,name',
                    'principal' => 'required|string',
                    'headquarters' => 'required|string',
                    'team_country' => 'required|string',
                    'first_join' => 'required|year',
            ]; break;
        }
    }
}
