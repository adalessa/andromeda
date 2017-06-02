<?php
namespace Andromeda;

use Illuminate\Contracts\Bus\Dispatcher;

class Andromeda
{

    protected $chains = [];
    protected $dispatcher;

    public function __construct () {
        $this->dispatcher = app(Dispatcher::class);
    }

    public function define($name, $jobs) {
        $this->chains[$name] = new Chain($name, $jobs);
    }

    public function run ($name, $payload) {
        $this->dispatcher->dispatchNow(new Job($this->chains[$name], $payload));
    }

    public function later ($name, $payload, $at = null) {
        $this->dispatcher->dispatch(new Job($this->chains[$name], $payload));
    }

}
