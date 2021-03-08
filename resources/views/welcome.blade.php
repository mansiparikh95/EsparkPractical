<!DOCTYPE html>
<html lang="en">
<head>
<title> Application Form - Espark</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="html.design">
<!-- description -->
<meta name="description" content="Wizard Form with Validation - Responsive">
<link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
<!-- Fontawesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
<!-- Fonts and icons -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet"> 
<!-- Reset CSS -->
<link rel="stylesheet" href="{{url('assets/css/reset.css')}}">
<link rel="stylesheet" href="{{url('assets_old/vendor/date-picker/css/datepicker.min.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
<!-- Responsive  CSS -->
<link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
</head>
<body>

<div class="wizard-main">
	<div id="particles-js"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="title-wb">Application Form</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 banner-sec">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-block img-fluid" src="{{url('assets/images/slider-01.jpg')}}" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>This is Heaven</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>	
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="{{url('assets/images/slider-02.jpg')}}" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>This is Heaven</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>	
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="{{url('assets/images/slider-03.jpg')}}" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>This is Heaven</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>	
							</div>
						</div>
					</div>	   
				</div>
			</div>
			<div class="col-lg-6 login-sec">
				<div class="login-sec-bg">
					<h2 class="text-center">Application Form</h2>
					@include('errormessage')
					<form action="{{route('application')}}" method="POST" id="example-advanced-form" name="createform"  class="form-horizontal" enctype="multipart/form-data">
						@csrf
						<h3>Basic</h3>						
						<fieldset class="form-input">
							<h4>Basic Details</h4>
							<label for="name">Name *</label>
							<input id="name" name="name" type="text" class="form-control required">
							<label for="email">Email *</label>
							<input id="email" name="email" type="email" class="form-control required">
							<label for="address">Addres *</label>
							<textarea id="address" name="address" class="form-control required"></textarea>

							<label for="gender">Gender *</label><br>
							<input name="gender" type="radio" value="male" style="display: inline-block;">&nbsp;&nbsp;&nbsp;<label>Male</label>&nbsp;&nbsp;&nbsp;
							<input name="gender" type="radio" value="female" style="display: inline-block;">&nbsp;&nbsp;&nbsp;<label>Female</label>
							<br>

							<label for="contact">Contact *</label>
							<input id="contact" name="contact" type="number" class="form-control required">
						</fieldset>

						<h3>Education</h3>
						<fieldset class="form-input" style="overflow: auto">
							<h4>Education Details</h4>
							SSC <br>
							<label for="board">Board *</label>
							<input id="ssc_board" name="ssc_board" type="text" class="form-control required">
							<label for="ssc_year"> Year *</label>
							<select id="ssc_year" class="form-control" name="ssc_year">
                                @for($i=1980;$i<=2021;$i++)
                                <option value="{{$i}}" class="option">{{$i}}</option>
                                @endfor
                            </select>
                            <label for="ssc_percentage">Percentage *</label>
							<input id="ssc_percentage" name="ssc_percentage" type="number" class="form-control required">
							HSC <br>
							<label for="hsc_board">Board *</label>
							<input id="hsc_board" name="hsc_board" type="text" class="form-control required">
							<label for="hsc_year"> Year *</label>
							<select id="hsc_year" class="form-control" name="hsc_year">
                                @for($i=1980;$i<=2021;$i++)
                                <option value="{{$i}}" class="option">{{$i}}</option>
                                @endfor
                            </select>
                            <label for="hsc_percentage">Percentage *</label>
							<input id="hsc_percentage" name="hsc_percentage" type="number" class="form-control required">
							Graduation <br>
							<label for="university">University *</label>
							<input id="university" name="university" type="text" class="form-control required">
							<label for="grad_year"> Year *</label>
							<select id="grad_year" class="form-control" name="grad_year">
                                @for($i=1980;$i<=2021;$i++)
                                <option value="{{$i}}" class="option">{{$i}}</option>
                                @endfor
                            </select>
                            <label for="grad_percentage">Percentage *</label>
							<input id="grad_percentage" name="grad_percentage" type="number" class="form-control required">
							Master <br>
							<label for="master_university">University</label>
							<input id="master_university" name="master_university" type="text" class="form-control">
							<label for="master_year"> Year</label>
							<select id="master_year" class="form-control" name="master_year">
                                @for($i=1980;$i<=2021;$i++)
                                <option value="{{$i}}" class="option">{{$i}}</option>
                                @endfor
                            </select>
                            <label for="master_percentage">Percentage</label>
							<input id="master_percentage" name="master_percentage" type="number" class="form-control">
						</fieldset>

						<h3>Work Experience</h3>
						<fieldset class="form-input" style="overflow: auto">
							<div class="input_fields_wrap">
                				<button class="add_field_button">Add More Fields</button><br><br>
                				<label for="company">Company *</label>
								<input id="company" name="company[]" type="text" class="form-control required">
								<label for="designation">Designation *</label>
								<input id="designation" name="designation[]" type="text" class="form-control required">
								<label for="designation">From Date *</label>
								<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd-mm-yyyy" id="dp1" name="from_date[]">
								<label for="designation">To Date *</label>
								<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd-mm-yyyy" id="dp2" name="to_date[]">
                			</div>
						</fieldset>

						<h3>Known languages</h3>
						<fieldset class="form-input">
            				
							<input id="lang" name="lang[hindi]" type="checkbox" value="hindi" class="hindi">  <label>Hindi</label> &nbsp;&nbsp;&nbsp;<input id="lang" name="lang[hindi][0]" type="checkbox" value="1" disabled class="hindi_r">  <label>read</label> &nbsp;&nbsp;&nbsp;<input id="lang" name="lang[hindi][1]" type="checkbox" value="1" disabled class="hindi_r">  <label>write</label>&nbsp;&nbsp;&nbsp; <input id="lang" name="lang[hindi][2]" type="checkbox"value="1" disabled class="hindi_r">  <label>speak</label><br>

							<input id="lang" name="lang[english]" type="checkbox" value="english" class="english">  <label>English</label> &nbsp;&nbsp;&nbsp;<input id="lang" name="lang[english][0]" type="checkbox" value="1" class="english_r" disabled>  <label>read</label> &nbsp;&nbsp;&nbsp;<input id="lang" name="lang[english][1]" type="checkbox" value="1" class="english_r" disabled>  <label>write</label>&nbsp;&nbsp;&nbsp; <input id="lang" name="lang[english][2]" type="checkbox" value="1" class="english_r" disabled>  <label>speak</label><br>

							<input id="lang" name="lang[gujarati]" type="checkbox" value="gujarati" class="gujarati">  <label>Gujarati</label> &nbsp;&nbsp;&nbsp;<input id="lang" name="lang[gujarati][0]" type="checkbox" value="1" class="gujarati_r" disabled>  <label>read</label> &nbsp;&nbsp;&nbsp;<input id="lang" name="lang[gujarati][1]" type="checkbox" value="1" class="gujarati_r" disabled>  <label>write</label>&nbsp;&nbsp;&nbsp; <input id="lang" name="lang[gujarati][2]" type="checkbox" value="1" class="gujarati_r" disabled>  <label>speak</label><br>
						</fieldset>

						<h3>Technical Experience</h3>
						<fieldset class="form-input">            				
							<input id="lang" name="skill[PHP]" type="checkbox" value="PHP" class="php">  <label>PHP</label> <input id="lang" name="skill[PHP][0]" type="radio" value="Biginner" style="display: inline-block;" class="php_r" disabled>  <label>Biginner</label> 
							<input id="lang" name="skill[PHP][0]" type="radio" value="Mediator" style="display: inline-block;" class="php_r" disabled>  <label>Mediator</label> 
							<input id="lang" name="skill[PHP][0]" type="radio" value="Expert" style="display: inline-block;" class="php_r" disabled>  <label>Expert</label><br>

							<input id="lang" name="skill[Mysql]" type="checkbox" value="Mysql" class="mysql">  <label>Mysql</label> 
							<input id="skill" name="skill[Mysql][0]" type="radio" value="Biginner" style="display: inline-block;" class="mysql_r" disabled>  <label>Biginer</label> 
							<input id="lang" name="skill[Mysql][0]" type="radio" value="Mediator" style="display: inline-block;" class="mysql_r" disabled>  <label>Mediator</label> 
							<input id="lang" name="skill[Mysql][0]" type="radio" value="Expert" style="display: inline-block;" class="mysql_r" disabled>  <label>Expert</label><br>

							<input id="lang" name="skill[Laravel]" type="checkbox" value="Laravel" class="laravel">  <label>Laravel</label> 
							<input id="lang" name="skill[Laravel][0]" type="radio" value="Biginner" style="display: inline-block;" class="laravel_r" disabled>  <label>Biginer</label> 
							<input id="lang" name="skill[Laravel][0]" type="radio" value="Mediator" style="display: inline-block;" class="laravel_r" disabled> <label>Mediator</label>
							 <input id="lang" name="skill[Laravel][0]" type="radio" value="Expert" style="display: inline-block;" class="laravel_r" disabled>  <label>Expert</label><br>

							<input id="lang" name="skill[Oracle]" type="checkbox" value="Oracle" class="oracle">  <label>Oracle</label> 
							<input id="lang" name="skill[Oracle][0]" type="radio" value="Biginner" style="display: inline-block;" class="oracle_r" disabled><label>Biginer</label> 
							<input id="lang" name="skill[Oracle][0]" type="radio" value="Mediator" style="display: inline-block;" class="oracle_r" disabled> <label>Mediator</label> 
							<input id="lang" name="skill[Oracle][0]" type="radio" value="Expert" style="display: inline-block;" class="oracle_r" disabled>  <label>Expert</label><br>
							
						</fieldset>

						<h3>Preference </h3>
						<fieldset class="form-input">
							<label for="name">Preferred Location *</label>
							<select id="location" class="form-control" name="location">                                
                                <option value="india" class="option">India</option>
                                <option value="usa" class="option">USA</option>
                                <option value="uk" class="option">UK</option>
                            </select>
							<label for="expected_ctc">Expected CTC *</label>
							<input id="expected_ctc" name="expected_ctc" type="text" class="form-control required">	
							<label for="current_ctc">Current CTC *</label>
							<input id="current_ctc" name="current_ctc" type="text" class="form-control required">
							<label for="notice_period">Notice Period *</label>
							<input id="notice_period" name="notice_period" type="text" class="form-control required">
						</fieldset>
					</form>			
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="copyright text-center">All Rights Reserved. &copy; 2018 
				</p>
			</div>
		</div>
	</div>
