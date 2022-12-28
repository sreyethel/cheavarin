<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('style/login-style.css') }}">
</head>
<style>


</style>

<body>
    <div class="m-t">
        <div class="form-control">
            <h2 id="logintitle">Login</h2>
            <hr>
            @if (Session::has('fail'))
            <div class="alert center">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <span >{{ Session::get('fail') }}</span>
              </div>
            
        @endif
            
            <form action="{{ route('login-user') }}" method="POST">
                @csrf
                <div>
                    <label for="email">Email <span class="error-or-requird">*</span></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                    <span class="error-or-requird">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                    @if (Session::has('failEmail'))
                        <span class="error-or-requird">{{ Session::get('failEmail') }}</span>
                    @endif
                </div>
                <div>
                    <label for="password">Password <span class="error-or-requird">*</span></label> 
                    <input type="password" id="password" name="password" value="{{ old('password') }}">
                    <span class="error-or-requird">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                    @if (Session::has('failPassword'))
                    <span class="error-or-requird">{{ Session::get('failPassword') }}</span>
                @endif
                </div>

                <button class="button" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
