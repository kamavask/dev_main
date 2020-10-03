<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

<<<<<<< HEAD
         Gate::define('manage-users', function ($user) {
=======
        Gate::define('manage-users', function ($user) {
>>>>>>> 87948fce5f9c4f6d44d4681f31667d97b4a0dbc7
            return $user->hasAnyRoles(['employee', 'admin', 'developer']);
        });

        Gate::define('edit-users', function ($user) {
            return $user->hasRole('admin');
        });

        Gate::define('delete-users', function ($user) {
            return $user->hasRole('admin');
        });
    }
}