</div>

<!-- jquery latest version -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<!-- popper.min.js -->
<script src="{{url('assets/js/popper.min.js')}}"></script> 

<!-- bootstrap js -->
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!-- jquery.steps js -->
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script src="{{url('assets/js/jquery.steps.js')}}"></script>
<!-- particles js -->
<script src="{{url('assets/js/particles.js')}}"></script>
<script src="{{url('assets_old/vendor/date-picker/js/datepicker.js')}}"></script>
<script src="{{url('assets_old/vendor/date-picker/js/datepicker.en.js')}}"></script>
<script src="{{url('assets_old/js/main.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		particlesJS("particles-js", 
			{
			  "particles": {
				"number": {
				  "value": 160,
				  "density": {
					"enable": true,
					"value_area": 800
				  }
				},
				"color": {
				  "value": "#ffffff"
				},
				"shape": {
				  "type": "circle",
				  "stroke": {
					"width": 0,
					"color": "#000000"
				  },
				  "polygon": {
					"nb_sides": 5
				  },
				  "image": {
					"src": "{{url('assets/img/github.svg')}}",
					"width": 100,
					"height": 100
				  }
				},
				"opacity": {
				  "value": 1,
				  "random": true,
				  "anim": {
					"enable": true,
					"speed": 1,
					"opacity_min": 0,
					"sync": false
				  }
				},
				"size": {
				  "value": 3,
				  "random": true,
				  "anim": {
					"enable": false,
					"speed": 4,
					"size_min": 0.3,
					"sync": false
				  }
				},
				"line_linked": {
				  "enable": false,
				  "distance": 150,
				  "color": "#ffffff",
				  "opacity": 0.4,
				  "width": 1
				},
				"move": {
				  "enable": true,
				  "speed": 1,
				  "direction": "none",
				  "random": true,
				  "straight": false,
				  "out_mode": "out",
				  "bounce": false,
				  "attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 600
				  }
				}
			  },
			  "interactivity": {
				"detect_on": "canvas",
				"events": {
				  "onhover": {
					"enable": true,
					"mode": "bubble"
				  },
				  "onclick": {
					"enable": true,
					"mode": "repulse"
				  },
				  "resize": true
				},
				"modes": {
				  "grab": {
					"distance": 400,
					"line_linked": {
					  "opacity": 1
					}
				  },
				  "bubble": {
					"distance": 250,
					"size": 0,
					"duration": 2,
					"opacity": 0,
					"speed": 3
				  },
				  "repulse": {
					"distance": 400,
					"duration": 0.4
				  },
				  "push": {
					"particles_nb": 4
				  },
				  "remove": {
					"particles_nb": 2
				  }
				}
			  },
			  "retina_detect": true
			}
    	);
	});
