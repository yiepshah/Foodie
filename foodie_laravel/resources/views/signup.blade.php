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
@include('include.css')
      
    <div class="containersignup">
        <form action="/signup" class="container bg-light" method="POST">
            
          <h1>Signup</h1>
          @csrf
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter Name" name="name" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br><br>
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <button type="submit" class="btn">submit</button><br><br>       
          <a href="/login">Login</a>
        </form>
      </div>
      
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      
    
   
</body>
</html>