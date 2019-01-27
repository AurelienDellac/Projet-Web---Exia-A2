<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class Ordered extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $date)
    {
        $this->user = $user;
        $this->date = \explode(' ', $date)[0];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ordered');
    }
}
