<!DOCTYPE html>
<html>

<head>
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            width: 500px;
            margin: 0 auto;
        }
        
        .login-form,
        .register-form {
            width: 100%;
            margin-bottom: 10px;
        }
        
        h1 {
            text-align: center;
        }
        
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
        }
        
        button {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
<form action="login_form.php" method="post" class="" onsubmit="myFunction()">
    <div class="container">
        <h1>Login or Register</h1>
        <div class="login-form">
            <h2>Login</h2>
            <input type="text" id="username" placeholder="Username" name="username">
            <input type="password" id="password" placeholder="Password" name="password">
            <button type="submit">Login</button>
        </div>
        <div class="register-form">
            <h2>Register</h2>
            <input type="text" id="username" placeholder="Username" name="regusername">
            <input type="email" id="email" placeholder="Email" name="email">
            <input type="password" id="password" placeholder="Password" name="regpassword">
            <input type="password" id="confirm_password" placeholder="Confirm Password" name="confirmpassword">
            <button type="submit">Register</button>
        </div>
        <input type="submit" value="Submit" class="btn" name="send">
    </div>
    </form>
    <script></script>
</body>

</html>