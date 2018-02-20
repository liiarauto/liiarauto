<div class="container">
    <div class="row">
        <div class="header-inner">
            <h1>
                <a href="{{url('/')}}">SII<span>N.</span>
                </a>
            </h1>
            <nav role="navigation">
                <ul>

                    <li class="call">
                        <a href="tel://123456789">
                            <i class="icon-phone"></i> +225 57947428
                        </a>
                    </li>

                    <li class="call">
                        <a href="{{url('login')}}">Qui sommes nous ?</a>
                    </li>

                    <!-- <li class="cta"><a href="contact.html">Nous contacter</a></li> -->
                    @guest
                        <li class="call">
                            <a href="{{url('login')}}">Mon espace</a>
                        </li>
                        @else
                                <li class="call">
                                    <a href="{{ route('dashboard',['id'=>'Auth::user()->id'])}}">
                                       <i class="icon icon-compass"></i> Tableau de bord
                                    </a>
                                </li>

                                <div class="btn-group show-on-hover drop" style="color: gray">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon icon-user"></i> Bienvenue, {{ Auth::user()->name }} {{ Auth::user()->id }}<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" >
                                        <li><a href="{{url('/')}}"  style="color: black ;background-color: transparent">Mon compte</a>
                                        </li>
                                        <li class="divider"  style="color: black ;background-color: transparent"></li>
                                        <li><a href="#"  style="color: black ;background-color: transparent">Mes contrats</a></li>
                                        <li><a href="#"  style="color: black ;background-color: transparent">Ma messagerie</a></li>
                                        <li class="divider"  style="color: black ;background-color: transparent"></li>
                                        <li>
                                            <a href="{{route('logout')}}"  style="color: black ;background-color: transparent"  onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Déconnexion
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                    </ul>
                                </div>
                            @endguest
                </ul>
            </nav>
        </div>
    </div>
</div>