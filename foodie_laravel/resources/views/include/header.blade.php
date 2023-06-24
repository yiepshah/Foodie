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
            <span class="navbar-toggler-icon" style="color: white"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              @auth
              <li class="nav-item">
                <a href="/addfood" class="nav-link active">Add Food</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link active">Food</a>
              </li>
              <li class="nav-item">
                <a href="/profile" class="nav-link active">Profile</a>
              </li>
              @endauth
              <li class="nav-item">
                <a href="/signup" class="nav-link active">Sign Up</a>
              </li>
              <li class="nav-item">
                <a href="/login" class="nav-link active">Log  In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>