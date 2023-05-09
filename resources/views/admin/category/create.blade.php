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
                <a href="{{url('admin/categories')}}" class="btn btn-sm btn-primary float-end m-2" > Back </a>
                <form action="{{url('admin/categories')}}" method="POST" class='px-5 row' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2 col-md-6">
                        <label for="name" class="mb-3">Name</label>
                        <input type="text" class="form-control  id="name" name="name" value="{{old('name')}}"  @error('name' ) is_invalid
                        @enderror>
                        <p class='text-danger'>@error('name')
                            {{$message}}
                        @enderror</p>
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label for="slug" class="mb-3">Slug</label>
                        <input type="text" class="form-control  id="slug" name="slug" value="{{old('slug')}}"  @error('slug' ) is_invalid

                        @enderror>
                        <p class='text-danger'>@error('slug')
                            {{$message}}
                        @enderror</p>
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label for="description" class="mb-3">Description</label>
                        <input type="text" class="form-control  id="slug" name="description" value="{{old('description')}}"  @error('description')
                            is-invalid
                        @enderror>
                        <p class='text-danger'>@error('description')
                            {{$message}}
                        @enderror</p>
                    </div>

                    <div class="form-group mb-2 col-md-6">
                        <label for="image" class="mb-3">Image</label>
                        <input type="file" class="form-control  id="image" name="image">
                    </div>
                    <div class="form-group mb-2">
                        <label for="status" class="mb-3">Status</label>
                        <input type="checkbox"  id="status" name="status">
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label for="meta-title" class="mb-3">Meta Title</label>
                        <input type="text" class="form-control  id="meta-title" name="title" value="{{old('title')}}"  @error('title' ) is_invalid

                        @enderror>
                        <p class='text-danger'>@error('title')
                            {{$message}}
                        @enderror</p>
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label for="meta-keyword" class="mb-3">Meta Keyword</label>
                        <input type="text" class="form-control  id="meta-keyword" name="keyword" value="{{old('keyword')}}"  @error('keyword' ) is_invalid

                        @enderror>
                        <p class='text-danger'>@error('keyword')
                            {{$message}}
                        @enderror</p>
                    </div>
                    <div class="form-group mb-2 col-md-6">
                        <label for="meta-description" class="mb-3">Meta Description</label>
                        <input type="text" class="form-control  id="meta-description" name="descriptionmeta"  value="{{old('descriptionmeta')}}" @error('descriptionmeta' ) is_invalid

                        @enderror>
                        <p class='text-danger'>@error('descriptionmeta')
                            {{$message}}
                        @enderror</p>
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
