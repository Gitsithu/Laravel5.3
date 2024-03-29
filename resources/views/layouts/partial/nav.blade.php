<div id="main-menu" class="main-menu collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="/backend/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
        </li>

        <?php 
        $loginUser = Auth::user();

        if($loginUser->role_id == 1){
        ?>
        <h3 class="menu-title">General Setup</h3><!-- /.menu-title -->
          
        <li class="menu-item">
                <a href="/backend/township" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Township</a>
            </li> 
    
        <li class="menu-item">
            <a href="/backend/course" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Course</a>
            <!-- <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-puzzle-piece"></i><a href="/backend/course">Course List</a></li>
                <li><i class="fa fa-puzzle-piece"></i><a href="/backend/course/create">Course Create</a></li>
            </ul> -->
        </li> 
        
        <li class="menu-item">
            <a href="/backend/registration" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Course Registration</a>
        </li> 
        <li class="menu-item">
                <a href="/backend/course_type" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Course type Registration</a>
            </li> 
    
        <li class="menu-item">
            <a href="/backend/user" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>User</a>
        </li> 

        <h3 class="menu-title">Reports</h3><!-- /.menu-title -->

        <li class="menu-item">
            <a href="/backend/report" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Course Registration</a>
        </li> 

        <?php 
            }
            else{
                ?>

        <li class="menu-item">
            <a href="/backend/registration" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i> Registration History</a>
        </li>

        <li class="menu-item">
            <a href="/backend/registration/create" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>New Registration</a>
        </li>

        <li class="menu-item">
            <a href="/backend/course" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Course</a>
        </li>

        <?php
            }
        ?>

        <h3 class="menu-title">General Testing</h3><!-- /.menu-title -->

        <li class="menu-item">
            <a href="/email" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Mail Testing</a>
        </li> 

        <li class="menu-item">
            <a href="/ajax" class="dropdown-toggle"> <i class="menu-icon fa fa-laptop"></i>Ajax Testing</a>
        </li> 
    </ul>
</div><!-- /.navbar-collapse -->
</nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

<div class="header-menu">

<div class="col-sm-7">
<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
<div class="header-left">
    <button class="search-trigger"><i class="fa fa-search"></i></button>
    <div class="form-inline">
        <form class="search-form">
            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
        </form>
    </div>

    <div class="dropdown for-notification">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-bell"></i>
        <span class="count bg-danger">5</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="notification">
        <p class="red">You have 3 Notification</p>
        <a class="dropdown-item media bg-flat-color-1" href="/#">
            <i class="fa fa-check"></i>
            <p>Server #1 overloaded.</p>
        </a>
        <a class="dropdown-item media bg-flat-color-4" href="/#">
            <i class="fa fa-info"></i>
            <p>Server #2 overloaded.</p>
        </a>
        <a class="dropdown-item media bg-flat-color-5" href="/#">
            <i class="fa fa-warning"></i>
            <p>Server #3 overloaded.</p>
        </a>
        </div>
    </div>

    <div class="dropdown for-message">
        <button class="btn btn-secondary dropdown-toggle" type="button"
            id="message"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="ti-email"></i>
        <span class="count bg-primary">9</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="message">
        <p class="red">You have 4 Mails</p>
        <a class="dropdown-item media bg-flat-color-1" href="/#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
            <span class="message media-body">
                <span class="name float-left">Jonathan Smith</span>
                <span class="time float-right">Just now</span>
                    <p>Hello, this is an example msg</p>
            </span>
        </a>
        <a class="dropdown-item media bg-flat-color-4" href="/#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
            <span class="message media-body">
                <span class="name float-left">Jack Sanders</span>
                <span class="time float-right">5 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
            </span>
        </a>
        <a class="dropdown-item media bg-flat-color-5" href="/#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
            <span class="message media-body">
                <span class="name float-left">Cheryl Wheeler</span>
                <span class="time float-right">10 minutes ago</span>
                    <p>Hello, this is an example msg</p>
            </span>
        </a>
        <a class="dropdown-item media bg-flat-color-3" href="/#">
            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
            <span class="message media-body">
                <span class="name float-left">Rachel Santos</span>
                <span class="time float-right">15 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
            </span>
        </a>
        </div>
    </div>
</div>
</div>

<div class="col-sm-5">
<div class="user-area dropdown float-right">
    <a href="/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
    </a>

    <div class="user-menu dropdown-menu">
            <a class="nav-link" href="/#"><i class="fa fa- user"></i>My Profile</a>

            <a class="nav-link" href="/#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

            <a class="nav-link" href="/#"><i class="fa fa -cog"></i>Settings</a>

            <a class="nav-link"  href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
    </div>
</div>

<div class="language-select dropdown" id="language-select">
    <a class="dropdown-toggle" href="/#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
        <i class="flag-icon flag-icon-us"></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="language" >
        <div class="dropdown-item">
            <span class="flag-icon flag-icon-fr"></span>
        </div>
        <div class="dropdown-item">
            <i class="flag-icon flag-icon-es"></i>
        </div>
        <div class="dropdown-item">
            <i class="flag-icon flag-icon-us"></i>
        </div>
        <div class="dropdown-item">
            <i class="flag-icon flag-icon-it"></i>
        </div>
    </div>
</div>

</div>
</div>

</header><!-- /header -->
<!-- Header-->