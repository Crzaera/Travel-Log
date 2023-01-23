<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Travel Log</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <main class="form-signin" style="margin-top: 100px">
                    <form action="/register" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                        
                        <div class="form-floating mt-1">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name"
                            placeholder="Full Name" value="{{old('name')}}" required>
                            <label for="floatingInput">Full Name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-1">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username"
                            placeholder="Username" value="{{old('username')}}" required>
                            <label for="floatingInput">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-1">
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
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingInput" name="password"
                            placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Register</button>
                    </form>
                    <small class="d-block mt-3">Already registered? <a href="/login">Login</a></small>
                </main>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>