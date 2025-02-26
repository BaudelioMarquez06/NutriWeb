<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/fondoIcono.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/379358f3a7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>NutriAna</title>
</head>

<style>
    .registro {
        margin: 0;
        height: 100%;
        width: 100%;
        margin-left: 50px;
        background-color: #ecf0f3;
        overflow: hidden;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #555;
    }
    .Login-div {
        width: 430px;
        height: 700px;
        padding: 60px 35px 35px 35px;
        border-radius: 40px;
        background-color: #ecf0f3;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
    }
    .logo {
        background: black;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0px 0px 2px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaaf,
        -8px -8px 15px #fff;
    }
    .title {
        text-align: center;
        font-size: 28px;
        padding-top: 24px;
        letter-spacing: 0.5px;
    }
    .sub-title {
        text-align: center;
        font-size: 15px;
        padding-top: 7px;
        letter-spacing: 3px;
    }
    .fields{
        width: 100%;
        padding: 75px 5px 5px 5px;
    }
    .fields input {
        border: none;
        outline: none;
        background: none;
        font-size: 18px;
        color: #555;
        padding: 20px 10px 20px 5px;
    }
    .username, .password {
        margin-bottom: 30px;
        border-radius: 25px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }
    .fields i{
        margin: 0 10px -3px 25px;
    }
    .signin-button {
        outline: none;
        border: none;
        cursor: pointer;
        width: 100%;
        height: 60px;
        border-radius: 30px;
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        text-align: center;
        background-color: #1f83f2;
        font-family: 'Times New Roman', sans-serif;
        text-transform: uppercase;
        box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #fff;
        transition: all .5s;
    }
    .signin-button:hover {
        background: linear-gradient(rgb(0, 255, 170),#1f83f2);
    }
    .signin-button:active {
        background-color: linear-gradient(rgb(0, 255, 170),#053723);
    }
    .link {
        padding-top: 20px;
        text-align: center;
    }
    .link a {
        text-decoration: none;
        color: #aaa;
        font-size: 15px;
    }
</style>
<body>
    <div class="registro">
        <div class="Login-div">
            <div class="logo"></div>
            <div class="title">web Development</div>
            <div class="sub-title">Made easy!</div>
            <div class="fields">
                <div class="username">
                    <i class="fa-solid fa-user"></i>
                    <input type="username" class="user-input" placeholder="username">
                </div>
                <div class="password">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" class="pass-input" placeholder="password">
                </div>
            </div>
            <button class="signin-button">Login</button>
            <div class="link">
                <a href="#">Forgot password?</a> or <a href="#">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>