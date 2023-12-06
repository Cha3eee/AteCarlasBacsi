<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderStatusUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $orderDetails;
    public $status;

    public function __construct($orderDetails, $status)
    {
        $this->orderDetails = $orderDetails;
        $this->status = $status;
    }

    public function build()
    {
        return $this->subject('Order Approve')->view('Emails.orderSatusUpdate');
    }
}
