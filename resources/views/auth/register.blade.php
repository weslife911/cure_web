<x-app title="SIGNUP">

    <x-header.header/>
    
    
    </header>
    <div id="login" class="page wb-page">
                                            <style id="sectionStyle-10945347">
            #section-10945347:before {
             background-color:#1b1e25;opacity:0.4;content:""; position:absolute; top:0%; display:block; left:0%; right:0%; bottom:0%; width:100%; height:100%;
            }
        </style><section id="section-10945347" class="
                    widget-section dynamic-form-widget sec-padding-xl  theme-dark-color-11                 " style="background:#1b1e25 url(/images/bg/group_11.jpg)  no-repeat center center;position: relative; overflow: hidden; background-size: cover;margin-top:0px"><div class="container boxWidget">
                                        <div class="row centered-row ">
                                        <div class="richTextWidget block-title ">
         <h4 style="color: #fff;">SignUp Form</h4><p style="color: #fff;">Signup to create your student account.</p></div>            
                                    <div class="col-lg-8 centered-col ">
                                        <div class="DynamicFormWidget  ">
    
                    
    
    
                    
        <div class="form-box">
            <form class="form-area" method="post" action="{{route('register')}}">
                @csrf
                            <div id="controlsDiv">

                                <div class="form-group col-lg-12 col-md-12 " id="div-field-9">
                                    <label id="label-field-9">  Full Name </label>
                                <input name="name" id="field-1" required placeholder="Enter Full Name" type="text">
                                @error("name")
                                <strong>
                                  {{$message}}
                                </strong>
                              @enderror
                            </div>
                                          
                              <div class="form-group col-lg-12 col-md-12 " id="div-field-9">
                                <label id="label-field-9">  Email Address </label>
                            <input name="email" id="field-2" required placeholder="Enter Email Address" type="email">
                            @error("email")
                              <strong>
                                {{$message}}
                              </strong>
                            @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 " id="div-field-9">
                                <select name="field_of_study" required>
                                    <option disabled hidden selected value>Select Field</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Medicine">Medicine</option>
                                </select>
                                @error("field_of_study")
                              <strong>
                                {{$message}}
                              </strong>
                            @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 " id="div-field-9" style="display: flex; justify-content:center; align-items:center;">
                                <div style="display: flex; flex-direction: column; width: 50%">
                                    <label id="label-field-9">  Enter Country Code </label>
                                    <input list="country-codes" name="country_code" id="field-3" required placeholder="e.g +237" type="text">
                                    <datalist id="country-codes">
                                        <option value="+237">Cameroon (+237)</option>
                                        <option value="+234">Nigeria (+234)</option>
                                        <option value="+1">USA (+1)</option>
                                        <option value="+44">United Kingdom (+44)</option>
                                        <option value="+33">France (+33)</option>
                                        <option value="+91">India (+91)</option>
                                        <option value="+61">Australia (+61)</option>
                                        <option value="+49">Germany (+49)</option>
                                        <option value="+81">Japan (+81)</option>
                                        <option value="+55">Brazil (+55)</option>
                                        <option value="+86">China (+86)</option>
                                        <option value="+34">Spain (+34)</option>
                                        <option value="+39">Italy (+39)</option>
                                        <option value="+52">Mexico (+52)</option>
                                        <option value="+27">South Africa (+27)</option>
                                        <option value="+62">Indonesia (+62)</option>
                                        <option value="+7">Russia (+7)</option>
                                        <option value="+20">Egypt (+20)</option>
                                        <option value="+45">Denmark (+45)</option>
                                        <option value="+31">Netherlands (+31)</option>
                                        <!-- Add more countries as needed -->
                                    </datalist>
                                    @error("country_code")
                              <strong>
                                {{$message}}
                              </strong>
                            @enderror
                                </div>
                            <div style="display: flex; flex-direction: column; width: 50%">
                                <label id="label-field-9">  Enter Phone Number </label>
                            <input name="phone" id="field-4" required placeholder="e.g. 675667394" type="text">
                            @error("phone")
                              <strong>
                                {{$message}}
                              </strong>
                            @enderror
                            </div>
                        </div>
                    
                                
                    
                            <div class="form-group col-lg-12 col-md-12 " id="div-field-9">
                              <label id="label-field-9">  Password </label>
                          <input name="password" id="field-5" required placeholder="Enter Password" type="password">
                          @error("password")
                          <strong>
                            {{$message}}
                          </strong>
                        @enderror
                        </div>

                          <div class="form-group col-lg-12 col-md-12 " id="div-field-9">
                            <label id="label-field-9">  Confirm Password </label>
                        <input name="password_confirmation" id="field-6" required placeholder="Confirm Password" type="password">
                        @error("password_confirmation")
                        <strong>
                          {{$message}}
                        </strong>
                      @enderror
                    </div> 
                        
                        </div>
                        <div>
                          <p>
                            Already have an account? <a href="{{route('login')}}"  style="color: blue; text-decoration: underline;">Login</a>
                          </p>
                        </div>
                <div class="form-group col-lg-12 col-md-12 text-left">
                <input id="textforsubmitbtn" type="submit" class="theme-button" value="SIGNUP">
                </div>
            </form>
        </div>
        <style>
            .hideDiv {
                display: none;
            }
        </style></div>            
        
    </div>
                
        
    </div>
                
        
    </div>
                
        
    </section></div>
    
    
    <x-footer.footer/>
    
    
    </x-app>