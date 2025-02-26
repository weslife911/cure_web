@props(["title" => ""])

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{{str_replace("_", "-", app()->getLocale())}}"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
                <title>{{str_replace('_', ' ', config("app.name", "THE CURE"))}} | {{$title}}</title>
	<meta charset="utf-8">
	<meta name="author" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="HOME">
	<meta name="keywords" content="HOME">
    <meta name="csrf-token" content="{{csrf_token()}}">


                
                    <meta name="twitter:card" content="summary_large_image" />
    


	<!-- Mobile Specific Metas
  ================================================== -->

                
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/lazysizes.min.js')}}"></script>
    <!-- WEBSITE JS -->
            
    
    <!-- PAGE JS -->
        <!-- CSS ================================================== -->

        <link rel="stylesheet" href="{{asset('css/combined.min.css')}}" type='text/css'>
        <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/lightbox.css')}}">
    


        <link id="theme" rel="stylesheet" href="{{asset('/css/default.css')}}"  type='text/css'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Lato:400,700,300,100" type='text/css'>
                	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="/images/logo/logo.png">
	<link rel="apple-touch-icon" href="/images/logo/logo.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/logo/logo.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/logo/logo.png">
        <style id="footerBefore">
            .footerBefore:before {
                 background-color:#262932;opacity:1;content:""; position:absolute; top:0%; display:block; left:0%; right:0%; bottom:0%; width:100%; height:100%;
            }
        </style>

</head>
<body>
    <header class="blockHeader wb-header logo_left " fixed="false"><div class="container boxWidget">
                                    <div class="logoWidget logo logoTextSettingClass     ">
        {{-- <a href="{{route('home')}}" title=""> --}}
                                                
                                            
        
                    
                            
                            
                
                                        <span id="logoTextWrap" style="">
                        {{-- <span class="websiteLogoName" style="color:#;font-family:Roboto;font-size:25px">THE CURE</span> --}}
                        {{-- <span class="websiteLogoSlogan" style="color:#fff;font-family:Roboto;font-size:10px"></span> --}}
                    {{-- </span>
                        </a> --}}
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

{{$slot}}
                                        


<script src="{{asset('/js/lightbox.js')}}"></script>

<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/wow.min.js')}}"></script>
<script src="{{asset('/js/webfont.js')}}"></script>
                            
    <script>
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.lazyClass = 'lazy';
        window.lazySizesConfig.srcAttr = 'data-original';

        wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100
        }
      );
      wow.init();
    </script>


<script custom-script-id="website_global" src="{{asset('/js/website_global.js')}}"></script>


</body>
</html>
