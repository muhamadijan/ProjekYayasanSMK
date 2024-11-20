<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
        * {
            box-sizing: border-box;
            font-family: 'Poppins';
        }
        body {
            margin: 0;
            padding: 0;
        }
        .box {
            display: flex;
            background-color: white;
            align-items: center;
            justify-content: center;
            background: url('/assets/img/3.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
        .login-form {
            min-width: 250px;
            max-width: 400px;
            border-radius: 24px;
            padding: 15px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .login-form h1 {
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
        .login-form input[type="text"], .login-form input[type="password"], .login-form select {
            width: 100%;
            border: none;
            border-radius: 24px;
            font-size: 12px;
            background-color: gainsboro;
            padding: 10px;
            margin-top: 10px;
        }
        .login-form input[type="text"]:focus, .login-form input[type="password"]:focus, .login-form select:focus {
            border: 2px #21D4FD solid;
        }
        .login-form button {
            background-image: linear-gradient(19deg, #21D4FD 0%, #0099ff 100%);
            width: 100%;
            color: white;
            border: none;
            margin-top: 20px;
            padding: 10px;
            font-size: 12px;
            font-weight: bold;
            border-radius: 24px;
            cursor: pointer;
            transition: 0.25s;
        }
        .login-form button:hover {
            opacity: 0.8;
        }
        .invalid-feedback {
            display: block;
            color: red;
        }
        @media only screen and (max-width: 600px) {
            .login-form {
                width: 350px;
            }
            .font-login {
                font-size: 12px;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <div class="box">
        <form class="login-form" action="{{route('login')}}" method="POST">
            <center>
                <img src="{{asset('/assets/img/Logo_Yayasan.png')}}" alt="" class="img img-thumbnail border-0" width="200">
            </center>
            <h1 class="font-login">Yayasan Nurul Islam Affandiyyah</h1>
            @csrf
            <input type="text" name="email" placeholder="Email">
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
			<br>
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
         
            @error('level')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
