

    @if(auth()->check())


  @if(auth()->user()->role === 'admin')
    @include('Admin.adminPanel')
@elseif(auth()->user()->role === 'employee')
    @include('Employee.employeePanel')
@else
    <h1>No role found</h1>
@endif
@else
<h1>Not authenticated</h1>
@endif

@hasSection('content')
     @yield('content', '<h3>No contents available<.h3>')


@else

<h1>Nothing found</h1>

@endif

 