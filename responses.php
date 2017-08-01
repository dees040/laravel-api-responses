<?php

if (! function_exists('json_response')) {
    /**
     * Return a new JSON response.
     *
     * @param  mixed  $data
     * @param  int  $status
     * @return \Illuminate\Http\JsonResponse
     */
    function json_response($data = null, $status = 200)
    {
        return response()->json($data, $status);
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
        return json_response($data, 201);
    }
}

if (! function_exists('bad_request')) {
    /**
     * Return a bad request response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function bad_request($data = null)
    {
        return json_response($data, 400);
    }
}

if (! function_exists('unauthenticated')) {
    /**
     * Return a unauthenticated response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function unauthenticated($data = null)
    {
        return json_response($data, 401);
    }
}

if (! function_exists('forbidden')) {
    /**
     * Return a forbidden response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function forbidden($data = null)
    {
        return json_response($data, 403);
    }
}

if (! function_exists('not_found')) {
    /**
     * Return a not found response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function not_found($data = null)
    {
        return json_response($data, 404);
    }
}

if (! function_exists('method_not_allowed')) {
    /**
     * Return a method not allowed response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function method_not_allowed($data = null)
    {
        return json_response($data, 405);
    }
}

if (! function_exists('not_acceptable')) {
    /**
     * Return a not acceptable response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function not_acceptable($data = null)
    {
        return json_response($data, 406);
    }
}

if (! function_exists('teapot')) {
    /**
     * All hail the magical teapot response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function teapot($data = null)
    {
        return json_response($data, 418);
    }
}

if (! function_exists('unprocessable_entity')) {
    /**
     * Return a unprocessable entity response.
     *
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    function unprocessable_entity($data = null)
    {
        return json_response($data, 422);
    }
}