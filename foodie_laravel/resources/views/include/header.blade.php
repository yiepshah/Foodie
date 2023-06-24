<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">FOODIE</a><br><br>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

              <form action="/profile" method="POST">
                @csrf
                <button class="btn bg-dark">Profile</button>
               </form>
               <form action="/food" method="POST">
                @csrf
                <button class="btn bg-dark">Food</button>
               </form>
              <form action="/addfood" method="POST">
                @csrf
                <button class="btn bg-dark">Add Food</button>
               </form>
    
              <form action="/logout" method="POST">
               @csrf
               <button class="btn bg-dark">Logout</button>
              </form>
    
            </div>
          </div>
        </div>
      </nav>
</body>
</html>