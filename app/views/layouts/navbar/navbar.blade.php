@if(Auth::guest())  @include('layouts.navbar.navbar-guest')
@endif
@if(Auth::check())
    @if(Auth::User()->isAdmin()) @include('layouts.navbar.navbar-admin')
    @endif
    @if(Auth::User()->isTeacher()) @include('layouts.navbar.navbar-teacher')
    @endif
@endif
