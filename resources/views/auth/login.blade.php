<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title></title>
    @vite('resources/sass/app.scss')
</head>

<body class="py-5 bg-primary">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center border-none">
            <div class="card text-center" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="mb-5 mt-3">Employee Data Master</h5>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3 px-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3 px-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <hr class="mb-5">
                        <div class="row mt-4">
                            <div class="col-md-12 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>