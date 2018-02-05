<div class="container">
    <div class="row">
        <div class="header-inner">
            <h1>
                <a href="{{url('/')}}">SII<span>N.</span>
                </a>
            </h1>
            <nav role="navigation">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{url('domaines')}}">Assureurs</a>
                    </li>
                    <li>
                        <a href="buy.html">Services</a>
                    </li>
                    <li class="call">
                        <a href="tel://123456789">
                            <i class="icon-phone"></i> +225 57947428
                        </a>
                    </li>
                    <!-- <li class="cta"><a href="contact.html">Nous contacter</a></li> -->

                    @guest
                        <li class="cta with-arrow"><a href="{{ route('login') }}"><i class="icon icon-sign-in"></i> Login</a></li>
                        <li class="cta with-arrow"><a href="{{ route('register') }}"><i class="icon icon-user-plus"></i> Register</a></li>
                        @else
                            <li class="dropdown"  >
                                <a href="#" class="dropdown-toggle with-arrow" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   <i class="icon icon-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" style="background-color:green ;">
                                    <li >
                                        <br>
                                        <a href="#" class="with-arrow" style="color: black ;background-color: transparent">
                                             profil</i>
                                        </a>
                                        <hr>
                                        <a href="{{ route('logout') }} " class="with-arrow" style="color: black ;background-color: transparent"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="icon icon-sign-out"></i> Se deconnecter
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest



                </ul>
            </nav>
        </div>
    </div>
</div>