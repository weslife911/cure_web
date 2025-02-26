<x-app title="PROFILE">

  <x-header.header/>
    
    
    </header>
    <div id="login" class="page wb-page">
                                            <style id="sectionStyle-10945347">
            #section-10945347:before {
             background-color:#1b1e25;opacity:0.4;content:""; position:absolute; top:0%; display:block; left:0%; right:0%; bottom:0%; width:100%; height:100%;
            }
        </style><section id="section-10945347" class="
                    widget-section dynamic-form-widget sec-padding-xl  theme-dark-color-11                 " style="background:#1b1e25 url(/images/bg/group_13.jpg)  no-repeat center center;position: relative; overflow: hidden; background-size: cover;margin-top:0px"><div class="container boxWidget">
                                        <div class="row centered-row ">
                                        <div class="richTextWidget block-title ">
         <h4 style="color: #fff;">Update your Profile</h4><p style="color: #fff;">Update your profile to reflect changes.</p></div>            
                                    <div class="col-lg-8 centered-col ">
                                        <div class="DynamicFormWidget  ">
    
                    
    
    
                    
        <div class="form-box">
            <form class="form-area" method="post" action="{{route('profile.update')}}">
                @csrf
                            <div id="controlsDiv">

                              <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>

                                <div class="form-group col-lg-12 col-md-12 " id="div-field-9">
                                    <label id="label-field-9">  Full Name </label>
                                <input name="name" id="field-1" required placeholder="Enter Full Name" value="{{Auth::user()->name}}" type="text">
                                @error("name")
                                <strong>
                                  {{$message}}
                                </strong>
                              @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 " id="div-field-9">
                                <select name="field_of_study" required>
                                    <option value="{{Auth::user()->field_of_study}}">{{Auth::user()->field_of_study}}</option>
                                    @if (Auth::user()->field_of_study === "Engineering")
                                    <option value="Medicine">Medicine</option>
                                    @else
                                    <option value="Engineering">Engineering</option>
                                    @endif
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
                                    <input list="country-codes" name="country_code" id="field-3" required placeholder="e.g +237" type="text" value="{{Auth::user()->country_code}}">
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
                            <input name="phone" id="field-4" required placeholder="e.g. 675667394" value="{{Auth::user()->phone}}" type="text">
                            @error("phone")
                              <strong>
                                {{$message}}
                              </strong>
                            @enderror
                            </div>
                        </div>
                    
                <div class="form-group col-lg-12 col-md-12 text-left">
                <input id="textforsubmitbtn" type="submit" class="theme-button" value="UPDATE">
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