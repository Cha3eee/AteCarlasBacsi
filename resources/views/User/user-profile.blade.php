<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ate Carla's Bacsilog | Profile</title>
	<link rel="icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="customercss/checkout-design.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
   <style type="text/css">

    table {
      border-collapse:  collapse;

    }
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
  	border-top: 6px double ;
  	color: #AF1D27;
  	width: 70%;
  	margin-left: auto;
  	margin-right: auto;
  }

  .top1{
    width: 63%;
    margin-left: auto;
    margin-right: auto;
    font-size: 12px;
    color: #AF1D27;
  }

  .top{
  	width: 45%;
  	margin-left: auto;
  	margin-right: auto;
  	font-size: 15px;
  }

  .info{
    text-align: center;
  	color: #000000;
  	font-size: 18px;
  	width: 30%;
  	margin-left: 70%;
  	margin-right: 22%;
  }

  .info1{
    text-align: center;
    color: #000000;
    font-size: 18px;
    width: 12%;
    margin-left: 10%;
    margin-right: 90%;
  }

  .a:hover {
    color: #EA5252;
    background-color: transparent;
    text-decoration: none;
  }
  .a3:hover {
    color: #EA5252;
    background-color: transparent;
    text-decoration: none;
  }
  .a3:link {
    color: black;
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
      text-align: justify;
      font-size: 80%;
      overflow-x: hidden;
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

    input[type=text], input[type=password], select, input[type=date] {
      border: 1px solid #AF1D27;
      padding: 15px;
      border-radius: 50px;
      width: 100%;
       background-color: #faf9f9;
    }

    .input2[type=text], .input2[type=password], select, .input2[type=date], .input2[type=email], .input2[type=tel], .input2[type=number]   {
      border: 1px solid #AF1D27;
      padding: 8px;
      border-radius: 2vh;
      width: 100%;
      background-color:  #f9f9f9;
    }

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

  </style>
</head>
<body>
  @if(request()->cookie('username'))
    @php
        $username = request()->cookie('username');
        $user = \App\Models\User::where('user_Username', $username)->first();
    @endphp
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
	  
<nav class="navbar navbar-expand-md navbar-dark p-2 sticky-top" style="background-color:  #AF1D27; box-shadow: rgba(28, 28, 28, 0.45) 0px 25px 20px -20px;">
	<div class="container-fluid px-5 ps-5">

    <a href="user-ordering-page"><img src="img/logo.png" height="46" class="ps-5"></a>
	  <a class="navbar-brand subtitle ps-2" href="user-ordering-page" style="color: #ffffff;">

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
					<a class="nav-link" href="homepage"><b style="color: #F9AF41; font-weight: 800;"> HOME </b></a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="fashion_page.html"> NEWS</a>
					<ul class="dropdown-menu dropdown-menu-dark" style="background-color: #902923;">
						<li><a class="dropdown-item" href="news" style="font-size: 14px;">PROMOS & EVENTS</a></li>
						<li><a class="dropdown-item" href="customer-reviews" style="font-size: 14px;">REVIEWS</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="">ABOUT US</a>
					<ul class="dropdown-menu dropdown-menu-dark" style="background-color: #902923;">
						<li><a class="dropdown-item" href="about-us" style="font-size: 14px;">OUR STORY</a></li>
						<li><a class="dropdown-item" href="personnel-about" style="font-size: 14px;">OUR TEAM</a></li>
					</ul>
				</li>

        <li>
					<a class="nav-link" href="services-and-products">PRODUCTS</a>
				</li>
        <li>
					<a class="nav-link" href="FaQs">FAQ</a>
				</li>
        <li class="pe-5">
					<a class="nav-link" href="contact-us">CONTACT US</a>
				</li>
			</ul>

	  	</div>
	</div>
</nav>
<!-- User Edit -->

    <div id="overlay">
      <div class="container1">
        <table border="0" cellspacing="0" cellpadding="0" align="right" width="8%"> 
          <tr>
            <td>
              <div class="" onclick="off()" style="color: dimgray; font-size: 15px; cursor: pointer;">Close(x)</div>
            </td>
          </tr>
        </table>
        <br><br>
        <div class="" style="color: black">
          <h3 style="color: #AF1D27; font-weight: bold;margin-left: 50px;" class="title">Personal Information</h3> 
          <!--<h5 style="color: #1c1c1c; font-size: 17.5px;" class="title">Login to your account.</h5>-->
          <form method="post" action="{{ route('update-profile', ['userID' => $user->userID]) }}" id="userprofile">
            @csrf
            @method('PUT')
          <div class="row justify-content-center">  
            <div class="col-sm-5 form-group">
                <label for="name-f">First Name</label>
                <input type="text" class="form-control input2" name="user_FirstName" id="name-f" placeholder="Enter your first name *" value="{{$user->user_FirstName}}">
                <input type="hidden" name="userID" value="{{ $user->id }}">
            </div>
            <div class="col-sm-5 justify-content-center form-group">
                <label for="name-l">Last Name</label>
                <input type="text" class="form-control input2" name="user_LastName" id="name-l" placeholder="Enter your last name *" value="{{$user->user_LastName}}"required>
            </div>
            <div class="col-sm-5 form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control input2" name="user_Email" id="email" placeholder="Enter your email address *" value="{{$user->user_Email}}" required>
            </div>

            <div class="col-sm-5 form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control input2" name="user_PhoneNum" id="address" placeholder="Enter your number [1234-567-8901] *" value="{{$user->user_PhoneNum}}"required>
           </div>
          </div>
        <br>
          <!--<h5 style="color: #1c1c1c; font-size: 17.5px;" class="title">Login to your account.</h5>-->
          <div class="row justify-content-center">  
                    <div class="col-sm-10 form-group">
                          <label for="name-f">Address</label>
                          <input type="text" class="form-control input2" name="user_Address" id="address" placeholder="Locality/House/Street no. *" value="{{$user->user_Address}}">
                      </div>
                     
          </div>
        <br>
        <center><input type="submit" name="save" value="SAVE" style=" background-color: #1c1c1c; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; width: 20%; height: 50px; border-radius: 50px; font-weight: 500;" class="btn btn-outline-dark2 text-white title"></center>
        </table>
        </div>
      </div>
    </div>
  </form>
<!-- Login End -->

<!-- Start of Profile -->
<div class="text-center">
<br><br><br>
<h2 class="title" style="color: #000000; text-align: center;"><strong>My Account</strong></h2>
</div>
<br>
<h5 class="title" style="color: #000000; text-align: center;"></h5>
<h5 class="title" style="color: #000000; text-align: center;"></h5>
<h5 class="title" style="color: #000000; text-align: center;"></h5>
<h5 class="title" style="color: #000000; text-align: center;"></h5>
<h5 class="title" style="color: #000000; text-align: center;"></h5>
<div class="col-xl-lg-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 d-flex align-items-center justify-content-center pe-2 pt-1">
<h3 class="title info">Profile</h3>
<a class="a3 info a content" onclick="on()" style="text-decoration: none; cursor: pointer;">Edit&nbsp;Profile</a>

</div>
<hr>
<!-- Personal Information -->
    <div class="top1">
        <h4>Account Information</h4>
    </div><br>
    <div class="top">
        <h5 class="title" style="font-size: 18px">Full Name</h5>
    </div>
    <div class="top text-secondary">
        {{ $user->user_FirstName }} {{$user->user_LastName}}
    </div>
    <br>


<div class="top">
  <h5 class="title" style="font-size: 18px">Email</h5>
</div>
<div class="top text-secondary">
  {{$user->user_Email}}
</div>
<br>
<div class="top">
  <h5 class="title" style="font-size: 18px">Contact Number</h5>
</div>
<div class="top text-secondary">
  {{$user->user_PhoneNum}}
</div>
<br>
<div class="top">
	<h5 class="title" style="font-size: 18px">Address</h5>
</div>
<div class="top text-secondary">
	{{$user->user_Address}}
</div>
<br>


<div>

  @if(request()->cookie('username'))
  @php
      $username = request()->cookie('username');
      $user = \App\Models\User::where('user_Username', $username)->first();
  @endphp

  @if($user)

      <!-- Display purchase history -->
      <table border="0" width="60%" cellpadding="10" cellspacing="0" align="center">
          <tr style="color:#3C848C; background-color:#A2D1D7; font-weight: 600; font-family: Montserrat, sans-serif;" height=60; table-layout: fixed>
              <tr style="background-color: #AF1D27; color: white; font-weight: 500; text-align: center; font-size: 20px">
                  <td colspan=4>PURCHASE HISTORY</td>
              </tr>
              <td style="color:#615f5f; background-color:#f5e4e5; font-weight: 700; font-family: Montserrat, sans-serif;" height=60; table-layout: fixed><center><i class="fa-solid fa-calendar-day"></i>&ensp;DATE OF ORDER</center></td>
              <td style="color:#615f5f; background-color:#f5e4e5; font-weight: 700; font-family: Montserrat, sans-serif;" height=60; table-layout: fixed><center><i class="fa-solid fa-location-crosshairs"></i>&ensp;ACTION</center></td>

              @foreach ($user->orderInfos as $orderInfo)
                  <tr style="background-color:#F7F6FB ; color: #252422; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; font-family: Readiness;">
                      {{-- <td><center>{{ $orderInfo->orderID }}</center></td> --}}
                      <td><center>{{ $orderInfo->order_DeliveryDate }}</center></td>
                      <td><center><a href='{{ route('user.order.history', ['orderID' => $orderInfo->orderID]) }}'>View My Order</a></center></td>
                  </tr>
              @endforeach
          </tr>
      </table>
  @else
      <!-- Handle the case where the user is not found -->
      User not found
  @endif
@endif
                     
                    </div></div>

<br>
@endif
<center><a href="user-ordering-page"><input type="submit" name="orderagain" value="ORDER AGAIN" style="width: 24%; background-color:  #F9AF41; color: #1c1c1c; font-weight: bold"></a></center>

<br><br>
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
            <a href="About-Us.html">About Us</a>
          </p>
          <p>
            <a href="services and products.html">Products</a>
          </p>
          <p>
            <a href="Personnel.html">Our Team</a>
          </p>
          <p>
            <a href="contact.html">Contact Us</a>
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
            <a href="homepage.html">Home</a>
          </p>
          <p>
            <a href="FAQs.html">Support</a>
          </p>
          <p>
            <a href="FAQs.html">FAQ</a>
          </p>
        </div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3  caption  py-3" style="text-align: left; font-size: 14px;">
          <!-- Links -->
          <h6 class=" subtitle text-uppercase" style="color:  #faf9f9; font-size: 14px; text-align: left;">
            NEWS
          </h6>
          <p>
            <a href="News.html">Events & Promos</a>
          </p>
          <p>
            <a href="Customer-Reviews.html">Reviews</a>
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

            <a class="social-icon" data-tooltip="Twitter" href="https://twitter.com/">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          
            <a class="social-icon" data-tooltip="Facebook" href="https://www.facebook.com/atecarlasbacsilog/">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>

            <a class="social-icon" data-tooltip="Instagram" href="https://www.instagram.com/atecarlas_bacsi/?hl=en">
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
    <a class="pull-left subtitle pt-2" style="text-decoration: none; font-size: 14px;" href="homepage.html"> HOME </a>
    <a class=" fw-bold pull-left subtitle pt-2" style="text-decoration: none;font-size: 14px;" href="FAQs.html"> FAQ </a>
    <a class=" fw-bold pull-left subtitle pt-2" style="text-decoration: none;font-size: 14px;" href="contact.html"> CONTACT US </a>
    <br><br>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script type="text/javascript">
  function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

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

<script>
  document.getElementById('userprofile').addEventListener('submit', function (event) {
      event.preventDefault();  // Prevent the default form submission behavior

      // Display a confirmation dialog
      const confirmed = window.confirm('Are you sure you want to update your information?');

      // If user clicks "Cancel" in the confirmation dialog, do nothing
      if (!confirmed) {
          return;
      }

      const form = event.target;
      const formData = new FormData(form);

      // Use Fetch API to send the form data to the server
      fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}',
          },
      })
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          // Display a custom alert message
          alert('User profile updated successfully');
      })
      .catch(error => {
          // Handle errors if needed
          console.error('Error:', error);
      });
  });
</script>
</body>
</html>
