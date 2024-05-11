<?php

namespace App\Http\Middleware;

use App\Helper\Cart;
use App\Http\Resources\CartResource;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function Version(Request $request): string|null
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {

        $sharedData = [
            ...parent::share($request),
            'auths' => [
                'user' => $request->user(),
            ],
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],

            'cart' => new CartResource(Cart::getProductsAndCartItems()),

            'flash' => fn () => [
                'success' => fn () => $request->session()->get('success'),
                'error' => fn () => $request->session()->get('error'),
                'warning' => fn () => $request->session()->get('warning'),
                'info' => fn () => $request->session()->get('info'),
            ],

            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ];

        // Add admin-specific data if the user is an admin
        if ($request->user() && $request->user()->isAdmin == 1) {
            $adminData = [
                'isAdmin' => true,
                // Add more admin-specific data here if needed
            ];
            $sharedData = array_merge($sharedData, $adminData);
        }
        return $sharedData;
    }
}
