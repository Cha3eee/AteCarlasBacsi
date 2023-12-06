<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout Details</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="customercss/summarypage-design.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' />
</head>
<style type="text/css">

  .box {
    position: relative;
    text-align: center;
    color: white;
  }

  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

    label {
      font-weight: 600;
      color: #1c1c1c;
      margin-top: 8px;
      line-height: 2;
    }

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

    .total{
      text-align: right;
      border-spacing: 0;
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

  hr{
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  }

  .top{
    width: 70%;
    margin-left: auto;
    margin-right: auto;
  }
  .info{
    color: #AF1D27;
    font-size: 18px;
    width: 100%;
    margin-left: 0%;
    margin-right: 90%;
  }

    .info2{
    color: #1c1c1c;
    font-size: 14px;
    width: 100%;
    margin-left: 0%;
    margin-right: 90%;
    font-weight: 400;
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

    select {
      padding: 10px 15px;
      border-radius: 1vh;
      color:  dimgray;
    }

    input[type=submit],  input[type=button] {
          background-color: #AF1D27;
          border: none;
          color: #fff;
          padding: 15px 30px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
          font-size: 14px;
          width: 48%;
          font-weight: 500;
          box-shadow: 0 0 6px #1c1c1c;

      }

/*    input[type=text], input[type=email], select, input[type=tel], textarea, input[type=date]{
      border: 1px solid #AF1D27;
      padding: 15px;
      border-radius: 50px;
      width: 100%;
       background-color: #faf9f9;
    }

    .input2[type=text], .input2[type=password], select, .input2[type=date], .input2[type=email], .input2[type=tel], .input2[type=number], textarea   {
      border: 1px solid #AF1D27;
      padding: 8px;
      border-radius: 2vh;
      width: 100%;
      background-color:  #f9f9f9;
    }*/

    input:focus {
        outline: none;
        border-color: #AF1D27;
        box-shadow: 0 0 6px #AF1D27;
      }


    .input2:focus {
        outline: none;
        border-color: #AF1D27;
        box-shadow: 0 0 6px #AF1D27;
      }

    .btn-outline-dark2:hover{
    color:   white !important;
    background-color:  #0d0c0c !important;
    border-color:  transparent !important; 
  }
  .btn{
    display: inline-block;
  }

  </style>


<body>
 <nav class="navbar navbar-expand-md" style="background-color: #1c1c1c; height: 68px;" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <a href="#" class="a content text-white" onclick="return confirmLogout();" style="line-height: 50px; padding-left: 50px; background-color: #1c1c1c;">
                <i class="fa-solid fa-right-from-bracket"></i>&ensp;Logout
            </a>
        </form>

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

<center>
<div class="" style="font-size: 14px; width: 52%">
  <br><br>
          <h1 class="display-4 mt-2" style="font-family: Poppins, sans-serif; font-weight: 700; font-size: 35px; text-align: center">Thank You!</h1>
          <h2 class="text-success" style="font-family: Poppins, sans-serif; font-size: 24px; text-align: center;">Order placed successfully!</h2><br>
          <table width="80%" cellpadding="0" cellspascing="0" border="1" align="center" style="border: 1px solid #c0c0c0;text-align: center;">

            <h4 style="font-size: 14px; color: dimgray;" align="left" hidden>Order ID: </h4>
            <h4 style="font-size: 14px; color: dimgray" align="left" hidden>Receipt Number: </h4>
            @php
            // Retrieve updated cart items from the session
                  $updatedCartItems = session('cart', []);
                  $totalAmount = 0;
                  $totalQuantity = 0;
                  $totalItemTotal = 0;
              @endphp
              
              
                  <tr >
                    <th><h4 class=" text-light p-2" style="font-size: 18px; width: 100%; background-color: #AF1D27">Food purchased</th>
                    </tr>
                    <tr >
                      @foreach($updatedCartItems as $item)
                  @php
                      $itemTotal = $item['product_price'] * $item['order_quantity'];
                      $totalAmount += $itemTotal;
                      $totalQuantity += $item['order_quantity'];
                      $totalItemTotal += $itemTotal;
                  @endphp                      
                      <td><h4 style="font-size: 14px; color: dimgray"><br>
                        {{$item['product_name']}} - {{$item['order_quantity']}} piece(s) <br></h4>
                      </td>
                    </tr>
                    @endforeach
                    <tr >
                      <td>
                      <hr>       
                        <h4 style="font-size: 14px; color: dimgray">Total Amount Paid: {{number_format($totalAmount, 2)}}</h4><br>
                      </td>
                    </tr>
                  </table><br>
                  @php
                  $orderDetails = session('order_details', []);
              @endphp
              
              <table width="80%" cellpadding="40" cellspascing="0" border="1" align="center" style="border: 1px solid #c0c0c0">
                  <tr>
                      <td>
                          <h4 style="font-size: 14px; color: dimgray">First Name : {{ $orderDetails['user_FirstName'] }}</h4>
                          <h4 style="font-size: 14px; color: dimgray">Last Name : {{$orderDetails['user_LastName']}}</h4>
                          <h4 style="font-size: 14px; color: dimgray">Your Phone : {{$orderDetails['user_PhoneNum']}}</h4>
                          <h4 style="font-size: 14px; color: dimgray">Your E-mail : {{$orderDetails['user_Email']}}</h4>
                          <h4 style="font-size: 14px; color: dimgray">Payment Mode :{{$orderDetails['order_PaymentMode']}}</h4>
                          <h4 style="font-size: 14px; color: dimgray">Delivery Instructions: {{$orderDetails['order_DeliveryInstructions']}}</h4>
                          <h4 style="font-size: 14px; color: dimgray">Delivery Date : {{$orderDetails['order_DeliveryDate']}}</h4>
                          <h4 style="font-size: 14px; color: dimgray">Delivery Time : {{$orderDetails['order_DeliveryTime']}}</h4>
                      </td>
                  </tr>
              </table>     
        </div>
      </center><br>
      <form id="clearForm" action="{{ route('orderPlaced') }}" method="POST">
        @csrf
        <center><input type="submit" name="orderagain" value="ORDER AGAIN" style="width: 24%; background-color:  #F9AF41; color: #1c1c1c; font-weight: bold"></a></center>
        <br><br>
      </form>


  <!-- Footer -->
    <footer class="pb-3" style="background-color:  #1c1c1c;
">
  <!-- Section: Links  -->
  <section class="justify-content-center border-bottom p-5">
    <div class="container">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mx-auto">
          <!-- Content -->

          <div style="width: 100%;">
            <div style="float: left">
              <img src="img/logo.png" height="50">
            </div>

              <div class="title" style="font-size: 15px; font-weight: 700; letter-spacing: 2px; float: left; margin-left: 6px; color: #AF1D27;">
                ATE CARLA'S
                <br>
              <b class="subtitle" style="color: #ffffff; font-size: 20px;">BACSILOG</b>
              </div>
              <br><br>
          </div> 
          <div class="content pt-2" style="font-size: 12px; text-align: left;">
            B 415 L #21 Polaris St.,
            Ph.4, Heritage Homes Marilao, Bulacan
            <p class="pt-4">atecarlasbacsilog@gmail.com</p>
          </div>
        </div>

        <!-- Grid column -->
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3 caption  py-3" style="text-align: left; font-size: 14px;">
          <!-- Links -->
          <h6 class="subtitle text-uppercase" style="color:  #faf9f9; font-size: 14px; text-align: left;">
            information
          </h6>
          <p>
            <a href="About-Us.php">About Us</a>
          </p>
          <p>
            <a href="services and products.php">Products</a>
          </p>
          <p>
            <a href="Personnel.php">Our Team</a>
          </p>
          <p>
            <a href="contact.php">Contact Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3  caption  py-3" style="text-align: left; font-size: 14px;">
          <!-- Links -->
          <h6 class=" subtitle text-uppercase" style="color:  #faf9f9; font-size: 14px; text-align: left;">
            more links
          </h6>
          <p>
            <a href="homepage.php">Home</a>
          </p>
          <p>
            <a href="FAQs.php">Support</a>
          </p>
          <p>
            <a href="FAQs.php">FAQ</a>
          </p>
        </div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3  caption  py-3" style="text-align: left; font-size: 14px;">
          <!-- Links -->
          <h6 class=" subtitle text-uppercase" style="color:  #faf9f9; font-size: 14px; text-align: left;">
            NEWS
          </h6>
          <p>
            <a href="News.php">Events & Promos</a>
          </p>
          <p>
            <a href="Customer-Reviews.php">Reviews</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-xs-5 mx-auto mb-md-0 mb-0 text-white py-3" style="font-size: 14px; text-align:left;">
          <!-- Links -->
          <h6 class=" subtitle text-uppercase" style="color:  #faf9f9; font-size: 14px; text-align: left;">
            CONTACT
          </h6>
          
          <p><i class="fa fa-envelope me-2 text-white caption"></i>atecarlasbacsilog@gmail.com</p>
          <p><i class="fa fa-phone me-1 text-white caption"></i> +63 956 889 5317</p>

            <a class="social-icon" data-tooltip="Twitter" href="https://twitter.com/home">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          
            <a class="social-icon" data-tooltip="Facebook" href="https://www.facebook.com/atecarlasbacsilog">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a class="social-icon" data-tooltip="Instagram" href="https://www.instagram.com/accounts/login/?next=/atecarlas_bacsi/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        
  </ul> 
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="p-4 footerspacing px-5">
    <p class=" pull-right caption" href="#" style="color: #c0c0c0; font-size: 12px;">Copyright 2022 © All Rights Reserved. <br>
      For educational purposes only. Not for sale.
    </p>
    <a class="pull-left subtitle pt-2" style="text-decoration: none; font-size: 14px;" href="homepage.php"> HOME </a>
    <a class=" fw-bold pull-left subtitle pt-2" style="text-decoration: none;font-size: 14px;" href="FAQs.php"> FAQ </a>
    <a class=" fw-bold pull-left subtitle pt-2" style="text-decoration: none;font-size: 14px;" href="contact.php"> CONTACT US </a>
  </div>
  <br><br>
  <!-- Copyright -->
</footer>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script>
    function confirmClear() {
        if (confirm('Are you sure you want to placed  your order?')) {
            // Use Fetch API to make an asynchronous request
            fetch('{{ route('orderPlaced') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            })
            .then(response => response.json())
            .then(data => {
                // Display SweetAlert success message
                if (data.message) {
                    swal({
                        title: "Success",
                        text: data.message,
                        icon: "success",
                    });
                }
            })
            .catch(error => {
                console.error('Error clearing cart:', error);
            });
  
            return true;
        }
        return false;
    }
  </script>

    <script type="text/javascript">

 //Disable previous dates 
    var currentDt = new Date();
    var dd = String(currentDt.getDate()).padStart(2, '0');
    var mm = String(currentDt.getMonth() + 1).padStart(2, '0');
    var yyyy = currentDt.getFullYear();

    currentDt = yyyy + '-' + mm + '-' + dd;
    $('#set_bdate').attr('min',currentDt);
</script>
<script type="text/javascript">
  var inputEle = document.getElementById('timeInput');


function onTimeChange() {
  var timeSplit = inputEle.value.split(':'),
    hours,
    minutes,
    meridian;
  hours = timeSplit[0];
  minutes = timeSplit[1];
  if (hours > 12) {
    meridian = 'PM';
    hours -= 12;
  } else if (hours < 12) {
    meridian = 'AM';
    if (hours == 0) {
      hours = 12;
    }
  } else {
    meridian = 'PM';
  }
  }
</script>
</body>

</html>
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