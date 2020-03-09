<?php

namespace App\Http\Controllers;

use App\Mail\ProfileDetail;
use App\Mail\TestMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function thanks() {
        return view('thanks');
    }

    public function uploadData(Request $request) {
        $log_data = [];
        $data = Input::all();
        // dd($data);
        //$emails = ['bejoy@mello.co.nz'];
        $date = Carbon::now();
        $newdate = Carbon::now();
        $log_data['date'] = $data['date'] = $date->toDateString();
        
        $log_data['dateAfterSixMonth'] = $data['dateAfterSixMonth'] = $date->addMonths(6)->toDateString();
        // $data['formattedDate'] = $date->format("Y-m-d")."TT".$date->format("H:i:s.u");
        $log_data['formattedDate'] = $data['formattedDate'] = $newdate->format('Y-m-d\TH:i:s.u');
        $log_data['years_at_current_from'] = $data['years_at_current_from'] = isset($data['years_at_current_from']) && $data['years_at_current_from'] != ""? Carbon::createFromFormat("d/m/Y",$data['years_at_current_from'])->format("Y-m-d"):"";
        $log_data['years_at_current_to'] = $data['years_at_current_to'] = isset($data['years_at_current_to']) && $data['years_at_current_to'] != ""? Carbon::createFromFormat("d/m/Y",$data['years_at_current_to'])->format("Y-m-d"):"";
        $log_data['employment_period_from'] = $data['employment_period_from'] = isset($data['employment_period_from']) && $data['employment_period_from'] != ""? Carbon::createFromFormat("d/m/Y",$data['employment_period_from'])->format("Y-m-d"):"";
        $log_data['employment_period_to'] = $data['employment_period_to'] = isset($data['employment_period_to']) && $data['employment_period_to'] != ""? Carbon::createFromFormat("d/m/Y",$data['employment_period_to'])->format("Y-m-d"):"";
        $log_data['payment_start_date_xml'] = $data['payment_start_date_xml'] = isset($data['repayment_start_date']) && $data['repayment_start_date'] != ""? Carbon::createFromFormat("d/m/Y",$data['repayment_start_date'])->format("Y-m-d"):"";
        
        $log_data['jointapp_years_at_current_from'] = $data['jointapp_years_at_current_from'] = isset($data['jointapp_years_at_current_from']) && $data['jointapp_years_at_current_from'] != ""? Carbon::createFromFormat("d/m/Y",$data['jointapp_years_at_current_from'])->format("Y-m-d"):"";
        $log_data['jointapp_years_at_current_to'] = $data['jointapp_years_at_current_to'] = isset($data['jointapp_years_at_current_to']) && $data['jointapp_years_at_current_to'] != ""? Carbon::createFromFormat("d/m/Y",$data['jointapp_years_at_current_to'])->format("Y-m-d"):"";
        $log_data['jointapp_employment_period_from'] = $data['jointapp_employment_period_from'] = isset($data['jointapp_employment_period_from']) && $data['jointapp_employment_period_from'] != ""? Carbon::createFromFormat("d/m/Y",$data['jointapp_employment_period_from'])->format("Y-m-d"):"";
        $log_data['jointapp_employment_period_to'] = $data['jointapp_employment_period_to'] = isset($data['jointapp_employment_period_to']) && $data['jointapp_employment_period_to'] != ""? Carbon::createFromFormat("d/m/Y",$data['jointapp_employment_period_to'])->format("Y-m-d"):"";


        $data['joint_app_total'] = 0;
        if(isset($data['jointapp_income'])) {
            $data['joint_app_total']+=$data['jointapp_income'];
        }
        if(isset($data['jointapp_additional_income'])) {
            $data['joint_app_total']+=$data['jointapp_additional_income'];
        }

        $data['total_income'] = 0;
        if(isset($data['income'])) {
            $data['total_income']+=$data['income'];
        }
        if(isset($data['additional_income'])) {
            $data['total_income']+=$data['additional_income'];
        }

        if(isset($data["need_custom_amount"]) && $data["need_custom_amount"] == "yes" && isset($data["other_loan_amount"]) && $data["other_loan_amount"] != "") {
            $data['loan_amount'] = $data["other_loan_amount"];
        }

        $data['user_files'] = [];
        if(isset($data['applicant_id_front'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_id_front'],'applicant_id_front');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['applicant_id_front_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_id_front_camera'],'applicant_id_front_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }
        if(isset($data['applicant_id_back'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_id_back'],'applicant_id_back');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['applicant_id_back_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_id_back_camera'],'applicant_id_back_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['applicant_photo'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_photo'],'applicant_photo');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['applicant_photo_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_photo_camera'],'applicant_photo_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['applicant_address_proof'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_address_proof'],'applicant_address_proof');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['applicant_passport_id_front'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_passport_id_front'],'applicant_passport_id_front');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['applicant_passport_id_front_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_passport_id_front_camera'],'applicant_passport_id_front_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['applicant_passport_id_back'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_passport_id_back'],'applicant_passport_id_back');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['applicant_passport_id_back_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_passport_id_back_camera'],'applicant_passport_id_back_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['applicant_passport_photo'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_passport_photo'],'applicant_passport_photo');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['applicant_passport_photo_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_passport_photo_camera'],'applicant_passport_photo_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['applicant_passport_address_proof'])) {
            $resultArray = $this->getEncodedFile($_FILES['applicant_passport_address_proof'],'applicant_passport_address_proof');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_licence_id_front'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_licence_id_front'],'jointapp_licence_id_front');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['jointapp_licence_id_front_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_licence_id_front_camera'],'jointapp_licence_id_front_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_licence_id_back'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_licence_id_back'],'jointapp_licence_id_back');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['jointapp_licence_id_back_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_licence_id_back_camera'],'jointapp_licence_id_back_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_licence_photo'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_licence_photo'],'jointapp_licence_photo');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['jointapp_licence_photo_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_licence_photo_camera'],'jointapp_licence_photo_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_licence_address_proof'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_licence_address_proof'],'jointapp_licence_address_proof');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_passport_id_front'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_passport_id_front'],'jointapp_passport_id_front');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['jointapp_passport_id_front_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_passport_id_front_camera'],'jointapp_passport_id_front_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_passport_id_back'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_passport_id_back'],'jointapp_passport_id_back');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['jointapp_passport_id_back_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_passport_id_back_camera'],'jointapp_passport_id_back_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_passport_photo'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_passport_photo'],'jointapp_passport_photo');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        } else if(isset($data['jointapp_passport_photo_camera'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_passport_photo_camera'],'jointapp_passport_photo_camera');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        if(isset($data['jointapp_passport_address_proof'])) {
            $resultArray = $this->getEncodedFile($_FILES['jointapp_passport_address_proof'],'jointapp_passport_address_proof');
            if($resultArray != "") {
                array_push($data['user_files'],$resultArray);
            }
        }

        /*echo "<pre>";
        print_r($data);
        echo "</pre>";
        die("");*/
        // $data['secure_sign_agreed'] = isset($data['secure_sign_agreed'])?$data['secure_sign_agreed']:"no";
        //$emails = ['bejoy@mello.co.nz'];
        // $emails = ['bejoy@mello.co.nz'];
        $emails = ['j.aravindhgopi@gmail.com','lovelyaravindh@gmail.com'];
        $output=View::make('xml.data')->with('mailData', $data)->render();
        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n" . $output;
        Log::debug("Here");
        Mail::to($emails)
            ->send(new ProfileDetail($data,$xml));
            Log::debug("Here2");
        //Storage::put('file-submission-log/'.time().'-all-data.txt', s erialize($data), 'public');
        Storage::put('file-submission-log/'.time().'-data.txt', serialize($log_data), 'public');
        Storage::put('file-submission-log/'.time().'-files.txt', serialize($data['user_files']), 'public');
        return redirect('/thanks');
    }

    public function test()
    {
        //die("qwe");
        $output=View::make('xml.data')->render();
        $xml = "<?xml version=\"1.0\" ?>\n" . $output;
        Mail::to("vipin@festinmob.com")
            ->send(new TestMail(array("view"=>$xml)));
        die("test");
    }

    public function getEncodedFile($file,$name) {
        if($file != "") {
            $path_parts = pathinfo($file["name"]);
            $extension = $path_parts['extension'];
            $file_name = "File_".$name."_".strtoupper($extension);
            Storage::put('file-submission-log/'.time().str_random(9).'-single-file.txt', serialize($file), 'public');
            $file = file_get_contents($file['tmp_name']);
            //$gzdata = gzencode($file, 9);
            //$array = array("key"=>$file_name,"value"=>base64_encode($gzdata));
            $array = array("key"=>$file_name,"value"=>base64_encode($file));
            return $array;
        } else {
            return "";
        }
    }

    public function testSubmit() {

    }
}
