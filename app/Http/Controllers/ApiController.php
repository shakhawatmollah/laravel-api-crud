<?php
namespace App\Http\Controllers;

class ApiController extends Controller
{

    protected function successResponse($data, $message = "Success", $code = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json([
            'message' => $message
        ], $code);
    }

}
