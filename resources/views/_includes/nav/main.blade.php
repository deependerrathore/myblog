<nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">MY BLOG</a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>
                <div class="navbar-end">
                    @if(Auth::guest()) 
                        <a href="{{route('login')}}" class="navbar-item is-tab">Log In</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Join Us</a>
                    @else
                        <div class="navbar-item is-tab has-dropdown is-hoverable">
                            <a class="navbar-link">
                            Hey {{Auth::user()->name}} 
                            </a>
                        
                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                <span class="icon m-r-5"><i class="fa fa-fw fa-user"></i></span>
                                Profile
                            </a>
                            <a class="navbar-item">
                                <span class="icon m-r-5"><i class="fa fa-fw fa-bell"></i></span>
                                Notifications
                            </a>
                            <a class="navbar-item">
                                <span class="icon m-r-5"><i class="fa fa-fw fa-cog"></i></span>
                                Settings
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon m-r-5"><i class="fa fa-fw fa-sign-out"></i></span>
                                Logout
                            </a>
                            </div>
                    
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>