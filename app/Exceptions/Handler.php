<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof TokenInvalidException) {
            return response()->json(['error' => 'Token is Inavalid'], 400);
        } elseif ($exception instanceof TokenExpiredException) {
            return response()->json(['error' => 'token_expired'], 400);
        } elseif ($exception instanceof JWTException) {
            return response()->json(['error' => 'there is problem with your token'], Response::HTTP_BAD_REQUEST);
        } elseif ($exception instanceof TokenBlacklistedException) {
            return response()->json(['error' => 'Di blacklist cak'], 400);
        }
        return parent::render($request, $exception);
    }
}
