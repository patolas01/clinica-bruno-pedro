<?php

namespace App\Providers;

use App\Models\Galeria;
use App\Policies\GaleriaPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        /*Galeria::class => GaleriaPolicy::class, // Adicione esta linha*/
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        /*// Você pode usar Gate::resource se desejar
        Gate::resource('galeria', GaleriaPolicy::class);*/
    }


}
