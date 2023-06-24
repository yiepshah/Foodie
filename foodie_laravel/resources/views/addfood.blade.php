<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <title>Add Food</title>
</head>
<body>
    @include('include.header');
    @include('include.css');


    <form action="/addfood" method="POST" class="form-group mx-auto col-10 col-md-8 col-lg-6" style="margin-top: 4%" >
        @csrf
        <div class="form-group">
          <label for="foodsender">Sender:</label><br>
          <input type="text" class="form-control" name="foodsender" placeholder="Enter a Sender Name">
          <div class="form-group">
            <label for="foodname">Food Name:</label>
            <input type="text" class="form-control" name="foodname" placeholder="Enter a Food Name">
          </div>
          <div>
            <label for="foodprice">Price:</label>
            <input type="text" class="form-control" name="foodprice" placeholder="Enter a price">
          </div>

          <div>
            <label for="phonenumber">Number:</label>
            <input type="text" class="form-control" name="phonenumber" placeholder="Enter a phone number">
          </div>

          <div>
            <label for="foodimage">Food Image</label>
            <input type="file" class="form-control" name="foodimage">
          </div> <br><br>
          
          
          <button type="submit" class="btn btn-dark">Submit</button>
        </div>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>


