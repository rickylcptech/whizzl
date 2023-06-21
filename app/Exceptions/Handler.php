<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {

        });

        //CUSTOM HANDLER FORM VALIDATION
        $this->renderable(function (\Illuminate\Validation\ValidationException$e, $request) {
            if ($request->is('api/*')) {
                $errorsMsg = '';
                foreach($e->errors() as $key => $value) {
                    if ($key === array_key_first($e->errors())) {
                        $errorsMsg .= $value[0];
                    }
                }

                return response()->json(
                    [
                        "success" => false,
                        "code" => 422,
                        "message" => $errorsMsg,
                        "data" => ['errors' => $e->errors()]
                    ],
                    422
                );
            }
        });
        //CUSTOM HANDLER RETURN NOT LOGIN/UNAUTHORIZED FOR API
        $this->renderable(function (\Illuminate\Auth\AuthenticationException$e, $request) {
            if ($request->is('api/*')) {
                return response()->json(
                    [
                        "success" => false,
                        "code" => 401,
                        "message" =>"UNAUTHORIZED",
                        "data" => null,
                    ],
                    401
                );
            }
        });

        //CUSTOM HANDLER FORM NOT FOUND
        $this->renderable(function (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException$e, $request) {
            if ($request->is('api/*')) {
                return response()->json(
                    [
                        "success" => false,
                        "code" => 404,
                        "message" =>"NOT FOUND",
                        "data" => null,
                    ],
                    404
                );
            }
        });

        //CUSTOM HANDLER FORM NOT ALLOWED
        $this->renderable(function (\Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException$e, $request) {
            if ($request->is('api/*')) {
                return response()->json(
                    [
                        "success" => false,
                        "code" => 422,
                        "message" =>"METHOD NOT ALLOWED",
                        "data" => null,
                    ],
                    405
                );
            }
        });

        // $this->renderable(function (\Symfony\Component\HttpKernel\Exception\HttpException$e, $request) {
        //     if ($request->is('api/*')) {
        //         return response()->json(

        //             [
        //                 "response" => null,
        //                 "metaData" => [
        //                     'success' => false,
        //                     "message" => "METHOD NOT ALLOWED",
        //                     "code" => $e->getStatusCode(),
        //                 ],
        //             ], $e->getStatusCode()
        //         );
        //     }
        // });
    }
}
