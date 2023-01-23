<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Travel Log</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <main class="form-signin" style="margin-top: 100px">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissable fade show" id="success-alert" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('loginError'))
                    <div class="alert alert-success alert-dismissable fade show" id="success-alert" role="alert">
                        {{session('loginError')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form action="/login" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email"
                            placeholder="name@example.com" value="{{old('email')}}" required>
                            <label for="floatingInput">Email Address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-1">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                             <label for="floatingPassword">Password</label>
                        </div>

                        <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                    <small class="d-block mt-3">Not registered? <a href="/register">Register Now!</a></small>
                </main>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>