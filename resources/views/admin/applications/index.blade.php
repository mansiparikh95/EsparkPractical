<?php use Request as Input; ?>
@extends('layouts.master')
@section('title','Applications')
@section('css')
<link href="{{url('assets/admin/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
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
            </div>            
        </div>
    </div>
    <!-- end:: Content Head -->

    <!-- begin:: Content -->
   
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        @include('errormessage')
         
        <div class="kt-portlet kt-portlet--mobile">
            
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th> 
                            <th>Contact Number</th>
                            <th>Gender</th>
                            <th>Location</th>
                            <th>Expected CTC</th>
                            <th>Current CTC</th>
                            <th>Notice Period</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <td>ok</td>
                        <td>ml</td>
                        <td nowrap></td> -->
                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
        </div>           
    </div>
    <!-- end:: Content -->
</div>
@include('confirmalert')
@section('script')
<script src="{{url('assets/admin/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

<script>    
$(document).ready(function () {
 
     var initTable1 = function () {
        var table = $('#kt_table_1');
        // begin first table
        table.DataTable({
            lengthMenu: getPageLengthDatatable(),
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            order: [],
            ajax: {
                url: "{{route('getdetails')}}",
                type: 'post',
                data: function (data) {
                    data.fromValues = $("#filterData").serialize();
                }
            },
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'contact_number', name: 'contact_number'},
                {data: 'gender', name: 'gender'},
                {data: 'preferred_location', name: 'preferred_location'},
                {data: 'expected_ctc', name: 'expected_ctc'},
                {data: 'current_ctc', name: 'current_ctc'},
                {data: 'notice_period', name: 'notice_period'},                
                {data: 'action', name: 'action', targets: -1,searchable: false, sortable: false,responsivePriority: -1},
            ],
        });
    };
    initTable1(); 
    $("#delete-record").on("click", function () {
        var id = $("#id").val();
        $('#kt_modal_1').modal('hide');
        $.ajax({
            url: baseUrl + '/admin/applications/' + id,
            type: "DELETE",
            dataType: 'json',
            success: function (data) {
                if (data == 'Error') {
                    toastr.error("Oops, There is some thing went wrong.Please try after some time.");
                } else {
                    toastr.success('Application deleted successfully','Success');
                    $('#kt_table_1').DataTable().clear().destroy();
                    initTable1();
                }
            },
            error: function (data) {
                toastr.error("Opps Something Wrong",'Error');
            }
        });
    });
});
</script>
@endsection
@endsection
