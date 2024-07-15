<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendReceivedHr extends Mailable
{
    use Queueable, SerializesModels;
        public $details;
        public $resume;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$resume)
    {
        $this->details = $details;
        $this->resume=$resume;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // Ensure file exists before attaching
       if (file_exists($this->resume)) {
        return $this->subject('Mail from Pro1 Global Home Center')
                    ->view('admins.mailtemplates.application-mail')
                    ->attach($this->resume);
    } else {
        // Handle case where file does not exist
        \Log::error("Attachment file not found: {$this->resume}");
        return $this->subject('Mail from Pro1 Global Home Center')
                    ->view('admins.mailtemplates.application-mail');
    }


    }
}
