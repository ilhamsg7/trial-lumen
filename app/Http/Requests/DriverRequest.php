<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;

class DriverRequest extends FormRequest {
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
        switch($this->method()){
            case 'POST':
                return [
                    'team_id' => 'required|exists:teams,id',
                    'name' => 'required|string|max:255',
                    'nickname' => 'required|string|unique:drivers,nickname|max:3',
                    'driver_number' => 'required|string|unique:drivers,nickname|max:3',
                    'nationality' => 'required|string|max:255',
            ]; break;
            case 'PUT':
                return [
                    'team_id' => 'required|exists:teams,id',
                    'name' => 'nullable|string|max:255',
                    'nickname' => 'nullable|string|unique:drivers,nickname|max:3',
                    'driver_number' => 'nullable|string|unique:drivers,nickname|max:3',
                    'nationality' => 'nullable|string|max:255',
            ]; break;
        }
    }
}
