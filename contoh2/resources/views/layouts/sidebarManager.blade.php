{{-- @include('layouts.app') --}}
<div class="sidebar-wrapper">
    <ul style="color:#2986cc;" class="nav flex-column nav-pills mt-4">
      <li class="nav-item {{ request()->routeIs('manager.dashboard') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="/manager">
          <i  style="color:#ecd7ff;" class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('busManager.index') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="{{route('busManager.index')}}">
          <i class="material-icons" style="color:#ecd7ff;">airport_shuttle</i>
          <p>Buses</p>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('bus-scheduleManager.index') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="{{route('bus-scheduleManager.index')}}">
            <i style="color:#ecd7ff;" class="material-icons">schedule</i>
            <p>Bus Schedules</p>
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs('station.index') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="{{route('station.index')}}">
          <i style="color:#ecd7ff;" class="material-icons">pin_drop</i>
          <p>Region</p>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link rounded-0 p-2" href="{{ route('manager.logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
         <i style="color:#ecd7ff;" class="material-icons">chevron_left</i>
        </a>
        <form id="logout-form" action="{{ route('manager.logout') }}" method="get" style="display: none;">
            @csrf
        </form>
    </li>
    </ul>
  </div>