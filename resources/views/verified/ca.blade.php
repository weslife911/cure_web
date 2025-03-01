<x-app title="CA">
                    
                            
                            
                
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
<div id="ca" class="page wb-page">
                                    <style id="sectionStyle-10946059">
    #section-10946059:before {
    
    }
</style><section id="section-10946059" class="
            widget-section sec-padding-xl  project-section ui-droppable    theme-dark-color-11                 " style=""><div class="container boxWidget">
                                <div class="row centered-row ">
                                <div class="col-lg-8 col-md-8 col-sm-10 centered-col ">
                                <div class="richTextWidget  ">
<h1 style="color: white;">CAs</h1><p style="color: white;">Download your CAs here for revision.</p></div>            

</div>
        

</div>
        

</div>
        

</section>

<style id="sectionStyle-10946064">
    #section-10946064:before {
    
}
</style>
    <section id="section-10946064" class="widget-section sec-padding-xl ui-droppable theme-light-color-1" style="">


            
        <div class="container" style="text-align: center;background: white;padding: 40px;border-radius: 12px;box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);max-width: 500px;width: 100%; ">
            <h2 style="color: #333;font-size: 24px;margin-bottom: 20px;">
                Download Files
            </h2>
            <ul class="file-list" style="list-style: none;padding: 0;">
                @foreach ($files as $file)
                    
                
                <li style="background: #ffffff;padding: 15px 20px;margin: 10px 0;border-radius: 8px;display: flex;justify-content: space-between;align-items: center;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);transition: all 0.3s ease-in-out;">
                    <span class="file-name" style="font-size: 16px;font-weight: 500;color: #555;">CA {{$loop->iteration}}</span>
                    <a href="{{$file}}" class="download-btn" download style="padding: 10px 18px;font-size: 14px;color: white;background-color: #007bff;text-decoration: none;border-radius: 6px;transition: background 0.3s;">Download</a>
                </li>

                @endforeach

                
                    <span class="file-name">
                        <a href="{{$payment_url}}" style="color: blue; text-decoration:underline">
                            {{$message}}
                        </a>
                    </span>
                
            </ul>
        </div>
            

    </section>

</div>

<style>
    .file-list li:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .download-btn:hover {
            background-color: #0056b3;
        }
</style>

    <x-footer.footer/>



    </x-app>