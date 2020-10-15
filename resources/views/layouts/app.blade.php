<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 mt-5">

                @yield('content')

            </div>
        </div>
    </main>
</body>

</html>
