<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // login မဝင်ဘဲနဲ့ admin route တွေလျောက်ရိုက်ရင် loginPage ဆီကိုပဲ ပြန်ရောက်စေဖို့
        return $request->expectsJson() ? null : route('auth#loginPage'); 
    }
}
