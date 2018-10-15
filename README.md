# Laravel API Responses

<p align="center">
<a href="https://packagist.org/packages/dees040/laravel-api-responses"><img src="https://poser.pugx.org/dees040/laravel-api-responses/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/dees040/laravel-api-responses"><img src="https://poser.pugx.org/dees040/laravel-api-responses/downloads" alt="Total Downloads"></a>
<a href="https://travis-ci.org/dees040/laravel-api-responses"><img src="https://travis-ci.org/dees040/laravel-api-responses.svg?branch=master" alt="Build status"></a>
</p>

A very small package which helps you to easily returning readable API responses.

## Installation

Install the package via Composer.

```bash
composer require dees040/laravel-api-responses
```

You're ready to go!

## Usage

Just use one of the helper functions and you're good to go.

```php
<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Show the given user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (! $user->isAdmin()) {
            return forbidden();
        }
        
        return ok($user);
    }
}
```

## Methods

All methods accept a `$data` parameter. This can be any data which can be used in a JSON response, such as strings, integers, arrays, models, etc..

| Method                                    | Status Code   |
| ----------------------------------------- |:-------------:|
| `ok($data)`                               | 200           |
| `created($data)`                          | 201           |
| `accepted($data)`                         | 202           |
| `no_content()`                            | 204           |
| `bad_request($message, $errors)`          | 400           |
| `unauthenticated($message, $errors)`      | 401           |
| `forbidden($message, $errors)`            | 403           |
| `not_found($message, $errors)`            | 404           |
| `method_not_allowed($message, $errors)`   | 405           |
| `not_acceptable($message, $errors)`       | 406           |
| `teapot($message, $errors)`               | 418           |
| `unprocessable_entity($message, $errors)` | 422           |

### Custom response (code)

If you'd wish to send a status code which is not in the list you could use the `json_response($data = null, $status = 200)` helper function. [Here](https://www.cheatography.com/kstep/cheat-sheets/http-status-codes/) you can find a cheat sheet for HTTP status codes or use my personal favorite [http.cat](https://http.cat) 😉.

If you want to send error response you can use the `error_json_response($message = '', $errors = [], $status = 400)`. This method will send an json response like this:

```php
error_json_response('User not found.', [
    'id' => 'The ID does not exists.'
]);
```

Output:

```json
{
  "message": "User not found.",
  "errors": {
    "id": "The ID does not exists."
  }
}
```
