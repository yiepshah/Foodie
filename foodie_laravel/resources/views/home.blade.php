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

    @include('include.header')
    @include('include.homecss')
    @foreach ($posts as $item)

    <div class="card">
        <img src="https://i.pinimg.com/originals/c5/2b/91/c52b91c37ba4b93c73fe536137dac5a9.jpg" class="card-img-top" />
        <div class="card-body">
            <h3>Name</h3><br>   
            <p>{{$item->foodname}}</p><br><hr>

        <div class="card-text">
            <h3>Restaurant</h3><br>
            <p>{{$item->foodsender}}</p>
        </div><br><hr>

        <div class="card-text">
            <h3>Price</h3><br>
            <p>{{$item->foodprice}}</p>
        </div><br><hr>

        <div class="card-text">
            <h3>Number</h3><br>
            <p>60 - {{$item->phonenumber}}</p>
        </div><br><hr>
        
        </div>
      </div><br>

      @endforeach 
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      
    
   
</body>
</html>