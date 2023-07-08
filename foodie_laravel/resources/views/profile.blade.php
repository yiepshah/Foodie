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
    @foreach ($user as $item)   
    {{-- <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$item->name}}</h5>
          <p class="card-text">{{$item->email}}</p>
        </div>
      </div> --}}
      <div class="mx-auto col-10 col-md-8 col-lg-2">

        <div class="profile">
          <img src="https://lh3.googleusercontent.com/pw/AIL4fc8WPyyO-USuCHfKe2ulREV0any8cPLoynzenyn_ms2vQzv1r0YTagRXtP-CSsjMtxeB4_U0L_3zkOIk_-3ubHcBP4dYvHQhIitdP480qZgKxnkAwJQXImc0tTbKLhvVHwxOZ96C5A0O51elww8k3rRfX8wXxX32n9MXZ21SRJ_u_Mq60XNRb8vcNAnq2WWnU9z74K30Y2a0dLN-kDVqrOse5EE0eLB_t-JG2zT7eBNeGuWZtq6o66RivVvPfnatYPtSlq3BoRFKA1P1JjpAjhAKGajIQ6eKJpA1-OyRDlRJfFX1rsueVZtCIePNQpuRIpO-YEoK8SA2b3VfSHH4t1GjIMMBi4E7FFbbImtCDVZ2hOzvS9bGzgUxBaKBLkjvDuIEA7BaV-BZ4USkQrO8aHfGscgWcFish7RBGxZ_8RpovkF7iU1PcpmuS8eWj_KZhdAhdM51GsA-ONXIx9ysBMGmQ6Z_s8vwXkWT7ehH7eoH9_fT823oZb_sgFVMhDTwPEYl4QnQrD4FrFQDKG_gWrFMGBbuXOuUFPfnMVu_eRKG67s0bd6ilF45PVmwX-CG89ObGtPuct-ixHOT1RHuz2Ri5FHFOuUe7J0b4BdP8yJlU1vb-I-2ebG5LtPOLRpaODOr6ZKD448fxZ3yD8bzZFQPoVKiOJKqlvBpjHTVnxYs8-2Xyida8wQP5OIc_-Kc3RMDOw1hu8V_Rl9111jaW_YE-te_wnjQsC7mIix7URNPPDjOTOhgQ78i7oSdl8aSumlVs0j1qYOf4aPWvQs8mDgSpEnqvlsKFyiQYuZs2pGkvIi7MumLQNXVMRmvwqVdWW5qjE0QU9T13Z1VsOVwg-n4YUVMRTV9rqWhHi97UA6oXQtSJL625f8DMwJWlpJs009PNKlUwUUP_md5R4ZOVFR_UQ=w519-h922-s-no?authuser=0" alt="" class="profile_image">
          <div class="profile_name">{{$item->name}}</div><br>
          <div class="profile_email">{{$item->email}}</div>
        </div>

      </div>
     
    @endforeach 
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>