<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FormWizard_v4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
        <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
        <link rel="stylesheet" href="{{url('assets/vendor/date-picker/css/datepicker.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    </head>
    <body>
        <div class="wrapper">
            <div class="image-holder">
                <img src="{{url('assets/images/form-wizard.png')}}" alt="">
            </div>
            <form action="" method="POST" id="createform" name="createform"  class="form-horizontal" enctype="multipart/form-data">
                @csrf                    
                <div class="form-header">
                    <a href="#">#Application Form</a>
                    <h3></h3>
                </div>
                <div id="wizard">
                    <!-- SECTION 1 -->
                    <h4></h4>
                    <section>
                        <div class="form-row">
                            <label for="">
                                Name:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="">
                                Email:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                        </div>  
                        <div class="form-row" style="margin-bottom: 3.4vh">
                            <label for="">
                                Address:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="address" id="address">
                            </div>
                        </div> 
                        <div class="form-row">
                            <label for="">
                                Contact:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="contact_number" id="contact_number">
                            </div>
                        </div> 
                        <div class="form-row" style="margin-bottom: 50px;">
                            <label for="">
                                Gender:
                            </label>
                            <div class="form-holder">
                                <div class="checkbox-circle">
                                    <label class="male">
                                        <input type="radio" name="gender" value="male" checked> Male<br>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="female">
                                        <input type="radio" name="gender" value="female"> Female<br>
                                        <span class="checkmark"></span>
                                    </label>  
                                    <label>
                                        <!-- <input type="radio" name="gender" value="transgender">Transgender<br>
                                        <span class="checkmark"></span> -->
                                    </label>                                  
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- SECTION 2 -->
                    <h4></h4>
                    <section>
                        SSC
                        <div class="form-row">
                            <label for="">
                                Board/University:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="ssc_university" id="ssc_university" value="SSC" readonly>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 38px">
                            <label for="">
                                Year:
                            </label>
                            <div class="form-holder">                                
                                <select name="" id="ssc_year" class="form-control" name="ssc_year">
                                    @for($i=1980;$i<=2021;$i++)
                                    <option value="{{$i}}" class="option">{{$i}}</option>
                                    @endfor
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                CGPA/Percentage:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="ssc_percentage" id="ssc_percentage">
                            </div>
                        </div>
                        HSC
                        <div class="form-row">
                            <label for="">
                                Board/University:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="hsc_university" id="hsc_university" value="HSC" readonly>
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 38px">
                            <label for="">
                                Year:
                            </label>
                            <div class="form-holder">                                
                                <select name="" id="hsc_year" class="form-control" name="hsc_year">
                                    @for($i=1980;$i<=2021;$i++)
                                    <option value="{{$i}}" class="option">{{$i}}</option>
                                    @endfor
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                CGPA/Percentage:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="hsc_percentage" id="hsc_percentage">
                            </div>
                        </div>
                        Graduation
                        <div class="form-row">
                            <label for="">
                                Board/University:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="gra_university" id="gra_university">
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 38px">
                            <label for="">
                                Year:
                            </label>
                            <div class="form-holder">                                
                                <select name="" id="gra_year" class="form-control" name="gra_year">
                                    @for($i=1980;$i<=2021;$i++)
                                    <option value="{{$i}}" class="option">{{$i}}</option>
                                    @endfor
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                CGPA/Percentage:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="gra_percentage" id="gra_percentage">
                            </div>
                        </div>
                        Master Degree
                        <div class="form-row">
                            <label for="">
                                Board/University:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="master_university" id="master_university">
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom: 38px">
                            <label for="">
                                Year:
                            </label>
                            <div class="form-holder">                                
                                <select name="" id="master_year" class="form-control" name="master_year">
                                    @for($i=1980;$i<=2021;$i++)
                                    <option value="{{$i}}" class="option">{{$i}}</option>
                                    @endfor
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                CGPA/Percentage:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="master_percentage" id="master_percentage">
                            </div>
                        </div>
                    </section>

                    <!-- SECTION 3 -->
                    <h4></h4>
                    <section>
                        <div class="form-row">
                            <label for="">
                                Company Name:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="company_name" id="company_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="">
                                Designation:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="designation" id="designation">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="">
                                From:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp1" name="from">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="">
                                To:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd - mm - yyyy" id="dp2" name="to">
                            </div>
                        </div> 
                        <a href="javascript:void(0)" id="add_more">Add More + </a>
                    </section>

                    <!-- SECTION 4 -->
                    <h4></h4>
                    <section>
                        Language Known
                        <div class="checkbox" style="margin-bottom: 48px;">
                            <label>
                                <input type="checkbox" name="h_language[]">Hindi
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="h_language[]">read
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="h_language[]">write
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="h_language[]">speak
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox" style="margin-bottom: 48px;">
                            <label>
                                <input type="checkbox" name="e_language[]">English
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="e_language[]">read
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="e_language[]">write
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="e_language[]">speak
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox" style="margin-bottom: 48px;">
                            <label>
                                <input type="checkbox" name="g_language[]">Gujarati
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="g_language[]">read
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="g_language[]">write
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="checkbox" name="g_language[]">speak
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </section>

                    <!-- SECTION 5 -->
                    <h4></h4>
                    <section>
                        Technical Experience
                        <div class="checkbox" style="margin-bottom: 48px;">
                            <label>
                                <input type="checkbox" name="begginer[]">PHP
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="beggiber[]">Begginer
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Mediator
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Expert
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox" style="margin-bottom: 48px;">
                            <label>
                                <input type="checkbox" name="begginer[]">Mysql
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="beggiber[]">Begginer
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Mediator
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Expert
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox" style="margin-bottom: 48px;">
                            <label>
                                <input type="checkbox" name="begginer[]">Laravel
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="beggiber[]">Begginer
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Mediator
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Expert
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox" style="margin-bottom: 48px;">
                            <label>
                                <input type="checkbox" name="begginer[]">Oracle
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="beggiber[]">Begginer
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Mediator
                                <span class="checkmark"></span>
                            </label>
                            <label>
                                <input type="radio" name="h_language[]">Expert
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        
                    </section>

                    <!-- SECTION 6 -->
                    <h4></h4>
                    <section>
                        <div class="form-row" style="margin-bottom: 38px">
                            <label for="">
                                Preffered Location:
                            </label>
                            <div class="form-holder">
                                <select name="" id="" class="form-control">
                                    <option value="ahmedabad" class="option">Ahmedabad</option>
                                    <option value="pune" class="option">Pune</option>
                                    <option value="hydrabad" class="option">Hydrabad</option>
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                Expected CTC:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="expected_ctc" id="expected_ctc">
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                Current CTC:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="current_ctc" id="current_ctc">
                            </div>
                        </div>  
                        <div class="form-row">
                            <label for="">
                                Notice Period:
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="notice_period" id="notice_period">
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>

        <script src="{{url('assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.steps.js')}}"></script>
        <script src="{{url('assets/vendor/date-picker/js/datepicker.js')}}"></script>
        <script src="{{url('assets/vendor/date-picker/js/datepicker.en.js')}}"></script>
        <script src="{{url('assets/js/main.js')}}"></script>
        <script type="text/javascript">
            /*$(document).ready(function () {
                $.validator.addMethod("alpha", function (value, element) {
                    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
                }, "Letters only please");

                $('#createform').validate({
                    rules: {
                        name: {
                            required: true,
                            alpha: true
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        address: {
                            required: true,
                            maxlength: 50
                        },
                        contact_number: {
                            required: true,
                        },
                        company_name: {
                            required: true,
                        },
                        designation: {
                            required: true,
                        },
                        from: {
                            required: true,
                        },
                        to: {
                            required: true,
                        },
                        Preffered_lication: {
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
                });
            });*/
        </script>
</body>
</html>