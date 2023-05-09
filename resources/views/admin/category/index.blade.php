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
        .edit{
            background-color: rgb(60, 215, 46);
            margin-right: 5px
        }
        .delete{
            background-color: orangered
        }

        .img{
            width:100px;
            height:50px;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <x-sidebar/>
            <div class="col-md-9">
                <x-admin-navbar/>

                    <a href="{{url('admin/categories/create')}}" class="btn btn-sm btn-primary float-end mt-2">Add Category</a>

                    <table class="table table-bordered mt-3">
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td><img src="{{asset('storage/category_images/'.$category->image)}}" class="img" alt=""></td>
                                <td>{{$category->status==1?'Hidden':
                                'Visible'}}</td>

                                <td class="d-flex">
                                    <a class="btn edit " href="{{url('admin/categories/'.$category->id.'/edit')}}" >Edit</a>

                                    <form action="{{url('admin/categories/'.$category->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn delete" type="submit" onclick="confirm('Are you sure you want delete!')">Delete</button>

                                    </form>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</body>
</html>