</script>

<script>
	var form = $("#example-advanced-form").show();

	form.steps({
		headerTag: "h3",
		bodyTag: "fieldset",
		transitionEffect: "slideLeft",
		onStepChanging: function (event, currentIndex, newIndex)
		{
			// Allways allow previous action even if the current form is not valid!
			if (currentIndex > newIndex)
			{
				return true;
			}
			// Forbid next action on "Warning" step if the user is to young
			if (newIndex === 3 && Number($("#age").val()) < 18)
			{
				return false;
			}
			// Needed in some cases if the user went back (clean up)
			if (currentIndex < newIndex)
			{
				// To remove error styles
				form.find(".body:eq(" + newIndex + ") label.error").remove();
				form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
			}
			form.validate().settings.ignore = ":disabled,:hidden";
			return form.valid();
		},
		onStepChanged: function (event, currentIndex, priorIndex)
		{
			// Used to skip the "Warning" step if the user is old enough.
			if (currentIndex === 2 && Number($("#age").val()) >= 18)
			{
				form.steps("next");
			}
			// Used to skip the "Warning" step if the user is old enough and wants to the previous step.
			if (currentIndex === 2 && priorIndex === 3)
			{
				form.steps("previous");
			}
		},
		onFinishing: function (event, currentIndex)
		{
			form.validate().settings.ignore = ":disabled";
			return form.valid();
		},
		onFinished: function (event, currentIndex)
		{
			form.submit();
		}
	}).validate({
		errorPlacement: function errorPlacement(error, element) { element.before(error); },
		rules: {
			confirm: {
				equalTo: "#password"
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
            $(wrapper).append('<div><label for="company">Company *</label><input id="company" name="company[]" type="text" class="form-control required"><label for="designation">Designation *</label><input id="designation" name="designation[]" type="text" class="form-control required"><label for="designation">From Date *</label><input type="text" class="form-control datepicker-here" data-language="en" data-date-format="dd-mm- yyyy" id="dp1" name="from_date[]"><label for="designation">To Date *</label><input type="text" class="form-control datepicker-here" data-language="en" data-date-format="dd-mm-yyyy" id="dp2" name="to_date[]"><a href="javascript:void(0)" class="remove_field">Remove</a></div>'); //add input box

            	var dp3 = $('.datepicker-here').datepicker().data('datepicker');
    				dp3.selectDate(new Date());
        		}        
    
	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	        e.preventDefault(); $(this).parent('div').remove(); x--;
	    })
	});

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

</script>

</body>
</html>