<?php

namespace laravel_5_3\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'laravel_5_3\Events\SomeEvent' => [
            'laravel_5_3\Listeners\EventListener',
        ],
        'laravel_5_3\Events\StudentAdded' => [
        'laravel_5_3\Listeners\ListenerNewStudentAdded',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
