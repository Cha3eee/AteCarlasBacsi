<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Order Food Favorites</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' />
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">           
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  
</head>

<body>
  <link rel="icon" href="img/logo.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="customercss/products-design.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <style type="text/css">

      .input-icons i {
      position: absolute;
      margin-left: -35px;
    }
          
    .icon {
        padding-left: 0px;
        padding-top: 20px;
        min-width: 40px;
    }
          
    .a2{
      color: #1c1c1c;
    }


    .a2:hover{
      color: #F9AF41;
      cursor: pointer;

    }

  .a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
  }

  .a:visited {
    color: white;
    background-color: transparent;
    text-decoration: none;
  }

  .a:hover {
    color: #EA5252;
    background-color: transparent;
    text-decoration: none;
  }

  .a:active {
    color: lightgray;
    background-color: transparent;
    text-decoration: underline;
  }

    #overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: auto;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(28, 28, 28, 0.4);
    z-index: 2;
    margin: auto;
  }

  #text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 50px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
  }

  .container1 {
      background-image: url('img/loginbg1.png');
      text-align: center;
      width: 60%;
      padding: 30px;
      border: 0px solid gray;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
      border-radius: 2vh;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    input[type=text], input[type=password] {
      border: 2px solid #AF1D27;
      padding: 15px;
      border-radius: 50px;
      width: 100%;
    }

    input:focus {
        outline: none;
        border-color: #AF1D27;
        box-shadow: 0 0 6px #AF1D27;
      }
/* check to see if we deliver in your area part */      
  .btn-outline-dark2:hover{
    color:   white !important;
    background-color:  #0d0c0c !important;
    border-color:  transparent !important; 
  }
  .rounded {
    border-radius: 2rem!important;
  }
  .border{
    border: 2.5px solid #ffc107!important;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 5px 10px;
  }

  select {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 15em;
  height: 3em;
  border-radius: 25px;
  overflow: hidden;
  background-color: #faf9f9;
  box-shadow: rgba(0, 0, 0, 0.18) 0px 5px 10px;
  border: 1.5px solid #ffc107!important;
  cursor: pointer;
  border: none;
  outline: none;
  font-family: EndzoneSlab Normal, arial;
  font-size: 16px;
  line-height: 24px;
  padding-left: 10px;
  letter-spacing: 1px;
  font-weight: bold;
  background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20448%22%20enable-background%3D%22new%200%200%20256%20448%22%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E.arrow%7Bfill%3A%23424242%3B%7D%3C%2Fstyle%3E%3Cpath%20class%3D%22arrow%22%20d%3D%22M255.9%20168c0-4.2-1.6-7.9-4.8-11.2-3.2-3.2-6.9-4.8-11.2-4.8H16c-4.2%200-7.9%201.6-11.2%204.8S0%20163.8%200%20168c0%204.4%201.6%208.2%204.8%2011.4l112%20112c3.1%203.1%206.8%204.6%2011.2%204.6%204.4%200%208.2-1.5%2011.4-4.6l112-112c3-3.2%204.5-7%204.5-11.4z%22%2F%3E%3C%2Fsvg%3E%0A");
  background-position: right 10px center;
  background-repeat: no-repeat;
  background-size: auto 50%;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
}
.select::-ms-expand{
  display: none;
}
.select_barangay {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 20em;
  height: 3em;
  border-radius: 25px;
  overflow: hidden;
  background-color: #faf9f9;
  box-shadow: rgba(0, 0, 0, 0.18) 0px 5px 10px;
  border: 1.5px solid #ffc107!important;
  cursor: pointer;
  border: none;
  outline: none;
  font-family: EndzoneSlab Normal, arial;
  font-size: 16px;
  line-height: 24px;
  padding-left: 10px;
  letter-spacing: 1px;
  font-weight: bold;
  background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20256%20448%22%20enable-background%3D%22new%200%200%20256%20448%22%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E.arrow%7Bfill%3A%23424242%3B%7D%3C%2Fstyle%3E%3Cpath%20class%3D%22arrow%22%20d%3D%22M255.9%20168c0-4.2-1.6-7.9-4.8-11.2-3.2-3.2-6.9-4.8-11.2-4.8H16c-4.2%200-7.9%201.6-11.2%204.8S0%20163.8%200%20168c0%204.4%201.6%208.2%204.8%2011.4l112%20112c3.1%203.1%206.8%204.6%2011.2%204.6%204.4%200%208.2-1.5%2011.4-4.6l112-112c3-3.2%204.5-7%204.5-11.4z%22%2F%3E%3C%2Fsvg%3E%0A");
  background-position: right 10px center;
  background-repeat: no-repeat;
  background-size: auto 50%;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
}
.select_barangay::-ms-expand{
  display: none;
}
/* End of check to see if we deliver in your area part */

  .parent {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;

    }
    .div1 { 
      grid-area: 1 / 1 / 3 / 5; 
      margin-right: 30px;
      margin-top: 10px;
      padding: 20PX;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
      }
  .div2 { 
      grid-area: 1 / 3 / 2 / 4; ; 
      margin-left: 20px;
      margin-top: 10px;
    }
  /* NAVIGATION FOR FOOD CATEGORY */
  .nav .nav-item .nav-link{
    color:  black;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 500;
  }
  .nav-pills .nav-link.active, .nav-pills .show >.nav-link{
    background-color: #F9AF41;
    border-radius: 2rem!important;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
  }
  table {
      border: transparent;
      border-collapse:collapse;
      padding:32px;
  }
  table td {
      text-align:center;
      padding:3px;
      background: #ffffff;
      color: #313030;
      border: transparent;
  }

  .button-add2cart {
    appearance: none;
    backface-visibility: hidden;
    background-color: #27ae60;
    border-radius: 8px;
    border-style: none;
    box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: Inter,-apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: normal;
    line-height: 1.5;
    outline: none;
    overflow: hidden;
    padding: 13px 20px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transform: translate3d(0, 0, 0);
    transition: all .3s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: top;
    white-space: nowrap;
  }
.card{
  display: inline-block;
  margin: 5px;
}
  .button-add2cart:hover {
    background-color: #1e8449;
    opacity: 1;
    transform: translateY(0);
    transition-duration: .35s;
  }

  .button-add2cart:active {
    transform: translateY(2px);
    transition-duration: .35s;
  }

  .button-add2cart:hover {
    box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;
  }
    .button-checkout {
    appearance: none;
    backface-visibility: hidden;
    background-color: #27ae60;
    border-radius: 8px;
    border-style: none;
    box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: Inter,-apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: normal;
    line-height: 1.5;
    outline: none;
    overflow: hidden;
    padding: 13px 20px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transform: translate3d(0, 0, 0);
    transition: all .3s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: top;
    white-space: nowrap;
    width: 100%;
  }

  .button-checkout:hover {
    background-color: #1e8449;
    opacity: 1;
    transform: translateY(0);
    transition-duration: .35s;
  }

  .button-checkout:active {
    transform: translateY(2px);
    transition-duration: .35s;
  }

  .button-checkout:hover {
    box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;
  }
  .cart-container{
    box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
    padding: 20px;
  }


@-webkit-keyframes popup{
  0%{ transform: scale(0); }
  100% { transform: scale(1);}
}
@keyframes popup{
  0%{ transform: scale(0); }
  100% { transform: scale(1);}
}

  </style>
</head>
<!-- NAVIGATION BAR -->
<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md sticky-top" style="background-color: #1c1c1c; height: 68px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="margin-top: 10px;">
        <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: inline;">
          @csrf
          <a href="#" class="a content text-white" onclick="return confirmLogout();" style="line-height: 50px; padding-left: 50px; background-color: #1c1c1c;">
              <i class="fa-solid fa-right-from-bracket"></i>&ensp;Logout
          </a>
      </form>
        <a href="user-profile" class="a content text-white" style="line-height: 50px;">&ensp;<i class="fa fa-user" aria-hidden="true"></i>&ensp;Profile </a>
      </li>
      <li class="nav-item" style="margin-left: 1230px; margin-top: 15px">
        <a class="nav-link" href="user-cart-page" style="position: relative;">
          <i class="fas fa-shopping-cart" style='color: #615f5f; background-color: white; padding: 10px; border-radius: 50%; position: relative;'>
              <span id="cart-item" class="badge badge-danger" style="position: absolute; top: -5px; right: -5px;">0</span>
          </i> <!-- Display number of items here -->
      </a>
      
      </li>
    </ul>
  </div>
</nav>

  <!-- Navbar end -->

<nav class="navbar navbar-expand-md navbar-dark p-2" style="background-color:  #AF1D27; box-shadow: rgba(28, 28, 28, 0.45) 0px 25px 20px -20px;">
  <div class="container-fluid px-5 ps-5">
    
    <a href="index.php"><img src="img/logo.png" height="46" class="ps-5"></a>
    <a class="navbar-brand subtitle ps-2" href="#" style="color: #ffffff;">

      <div class="title" style="font-size: 11.5px;">
        ATE CARLA'S
      </div>
      <b>BACSILOG</b>
    </a>
    <!-- ---------------- -->
    

    <button class="navbar-toggler border-0"  type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end navfont" id="navbar">
      <ul class="navbar-nav">
        <li>
          <a class="nav-link" href="homepage.php">HOME </b></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="fashion_page.html"> NEWS</a>
          <ul class="dropdown-menu dropdown-menu-dark" style="background-color: #902923;">
            <li><a class="dropdown-item" href="News.php" style="font-size: 14px;">PROMOS & EVENTS</a></li>
            <li><a class="dropdown-item" href="Customer-Reviews.php" style="font-size: 14px;">REVIEWS</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="">ABOUT US</a>
          <ul class="dropdown-menu dropdown-menu-dark" style="background-color: #902923;">
            <li><a class="dropdown-item" href="About-Us.php" style="font-size: 14px;">OUR STORY</a></li>
            <li><a class="dropdown-item" href="Personnel.php" style="font-size: 14px;">OUR TEAM</a></li>
          </ul>
        </li>

        <li>
          <a class="nav-link" href="services and products.php"><b style="color: #F9AF41; font-weight: 800;"> PRODUCTS</b></a>
        </li>
        <li>
          <a class="nav-link" href="FAQs.php">FAQ</a>
        </li>
        <li class="pe-5">
          <a class="nav-link" href="contact.php">CONTACT US</a>
        </li>
      </ul>

      </div>
  </div>
</nav>
<form id="addToCartForm" action="{{ route('add-to-cart') }}" method="POST">
  @csrf
@if(request()->cookie('username'))
    @php
        $username = request()->cookie('username');
        $user = \App\Models\User::where('user_Username', $username)->first();
    @endphp
  
        <center><div style='background-color: #fae2be; padding: 30px; margin: 40px; width: 85%'><center style='color: #f7a52a'><h2><i class='fa-solid fa-hand-wave'></i><img src='img/waving-hand.png' width=50 height=50> Hello, {{$user->user_FirstName}}<h1></center>@endif
        <center>Start your day by getting the food you love. </center></div>
         
   <br><br>
   <div class="container-md" style="margin-bottom: 100px;"><br>
    <h1 Class="d-flex align-items-center justify-content-center subtitle text-center" style="font-size: 34px; color: #292929; font-family: EndzoneSlab Normal, arial;"><b>FOOD FAVORITES</h1></b>
<br><br>
<div id="successMessage"></div>

   <div class="parent">
    <div class="div1" style="background-image: url(img/fud.png);"> 
      <!-- NAVIGATION FOR FOOD CATEGORY -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-SILOGS-tab" data-bs-toggle="pill" data-bs-target="#pills-SILOGS" type="button" role="tab" aria-controls="pills-SILOGS" aria-selected="true" name="Silog"><i class="fas fa-bacon"></i>&nbsp;SILOGS</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-SANDWICHES-tab" data-bs-toggle="pill" data-bs-target="#pills-SANDWICHES" type="button" role="tab" aria-controls="pills-SANDWICHES" aria-selected="false" name="Sandwiches"><i class="fas fa-hamburger"></i>&nbsp;SANDWICHES</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-MUNCHEESE-tab" data-bs-toggle="pill" data-bs-target="#pills-MUNCHEESE" type="button" role="tab" aria-controls="pills-MUNCHEESE" aria-selected="false" name="Muncheese"><i class="fas fa-cloud-meatball"></i>&nbsp;MUNCHEESE</button>
        </li>
      <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-DESSERTS-tab" data-bs-toggle="pill" data-bs-target="#pills-DESSERTS" type="button" role="tab" aria-controls="pills-DESSERTS" aria-selected="false" name="Desserts"><i class="fas fa-ice-cream"></i>&nbsp;DESSERTS</button>
      </li>
    </ul>

    
      <!-- END OF NAVIGATION FOR FOOD CATEGORY -->
      <!-- CONTENT FOR FOOD CATEGORY -->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-SILOGS" role="tabpanel" aria-labelledby="pills-SILOGS-tab" name="Silog">
    
            <!-- Displaying Products Start -->
            <!-- SILOGS -->
            <div class="container">
                <div id="messageSilogs"></div>
    
                <div class="row mt-2 pb-3">
                    @foreach ($silogs as $silogInfo)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                        <div class="card-deck">
                            <div class="card p-2 mb-2" style="border: 1px solid lightgray; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; border-radius: 2vh">
                              <img src="data:image/jpeg;base64,{{ urlencode(base64_encode($silogInfo->product_image)) }}" class="card-img-top" height="250" />

                                <div class="card-body p-1">
                                    <h4 class="card-title text-center title" style="color: #1c1c1c; font-size: 18px; padding-top: 8px">{{$silogInfo->product_name}}</h4>
                                    <h4 class="card-title text-center" style="color: #474747; font-size: 13px; padding-top: 0px; margin: 18px">{{$silogInfo->product_desc}}</h4>
                                    <h5 class="card-text text-center" style="color: dimgray; font-size: 16px; padding-bottom: 8px">&#8369;&nbsp;&nbsp; {{$silogInfo->product_price}} </h5>
                                    <input type="hidden" name="product_name" class="product_name" value="{{$silogInfo->product_name}}">
                                    <input type="hidden" name="product_price" class="product_price" value="{{$silogInfo->product_price}}">
                                    <input type="hidden" name="productID" class="productID" value="{{$silogInfo->productID}}">
                                 
                                  </div>
                                <div class="card-footer p-1">
                                        <div class="row p-2">
                                            <div class="col-md-6 py-1 pl-4">
                                                <b>Quantity: </b>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" min="1" class="form-control pqty" value="qty" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="order_quantity" id="order_quantity">
                                            </div>
                                        </div>
                                        <button class="btn btn-info btn-block addItemBtn title" style="background-color: #AF1D27; color: white; border: 0px solid; border-radius: 0px; font-weight: 500; font-size: 14.5px" id="addToCartBtn">
                                          <i class="fa fa-plus"></i>&ensp;Add to Basket
                                      </button>
                                </div>
                            </div>
                        </div>
                    </div>@endforeach
                </div>
            </div>
        </div>
    </div>
    
<!-- SANDWICHES -->
  <div class="tab-pane fade" id="pills-SANDWICHES" role="tabpanel" aria-labelledby="pills-SANDWICHES-tab" name="Sandwiches">

  <div class="container">
    <div id="messageSandwiches"></div>
    <div class="row mt-2 pb-3">
      @foreach ($sandwiches as $sandwichesInfo)
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 mb-2" style="border: 1px solid lightgray; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; border-radius: 2vh">
            <img src="data:image/jpeg;base64,{{ urlencode(base64_encode($sandwichesInfo->product_image)) }}" class="card-img-top" height="250" />
    

             <!--<img src=" class="card-img-top" height="250">-->
            <div class="card-body p-1">
              <h4 class="card-title text-center title" style="color:  #1c1c1c; font-size: 18px; padding-top: 8px">{{$sandwichesInfo->product_name}}</h4>
              <h4 class="card-title text-center"style="color:  #474747; font-size: 13px; padding-top: 0px; margin: 18px">{{$sandwichesInfo->product_desc}}</h4>
              <h5 class="card-text text-center"style="color:  dimgray; font-size: 16px; padding-bottom: 8px" >&#8369;&nbsp;&nbsp;{{$sandwichesInfo->product_price}}</h5>
              <input type="hidden" name="product_name" id="product_name" value="{{$sandwichesInfo->product_name}}">
              <input type="hidden" name="product_price" id="product_price" value="{{$sandwichesInfo->product_price}}">   
              <input type="hidden" name="productID" class="productID" value="{{$sandwichesInfo->productID}}">
             

            </div>
            <div class="card-footer p-1">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity: </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" min="1" class="form-control pqty" value="qty" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="order_quantity">
                  </div>
                </div>
               
               <button class="btn btn-info btn-block addItemBtn title"style="background-color: #AF1D27; color: white; border: 0px solid; border-radius: 0px; font-weight: 500; font-size: 14.5px"><i class="fa fa-plus"></i>&ensp;Add to Basket</button>
            </div>
          </div>
        </div>
      </div> @endforeach
    </div>
  </div>
</div>

<!-- MUNCHEESE -->
<div class="tab-pane fade " id="pills-MUNCHEESE" role="tabpanel" aria-labelledby="pills-MUNCHEESE-tab">
  <div class="container">
    <div id="messageMuncheese"></div>
    <div class="row mt-2 pb-3">
      @foreach ($muncheese as $muncheeseInfo)
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 mb-2">
             <img src="data:image/jpeg;base64,{{ urlencode(base64_encode($muncheeseInfo->product_image)) }}" class="card-img-top" height="250" />         

             <!--<img src=" class="card-img-top" height="250">-->
            <div class="card-body p-1">
              <h4 class="card-title text-center title" style="color:  #1c1c1c; font-size: 18px; padding-top: 8px">{{$muncheeseInfo->product_name}}</h4>
              <h4 class="card-title text-center"style="color:  #474747; font-size: 13px; padding-top: 0px; margin: 18px">{{$muncheeseInfo->product_desc}}</h4>
              <h5 class="card-text text-center"style="color:  dimgray; font-size: 16px; padding-bottom: 8px" >&#8369;&nbsp;&nbsp;{{$muncheeseInfo->product_price}}</h5>
              <input type="hidden" name="product_name" id="product_name" value="{{$muncheeseInfo->product_name}}">
              <input type="hidden" name="product_price" id="product_price" value="{{$muncheeseInfo->product_price}}">  
              <input type="hidden" name="productID" class="productID" value="{{$muncheeseInfo->productID}}"> 

            </div>
            <div class="card-footer p-1">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity: </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" min="1" class="form-control pqty" value="qty" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="order_quantity">
                  </div>
                </div>

              <button class="btn btn-info btn-block addItemBtn title"style="background-color: #AF1D27; color: white; border: 0px solid; border-radius: 0px; font-weight: 500; font-size: 14.5px"><i class="fa fa-plus"></i>&ensp;Add to Basket</button>
            </div>
          </div>
        </div>
      </div>@endforeach
    </div>
  </div>
</div>

<!-- DESSERTS -->
 <div class="tab-pane fade" id="pills-DESSERTS" role="tabpanel" aria-labelledby="pills-DESSERTS-tab" name="Desserts">
  <div class="container">
    <div id="messageDesserts"></div>
    <div class="row mt-2 pb-3">
      @foreach ($desserts as $dessertsInfo)
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 mb-2">
             <img src="data:image/jpeg;base64,{{ urlencode(base64_encode($dessertsInfo->product_image)) }}" class="card-img-top" height="250" />          

             <!--<img src=" class="card-img-top" height="250">-->
            <div class="card-body p-1">
              <h4 class="card-title text-center title" style="color:  #1c1c1c; font-size: 18px; padding-top: 8px">{{$dessertsInfo->product_name}}</h4>
              <h4 class="card-title text-center"style="color:  #474747; font-size: 13px; padding-top: 0px; margin: 18px">{{$dessertsInfo->product_desc}}</h4>
              <h5 class="card-text text-center"style="color:  dimgray; font-size: 16px; padding-bottom: 8px" >&#8369;&nbsp;&nbsp;{{$dessertsInfo->product_price}}</h5>
              <input type="hidden" name="product_name" id="product_name" value="{{$dessertsInfo->product_name}}">
              <input type="hidden" name="product_price" id="product_price" value="{{$dessertsInfo->product_price}}">   
              <input type="hidden" name="productID" class="productID" value="{{$dessertsInfo->productID}}">

            </div>
            <div class="card-footer p-1">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity: </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" min="1" class="form-control pqty" value="qty"  min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="order_quantity">
                  </div>
                </div>
                <button class="btn btn-info btn-block addItemBtn title"style="background-color: #AF1D27; color: white; border: 0px solid; border-radius: 0px; font-weight: 500; font-size: 14.5px"><i class="fa fa-plus"></i>&ensp;Add to Basket</button>
            </div>
          </div>
        </div>
      </div>@endforeach
    </div>
  </div>
</div>
</form>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  

<script>
document.addEventListener('DOMContentLoaded', function () {
    var silogTabContent = document.getElementById('pills-SILOGS');
    var sandwichesTabContent = document.getElementById('pills-SANDWICHES');
    var muncheeseTabContent = document.getElementById('pills-MUNCHEESE'); // Add this line
    var dessertsTabContent = document.getElementById('pills-DESSERTS'); // Add this line

    var silogTabButton = document.getElementById('pills-SILOGS-tab');
    var sandwichesTabButton = document.getElementById('pills-SANDWICHES-tab');
    var muncheeseTabButton = document.getElementById('pills-MUNCHEESE-tab'); // Add this line
    var dessertsTabButton = document.getElementById('pills-DESSERTS-tab'); // Add this line

    function hideSilogTab() {
        silogTabContent.style.display = 'none';
        silogTabButton.classList.remove('active');
    }

    function showSilogTab() {
        silogTabContent.style.display = 'block';
        silogTabButton.classList.add('active');
    }

    function hideSandwichesTab() {
        sandwichesTabContent.style.display = 'none';
        sandwichesTabButton.classList.remove('active');
    }

    function showSandwichesTab() {
        sandwichesTabContent.style.display = 'block';
        sandwichesTabButton.classList.add('active');
    }

    function hideMuncheeseTab() { // Add this function
        muncheeseTabContent.style.display = 'none';
        muncheeseTabButton.classList.remove('active');
    }

    function showMuncheeseTab() { // Add this function
        muncheeseTabContent.style.display = 'block';
        muncheeseTabButton.classList.add('active');
    }

    function hideDessertsTab() { // Add this function
        dessertsTabContent.style.display = 'none';
        dessertsTabButton.classList.remove('active');
    }

    function showDessertsTab() { // Add this function
        dessertsTabContent.style.display = 'block';
        dessertsTabButton.classList.add('active');
    }

    // Display the active tab content by default
    if (sandwichesTabButton.classList.contains('active')) {
        showSandwichesTab();
        hideSilogTab();
        hideMuncheeseTab(); // Add this line
        hideDessertsTab(); // Add this line
    } else if (muncheeseTabButton.classList.contains('active')) { // Add this condition
        showMuncheeseTab();
        hideSilogTab();
        hideSandwichesTab();
        hideDessertsTab();
    } else if (dessertsTabButton.classList.contains('active')) { // Add this condition
        showDessertsTab();
        hideSilogTab();
        hideSandwichesTab();
        hideMuncheeseTab();
    } else {
        showSilogTab();
        hideSandwichesTab();
        hideMuncheeseTab();
        hideDessertsTab();
    }

    sandwichesTabButton.addEventListener('click', function () {
        hideSilogTab();
        showSandwichesTab();
        hideMuncheeseTab(); // Add this line
        hideDessertsTab(); // Add this line
    });

    silogTabButton.addEventListener('click', function () {
        hideSandwichesTab();
        showSilogTab();
        hideMuncheeseTab(); // Add this line
        hideDessertsTab(); // Add this line
    });

    muncheeseTabButton.addEventListener('click', function () { // Add this event listener
        hideSilogTab();
        hideSandwichesTab();
        showMuncheeseTab();
        hideDessertsTab();
    });

    dessertsTabButton.addEventListener('click', function () { // Add this event listener
        hideSilogTab();
        hideSandwichesTab();
        hideMuncheeseTab();
        showDessertsTab();
    });
});

</script>


<!-- JAVASCRIPT -->

<script>
  $('.addItemBtn').on('click', function () {
      var product_name = $(this).closest(".card").find("input[name='product_name']").val();
      var product_price = $(this).closest(".card").find("input[name='product_price']").val();
      var order_quantity = $(this).closest(".card-footer").find(".pqty").val();
      var productID = $(this).closest(".card").find("input[name='productID']").val();
  
      if (!order_quantity || order_quantity < 1) {
          console.error('Quantity is required and must be at least 1.');
          return;
      }
  
      $.ajax({
    url: '{{ route("add-to-cart") }}',
    method: 'POST',
    data: {
        product_name: product_name,
        product_price: product_price,
        order_quantity: order_quantity,
        productID: productID,
        _token: '{{ csrf_token() }}'
    },
    success: function (response) {
    if (response.success) {
        // Assuming success means the item was added to the cart
        load_cart_item_number();
        // Display the success message using SweetAlert
        swal({
            title: "Success",
            text: response.message,
            icon: "success",
        });
    } else {
        console.error('Error adding item to cart:', response.message);
    }
},



    error: function (error) {
        console.error('Error adding item to cart:', error);
    }
});

  });
  
  </script>
<script>
function load_cart_item_number() {
  $.ajax({
    url: '{{ route("get-cart-count") }}',
    method: 'GET',
    success: function(response) {
      $("#cart-item").text(response);
    },
    error: function(error) {
      console.error('Error loading cart item number:', error);
    }
  });
}

// Call the function when the document is ready
$(document).ready(function() {
  load_cart_item_number();
});

</script>

<script>
  function confirmLogout() {
      if (confirm('Are you sure you want to logout? (All items in the cart will be reset)')) {
          // Submit the form when confirmed
          document.getElementById('logoutForm').submit();
          return true;
      }
      return false;
  }
</script>


</body>

</html>
