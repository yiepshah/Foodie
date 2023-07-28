<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <title>Document</title>
    <style>

      

        .food-picture{
            margin: 0 auto;
            height: 400px;
            width: 600px;
            object-fit: cover;
            border-radius: 50px;
            
        } 


    </style>
</head>
<body>
    
    @include('include.header')
    

   <div class="card">
    <form action="/edit-food/{{$post->id}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <img class="food-picture" src="{{ asset(Storage::url($post->foodimage)) }}" alt="food image" />
        <div class="card-body">
            <div class="mb-3">
                <label for="foodname" class="form-label">Name</label>
                <input type="text" id="foodname" name="foodname" class="form-control" value="{{$post->foodname}}">
            </div>

            <div class="mb-3">
                <label for="foodsender" class="form-label">Restaurant</label>
                <input type="text" id="foodsender" name="foodsender" class="form-control" value="{{$post->foodsender}}">
            </div>

            <div class="mb-3">
                <label for="foodprice" class="form-label">Price</label>
                <input type="text" id="foodprice" name="foodprice" class="form-control" value="{{$post->foodprice}}">
            </div>

            <div class="mb-3">
                <label for="phonenumber" class="form-label">Number</label>
                <input type="text" id="phonenumber" name="phonenumber" class="form-control" value="{{$post->phonenumber}}">
            </div>

            <div class="mb-3">
                <label for="foodimage" class="form-label">Food Image</label>
                <input type="file" id="foodimage" name="foodimage" class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>