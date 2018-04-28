<?php

namespace App\Exceptions\Services\Marketing;

use Exception;

class GetResponseAPIException extends Exception
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json([
            'errors' => [
                '_message' => 'Пожалуйста проверьте правильность введенных данных'
            ]
        ], $this->response->httpStatus);
    }
}