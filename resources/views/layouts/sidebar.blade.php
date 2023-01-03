{{-- @include('layouts.app') --}}
<div class="sidebar-wrapper">
    <ul style="color:#2986cc;" class="nav flex-column nav-pills mt-4">
      <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="/admin">
          <i  style="color:#ecd7ff;" class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('bus.index') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="{{route('bus.index')}}">
          <i class="material-icons" style="color:#ecd7ff;">airport_shuttle</i>
          <p>Buses</p>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('bus-schedule.index') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="{{route('bus-schedule.index')}}">
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
      <li class="nav-item {{ request()->routeIs('order.index') ? 'active' : '' }}">
        <a class="nav-link rounded-0 p-2" href="{{route('order.index')}}">
          <i style="color:#ecd7ff;" class="material-icons">check</i>
          <p>Validation</p>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link rounded-0 p-2" href="{{ route('admin.logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
         <i style="color:#ecd7ff;" class="material-icons">chevron_left</i>
        </a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="get" style="display: none;">
            @csrf
        </form>
    </li>
    </ul>
  </div>