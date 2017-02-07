<?php

namespace App\Repositories\Eloquent;

trait ApiRepository
{
    private $statusCode;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     * @return mixed
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function responseNotFound($message = 'Not Found')
    {
        return $this->responseError($message);
    }

    public function responseError($message)
    {
        return response()->json([
            'status' => false,
            'errors' => [
                'status_code' => $this->getStatusCode(),
                'message' => $message
            ]
        ]);
    }

    public function response($data)
    {
        return response()->json([
            'status' => false,
            'data' => [
                'status_code' => $this->getStatusCode(),
                'data' => $data
            ]
        ]);
    }
}