<!DOCTYPE html>
<html>
<head>
    <title>Learnit | @yield('title')</title>


    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{!! asset('css/materialize.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! secure_asset('css/materialize.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/custom.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! secure_asset('css/custom.css') !!}" rel="stylesheet" type="text/css">

</head>
<body>
<header>
    <ul id="nav-drop" class="dropdown-content">
        <li><a href="dashboard">Home</a></li>
        <li class="divider"></li>
        <li><a href="logout">Logout</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper brown lighten-1">
            <a href="/" class="brand-logo">Learnit</a>
            <ul class="right">
                @if (! Auth::check())
                    <li><a href="register" >Signup</a></li>
                    <li><a href="login" >Login</a></li>
                @endif
                @if (Auth::check())
                    <li>
                        <a class="dropdown-button pad" href="#!" data-activates="nav-drop"><img width="40" height="40" class="circle" src="{{ Auth::user()->profile->avatar }}"></a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

@include('../partials/footer')

<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/materialize.min.js') !!}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#video_form").hide();
        $("#videoform").hide();
        $(".dropdown-button").dropdown();
        $("#video_form_toggle").click(function () {
            $("#video_form").show();
            $("#video_form_toggle").hide();
            $("#videos").hide();
        })
    });
</script>

</body>
</html>