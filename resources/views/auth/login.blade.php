<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    @include('includes.css-plugin')
</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <form action="{{ route('login_process') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Sign In</h4>
                            <div class="form-group text-left">
                                <label class="form-label" for="Email">Email address</label>
                                <input type="email" name="email" class="form-control" id="Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-4 text-left">
                                <label class="form-label" for="Password">Password</label>
                                <input type="password" name="password" class="form-control" id="Password"
                                    placeholder="">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                                <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                            </div>
                            <button class="btn btn-block btn-primary mb-4" type="submit">Sign In</button>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html"
                                    class="f-w-400">Signup</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
@include('includes.js-plugin')

<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').change(function() {
            this.value = (Number(this.checked));
        });
    })
</script>

</body>

</html>
