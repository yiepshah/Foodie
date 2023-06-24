<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <title>Foodie</title>
  
</head>
<body>
{{-- @include('include.header')
@include('include.css')
      
    <div class="container">
        <h1>Homepage</h1>
        @foreach ($posts as $item)
        <div style = "background-color:gray;padding: 10px; margin: 10px;">
        <h3>{{$item->foodname}} by {{$item->foodsender}}</h3>
        {{$item->foodprice}}
        <p><a href="/edit-post/{{$item->id}}">Edit</a></p>
        </div>
            
        @endforeach
    </div> --}}
    @include('include.header')
    @include('include.foodcss')
    
    @foreach ($posts as $item)

    <div class="card">
        <img src="https://codingyaar.com/wp-content/uploads/bootstrap-4-card-image-left-demo-image.jpg" class="card-img-top" />
        <div class="card-body">
            <p style="font-family: fantasy">Name</p>   
            <p>{{$item->foodname}}</p><hr><br>

        <div class="card-text">
          <p style="font-family: fantasy">Restaurant</p>  <p>{{$item->foodsender}}</p>
        </div><hr><br>

        <div class="card-text">
            <p style="font-family: fantasy">Rm</p> 
            <p>{{$item->foodprice}}</p>
        </div><hr><br>

        <div class="card-text">
            <p style="font-family: fantasy">Number</p> 
            <p>60 - {{$item->phonenumber}}</p>
        </div><hr><br>
        
        </div>
      </div><br>

      @endforeach 
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      
    
   
</body>
</html>