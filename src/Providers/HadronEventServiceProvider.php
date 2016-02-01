<?php

namespace Yab\Hadron\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class HadronEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'eloquent.saving: Yab\Hadron\Models\Order' => [
            'Yab\Hadron\Services\OrderService@beforeSave',
        ],

        'eloquent.saved: Yab\Hadron\Models\Order' => [
            'Yab\Hadron\Services\OrderService@afterSave',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}