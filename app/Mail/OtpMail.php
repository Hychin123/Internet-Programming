<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Markdown;
use Illuminate\Mail\Markdown\HtmlString;

class OtpMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public function __construct(private $activateLink)
//     {
        
//     }

//     public function envelope(): Envelope{
//         return new Envelope(
//             subject: 'my test email',
//         );
//     }
    
//     public function content():Content{
//         return new Content(
//             view:'mail.otp_mail',
//             with:['activateLink'=>$this-> activateLink],
//         );
//     }

//     public function attachments() : array {
//         return [];
//     }

// }
{
    use Queueable, SerializesModels;

    public $verificationUrl;

    /*
     * Create a new message instance.
     *
     * @param  string  $verificationUrl
     * @return void
     */
    public function __construct($verificationUrl)
    {
        $this->verificationUrl = $verificationUrl;
    }

    /*
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('otp');
    }
}
