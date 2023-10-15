<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <title>Foodie</title>

    <style>
      body, html {
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("https://assets.website-files.com/5f6500b5f971f41a3738e5a1/5f74d23dfddd41438730297e_woman-eating-healthy-vegetarian-dinner-from-buddha-UGS263H%20(1)-p-2600.jpeg")
      }
      
      * {
        box-sizing: border-box;
      }
      
      .bg-img {
        /* The image used */
        /* background-image: url("https://th.bing.com/th/id/R.abde79715125b75bf5601a1c78318e1e?rik=fOf3%2b1qg7k%2f9aw&riu=http%3a%2f%2fwww.travelsiteindia.com%2fblog%2fwp-content%2fuploads%2f2018%2f04%2ftraditional-indian-food-sessions.jpg&ehk=hZj0OmrOGIC9z3k%2fmeYcLe5x%2fUkpQeyo7uwn%2fLYvN84%3d&risl=&pid=ImgRaw&r=0"); */
        margin-top: 50px;
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
        background-color: rgb(255, 255, 255)
        
        
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
        background-color: #000000;
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
      
      </style>
  
</head>
<body>
@include('include.header')
{{-- @include('include.css') --}}
      
    <div class="containersignup">
        <form action="/signup" class="container" method="POST">
            
          <h3>Signup</h3><br>
          @csrf
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter Name" name="name" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          
      
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <button type="submit" class="btn">submit</button><br><br>       
          <a style="color: black" href="/login">Login</a>

        </form>
        
    </div>
      
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      
    
   
</body>
</html>