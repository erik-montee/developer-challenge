<html>
    <head>
        <title>Bisk Developer Challange</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css"/>
        <link href="{!! asset('css/template.css') !!}" rel="stylesheet" type="text/css"/>
    </head>
<meta name="_token" content="{{ csrf_token() }}">
<div class='outline'>
<nav class="navbar navbar-toggleable-md navbar-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="{!! asset('images/logo-icon.png') !!}"><div class="navbar-brand-text">Startup</div></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">WORK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Sign In</button>
    </form>
  </div>
</nav>
@yield('content')
<footer class="footer  hidden-sm-down">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="footer-text-header">
                    Startup
                </div>
            </div>
            <div class="col">
                <div class="footer-text-header1">
                    About
                </div>
                <ul class="nav flex-column">
                    <li>
                      <a class="nav-link footer-link" href="#">About Us</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Blog</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Team</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Career</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <div class="footer-text-header1">
                    Work
                </div>
                <ul class="nav flex-column">
                    <li>
                      <a class="nav-link footer-link" href="#">Our Portfolio</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Latest Work</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Brands</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <div class="footer-text-header1">
                    Stuff
                </div>
                <ul class="nav flex-column">
                    <li>
                      <a class="nav-link footer-link" href="#">Privacy</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Terms</a>
                    </li>
                    <li>
                      <a class="nav-link footer-link" href="#">Advertise</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <div class="footer-text-header1">
                    Subscribe
                </div>
                <form id='subscribe_form'>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                     <input type="email" class="form-control" id="subscriberEmail" name="email" placeholder="E-mail" required>
                     <button id='subscribe' class="astext">
                     <div class="input-group-addon" style="border-radius:0px;color:white;font-size:20px;font-weight:700;background-color:gray">
                       <span style="color:white;">></span>
                     </div>
                     </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<footer class="small-footer">
    <div class="container hidden-md-up">
        <div class="row">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href=#>Startup</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=#>About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=#>Work</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=#>Stuff</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href=#>Subscribe</a>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
</footer>
</div>
<!-- Scripts -->
        <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/tether.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/validation.js') !!}"></script>
<script>
$('#subscribe').click( function( event ) {
    event.preventDefault();
    var Email = $("#subscriberEmail").val();
    if(validateEmail(Email)){
    $.ajax({
        url      : '/ajax/subscribe',
        type     : 'POST',
        dataType : "json",
        data     : { 
            "email" : Email },
        success  : function(data) {
                      alert ('You are now Subscribed with the email ' + data['test'] + '!');
                  }
        });
    } else {
      alert("Please enter a valid email");
    }
});
</script>
</html>
