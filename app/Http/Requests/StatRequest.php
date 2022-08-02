<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;

class StatRequest extends FormRequest {
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
        switch($this->method) {
            case 'POST':
                return [
                    'driver_number' => 'required|string|max:3|exists:drivers,driver_number',
                    'win' => 'required|integer|min:0',
                    'podium' => 'required|integer|min:0',
                    'fastest_lap' => 'required|integer|min:0',
                    'world_champion' => 'required|integer|min:0',
            ]; break;
            case 'PUT':
                return [
                    'driver_number' => 'required|string|max:3|exists:drivers,driver_number',
                    'win' => 'nullable|integer|min:0',
                    'podium' => 'nullable|integer|min:0',
                    'fastest_lap' => 'nullable|integer|min:0',
                    'world_champion' => 'nullable|integer|min:0',
            ]; break;
        }
    }
}
