<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.admin.header')

    <div class="container-fluid min-vh-100">
        <div class="row">
            <div class="col-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> fjaoidha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> fjaoiadgBHSFdha</a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>

    </div>

    @include('partials.admin.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/5e033dde00.js" crossorigin="anonymous"></script>
</body>

</html>