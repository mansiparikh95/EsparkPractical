<?php use Request as Input; ?>
@extends('layouts.master')
@section('title','Applications Details')
@section('css')
@endsection
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <a href="{{route('applications.index')}}">
                    <h3 class="kt-subheader__title">Applications</h3>
                </a>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc">Applications Details</span>                
            </div>            
        </div>
    </div>
    <!-- end:: Content Head -->

    <!-- begin:: Content -->
   
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        @include('errormessage')
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <!-- <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                       CMS Details
                    </h3>
                </div>
            </div> -->

            <div class="kt-portlet__body">
                <div class="kt-section kt-section--first">
                    <h3>Basic Details</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                               <label><strong>Name: </strong></label>
                                <label>{{isset($data->name)?ucfirst($data->name):''}}</label>
                            </div>
                        </div>                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Email: </strong></label>
                                <label>{{isset($data->email)?($data->email):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Contact: </strong></label>
                                <label>{{isset($data->contact_number)?($data->contact_number):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Gender: </strong></label>
                                <label>{{isset($data->gender)?($data->gender):''}}</label>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                               <label><strong>Address: </strong></label>
                                <label>{!! isset($data->address)?ucfirst($data->address):'' !!}</label>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                               <label><strong>Preferred Location: </strong></label>
                                <label>{{isset($data->preferred_location)?ucfirst($data->preferred_location):''}}</label>
                            </div>
                        </div>                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Expected CTC: </strong></label>
                                <label>{{isset($data->expected_ctc)?($data->expected_ctc):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Current CTC: </strong></label>
                                <label>{{isset($data->current_ctc)?($data->current_ctc):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Notice Period: </strong></label>
                                <label>{{isset($data->notice_period)?($data->notice_period):''}}</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Education Details</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                               <label><strong>SSC Board: </strong></label>
                                <label>{{isset($data->education->ssc_board)?ucfirst($data->education->ssc_board):''}}</label>
                            </div>
                        </div>                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>SSC Year: </strong></label>
                                <label>{{isset($data->education->ssc_year)?($data->education->ssc_year):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>SSC Percentage: </strong></label>
                                <label>{{isset($data->education->ssc_percentage)?($data->education->ssc_percentage):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>HSC Board: </strong></label>
                                <label>{{isset($data->education->hsc_board)?($data->education->hsc_board):''}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">                                           
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>HSC Year: </strong></label>
                                <label>{{isset($data->education->hsc_year)?($data->education->hsc_year):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>HSC Percentage: </strong></label>
                                <label>{{isset($data->education->hsc_percentage)?($data->education->hsc_percentage):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>University: </strong></label>
                                <label>{{isset($data->education->graduation_board)?($data->education->graduation_board):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Graduation Year: </strong></label>
                                <label>{{isset($data->education->graduation_year)?($data->education->graduation_year):''}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">                                           
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Graduation Percentage: </strong></label>
                                <label>{{isset($data->education->graduation_percentage)?($data->education->graduation_percentage):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Master Board: </strong></label>
                                <label>{{isset($data->education->master_board)?($data->education->master_board):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Master Year: </strong></label>
                                <label>{{isset($data->education->master_year)?($data->education->master_year):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Master Percentage: </strong></label>
                                <label>{{isset($data->education->master_percentage)?($data->education->master_percentage):''}}</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Work Experience</h3>
                    @foreach($data->experience as $key=>$val)
                    <div class="row">                                           
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Company Name: </strong></label>
                                <label>{{isset($val->company_name)?($val->company_name):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>Designation: </strong></label>
                                <label>{{isset($val->deignation)?($val->deignation):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>From Date: </strong></label>
                                <label>{{isset($val->from_date)?($val->from_date):''}}</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>To Date: </strong></label>
                                <label>{{isset($val->to_date)?($val->to_date):''}}</label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <br>
                    <h3>Known Language</h3>
                    @foreach($data->language as $key=>$val)
                    <div class="row">                                           
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>{{isset($val->language)?($val->language):''}} : </strong></label>
                                <label>{{($val->is_read == 1)?'Read':''}},{{($val->is_write == 1)?'Write':''}},{{($val->is_speak == 1)?'Speak':''}}</label>
                            </div>
                        </div>                                                
                    </div>
                    @endforeach
                    <br>
                    <h3>Technical Skills</h3>
                    @foreach($data->technical as $key=>$val)
                    <div class="row">                                           
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>{{isset($val->technology)?($val->technology):''}} : </strong></label>
                                <label>{{isset($val->skills)?($val->skills):''}}</label>
                            </div>
                        </div>                                                
                    </div>
                    @endforeach
                    <br>
                </div>
            </div>              
    </div>
    <!-- end:: Content -->
</div>
@section('script')

@endsection
@endsection
