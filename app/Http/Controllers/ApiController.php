<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    const SUCCESS_STATUS = 'success';
    const ERROR_STATUS = 'error';

    private $status = self::SUCCESS_STATUS;
    private $data = [];
    private $message = '';
    private $code = 200;
    protected $cacheTime = '';

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setErrorStatus($errorCode = 200)
    {
        $this->code = $errorCode;
        $this->status = self::ERROR_STATUS;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getResponse()
    {
        return get_json_response_data($this->status, $this->message, $this->data, $this->code);
    }
}
