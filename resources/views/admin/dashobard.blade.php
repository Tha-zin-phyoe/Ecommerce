<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .sidenav {
            background-color: rgb(251, 249, 249);
            box-shadow: 0 2px 3px 2px rgb(227, 224, 224);
        }

        .tag{
            text-decoration: none !important;
            display: block;
            padding:10px 0;
            color:black;
        }
        .logo{

            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <x-sidebar/>
            <div class="col-md-9">
                <x-admin-navbar/>
                  @if (session('status'))
                  <p class="text-success" >{{session('status')}}</p>
                  @endif
            </div>
        </div>
    </div>
</body>
</html>
