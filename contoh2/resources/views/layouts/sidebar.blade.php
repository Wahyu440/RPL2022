{{-- @include('layouts.app') --}}
<div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/admin">
          <i  style="color:#411FCC;" class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <!-- <li class="nav-item ">
      <a class="nav-link" href="#">
          {{-- <i class="material-icons">content_paste</i> --}}
          <p>Bookings</p>
        </a>
      </li> -->
      <li class="nav-item ">
        <a class="nav-link" href="{{route('bus.index')}}">
          <i class="material-icons" style="color:#411FCC;">library_books</i>
          <p>Buses</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('bus-schedule.index')}}">
            <i style="color:#411FCC;" class="material-icons">content_paste</i>
            <p>Bus Schedules</p>
          </a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="{{route('station.index')}}">
          <i style="color:#411FCC;" class="material-icons">library_books</i>
          <p>Region</p>
        </a>
      </li>
      <!-- <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.register') }}">
          {{-- <i class="material-icons">person</i> --}}
          <p>Register New Admin</p>
        </a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('admin.logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
         <i style="color:#411FCC;" class="material-icons">library_books</i>
        </a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="get" style="display: none;">
            @csrf
        </form>
    </li>
    </ul>
  </div>