

<nav class="navbar navbar-expand-lg bg-dark sticky-top" style="background-image: url('https://i.postimg.cc/Gm8nPjrc/background1crop.jpg'); background-repeat: no-repeat; background-size: 100% 100% ;">
    <a class="navbar-brand" style="font-size: x-large; font-family: Arial, Helvetica, sans-serif Bold; color:#ffff;" href="{{url('/home')}}">My Way</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"  >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/home') }}" style="font-size: medium; font-family: Arial, Helvetica, sans-serif Bold; color:#ffff; ">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/home/booking') }}" style="font-size: medium; font-family: Arial, Helvetica, sans-serif Bold; color:#ffff; ">Tickets </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.logout') }} " style="font-size: medium; font-family: Arial, Helvetica, sans-serif Bold; color:#ffff; ">Logout</a>
        </li>
      </ul>
    </div>
</nav>