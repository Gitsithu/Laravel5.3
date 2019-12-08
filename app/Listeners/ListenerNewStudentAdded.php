<?php

namespace laravel_5_3\Listeners;

use laravel_5_3\Events\StudentAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenerNewStudentAdded
{

    protected $name;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  StudentAdded  $event
     * @return void
     */
    public function handle(StudentAdded $event)
    {
        $this->name = $event->name;
        echo "<br>New Student added in database with name: ".$this->name;
    }
}
