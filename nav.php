<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <title>Ak</title>
</head>

<body>
    <div class="img">
        <img src="columbia.jpg" alt="Loading">
    </div>
    <div class="container">
        <nav>
            <ul>
                <li><a href="" class="item">Home</a></li>
                <li><a href="" class="item">about</a></li>
                <li><a href="" class="item">contact us</a></li>
                <li><a href="" class="item">Services</a></li>
            </ul>
            <div class="search">
                <input type="text" id="search" placeholder="Search">
            </div>
        </nav>
    </div>
    <div class="main">

        <form action="">
            <span>
                <h3>Signup</h3>
            </span>
            <br>
            <span id="user" class="font" class="name">User type*</span> <br>
            <div class="check">
                <span class="checkbox_mar">
                    <input type="checkbox" name="check" id="checkbox"><span> Student </span>
                </span>
                <input type="checkbox" name="check" id="checkbox2">
                <span> Department </span>
            </div>
            <br>
            <div>
                <label for="email">
                    <span class="font" class="name">Email*</span><br><input type="email" name="email" class="placeholder" id="email" placeholder="Enter your email">
                </label>
            </div>
            <div class="pass_margin">
                <label for="password">
                    <span class="font" class="name">Password*</span><br><input type="password" class="placeholder" name="pswd" id="pswd" placeholder="Enter your password">
                </label>
            </div>
            <div class="confirm">
                <label for="con">
                    Confirm <input type="checkbox" name="confirm" id="con">
                </label>
            </div>
            <div class="btn">
                <label for="submit">
                    <input type="button" class="btn1" value="Submit">
                </label>
                <label for="reset">
                    <input type="button" class="btn1" value="Reset">
                </label>
            </div>

        </form>
    </div>
</body>

</html>