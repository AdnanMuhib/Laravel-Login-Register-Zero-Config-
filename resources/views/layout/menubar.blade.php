<div class="container-fluid">
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><!-- <img src="images/logo.png" width="50" height="50" class="img img-responsive"> --></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/" class="">Home</a></li>

                        </ul>
                       <!--  <ul class="nav navbar-nav pull-right">
                                <li><a href="#">Welcome User</a></li>
                                <li class=""><a href="#">Logout</a></li>
                        </ul> -->
                         <ul class="nav navbar-nav pull-right">
                            @if(Auth::check())
                            <li class="nav-link ml-auto"><a href="#" class="">{{Auth::user()->name}}</a></li>
                            <li><a href="/logout">Logout</a></li>
                              
                            @endif
                            @if(! Auth::check())
                              <li><a href="/login">Login</a></li>
                                <li class="active" ><a href="/register" style="background-color: #ea4707;">Register</a></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>