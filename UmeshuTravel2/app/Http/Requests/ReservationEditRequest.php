<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationEditRequest extends FormRequest
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
        return
            [
                'reservation_date' => 'required',
                'num_people' => 'required|numeric|min:1',
                'checkin_time' => 'required',
                'checkout_time' => 'required',
            ];
    }

    public function messages()
    {
        return
            [
                'reservation_date.required' => '予約日は必ず入力してください。',
                'num_people.required' => '人数は必ず入力してください。',
                'num_people.numeric' => '人数は数字で入力してください。',
                'num_people.min' => '人数は1以上で入力してください。',
                'checkin_time.required' => 'チェックイン時間は必ず入力してください。',
                'checkout_time.required' => 'チェックアウト時間は必ず入力してください。',
            ];
    }
}
