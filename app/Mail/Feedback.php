<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Feedback extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $comment;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name, string $email, string $comment)
    {
        $this->name    = $name;
        $this->email   = $email;
        $this->comment = $comment;
    }

    /**
     * Build the envelope for the message.
     */
    public function envelope()
    {
        return new \Illuminate\Mail\Envelope(
            from: new \Illuminate\Mail\Address($this->email, $this->name),
            subject: 'Feedback from ' . $this->name,
        );
    }

    /**
     * Build the content for the message.
     */
    public function content()
    {
        return new \Illuminate\Mail\Content(
            view: 'mail.feedback',
        );
    }
}
