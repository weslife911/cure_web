<x-app title="TESTIMONIALS"> 

     <x-header.header/>
         
         <div class="container header-image-text"></div>
     </header>
     <div id="home" class="page wb-page">
                                         
     
     
         <section id="section-10942673" class="
                         wb-heroHeader dark                 " style="background-image: url(https://iili.io/32fQ93v.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;"><div class="wb-heroHeader-wrapper ">
                                             <div class="richTextWidget wb-heroHeader-content ">
             <h2 style=" margin-bottom:10px;" class="main-heading">TESTIMONIALS</h2> <h6 style="text-transform: capitalize;">Get Inspiring experiences from students who passed through <strong>THE CURE</strong></h6>
         </div>            
         
     </div>
                 
         
     </section>

     <section id="section-10942699" class="
                     widget-section                 " style="    height: auto;"><div class="container boxWidget">
                                         <div class="row ">
                                         <div class="col-lg-12 ">
                                         <div class="richTextWidget head-content ">
           <h1>What Our Students have to say</h1></div>            
         
     </div>
                 
         
     </div>

     
                 
     <div class="row ">
          @foreach ($paginatedItems as $image)
               
          {{-- {{dd($image)}} --}}

          <div class="col-lg-4 col-md-4 col-sm-12 ">
               <div class="testimonial-card ">
                    <div class="iconWidget icon-star ">
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                    </div>            
                    <div class="richTextWidget testimonial-content ">
                         <p>
                              &ldquo;<?= $image["testimony"] ?>&rdquo;
                         </p>
                    </div>            
         
               </div>
                 
               <div class="testimonial-bio ">
                    <div class="imageWidget  ">
                         <img class="lazyload testimonial-bio-img" src="<?= $image["images"] ?>">
                    </div>
      
                    <div class="richTextWidget  ">
                         <p class="testimonial-bio-level">
                              <?= $image["occupation"] ?>
                         </p>
                         <h4 class="testimonial-bio-name">
                              <?= $image["name"] ?>
                         </h4>
                    </div>            
         
               </div>
                 
         
          </div>  
             
          @endforeach
         
     </div>

     
     <div style="display: flex; justify-content: center;">
          {{ $paginatedItems->links() }}        
     </div>     

     </section></div>
     
     
     <x-footer.footer/>
     
     
     </x-app>   
     
     