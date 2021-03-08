<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\EducationDetail;
use App\Model\WorkExperience;
use App\Model\KnownLanguage;
use App\Model\TechnicalExperience;
use Yajra\DataTables\DataTables;
use App\Helpers\Helper;
use URL;
use DB;

class Applicant extends Model
{
    protected $table = 'applicant';

    public function education(){
        return $this->hasOne('App\Model\EducationDetail','applicant_id','id');
    }

    public function language(){
        return $this->hasMany('App\Model\KnownLanguage','applicant_id','id');
    }

    public function technical(){
        return $this->hasMany('App\Model\TechnicalExperience','applicant_id','id');
    }

    public function experience(){
        return $this->hasMany('App\Model\WorkExperience','applicant_id','id');
    }

    public static function createEdit($request,$id=''){

        $info = Applicant::find($id);
        if($id !=''){
            $data = Applicant::find($id);
            $education  = EducationDetail::where('applicant_id',$id)->first();
            TechnicalExperience::where('applicant_id',$id)->delete();
            KnownLanguage::where('applicant_id',$id)->delete();
            WorkExperience::where('applicant_id',$id)->delete();

        }else{
            $data = new Applicant();
            $education  = new EducationDetail();
        }

        $data->name = isset($request->name)?$request->name:'';
        $data->email = isset($request->email)?$request->email:'';
        $data->address = isset($request->address)?$request->address:'';
        $data->gender = isset($request->gender)?$request->gender:'';
        $data->contact_number = isset($request->contact)?$request->contact:'';
        $data->preferred_location = isset($request->location)?$request->location:'';
        $data->expected_ctc = isset($request->expected_ctc)?$request->expected_ctc:'';
        $data->current_ctc = isset($request->current_ctc)?$request->current_ctc:'';
        $data->notice_period = isset($request->notice_period)?$request->notice_period:'';        
        $data->save();

        $education->applicant_id = $data->id;
        $education->ssc_board = isset($request->ssc_board)?$request->ssc_board:'';
        $education->ssc_year = isset($request->ssc_year)?$request->ssc_year:'';
        $education->ssc_percentage = isset($request->ssc_percentage)?$request->ssc_percentage:'';
        $education->hsc_board = isset($request->hsc_board)?$request->hsc_board:'';
        $education->hsc_year = isset($request->hsc_year)?$request->hsc_year:'';
        $education->hsc_percentage = isset($request->hsc_percentage)?$request->hsc_percentage:'';
        $education->graduation_board = isset($request->university)?$request->university:'';
        $education->graduation_year = isset($request->grad_year)?$request->grad_year:'';
        $education->graduation_percentage = isset($request->grad_percentage)?$request->grad_percentage:'';
        $education->master_board = isset($request->master_university)?$request->master_university:'';
        $education->master_year = isset($request->master_university)?$request->master_year:'';
        $education->master_percentage = isset($request->master_percentage)?$request->master_percentage:'';
        $education->save();

        if(isset($request['company']) && !empty($request['company'])){
        	foreach($request['company'] as $key=>$val){
        		$work = new WorkExperience();
        		$work->applicant_id = $data->id;
        		$work->company_name = isset($val)?$val:'';
        		$work->deignation = isset($request['designation'][$key])?$request['designation'][$key]:'';
        		$work->from_date = isset($request['from_date'][$key])?date('Y-m-d',strtotime($request['from_date'][$key])):NULL;
        		$work->to_date = isset($request['to_date'][$key])?date('Y-m-d',strtotime($request['to_date'][$key])):NULL;
        		$work->save();

        	}
        }
        
        if(isset($request['lang'])){
           
        	foreach($request['lang'] as $k=>$v){
        		$lang = new KnownLanguage();        		
        		$lang->applicant_id = $data->id;
        		$lang->language = $k;
        		$lang->is_read = isset($v[0])?$v[0]:0;
        		$lang->is_write = isset($v[1])?$v[1]:0;
        		$lang->is_speak = isset($v[2])?$v[2]:0;        		
        		$lang->save();
        	}
        }

        if(isset($request['skill'])){
           
            foreach($request['skill'] as $k=>$v){
                $skill = new TechnicalExperience();                
                $skill->applicant_id = $data->id;
                $skill->technology = $k;
                $skill->skills = isset($v[0])?$v[0]:'';               
                $skill->save();
            }
        }
        return $data;
    }

    public static function postList($request){
        
        $query = Applicant::with('education','language','technical','experience');
        if($request->order ==null){
            $query->orderBy('applicant.id','desc');
        }        
        $searcharray = array();     
        parse_str($request->fromValues,$searcharray);        
        
        return Datatables::of($query)
            
            ->addColumn('action', function ($data) {                
               $editLink = URL::to('/').'/admin/applications/'.$data->id.'/edit';                  
               $viewLink = URL::to('/').'/admin/applications/'.$data->id;
               $deleteLink = $data->id; 
               return Helper::Action($editLink,$deleteLink,$viewLink);     
             }) 
            ->rawColumns(['action'])
            ->make(true);
    }
}
