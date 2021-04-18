<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::segment(1) ==''?'active':''}}"><a href="{{url('/')}}">All School</a></li>
                    <li class="{{ Request::segment(1) =='by_name'?'active':''}}"><a href="{{url('/by_name')}}">Search By Name</a></li>
                    <li class="{{ Request::segment(1) =='by_zip'?'active':''}}"><a href="{{url('/by_zip')}}">Search By Zipcode</a></li>
                </ul>
            </div>

        </div>
    </div>
</header>