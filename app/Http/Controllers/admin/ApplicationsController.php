<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Applicant;
use App\Model\EducationDetail;
use App\Model\WorkExperience;
use App\Model\KnownLanguage;
use App\Model\TechnicalExperience;
use Validator;
use DB;
use Illuminate\Support\Facades\Response;

class ApplicationsController extends Controller
{
    public function index(){
    	return view('admin.applications.index');
    }

    public static function postList(Request $request){ 
        try{           
           return Applicant::postList($request);
        }catch(\Exception $e){
            session()->flash('error',$e->getMessage());
            return redirect()->route('applications.index');
        } 
    }

    public function edit($id){
        try{
            $data = Applicant::with('education','language','technical','experience')->where('id',$id)->first(); 
            $lang = [];            
            $skill = [];

            foreach($data->language as $k=>$v){
                array_push($lang,$v->language);                
            }

            foreach($data->technical as $k=>$v){
                array_push($skill,$v->technology);
            }

            $hindi = KnownLanguage::where('language','hindi')->where('applicant_id',$id)->first();
            $english = KnownLanguage::where('language','english')->where('applicant_id',$id)->first();
            $gujarati = KnownLanguage::where('language','gujarati')->where('applicant_id',$id)->first();

            $php = TechnicalExperience::where('technology','PHP')->where('applicant_id',$id)->first();
            $mysql = TechnicalExperience::where('technology','Mysql')->where('applicant_id',$id)->first();
            $laravel = TechnicalExperience::where('technology','Laravel')->where('applicant_id',$id)->first();
            $oracle = TechnicalExperience::where('technology','Oracle')->where('applicant_id',$id)->first();

            /*echo "<pre>";
            print_r($data);exit();*/
            return view('admin.applications.edit',compact('data','lang','skill','hindi','english','gujarati','php','mysql','laravel','oracle'));
        }catch(\Exception $e){                  
            session()->flash('error',$e->getMessage());
            return redirect()->route('applications.edit',$id);
        }
    }

    public function update(Request $request, $id){
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
           
            DB::transaction(function () use ($request,$id) {
                Applicant::createEdit($request,$id);            
            });
             
            session()->flash('success', 'Application updated successfully');
            return redirect()->route('applications.index');
        }catch(\Exception $e){                  
            session()->flash('error',$e->getMessage());
            return back()->withInput();
        }
    } 
    
    public function show($id) {
        try{
            $data = Applicant::with('education','language','technical','experience')->where('id',$id)->first();            
            return view('admin.applications.show',compact('data'));
        }catch(\Exception $e){                  
            session()->flash('error',$e->getMessage());
            return redirect()->route('applications.index');
        }
    }

    public function destroy($id){
        try{
        	
            $data_del = Applicant::where('id',$id)->delete();
            EducationDetail::where('applicant_id',$id)->delete();
			WorkExperience::where('applicant_id',$id)->delete();
			KnownLanguage::where('applicant_id',$id)->delete();
			TechnicalExperience::where('applicant_id',$id)->delete();

            return Response::json($data_del);
        }catch(\Exception $e){
            return Response::json($e);
        }     
    } 
}
