<?php use Request as Input; ?>
@extends('layouts.master')
@section('title','Edit Applications')
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
                <span class="kt-subheader__desc">Edit Applications</span>                
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
                       Create CMS
                    </h3>
                </div>
            </div> -->

            <!--begin::Form-->
            {{ Form::model($data, ['route' => ['applications.update',$data->id], 'method' => 'patch','id'=>'createform','name'=>'createform','class'=>'kt-form','enctype'=>'multipart/form-data']) }}                                                                                     
            @include('admin.applications.common')

            {!! Form::close() !!}
            <!--end::Form-->
        </div>              
    </div>
    <!-- end:: Content -->
</div>
@section('script')
<script>
    $(document).ready(function () {
        $('#createform').validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                contact: {
                    required: true,
                },
                address: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                ssc_board: {
                    required: true,
                },
                ssc_year: {
                    required: true,
                },
                ssc_percentage: {
                    required: true,
                },
                hsc_board: {
                    required: true,
                },
                hsc_year: {
                    required: true,
                },
                hsc_percentage: {
                    required: true,
                },
                university: {
                    required: true,
                },
                grad_year: {
                    required: true,
                },
                grad_percentage: {
                    required: true,
                },
                company: {
                    required: true,
                },
                designation: {
                    required: true,
                },
                from_date: {
                    required: true,
                },
                to_date: {
                    required: true,
                },
                location: {
                    required: true,
                },
                expected_ctc: {
                    required: true,
                },
                current_ctc: {
                    required: true,
                },
                notice_period: {
                    required: true,
                },
            },
            submitHandler: function (form) {
                if ($("#createform").validate().checkForm()) {
                    $(".submitbutton").attr("type", "button");
                    $(".cancelbutton").addClass("disabled");
                    $(".submitbutton").addClass("disabled kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light");
                    form.submit();
                }
            }
        }); 

        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="row custom_div"><div class="col-md-3"><div class="form-group"><label>Company</label><input type="text" name="company[]" id="company" value="" class="form-control"></div></div><div class="col-md-3"><div class="form-group"><label>Designation</label><input type="text" name="designation[]" id="designation" value="" class="form-control"></div></div><div class="col-md-3"><div class="form-group"><label>From Date</label><div class="input-group date "><input type="text" name="from_date[]" class="form-control from_date" data-date-format="dd-mm-yyyy" id="kt_datepicker_2" value=""><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar-check-o"></i> </span></div> </div>  </div> </div><div class="col-md-3"><div class="form-group"><label>To Date</label><div class="input-group date "><input type="text" name="to_date[]" class="form-control to_date" data-date-format="dd-mm-yyyy" id="kt_datepicker_2" value=""><div class="input-group-append"><span class="input-group-text"><i class="la la-calendar-check-o"></i></span></div></div></div></div><a href="javascript:void(0)" class="remove_field">Remove</a></div>');

                     $(".date").datepicker();
            } 
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).closest('.custom_div').remove(); x--;
            })
        });

        $(".date").datepicker();

        $(".skill").click(function(){
            if($(this).prop("checked") == true){
                $(this).closest('input').attr('disabled',false);
            }
            else{

            }
        })

        $(".hindi").click(function(){
            if($(this).prop("checked") == true){
                $(".hindi_r").attr("disabled",false);
            }
            else{
                $(".hindi_r").attr("disabled",true);
            }
        });

        $(".english").click(function(){
            if($(this).prop("checked") == true){
                $(".english_r").attr("disabled",false);
            }
            else{
                $(".english_r").attr("disabled",true);
            }
        });

        $(".gujarati").click(function(){
            if($(this).prop("checked") == true){
                $(".gujarati_r").attr("disabled",false);
            }
            else{
                $(".gujarati_r").attr("disabled",true);
            }
        });

        $(".php").click(function(){
            if($(this).prop("checked") == true){
                $(".php_r").attr("disabled",false);
            }
            else{
                $(".php_r").attr("disabled",true);
            }
        });

        $(".mysql").click(function(){
            if($(this).prop("checked") == true){
                $(".mysql_r").attr("disabled",false);
            }
            else{
                $(".mysql_r").attr("disabled",true);
            }
        });

        $(".laravel").click(function(){
            if($(this).prop("checked") == true){
                $(".laravel_r").attr("disabled",false);
            }
            else{
                $(".laravel_r").attr("disabled",true);
            }
        });

        $(".oracle").click(function(){
            if($(this).prop("checked") == true){
                $(".oracle_r").attr("disabled",false);
            }
            else{
                $(".oracle_r").attr("disabled",true);
            }
        });
    });

</script>
@endsection
@endsection
