<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

/**
 * Class DataPemdaFormRequest
 * @package App\Http\Requests\DataUmum
 */
class ForumsRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    /**
     * @var array
     */
    protected $attrs = [
        'title'  => 'Title',
        'description'  => 'Description',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
        ];
    }

    /**
     * @param $validator
     * @return mixed
     */
    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

    /**
     * @param Validator $validator
     * @return array
     */
    protected function formatErrors(Validator $validator)
    {
        $message = $validator->errors();

        return [
            'success'    => false,
            'validation' => [
                'title'  => $message->first('title'),
                'description'  => $message->first('description'),
            ]
        ];
    }
}
