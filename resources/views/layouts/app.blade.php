
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.navbar.css">
    <title></title>
</head>

<!--Navbar-->
<body>
    <header>
        <div class="logo">The Noble Quran</div>
        <nav>
            <ul class="nav__links">
                <li><a href="#">Surah</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <a class="btn-login" href="login"><button>Login</button></a>
    </header>
</body>
</html>

@yield('content');