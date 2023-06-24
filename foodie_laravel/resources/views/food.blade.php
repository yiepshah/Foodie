<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <title>Food</title>
    <style>
          * {
    margin:0;
    padding:0;
  }

  html{
    box-sizing:border;
    font-size:62.5%;
  }


  body {
    background-color: #eee;
    font-family: "Poppin", sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .grid {
    display: grid;
    width: 114em;
    grid-gap:  6rem;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    align-items: start;
  }

  .grid-item {
    background-color: #fff;
    border-radius:0.4rem;
    overflow:hidden;
    box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
    cursor:pointer;
    transition:0.25;
  }

  .grid-item:hover {
    transform:translateY(-0.5%);
    box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
  }

  .card-img {
    display: block;
    width: 100%;
    height: 20rem;
    object-fit:cover;
  }

  .card-content {
    padding: 3rem;
  }
  .card-header {
    font-size: 3rem;
    font-weight: 500;
    color: #0d0d0d;
    margin-bottom:1.5rem;
  }

  .card-text {
    font-size: 1.6rem;
    letter-spacing:0.1rem;
    line-height: 1.7;
    color: #3d3d3d;
    margin-bottom:2.5rem;
  }
  .card-btn {
    display:block;
    width: 100%;
    padding:1.5rem;
    font-size: 2rem;
    text-align:center;
    color: #3363ff;
    background-color: #d8e0fd;
    border:none;
    border-radius:0.4rem;
    transition:0.2;
    cursor: pointer;
    letter-spacing:0.1rem
  }
  .card-btn span {
    margin-left: 1rem;
    transition: 0.2s;
  }

  .card-btn:hover,
  .card_btn:active {
    background-color: #c2cffc;
  }
  .card-btn:hover span,
  .card-btn:active span {
    margin-left: 1.5rem;
  }

  @media only screen and (max-width: 60em) {
    body {
        padding:3rem;
    }
    .grid {
        grid-gap:  3rem;
    }
  }

  
    </style>

</head>
<body>
    @include('include.header')
    @include('include.css')
    @include('include.foodcss')

    {{-- @foreach($posts as $post) --}}
    <div class="grid">
        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="./img/" alt="">
                <div class="card-content">
                    <h1 class="card-header"></h1>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>