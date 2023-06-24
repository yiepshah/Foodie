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
        body, html {
          height: 100%;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
          box-sizing: border-box;
        }
        
        .bg-img {
          /* The image used */
          background-image: url("img_nature.jpg");
        
          min-height: 380px;
        
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
        }
        
        /* Add styles to the form container */
        .container {
          position: center;
          max-width: 300px;
          padding: 16px;
          
          
        }
        
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
        }
        
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
        
        /* Set a style for the submit button */
        .btn {
          background-color: #201d44;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        
        .btn:hover {
          opacity: 1;
        }

        .navbar-brand{
          color: #ddd
        }

        .nav-link{
          color: #ddd
        }
        .containersignup{
          margin-top: 5%;
        }

        .container bg-light{
            margin-top: 4%;
        }
        
        
        </style>
</head>
<body>
    @include('include.header')
    <div class="bg-img">
        <form action="/login" class="container" method="POST">
            
          <h1>Login</h1>
          @csrf
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="loginemail" required>
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="loginpassword" required>
      
          <button type="submit" class="btn">Login</button><br><br>
    
    
          <a href="/signup/" class="link-primary">Signup<i class="fas fa-long-arrow-alt-right"></i></a>
        </form>
      </div> 
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

