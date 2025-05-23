<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'folio' => 'required|string',
			'id_cliente' => 'required',
			'id_usuario' => 'required',
			'fecha_creacion' => 'required',
			'subtotal' => 'required',
			'total_iva' => 'required',
			'total' => 'required',
			'id_estatus' => 'required',
        ];
    }
}
