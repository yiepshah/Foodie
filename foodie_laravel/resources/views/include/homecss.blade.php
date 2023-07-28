<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

body, html {
      height: 100%;
      font-family: Arial, Helvetica, sans-serif;
      background-image: url('https://www.thrivenaija.com/wp-content/uploads/2019/12/eating-healthy-food.jpg');
    }

  .card {
  flex-direction: row;
  align-items: center;
  background-color: rgb(39, 39, 39);
  color: rgb(228, 228, 228);
  
  
  
}
.card-title {
  font-weight: bold;
  
}
.card img {
  width: 30%;
  border-top-right-radius: 0;
  border-bottom-left-radius: calc(0.25rem - 1px);
}
@media only screen and (max-width: 768px) {
  a {
    display: none;
  }
  .card-body {
    padding: 0.5em 1.2em;
    
  }
  .card-body .card-text {
    margin: 0;
  }
  .card img {
    width: 50%;
  }
}
@media only screen and (max-width: 1200px) {
  .card img {
    width: 40%;
  }
}
    </style>
</head>
<body>
    
</body>
</html>