<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $mailData)
    {

        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $msg = $this->markdown('emails.userdetail');
        /* foreach($this->attachmentArray as $attachment) {
              $msg->attach($attachment);
         }*/
        $msg->attachData($this->mailData["view"],'smartcover.xml', array(
                'mime' => "application/xml")
        );
        /*if(isset($this->mailData['applicant_id_front'])) {
            $file =$this->mailData['applicant_id_front'];
            $msg->attach($file->getRealPath(), array(
                    'as' => 'applicant_id_front.' . $file->getClientOriginalExtension(),
                    'mime' => $file->getMimeType())
            );
        }*/

        return $msg->with("mailData",$this->mailData);
    }
}
