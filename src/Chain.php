<?php

namespace Andromeda;

class Chain
{
    protected $name;
    protected $jobs;

    public function __construct ($name, $jobs) {
        $this->name = $name;
        $this->jobs = $jobs;
    }

    public function getName() {
        return $this->name;
    }

    public function getJobs() {
        return $this->jobs;
    }
}
