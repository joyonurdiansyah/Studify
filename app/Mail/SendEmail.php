<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailContent;
    public $data;

    public function __construct($emailContent, $data)
    {
        $this->emailContent = $emailContent;
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Pemberitahuan reset password email')
            ->from('nurdiansyahjoyo@gmail.com', 'KLINIK NOTIFICATION')
            ->view('notification.forgot-email')
            ->with([
                'content' => $this->emailContent,
                'data' => $this->data,
            ]);
    }
}
