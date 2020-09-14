<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendmailTeacher extends Mailable
{
    use Queueable, SerializesModels;
    public $evaluation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($evaluation)
    {
        $this->evaluation = $evaluation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.cot')
        ->subject('[ACA_SP] Teaching feedback_'.$this->evaluation->teacher->fullname);
    }
}
