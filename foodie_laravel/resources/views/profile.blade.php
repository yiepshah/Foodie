<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <title>Profile</title>

    <style>
      .profile{
        font-family:sans-serif;
        text-align: center;
        max-width: 200px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        background-color: rgb(231, 231, 231);
      }

      .profile_image{
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        margin: 0 auto 20px auto;
        display: block;
      }

      .profile_name{
        font-size: 1.2em;
        font-weight: bold;
      }

      .profile_email{
        display: flex;
        align-items: center;
        justify-content: center;
      }

     
    </style>
</head>
<body>
    @include('include.header')
    @include('include.homecss') <br>
       
      <div class="mx-auto col-7 col-md-8 col-lg-2">

        <div class="profile">
          <img src="{{ asset(Storage::url($user->profileimage)) }}" alt="profile image" class="profile_image">
          <div class="profile_name">{{$user->name}}</div><br>
          <div class="profile_email">{{$user->email}}</div><br>
          
          <a href="/editpost" class="btn btn-secondary">Edit</a>
        </div>

      </div> <br><br><br>
    
  
    @foreach ($posts as $item)

    <div class="card">
      <img src="{{ asset(Storage::url($item->foodimage)) }}" alt="food image" class="card-img-top" />
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
      <a href="edit-food/{{$item->id}}" class="btn btn-dark mb-3">Edit</a>
      <form action="/delete-post/{{$item->id}}" method="POST">
        @csrf
        @method('DELETE') 
        <button class="btn btn-danger">Delete</button>
        </form>
        </div>
      </div>

      @endforeach
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>