<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        // return [
        //     ...parent::share($request),
        //     'auths' => [
        //         'user' => $request->user(),
        //     ],
        //     'ziggy' => fn () => [
        //         ...(new Ziggy)->toArray(),
        //         'location' => $request->url(),
        //     ]
        // ];
        // Existing code


        $sharedData = [
            ...parent::share($request),
            'auths' => [
                'user' => $request->user(),
            ],
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ]
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
