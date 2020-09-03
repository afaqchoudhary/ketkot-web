<?php

namespace App\Exceptions;

use App\Http\Controllers\Utils\StatusController;
use BadMethodCallException;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use InvalidArgumentException as GlobalInvalidArgumentException;
use Prophecy\Exception\Doubler\MethodNotFoundException;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

        if ($exception instanceof UnauthorizedHttpException) {
            return response()->json([
                'message' => 'unauthorized request',
            ], StatusController::$UNAUTHORIZED);
        }
        if ($exception instanceof MethodNotFoundException) {
            return response()->json([
                'message' => 'method not found',
            ], StatusController::$NOT_FOUND);
        }
        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json([
                'message' => 'Method is not allowed for the requested route',
            ], StatusController::$METHOD_NOT_ALLOWED);
        }
        if ($exception instanceof BadMethodCallException) {
            return response()->json([
                'message' => "bad method call",
            ], StatusController::$INTERNAL_SERVER_ERROR);
        }
        if ($exception instanceof NotFoundHttpException) {
            return response()->json([
                'message' => "invalid request",
            ], StatusController::$NOT_FOUND);
        }
        if ($exception instanceof GlobalInvalidArgumentException) {
            return response()->json([
                'message' => 'unauthorized request',
            ], StatusController::$UNAUTHORIZED);
        }
        if ($exception instanceof FatalThrowableError) {
            return response()->json([
                'message' => $exception->getMessage(),
            ], StatusController::$INTERNAL_SERVER_ERROR);
        }
        return parent::render($request, $exception);
    }
}