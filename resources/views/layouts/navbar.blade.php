{{-- //resources/views/layouts/navbar.blade.php --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}">@lang('public.Home')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">User Management</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('role.index') }}">Roles</a>
                        <a class="dropdown-item" href="{{ route('employee.index') }}">Employee</a>
                        <a class="dropdown-item" href="{{ route('office.index') }}">Office</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('employee.index') }}">@lang('public.Employee')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('role.index') }}"></a>
                </li> --}}
            </ul>
            <!-- <div class="nav-item">
                <a class="nav-link" > @lang('public.Welcome'), {{ Auth::user()->name }}</a>
            </div> -->
            <form action="{{ route('logout') }}" method="POST" class="d-flex" style="float: right;" >
                @csrf
                @method('DELETE')
                <ul class="navbar-nav ml-auto flex-nowrap">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">@lang('public.Welcome'), {{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('office.index') }}">Change Password</a>
                            <Button class="dropdown-item" type="submit">@lang('public.Logout')</button>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>
