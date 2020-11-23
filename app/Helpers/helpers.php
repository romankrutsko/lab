<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('get_json_response_data')) {
    function get_json_response_data($status = NULL, $message = NULL, $data = [], $code = 200, $errors = [])
    {
        $response = [];
        $response['status'] = $status;
        $response['code'] = $code;
        if ($status == API_ERROR_STATUS) {
            $response['message'] = $message;
        }
        if (!empty($message)) {
            $response['message'] = $message;
        }
        if (!empty($errors)) {
            $response['errors'] = $errors;
        }

        if (empty($data)) {
            $response['data'] = [];
        } else {
            $response['data'] = $data;
        }

        return response()->json($response, $code, ['Access-Control-Allow-Origin: *']);
    }
}
