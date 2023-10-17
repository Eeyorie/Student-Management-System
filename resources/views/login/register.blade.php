{{-- //resources/views/register.blade.php --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <style>
        body {
          background-image: url('https://img.freepik.com/free-vector/dark-polygonal-background_1409-878.jpg?w=1380&t=st=1697544418~exp=1697545018~hmac=e39efe3766894e5be7299b813d60f6f8d7f53fb2518f2cb2c0e609980d31a3c7');
          background-size: cover; /* Adjust this to control the image sizing */
          background-repeat: no-repeat;
        }
      </style>
</head>
<body>
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">@lang('public.Register')</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">@lang('public.Name')</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('public.Email address')</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">@lang('public.Password')</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">@lang('public.Register')</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('login') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn">@lang('public.Back')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
