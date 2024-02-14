<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException; // Import the NotFoundHttpException

class Handler extends ExceptionHandler
{
    // ... (other methods and properties)

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404); // Return the custom 404 view
        }

        return parent::render($request, $exception);
    }
}
