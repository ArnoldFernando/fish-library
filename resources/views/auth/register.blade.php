<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to Capstone Project</title>
    <style>
        /* General styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('bg/bg2.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0); /* Completely transparent */
            padding: 20px;
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3); /* Softer shadow */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Light transparent border */
            max-width: 400px;
            width: 100%;
            backdrop-filter: blur(15px); /* Stronger blur effect for the frosted glass effect */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size:60px;
            color: white;
        }

        /* Form styles */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: white
        }

        .input-field {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .input-field:focus {
            border-color: #4a90e2;
            outline: none;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        /* Button and links */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            
        }
        .form-actions a{
         color: white;
            
        }


        .login-link {
            font-size: 14px;
            color: #555;
            text-decoration: none;
            transition: color 0.3s;
        }

        .login-link:hover {
            color: #333;
        }

        .btn-primary {
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #357ab8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form method="POST" action="/register">
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="input-field" type="text" name="name" required autofocus>
                <p class="error-message" id="name-error"></p>
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" class="input-field" type="email" name="email" required>
                <p class="error-message" id="email-error"></p>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" class="input-field" type="password" name="password" required>
                <p class="error-message" id="password-error"></p>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" class="input-field" type="password" name="password_confirmation" required>
                <p class="error-message" id="password_confirmation-error"></p>
            </div>

            <div class="form-actions">
                <a class="login-link" href="/login">Already registered?</a>
                <button type="submit" class="btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
