<<<<<<< HEAD
<?php

namespace CodeFlix\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSettingRequest extends FormRequest
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
            'password' => 'required|min:6|max:16|confirmed'
        ];
    }
}
=======
<?php

namespace CodeFlix\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSettingRequest extends FormRequest
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
            'password' => 'required|min:6|max:16|confirmed'
        ];
    }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
