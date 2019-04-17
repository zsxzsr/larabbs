<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <!--Branding Image-->
        <a class="navbar-brand" href="{{url('/')}}">
            laraBBS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--left side of navbar-->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!--right side of navbar-->
            <ul class="navbar-nav navbar-right">
                <!--Authentication Links-->
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登陆</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">注册</a></li>
            </ul>
        </div>

    </div>

</nav>