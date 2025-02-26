

<x-app title="ACTIVITIES">

<x-header.header/>


<div class="container header-image-text"></div>
</header>
<div id="activities" class="page wb-page">
                                        <style id="sectionStyle-13314460">
        #section-13314460:before {
         background-color:#1b1e25;opacity:0.3;content:""; position:absolute; top:0%; display:block; left:0%; right:0%; bottom:0%; width:100%; height:100%;
        }
    </style>
    <section id="section-10942673" class="
    wb-heroHeader dark                 " style="background-image: url(/images/bg/group_17.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;"><div class="wb-heroHeader-wrapper ">
                        <div class="richTextWidget wb-heroHeader-content ">
<h2 style=" margin-bottom:10px;" class="main-heading">ACTIVITIES</h2> <h6 style="text-transform: capitalize;">Here, view the activities of <strong style="color: #fff;">THE CURE FOUNDATION</strong> through a collection of images showcasing their initiatives, events, and programs designed to support Advanced Level students in achieving academic excellence and preparing for concourse exams.</h6>
</div>            

</div>


</section>

<section id="section-13314464" class="
                widget-section sec-padding-xl                 "><div class="container boxWidget">
                                    <div class="row  ">
                                    <div class="grid wow fadeInLeft">



            <ul class="imageListsWidget imgs-gallery borderGallery ">
                @foreach ($paginatedItems as $image)
                    
                
                <li class="js_image_gallary">
                    <figure class="effect-milo"><img id="image1" class="lazyload" src="{{$image}}" width="374" height="234">
                        <figcaption class="">
                            
                        </figcaption>
                    </figure>
                </li>

                @endforeach
                    </ul>
                </div>

          {{ $paginatedItems->links() }}  
    
</div>
            
    
</div>



            
    
</section></div>


<x-footer.footer/>

</x-app>

<style>
    /* body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    } */
    .pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .arrow {
        cursor: pointer;
        padding: 10px;
        border: none;
        border-radius: 5px;
        user-select: none;
        background-color: blue;
        color: white;
    }
    .arrow:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>