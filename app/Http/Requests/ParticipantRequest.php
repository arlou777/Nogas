<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                'startupname' => ['string', 'max:255'],
                'problem'  => ['string', 'max:255'],
                'solution'  => ['string', 'max:255'],
                'target'  => ['string', 'max:255'],
                'events_id' => ['string', 'max:255'],
                'documents' => 'required|image|mimes:jpg,asm,txt,bmp,png,ppt,doc,pdf|max:2048',
        ];
    }
}
