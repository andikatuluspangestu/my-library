<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My-Library | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="card m-5 text-center px-5 py-2">
        <div class="card-body">
            <h1 class="card-title">Selamat Datang di My-Library</h1>
            <p class="card-text">
                Silahkan untuk Login atau Sign Up (Register) terlebih dahulu untuk dapat masuk ke aplikasi.
            </p>

            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success">Sign Up</a>

        </div>
    </div>
</body>
</html>