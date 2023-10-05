<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EventsRequest extends FormRequest
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
    public function rules()
    {
       
        return [
            // 'id' => ['string', 'max:255'],
            'eventtype'  => ['string', 'max:255'],
            'title'  => ['string', 'max:255'],
            'description'  => ['nullable','string', 'max:255'],
            'date' => ['date', 'max:255'],
            'toDate'=> ['nullable', 'string', 'max:255'],
            'host' => ['nullable', 'string', 'max:255'],
            'session'=> ['nullable', 'string', 'max:255'],
            'partner'=> ['nullable', 'string', 'max:255'],
            'speaker'=> ['nullable', 'string', 'max:255'],
            'evaluator'=> ['nullable', 'string', 'max:255'],
            'budget'=> ['nullable', 'string', 'max:255'],
            'admin_id'=> [ 'string', 'max:255'],

        ]; 
    }

  
   
}
