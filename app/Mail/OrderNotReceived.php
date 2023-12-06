<?php

// app/Mail/OrderNotReceived.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderNotReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $orderDetails;

    public function __construct($orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    public function build()
    {
        return $this->subject('Order Not Received')->view('Emails.orderNotReceived');
    }
}
