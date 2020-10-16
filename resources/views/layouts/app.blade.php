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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 mt-5">
                    {{--  bottone dinamico a seconda di dove sei --}}
                    <a href="{{ url()->current() == route('products.index') ? route('products.create') : route('products.index') }}" class="btn btn-primary mb-5">
                        
                        {{ url()->current() == route('products.index') ? 'Crea Prodotto' : 'Catalogo Prodotti' }}
                    
                    </a>
                    @yield('content')

                </div>
            </div>
        </div>
    </main>
</body>

</html>
