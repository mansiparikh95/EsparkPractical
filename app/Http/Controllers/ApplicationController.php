<?php

namespace App\Http\Controllers;
use App\Model\Applicant;
use DB;
use Validator;


use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){

    	try{     
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'gender' => 'required',
                'contact' => 'required',
                'ssc_board' => 'required',
                'ssc_year' => 'required',
                'ssc_percentage' => 'required',
                'hsc_board' => 'required',
                'hsc_year' => 'required',
                'hsc_percentage' => 'required',
                'university' => 'required',
                'grad_year' => 'required',
                'grad_percentage' => 'required',
                'company'=>'required',
                'designation'=>'required',
                'from_date'=>'required',
                'to_date'=>'required',
                'location'=>'required',
                'expected_ctc'=>'required',
                'current_ctc'=>'required',
                'notice_period'=>'required',
            ]);

            if($validator->fails()) {
                return back()->withInput()->withErrors($validator->errors());
            }

            DB::transaction(function () use ($request) {
                Applicant::createEdit($request);            
            });
             
            session()->flash('success',  'Application submited successfully');
            return redirect()->route('application-form');
        }catch(\Exception $e){                  
            session()->flash('error',$e->getMessage());
            return back()->withInput();
        }
    }

    
}
