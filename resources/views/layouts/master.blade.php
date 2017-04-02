
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NoteBook Application</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
  
           
            <div class="collapse navbar-toggleable-xs pull-xs-left" id="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">NoteBook Application</a>
            </div>
           
            <!-- Right Side Of Navbar -->
                <div  class="navholder dropdown pull-xs-right">
                    @if (Auth::guest())
                        <a style="color:white" href="{{ url('/login') }}">
                            Login
                        </a>
                        &nbsp;&nbsp;
                
                        <a style="color:white" href="{{ url('/register') }}">
                            Register
                        </a>
                    
                    @else
                    <a class=" navholder dropdown-toggle"  href="#" id="dropdown">
                        {{ (Auth::user()->name) }}
                        <span class="caret">
                        </span>
                    </a>
                    <div aria-labelledby="dropdown" >
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form action="{{ url('/logout') }}" id="logout-form" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>

                    @endif
                </div>
        </nav>
        <!-- /navbar -->

        @yield('content')
    </div>
    <!-- /container -->

    <script src="{{asset('css/main.css')}}"></script>
    <script src="{{asset('css/bootstrap.css')}}"></script>
</body>

</html>