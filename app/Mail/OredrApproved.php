<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class OredrApproved extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    // protected $order;
    public $order = "test order";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->order = $order;
        return $this->view('email.orderApproved');
    }
}
