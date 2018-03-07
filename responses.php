<?php

if (! function_exists('json_response')) {
    /**
     * Return a new JSON response.
     *
     * @param  string|array  $data
     * @param  int  $status
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    function json_response($data = null, $status = 200, array $headers = [], $options = 0)
    {
        return new \Illuminate\Http\JsonResponse($data, $status, $headers, $options);
    }
}

if (! function_exists('error_json_response')) {
    /**
     * Return a new error (4xx) response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @param  int  $code
     * @return \Illuminate\Http\JsonResponse
     */
    function error_json_response($message = '', $errors = [], $code)
    {
        return json_response(compact('message', 'errors'), $code);
    }
}

if (! function_exists('ok')) {
    /**
     * Return an all OK 200 response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function ok($data = null)
    {
        return json_response($data, 200);
    }
}

if (! function_exists('created')) {
    /**
     * Return created response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function created($data = null)
    {
        return json_response($data, 201);
    }
}

if (! function_exists('accepted')) {
    /**
     * Return accepted response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function accepted($data = null)
    {
        return json_response($data, 202);
    }
}

if (! function_exists('no_content')) {
    /**
     * Return no content response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function no_content()
    {
        return json_response(null, 204);
    }
}

if (! function_exists('bad_request')) {
    /**
     * Return a bad request response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function bad_request($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 400);
    }
}

if (! function_exists('unauthenticated')) {
    /**
     * Return a unauthenticated response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function unauthenticated($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 401);
    }
}

if (! function_exists('forbidden')) {
    /**
     * Return a forbidden response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function forbidden($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 403);
    }
}

if (! function_exists('not_found')) {
    /**
     * Return a not found response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function not_found($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 404);
    }
}

if (! function_exists('method_not_allowed')) {
    /**
     * Return a method not allowed response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function method_not_allowed($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 405);
    }
}

if (! function_exists('not_acceptable')) {
    /**
     * Return a not acceptable response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function not_acceptable($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 406);
    }
}

if (! function_exists('teapot')) {
    /**
     * All hail the magical teapot response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function teapot($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 418);
    }
}

if (! function_exists('unprocessable_entity')) {
    /**
     * Return a unprocessable entity response.
     *
     * @param  string  $message
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function unprocessable_entity($message = '', $errors = [])
    {
        return error_json_response($message, $errors, 422);
    }
}