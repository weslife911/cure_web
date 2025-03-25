
    <div class="container boxWidget">    
        <div class="navbar navbar-default navbar-static-top ">

            <div class="navWidget navbar-collapse collapse">

                <ul class="parent-nav-ul nav navbar-nav navbar-right"><li class="dropdown">
                    @guest
                        <a href="{{route('guest.home')}}" pageslug="home" linktype="Page" class="siteNavLink">
                            HOME
                                                    </a>
                                            </li>
                                                          
          
                                                <li class="dropdown">
                        <a href="{{route('about')}}" pageslug="about" linktype="Page" class="siteNavLink">
                            ABOUT
                                                    </a>
                                            </li>
                                                          
          
                                                <li class="dropdown">
                        <a href="{{route('services')}}" pageslug="services" linktype="Page" class="siteNavLink">
                            SERVICES
                                                    </a>
                                            </li>
                                                          
          
                        <li class="dropdown">
                            <a href="{{route('activities')}}" pageslug="services" linktype="Page" class="siteNavLink">
                                ACTIVITIES
                                                        </a>
                                                </li>

                        <li class="dropdown">
                            <a href="{{route('testimonials')}}" pageslug="services" linktype="Page" class="siteNavLink">
                                TESTIMONIALS
                                                        </a>
                                                </li>
                                                          
          
                                            
                                                
                                                <li class="dropdown">
                        <a href="{{route('login')}}" pageslug="login" linktype="Page" class="siteNavLink">
                            Login
                                                    </a>
                                            </li>
                                            <li>
                                            <a href="{{route('register')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                Register
                                                                        </a>
                                                                </li>

                                            @else

                                            <li>
                                                <a href="{{route('home')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    HOME
                                                                            </a>
                                                                    </li>

                                            @if (Auth::user()->is_admin === true)
                                            <li>
                                                <a href="{{route('admin.dashboard')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    DASHBOARD
                                                                            </a>
                                                                    </li>
                                            @endif

                                                <li class="dropdown">
                                                    <a href="{{route('contact')}}" pageslug="contact" linktype="Page" class="siteNavLink">
                                                        CONTACT
                                                                                </a>
                                                                        </li>

                                            <li>
                                                <a href="{{route('gce')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    GCE
                                                                            </a>
                                                                    </li>


                                            <li>
                                                <a href="{{route('ca')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    CA
                                                                            </a>
                                                                    </li>

                                            <li>
                                                <a href="{{route('revision')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    REVISION
                                                                            </a>
                                                                    </li>

                                            <li>
                                                <a href="{{route('notes')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    NOTES
                                                                            </a>
                                                                    </li>

                                                

                                            <li>
                                                <a href="{{route('student.profile')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    PROFILE
                                                                            </a>
                                                                    </li>

                                            <li>
                                                <a href="{{route('student.results')}}" pageslug="login" linktype="Page" class="siteNavLink">
                                                    RESULTS
                                                                            </a>
                                                                    </li>

                                            

                                            <form action="{{route('logout')}}" method="post">
                                                @csrf
                                                <button style="border: none; background-color:red;
                                                color: white; border-radius: 3px; text-transform: uppercase">
                                                    Logout
                                                </button>
                                            </form>

                                            @endguest
                                        </ul>
                                    </div>            
    
</div>
    </div>