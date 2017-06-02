<?php

namespace Andromeda;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Job implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $uuid;
    protected $chain;
    protected $payload;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($uuid, Chain $chain, $payload)
    {
        $this->uuid = $uuid;
        $this->chain = $chain;
        $this->payload = $payload;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // ok this is the dispatch of the first part not the first element of
        // the chain this is the base process
        // this should store by the uuid in an storage and later we are going
        // to use the same id

        // store the chain into the no sql
        // create the new job with the payload and the uuid
        // this jobs or element of the chains should always pass the id
        // and at the end dispatch the following job
        
    }
}
