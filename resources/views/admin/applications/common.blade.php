<?php use Request as Input; ?>
<div class="kt-portlet__body">
    <div class="kt-section kt-section--first">
        <div class="kt-section__body">  
            <h4>Basic Details</h4> 
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        {!! Form::text('name',Input::old('name'), ['class' => 'form-control','id'=>"name",'placeholder'=>'Enter Name']) !!} 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        {!! Form::text('email',Input::old('email'), ['class' => 'form-control','id'=>"email",'placeholder'=>'Enter Email']) !!} 
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control" placeholder="Enter Contact" id="contact" value="{{isset($data->contact_number)?$data->contact_number:''}}">
                    </div>
                </div>                                                                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="kt-radio-inline">
                            <label class="kt-radio">
                                <input type="radio" name="gender" value="male" {{($data->gender == 'male')?'checked':''}}> Male
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="gender" value="female" {{($data->gender == 'female')?'checked':''}}> Female
                                <span></span>
                            </label>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Address</label>
                        {!! Form::text('address',Input::old('address'), ['class' => 'form-control','id'=>"address",'placeholder'=>'Enter Address']) !!} 
                    </div>
                </div>                
                                                               
            </div>


            <h4>Education Details</h4> 
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>SSC Board</label>
                        <input type="text" name="ssc_board" id="ssc_board" value="{{isset($data->education->ssc_board)?ucfirst($data->education->ssc_board):''}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>SSC Year</label>
                        <select id="ssc_year" class="form-control" name="ssc_year">
                            @for($i=1980;$i<=2021;$i++)
                            <option value="{{$i}}" {{($data->ssc_year == $i)?'selected':''}}>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>SSC Percentage</label>
                        <input type="text" name="ssc_percentage" id="ssc_percentage" value="{{isset($data->education->ssc_percentage)?ucfirst($data->education->ssc_percentage):''}}" class="form-control">
                    </div>
                </div>                                                                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>HSC Board</label>
                        <input type="text" name="hsc_board" id="hsc_board" value="{{isset($data->education->hsc_board)?ucfirst($data->education->hsc_board):''}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>HSC Year</label>
                        <select id="hsc_year" class="form-control" name="hsc_year">
                            @for($i=1980;$i<=2021;$i++)
                            <option value="{{$i}}" {{($data->hsc_year == $i)?'selected':''}}>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>HSC Percentage</label>
                        <input type="text" name="hsc_percentage" id="hsc_percentage" value="{{isset($data->education->hsc_percentage)?ucfirst($data->education->hsc_percentage):''}}" class="form-control">
                    </div>
                </div>                                                                
            </div>                                        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>University</label>
                        <input type="text" name="university" id="university" value="{{isset($data->education->graduation_board)?ucfirst($data->education->graduation_board):''}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Year</label>
                        <select id="grad_year" class="form-control" name="grad_year">
                            @for($i=1980;$i<=2021;$i++)
                            <option value="{{$i}}" {{($data->graduation_year == $i)?'selected':''}}>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Percentage</label>
                        <input type="text" name="grad_percentage" id="grad_percentage" value="{{isset($data->education->graduation_percentage)?ucfirst($data->education->graduation_percentage):''}}" class="form-control">
                    </div>
                </div>                                                                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Master University</label>
                        <input type="text" name="master_university" id="master_university" value="{{isset($data->education->master_board)?ucfirst($data->education->master_board):''}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Master Year</label>
                        <select id="master_year" class="form-control" name="master_year">
                            @for($i=1980;$i<=2021;$i++)
                            <option value="{{$i}}" {{($data->master_year == $i)?'selected':''}}>{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Master Percentage</label>
                        <input type="text" name="master_percentage" id="master_percentage" value="{{isset($data->education->master_percentage)?ucfirst($data->education->master_percentage):''}}" class="form-control">
                    </div>
                </div>                                                                
            </div>

            <h4>Work Experience</h4>
            <div class="input_fields_wrap">
                <button type="button" class="btn btn-brand btn-bold submitbutton add_field_button">Add More</button>&nbsp;
                @foreach($data->experience as $key=>$val)
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company[]" id="company" value="{{isset($val->company_name)?ucfirst($val->company_name):''}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation[]" id="designation" value="{{isset($val->deignation)?ucfirst($val->deignation):''}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>From Date</label>
                            <div class="input-group date ">
                                <input type="text" name="from_date[]" class="form-control from_date" data-date-format="dd-mm-yyyy" id="kt_datepicker_2" value="{{isset($val->from_date)?$val->from_date:''}}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>To Date</label>
                            <div class="input-group date ">
                                <input type="text" name="to_date[]" class="form-control to_date" data-date-format="dd-mm-yyyy" id="kt_datepicker_2" value="{{isset($val->to_date)?$val->to_date:''}}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                                    
                </div>
                @endforeach
            </div>
            <h4>Language Known</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">                        
                        <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[hindi]" value="hindi" {{(in_array("hindi", $lang))?'checked':''}} class="hindi"> Hindi
                                <span></span>
                            </label>
                            
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[hindi][0]" value="1" class="hindi_r" {{(!in_array("hindi", $lang))?'disabled':''}} {{(isset($hindi) && ($hindi->is_read == 1))?'checked':''}}> Read
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[hindi][1]" value="1" class="hindi_r" {{(!in_array("hindi", $lang))?'disabled':''}} {{(isset($hindi) && ($hindi->is_write == 1))?'checked':''}}> Write
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[hindi][2]" value="1" class="hindi_r" {{(!in_array("hindi", $lang))?'disabled':''}} {{(isset($hindi) && ($hindi->is_speak == 1))?'checked':''}}> Speak
                                <span></span>
                            </label>
                        </div>

                        <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[english]" value="english" {{(in_array("english", $lang))?'checked':''}} class="english" {{(isset($english) && ($english->is_read == 1))?'checked':''}}> English
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[english][0]" value="1" class="english_r" {{(!in_array("english", $lang))?'disabled':''}} {{(isset($english) && ($english->is_write == 1))?'checked':''}}> Read
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[english][1]" value="1" class="english_r" {{(!in_array("english", $lang))?'disabled':''}} {{(isset($english) && ($english->is_speak == 1))?'checked':''}}> Write
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[english][2]" value="1" class="english_r" {{(!in_array("english", $lang))?'disabled':''}}> Speak
                                <span></span>
                            </label>
                        </div>

                        <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[gujarati]" value="gujarati" {{(in_array("gujarati", $lang))?'checked':''}} class="gujarati"> Gujarati
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[gujarati][0]" value="1" class="gujarati_r" {{(!in_array("gujarati", $lang))?'disabled':''}} {{(isset($gujarati) && ($gujarati->is_read == 1))?'checked':''}}> Read
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[gujarati][1]" value="1" class="gujarati_r" {{(!in_array("gujarati", $lang))?'disabled':''}} {{(isset($gujarati) && ($gujarati->is_write == 1))?'checked':''}}> Write
                                <span></span>
                            </label>
                            <label class="kt-checkbox">
                                <input type="checkbox" name="lang[gujarati][2]" value="1" class="gujarati_r" {{(!in_array("gujarati", $lang))?'disabled':''}} {{(isset($gujarati) && ($gujarati->is_speak == 1))?'checked':''}}> Speak
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>                                                                               
            </div>

            <h4>Technical Skills</h4>
            <div class="row">
                <div class="col-md-12">                    
                    <div class="form-group"> 

                        <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="skill[PHP]" value="PHP" class="skill" {{(in_array("PHP", $skill))?'checked':''}} class="php"> PHP
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[PHP][0]" value="Biginner" class="expertise" class="php_r" {{(!in_array("PHP", $skill))?'disabled':''}} {{(isset($php) && ($php->skills == 'Biginner'))?'checked':''}}> Biginner
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[PHP][0]" value="Mediator" class="expertise" class="php_r" {{(!in_array("PHP", $skill))?'disabled':''}} {{(isset($php) && ($php->skills == 'Mediator'))?'checked':''}}> Mediator
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[PHP][0]" value="Expert" class="expertise" class="php_r" {{(!in_array("PHP", $skill))?'disabled':''}} {{(isset($php) && ($php->skills == 'Expert'))?'checked':''}}> Expert
                                <span></span>
                            </label>
                        </div>

                        <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="skill[Mysql]" value="Mysql" {{(in_array("Mysql", $skill))?'checked':''}} class="mysql"> Mysql
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Mysql][0]" value="Biginner" class="mysql_r" {{(!in_array("Mysql", $skill))?'disabled':''}} {{(isset($mysql) && ($mysql->skills == 'Biginner'))?'checked':''}}> Biginner
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Mysql][0]" value="Mediator" class="mysql_r" {{(!in_array("Mysql", $skill))?'disabled':''}} {{(isset($mysql) && ($mysql->skills == 'Mediator'))?'checked':''}}> Mediator
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Mysql][0]" value="Expert" class="mysql_r" {{(!in_array("Mysql", $skill))?'disabled':''}} {{(isset($mysql) && ($mysql->skills == 'Expert'))?'checked':''}}> Expert
                                <span></span>
                            </label>
                        </div>

                        <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="skill[Laravel]" value="Laravel" {{(in_array("Laravel", $skill))?'checked':''}} class="laravel"> Laravel
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Laravel][0]" value="Biginner" class="laravel_r" {{(!in_array("Laravel", $skill))?'disabled':''}} {{(isset($laravel) && ($laravel->skills == 'Biginner'))?'checked':''}}> Biginner
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Laravel][0]" value="Mediator" class="laravel_r" {{(!in_array("Laravel", $skill))?'disabled':''}} {{(isset($laravel) && ($laravel->skills == 'Mediator'))?'checked':''}}> Mediator
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Laravel][0]" value="Expert" class="laravel_r" {{(!in_array("Laravel", $skill))?'disabled':''}} {{(isset($laravel) && ($laravel->skills == 'Expert'))?'checked':''}}> Expert
                                <span></span>
                            </label>
                        </div>

                        <div class="kt-checkbox-inline">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="skill[Oracle]" value="Oracle" {{(in_array("Oracle", $skill))?'checked':''}} class="oracle"> Oracle
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Oracle][0]" value="Biginner" class="oracle_r" {{(!in_array("Oracle", $skill))?'disabled':''}} {{(isset($oracle) && ($oracle->skills == 'Biginner'))?'checked':''}}> Biginner
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Oracle][0]" value="Mediator" class="oracle_r" {{(!in_array("Oracle", $skill))?'disabled':''}} {{(isset($oracle) && ($oracle->skills == 'Mediator'))?'checked':''}}> Mediator
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="skill[Oracle][0]" value="Expert" class="oracle_r" {{(!in_array("Oracle", $skill))?'disabled':''}} {{(isset($oracle) && ($oracle->skills == 'Expert'))?'checked':''}}> Expert
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>                                                                               
            </div>

            <h4>Preferences</h4> 
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Preferred Location</label>
                        <select id="location" class="form-control" name="location">                                
                            <option value="india" {{($data->preferred_location == 'india')?'selected':''}}>India</option>
                            <option value="usa" {{($data->preferred_location == 'usa')?'selected':''}}>USA</option>
                            <option value="uk" {{($data->preferred_location == 'uk')?'selected':''}}>UK</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Expected CTC</label>
                        {!! Form::text('expected_ctc',Input::old('expected_ctc'), ['class' => 'form-control','id'=>"expected_ctc",'placeholder'=>'Enter CTC']) !!} 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Current CTC</label>
                        {!! Form::text('current_ctc',Input::old('current_ctc'), ['class' => 'form-control','id'=>"current_ctc",'placeholder'=>'Enter CTC']) !!} 
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Notice Period</label>
                        {!! Form::text('notice_period',Input::old('notice_period'), ['class' => 'form-control','id'=>"notice_period",'placeholder'=>'Enter Period']) !!} 
                    </div>
                </div>                                                                
            </div> 
        </div>
    </div>
</div>

<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <div class="row">
            <div class="col-lg-9 col-xl-9">
                <button type="submit" class="btn btn-brand btn-bold submitbutton">Update</button>&nbsp;
                <a href="{{route('applications.index')}}"><button type="button" class="btn btn-secondary cancelbutton">Cancel</button></a>
            </div>
        </div>
    </div>
</div>