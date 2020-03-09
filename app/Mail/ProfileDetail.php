<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Log;

class ProfileDetail extends Mailable
{
    use Queueable, SerializesModels;

    protected $mailData;
    protected $xml;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $mailData,$xml)
    {

        $this->mailData = $mailData;
        $this->xml = $xml;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
  
    public function build()
    {
        
        $msg = $this->subject('New Loan Application')
                ->markdown('emails.profile.details');
       /* foreach($this->attachmentArray as $attachment) {
             $msg->attach($attachment);
        }*/
        Log::debug("Here in Attachments");
        
        if(isset($this->mailData['applicant_id_front'])) {
            $file =$this->mailData['applicant_id_front'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_id_front.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['applicant_id_front_camera'])) {
            $file =$this->mailData['applicant_id_front_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_id_front_camera.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        if(isset($this->mailData['applicant_id_back'])) {
            $file =$this->mailData['applicant_id_back'];
            $tmpFile = $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_id_back.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['applicant_id_back_camera'])) {
            $file =$this->mailData['applicant_id_back_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_id_back_camera.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['applicant_photo'])) {
           $file =$this->mailData['applicant_photo'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['applicant_photo_camera'])) {
           $file =$this->mailData['applicant_photo_camera'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['applicant_address_proof'])) {
            $file =$this->mailData['applicant_address_proof'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_address_proof.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } 
        
        if(isset($this->mailData['applicant_passport_id_front'])) {
            $file =$this->mailData['applicant_passport_id_front'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_passport_id_front.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['applicant_passport_id_front_camera'])) {
            $file =$this->mailData['applicant_passport_id_front_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_passport_id_front.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['applicant_passport_id_back'])) {
           $file =$this->mailData['applicant_passport_id_back'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_passport_id_back.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['applicant_passport_id_back_camera'])) {
           $file =$this->mailData['applicant_passport_id_back_camera'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_passport_id_back.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['applicant_passport_photo'])) {
            $file =$this->mailData['applicant_passport_photo'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_passport_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['applicant_passport_photo_camera'])) {
            $file =$this->mailData['applicant_passport_photo_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_passport_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['applicant_passport_address_proof'])) {
            $file =$this->mailData['applicant_passport_address_proof'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'applicant_passport_address_proof.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_licence_id_front'])) {
            $file =$this->mailData['jointapp_licence_id_front'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_licence_id_front.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['jointapp_licence_id_front_camera'])) {
            $file =$this->mailData['jointapp_licence_id_front_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_licence_id_front.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_licence_id_back'])) {
            $file =$this->mailData['jointapp_licence_id_back'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_licence_id_back.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['jointapp_licence_id_back_camera'])) {
            $file =$this->mailData['jointapp_licence_id_back_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_licence_id_back.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_licence_photo'])) {
            $file =$this->mailData['jointapp_licence_photo'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_licence_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['jointapp_licence_photo_camera'])) {
            $file =$this->mailData['jointapp_licence_photo_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_licence_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_licence_address_proof'])) {
            $file =$this->mailData['jointapp_licence_address_proof'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_licence_address_proof.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_passport_id_front'])) {
            $file =$this->mailData['jointapp_passport_id_front'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_passport_id_front.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['jointapp_passport_id_front_camera'])) {
            $file =$this->mailData['jointapp_passport_id_front_camera'];
            $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_passport_id_front.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_passport_id_back'])) {
           $file =$this->mailData['jointapp_passport_id_back'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_passport_id_back.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['jointapp_passport_id_back_camera'])) {
           $file =$this->mailData['jointapp_passport_id_back_camera'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_passport_id_back.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_passport_photo'])) {
           $file =$this->mailData['jointapp_passport_photo'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_passport_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        } else if(isset($this->mailData['jointapp_passport_photo_camera'])) {
           $file =$this->mailData['jointapp_passport_photo_camera'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_passport_photo.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        
        if(isset($this->mailData['jointapp_passport_address_proof'])) {
           $file =$this->mailData['jointapp_passport_address_proof'];
           $tmpFile = Image::make($file->getRealPath())->save($file->getClientOriginalName().".".$file->getClientOriginalExtension(),50);
            $msg->attach($tmpFile->basename, array(
                'as' => 'jointapp_passport_address_proof.' . $file->getClientOriginalExtension(), 
                'mime' => $file->getMimeType())
            );
        }
        $msg->attachData($this->xml,'smartcover.xml', array(
                'mime' => "application/xml"));
        return $msg->with("mailData",$this->mailData);
    }
}
