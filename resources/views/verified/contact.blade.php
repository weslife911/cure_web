<x-app title="CONTACT">

                                                                                  
        
                    
                            
                            
                
    <span id="logoTextWrap" style="">
</span>
</a>
</div>            
<div class="navbar navbar-default navbar-static-top ">
<div class="navbar-header" id="10942813" compid="10942813" pageid="0" component-data="{}">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>            
    
<x-header.header/>


</div>


<div class="container header-image-text"></div>
</header>
<div id="contact" class="page wb-page">



<section id="section-10942796" class="
breadcrumb-section dark sec-padding-lg                 " style="background-image: url(/images/bg/group_4.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;"><div class="container boxWidget">
<div class="col-lg-6 ">
<div class="richTextWidget title-heading ">
<h1>Get in Touch</h1></div>            

</div>


</div>


</section><section id="section-10942800" class="
widget-section widget-section-11-1 pt-0                 "><div class="container boxWidget">
<div class="row ">
<div class="col-sm-8 col-sm-push-2 container-shadow ">
<div class="item ">
<div class="default-form block-form half-col-input ">
<div class="richTextWidget block-title ">
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
<h6>Send us a Message</h6><p>Contact us today to learn more about our programs and how we can help prepare your child for the future.</p></div>            
<div class="richTextWidget  ">
<p style="text-align:center;    font-weight: 700;"><span style="color:black;margin: 0px 15px;" class="fa">&#61463;</span><a style="color:black;text-decoration: none;   ">Regular Timings :  8:00 a.m to 5:00 p.m</a></p></div>            
<div class="richTextWidget  ">
<p style="text-align:center;    font-weight: 700;"><span style="margin: 0px 15px;" class="fa">&#61505;</span><a href="#">St. Louis, Mile 3 Nkwen</a></p></div>            
<div class="ContactFormWidget  ">


                                                        



<form method="post" action="{{route('send.email')}}">

@csrf

<div class="alert alert-success" style="display: none;" id="email_sent">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
</div>
<div>
<label id="labelformessage" class="">Message:</label>
<textarea rows="6" name="message" required placeholder="&#61504; Message"></textarea><div></div>
<input type="submit" class="button theme-button" id="textforsubmitbtn" value="Submit">
</form>



</div>




</div>


</div>


</div>


</div>


</div>


</section></div>


<x-footer.footer/>



</x-app>