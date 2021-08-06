<?php

namespace App\Http\Controllers;

use App\Category;
use App\LoanDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanDetailsController extends Controller
{
    public function store(Request $request){
        $data = $request['data'];
        $loanNumber = random_int(100000, 999999);

        $loan = new LoanDetails();
        $loan['loan_amount'] = $data['loan_amount'];
        $loan['loan_number'] = $loanNumber ;
        $loan['category_id'] = $data['loan_category'];
        $loan['store_id'] = $data['loan_agent'];
        $loan['applicant_title'] = $data['applicant_title'];
        $loan['applicant_first_name'] = $data['applicant_first_name'];
        $loan['applicant_middle_name'] = $data['applicant_middle_name'];
        $loan['applicant_surname'] = $data['applicant_surname'];
        $loan['applicant_mobile'] = $data['applicant_mobile'];
        $loan['applicant_email'] = $data['applicant_email'];
        $loan['is_joint_application'] = $data['is_joint_application'];
        $loan['jointapp_first_name'] = $data['jointapp_first_name'];
        $loan['jointapp_surname'] = $data['jointapp_surname'];
        $loan['jointapp_mobile'] = $data['jointapp_mobile'];
        $loan['jointapp_email'] = $data['jointapp_email'];
        $loan['completion_status'] = 'Partially Completed';
        $loan->save();
        $res['id'] = $loan->id;
        $res['loan_number'] = $loanNumber;
        return $res;
    }
    public function update(Request $request){
        $data = $request['data'];
        $loan = LoanDetails::find($data['id']);

        // if($data['tab'] == 0){
        //     $loan['loan_amount'] = $data['loan_amount'];
        //     $loan['loan_reason'] = $data['loan_reason'];
        //     $loan['category_id'] = $data['loan_category'];
        //     $loan['store_id'] = $data['loan_agent'];
        //     $loan['applicant_title'] = $data['applicant_title'];
        //     $loan['applicant_first_name'] = $data['applicant_first_name'];
        //     $loan['applicant_middle_name'] = $data['applicant_middle_name'];
        //     $loan['applicant_surname'] = $data['applicant_surname'];
        //     $loan['applicant_mobile'] = $data['applicant_mobile'];
        //     $loan['applicant_email'] = $data['applicant_email'];
        //     $loan['is_joint_application'] = $data['is_joint_application'];
        //     $loan['jointapp_first_name'] = $data['jointapp_first_name'];
        //     $loan['jointapp_surname'] = $data['jointapp_surname'];
        //     $loan['jointapp_mobile'] = $data['jointapp_mobile'];
        //     $loan['jointapp_email'] = $data['jointapp_email'];
            
        //     $loan->save(); 
        // }else{
            foreach($data as $key => $value){
                if($key != "_token" && $key != "tab" && $key != "id"){
                    $loan[$key] = $data[$key];
                }
            }
            $loan->save();
        // }
    }

    public function search(Request $request){
        $loan_number = $request->loan_number_search;
        $category = Category::all();
        $data['categories'] = $category;
        $loanCount = LoanDetails::where('loan_number',$loan_number)->count();
        if($loanCount == 0){
            return 'No Data Found';
        }else{
            $data['loan'] = LoanDetails::where('loan_number',$loan_number)->get();
            return view('edit-loan')->with('data',$data);
        }
        
    }
}
