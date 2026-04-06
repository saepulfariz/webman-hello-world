<?php

namespace app\controller;

use support\Request;

class UserController
{
    // http://localhost:8787/user/hello?name=tom
    public function hello(Request $request)
    {
        $default_name = 'webman';
        // Get the 'name' parameter from the get request, and return $default_name if the 'name' parameter is not passed
        $name = $request->get('name', $default_name);
        // Return a string to the browser
        return response('hello ' . $name);
    }

    // http://localhost:8787/user/json?name=tom
    public function json(Request $request)
    {
        $default_name = 'webman';
        $name = $request->get('name', $default_name);
        return json([
            'code' => 0,
            'msg' => 'ok',
            'data' => $name
        ]);
    }
}
