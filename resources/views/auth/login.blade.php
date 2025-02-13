<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Capstone Project</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url("{{ asset('bg/bg1.jpeg') }}") no-repeat center center fixed;
            background-size: cover;
            padding: 0 10px;
        }

        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay */
        }

        .wrapper {
            width: 400px;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
        }

        h1 {
            font-size: 60px;
            margin-bottom: 20px;
            color: #fff;
        }

        .input-field {
        position: relative;
        border-bottom: 2px solid #ccc;
        margin: 25px 0; /* Increased margin for more spacing between fields */
    }

    .input-field input {
        width: 100%;
        height: 50px; /* Increased height for more padding inside the input */
        background: transparent;
        border: none;
        outline: none;
        font-size: 16px;
        color: #fff;
        padding: 0 10px; /* Added horizontal padding inside the input */
    }

    .input-field label {
        position: absolute;
        top: 50%;
        left: 10px; /* Adjusted for alignment with padding */
        transform: translateY(-50%);
        color: #fff;
        font-size: 16px;
        pointer-events: none;
        transition: 0.15s ease;
    }

    .input-field input:focus~label,
    .input-field input:valid~label {
        font-size: 0.8rem;
        top: 10px;
        transform: translateY(-120%);
    }

        .forget {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 25px 0;
            color: #fff;
        }

        #remember {
            accent-color: #fff;
        }

        .forget label {
            display: flex;
            align-items: center;
        }

        .forget label p {
            margin-left: 8px;
        }

        .wrapper a {
            color: #efefef;
            text-decoration: none;
        }

        .wrapper a:hover {
            text-decoration: underline;
        }

        button {
            background: white;
            color: black;
            font-weight: 600;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 20px;
            font-size: 16px;
            border: 2px solid transparent;
            transition: 0.3s ease;
        }

        button:hover {
            color: #fff;
            border-color: #fff;
            background: blue;
        }

        .register {
            text-align: center;
            margin-top: 30px;
            color: #fff;
        }

        .register a {
            color: #ff7c7c;
            text-decoration: underline;
        }

        .register a:hover {
            color: #ff4c4c;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>LOGIN</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

          <!-- Email Address -->
<div class="input-field">
    <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
    <label for="email">Enter your email</label>
    @if ($errors->has('email'))
        <span class="text-red-500 text-sm mt-2">{{ $errors->first('email') }}</span>
    @endif
</div>

<!-- Password -->
<div class="input-field">
    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
    <label for="password">Enter your password</label>
    @if ($errors->has('password'))
        <span class="text-red-500 text-sm mt-2">{{ $errors->first('password') }}</span>
    @endif
</div>



            {{-- <!-- Remember Me -->
            <div class="forget">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-white">Remember me</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-300" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div> --}}

            <!-- Submit Button -->
            <button type="submit" class="bg-white text-black font-semibold py-2 px-4 rounded-md mt-6 hover:bg-opacity-80 transition">
                Login
            </button>

            <!-- Register Link -->
            <div class="register mt-6">
                <p class="text-white">Don't have an account? <a href="{{ route('register') }}" class="underline text-indigo-400 hover:text-indigo-200">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
