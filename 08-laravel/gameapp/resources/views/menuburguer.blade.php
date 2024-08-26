@guest 
<nav class="nav">
    <menu>
        <a href="{{url('login')}}"><img src="images/login-ico.png" alt="Login" class="menu-items-img">
            <p class="letter">Login</p>
        </a>
        <a href="{{url('register')}}"><img src="images/login-ico.png" alt="Register" class="menu-items-img">
            <p class="letter">Register</p>
        </a>
        <a href="{{url('catalogue')}}"><img src="images/login-ico.png" alt="Catalogue" class="menu-items-img">
            <p class="letter">Catalogue</p>
        </a>
    </menu>
</nav>
@endguest

@auth
<nav class="nav">
            
    <figure class="avatar" >
        <img  src="./images/photo.png" alt="Photo">
    </figure>
  
    <h3>{{Auth::user()->fullname}}</h3>
    
    <menu>
        <a href="{{url('my-profile')}}">
            <img class="icons" src="images/ico-profile.svg" alt="My Profile">
            <span class="main-font">My Profile</span>
        </a>
        <a href="{{url('dasboard')}}">
            <img class="icons" src="images/ico-dashboard.svg" alt="Dashboard">
            <span class="main-font">Dashboard</span>
        </a>
        <a href="javascript:;" onclick="logout.submit();">
            <img class="icons" src="images/ico-logout.svg" alt="Log Out">
            <span class="main-font">Log Out</span>
        </a>
        <form id="logout" action="{{ route('logout')}}" method="post">
        @csrf
    </form>
    </menu>
      
</nav>
@endauth


