<x-app title="RESULTS">      
                            
    <script src="/js/jquery_slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>                         
                
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
<h1 style="color: white;">Results</h1><p style="color: white;">Download your CAs results here.</p></div>            

</div>
        

</div>
        

</div>
        

</section>

<style id="sectionStyle-10946064">
    #section-10946064:before {
    
}
</style>

    <div class="container mt-5" style="margin-top: 10px;">

        <div style="display: flex; justify-content:space-around; margin-top:30px;">
            <div>
                <p>
                    NAME: {{strtoupper(Auth::user()->name)}}
                </p>
                <p>
                    FIELD: {{Auth::user()->field_of_study}}
                </p>
            </div>
            <div>
                <p>
                    THE CURE FOUNDATION
                </p>
                <p>
                    Printed Date: {{date("d M, Y")}}
                </p>
            </div>
        </div>
        
        <div style="display: flex; justify-content:center;">
            <p>
                <img src="https://iili.io/32fZHiu.png" alt="THE CURE FOUNDATION" width="100px">
            </p>
        </div>
        
        <h2 class="mb-4">CA Results</h2>
        
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Subject</th>
                    <th>Score</th>
                </tr>
            </thead>
            
            <tbody>
                @forelse($results as $result)

                @if ($result->user_id == Auth::user()->id)
                <tr>
                    <td>
                        {{$result->subject->subject}}
                    </td>
                    <td>
                        {{$result->score}}
                    </td>
                </tr>
                @endif

                @empty

                <h2 class="mb-4" style="padding: 30px;">Results will soon be available</h2>

                @endforelse
            </tbody>
        </table>

        <a href="{{route('ca.download')}}" class="btn btn-primary" style="color: #fff; margin-bottom: 30px">Download</a>
    </div>
    
<x-footer.footer/>

</x-app>