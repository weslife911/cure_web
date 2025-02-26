<x-app title="PASSWORD RESET">

    <x-header.header/>
    
    
    </header>
    <div id="login" class="page wb-page">
                                            <style id="sectionStyle-10945347">
            #section-10945347:before {
             background-color:#1b1e25;opacity:0.4;content:""; position:absolute; top:0%; display:block; left:0%; right:0%; bottom:0%; width:100%; height:100%;
            }
        </style><section id="section-10945347" class="
                    widget-section dynamic-form-widget sec-padding-xl  theme-dark-color-11                 " style="background:#1b1e25 url(/images/bg/group_10.jpg)  no-repeat center center;position: relative; overflow: hidden; background-size: cover;margin-top:0px"><div class="container boxWidget">
                                        <div class="row centered-row ">
                                        <div class="richTextWidget block-title ">
         <h4 style="color: #fff;">Reset Password</h4><p style="color: #fff;">Enter email address to reset password.</p></div>            
                                    <div class="col-lg-8 centered-col ">
                                        <div class="DynamicFormWidget  ">
    
                    
    
    
                    
        <div class="form-box">
            <form class="form-area" method="post" action="{{route('password.email')}}">
              @csrf
                            <div id="controlsDiv">

                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                          
                              <div class="form-group col-lg-12 col-md-12 " id="div-field-9">

                                <label id="label-field-9">  Email Address </label>
                            <input name="email" id="field-1" required placeholder="Enter Email Address" type="email">
                            @error("email")
                            <strong>
                              {{$message}}
                            </strong>
                          @enderror
                          </div>
                                
                    
                        
                        </div>
                <div class="form-group col-lg-12 col-md-12 text-left">
                <input id="textforsubmitbtn" type="submit" class="theme-button" value="SUBMIT">
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