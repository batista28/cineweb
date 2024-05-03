<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Definir cómo se resuelven las autorizaciones en la aplicación
        Gate::define('update-post', function ($user, $post) {
            return $user->id === $post->user_id;
        });

        // Definir un guard personalizado si es necesario
        Auth::provider('custom-provider', function ($app, array $config) {
            // Implementación personalizada del proveedor de usuarios
        });
    }
}
