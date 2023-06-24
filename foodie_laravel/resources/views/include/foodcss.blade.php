<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .card {
  flex-direction: row;
  align-items: center;
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