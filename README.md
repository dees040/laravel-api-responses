# Laravel API Responses

A small package for returning an API response easily.

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

| Method                        | Status Code   |
| ----------------------------- |:-------------:|
| `ok($data)`                   | 200           |
| `created($data)`              | 201           |
| `accepted($data)`             | 202           |
| `bad_request($data)`          | 400           |
| `unauthenticated($data)`      | 401           |
| `forbidden($data)`            | 403           |
| `not_found($data)`            | 404           |
| `method_not_allowed($data)`   | 405           |
| `not_acceptable($data)`       | 406           |
| `teapot($data)`               | 418           |
| `unprocessable_entity($data)` | 422           |

### Custom response (code)

If you'd wish to send a status code which is not in the list you could use the `json_response($data = null, $status = 200)` helper function. [Here](https://www.cheatography.com/kstep/cheat-sheets/http-status-codes/) you can find a cheat sheet for HTTP status codes or use [http.cat](https://http.cat).