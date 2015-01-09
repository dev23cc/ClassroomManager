@if(Auth::guest())  @include('layouts.navbar-guest')
@endif
@if(Auth::check())
    @if(Auth::User()->isAdmin()) @include('layouts.navbar-admin')
    @endif
    @if(Auth::User()->isTeacher()) @include('layouts.navbar-teacher')
    @endif
@endif
