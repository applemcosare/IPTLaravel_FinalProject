<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: 'Montserrat', sans-serif;
        }

        nav {
            background-color: #007bff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav h1 {
            color: #fff;
            font-size: 1.5rem;
            margin-right: 20px;
        }

        .nav-list {
            margin-right: 10px;
            text-align: center;
        }

        .nav-link {
            color: #fff;
            transition: color 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #0b0b0a;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            background-color: #28e483;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .navbar {
            height: 100px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .table {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            text-align: center;
        }

        .success {
            background-color: #8595e7;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .btn-primary {
            transition: transform 0.2s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
        }
        h1{
            text-align: center;
        }
        .row{
            justify-content: center;
            border: 1px solid black;
            border-radius: 10px;
            background-color: rgb(240, 221, 136);
s        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: rgb(239, 155, 76)">
        <div class="container d-flex justify-content-center"> <!-- Added d-flex and justify-content-center classes -->
            <ul class="nav">
                <li class="nav-list">
                    <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link {{Route::is('users') ? 'active' : ''}}" href="{{url('/users')}}">Buyers</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link {{Route::is('products') ? 'active' : ''}}" href="{{url('/products')}}">Products</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link {{Route::is('orders') ? 'active' : ''}}" href="{{url('/orders')}}">Orders</a>
                </li>
                <li class="nav-list">
                    <a class="nav-link {{Route::is('order_items') ? 'active' : ''}}" href="{{url('/order_items')}}">Order Items</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
