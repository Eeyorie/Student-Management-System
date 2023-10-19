{{-- //resources/views/layouts/navbar.blade.php --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <img src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg?w=826&t=st=1697546529~exp=1697547129~hmac=93376d06edca82cbb1937af986df221e70813f985e73d79fb846fd199d99539d" style="height: 40px;"  alt="...">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">User Management</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('role.index') }}">Roles</a>
                        <a class="dropdown-item" href="{{ route('employee.index') }}">Employee</a>
                        <a class="dropdown-item" href="{{ route('office.index') }}">Office</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">System Setup</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('role.index') }}">Test</a>
                        <a class="dropdown-item" href="{{ route('employee.index') }}">Test</a>
                        <a class="dropdown-item" href="{{ route('office.index') }}">Test</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Administrator</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('student.index') }}">Student Management</a>
                        <a class="dropdown-item" href="{{ route('course.index') }}">Course Management</a>
                        <a class="dropdown-item" href="{{ route('faculty.index') }}">Faculty Management</a>
                        <a class="dropdown-item" href="{{ route('enrollment.index') }}">Enrollment Management</a>
                        <a class="dropdown-item" href="{{ route('employee.index') }}">Report</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Student</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('student.index') }}">Student Registration Form</a>
                        <a class="dropdown-item" href="{{ route('employee.index') }}">Course Search and Enrollment</a>
                        <a class="dropdown-item" href="{{ route('office.index') }}">View Enrolled Courses</a>
                        <a class="dropdown-item" href="{{ route('student.index') }}">Profile Update</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Faculty</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('student.index') }}">View Courses Assigned</a>
                        <a class="dropdown-item" href="{{ route('employee.index') }}">Mark Attendance</a>
                        <a class="dropdown-item" href="{{ route('office.index') }}">Grade Assignments</a>
                        <a class="dropdown-item" href="{{ route('student.index') }}">Communication with Students</a>
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
                    <li>
                        <button type="button" class="btn btn-light position-relative">
                            <img src="https://cdn.icon-icons.com/icons2/2768/PNG/512/massage_icon_176650.png" style="height: 2rem;" class="img-fluid " alt="..."><span class="position-absolute translate-middle p-2 bg-danger border border-light rounded-circle">
                              <span class="visually-hidden">New alerts</span>
                            </span>
                          </button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"><img src="https://www.kindpng.com/picc/m/22-223965_no-profile-picture-icon-circle-member-icon-png.png" style="height: 2rem;" class="img-fluid " alt="..."> </a>
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
