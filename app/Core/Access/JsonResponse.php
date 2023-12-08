<?php

namespace App\Core\Access;

trait JsonResponse
{
    /**
     * 
     */
    public function successJsonResponse($response)
    {
        return response()->json([
            'message' => "Successful",
            'data' => $response,
        ], 200);
    }

    public function errorNotFoundJsonResponse($error)
    {
        return response()->json([
            'message' => "Error Occurred",
            'error' => $error->getMessage(),
        ], 404);
    }

    public function errorBadRequestJsonResponse($error)
    {
        return response()->json([
            'message' => "Error Occurred",
            'error' => $error->getMessage(),
        ], 404);
    }
}
