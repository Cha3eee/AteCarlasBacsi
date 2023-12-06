<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
<!--   <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Food Order Summary</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="customercss/products-design.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">           
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style type="text/css">
    
    a {
      color: white;

    }

    a:hover {
      color: white;
      text-decoration: none;
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
  


<body>

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
          <i class="fas fa-shopping-cart" style='color: #615f5f; background-color: white; padding: 10px; border-radius: 50%;'></i>
          <span id="cart-item" class="badge badge-danger" style="position: absolute; top: -5px; right: -5px;">0</span> <!-- Display number of items here -->
        </a>
      </li>
    </ul>
  </div>
</nav>

    <nav class="navbar navbar-expand-md navbar-dark p-2" style="background-color:  #AF1D27; box-shadow: rgba(28, 28, 28, 0.45) 0px 25px 20px -20px;">
  <div class="container-fluid px-5 ps-5">
    
    <a href="user-ordering-page"><img src="img/logo.png" height="46" class="ps-5"></a>
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
          <a class="nav-link" href="homepage">HOME </b></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href=""> NEWS</a>
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
          <a class="nav-link" href="services-and-products"><b style="color: #F9AF41; font-weight: 800;"> PRODUCTS</b></a>
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
<br><br>


  <div class="container"  style="background-color: #FEFEFE; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        </div> 
        <div class="table-responsive mt-2">
          <table class="table text-center" style="border-collapse: collapse; font-size: 14px">
            <thead>
                <tr>
                
                    <td colspan="7" style="border: 0px solid transparent;">
                        <h4 class="text-left m-0 title" style="font-weight: bold; font-size: 30px; padding: 30px">My Cart</h4>
                    </td>
                </tr>
                
                <tr style="border-bottom: 0px solid; font-size: 15px; color: dimgray; text-align: left; background-color: #F2F3F5; "
                    class="title">
                    <th style="padding: 30px; border: 0px solid transparent; text-align: center;">ID</th>
                    <th style="padding: 30px; border: 0px solid transparent;">PRODUCT</th>
                    <th style="padding: 30px; border: 0px solid transparent;">PRICE</th>
                    <th style="padding: 30px; border: 0px solid transparent;">QUANTITY</th>
                    <th style="padding: 30px; border: 0px solid transparent;">TOTAL PRICE</th>
                    <th style="padding: 30px; border: 0px solid transparent;">
                      <form id="clearForm" action="{{ route('clearCart') }}" method="POST">
                        @csrf
                        <center><a href="user-ordering-page" class="badge-danger badge p-1"
                                onclick="return confirmClear();" style="background-color:  #AF1D27; padding: 2px 4px"><i
                                    class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a></center>
                    </form>
                    
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php
                    $cartItems = session('cart', []);
                    $totalAmount = 0;
                    @endphp
                    @foreach($cartItems as $item)
                    @php
                    $itemTotal = $item['product_price'] * $item['order_quantity'];
                    $totalAmount += $itemTotal;
                    @endphp
        
                    <tr class="cart-item-row" id="row_{{ $item['productID'] }}">
                        <td style="padding: 36px">{{ $item['productID'] }}</td>
                        <input type="hidden" class="pid" value="">
        
                        <td style="text-align: left; padding: 36px">{{ $item['product_name'] }}</td>
                        <td style="padding: 36px">
                            <i class="fa-solid fa-peso-sign"></i>&nbsp;&nbsp; {{ $item['product_price'] }}
                        </td>
                        <input type="hidden" class="pprice" value="{{ $item['product_price'] }}">
                        <td style="padding: 36px">
                            <input type="number" class="form-control itemQty" style="width:75px;" min="0"
                                oninput="updatePrice('{{ $item['productID'] }}')" name="qty"
                                value="{{ $item['order_quantity'] }}" readonly>
                        </td>
                        <td id="priceDisplay_{{ $item['productID'] }}" style="text-align: left; padding: 36px">
                            <i class="fa-solid fa-peso-sign"></i>&nbsp;&nbsp;{{ number_format($itemTotal, 2) }}
                        </td>
                        <form id="clearItem" action="" method="POST">
                          @csrf
                        <td style="padding: 36px">
                            <a href="#" class="text-danger lead"
                                onclick="return removeItem('{{ $item['productID'] }}');"
                                style="font-size: 17px; font-weight: 400;">
                                <i class="fa-solid fa-xmark"></i>
                            </a>
                        </td>
                        </form>
                    </tr>
                    @endforeach
        
                    <tr>
                        <td colspan="2" style="padding: 36px">
                            <a href="user-ordering-page" class="btn"
                                style="background-color:#F9AF41; color: #1c1c1c; padding: 8px 20px; font-weight: 500; font-size: 15px"><i
                                    class="fa-solid fa-angle-left"></i>&nbsp;Back to Menu</a>
                        </td>
                        <td colspan="2" style="padding: 36px"><b style="color: dimgray">Total Amount:</b></td>
                        <td style="color:  #AF1D27; text-align: left; padding: 36px">
                            <b>Total: <span id="totalAmount">{{ number_format($totalAmount, 2) }}</span></b>
                        </td>
                        <td style="padding: 36px">
                            <a href="user-order-checkout" onclick="confirm('Do you want to proceed in placing your order?')"><button type="submit" name="checkout"
                                    class="btn text-white"
                                    style="background-color: #6E6E6DFF; border: 0px solid; font-weight: 500; font-size: 15px; padding: 8px 20px"><i
                                        class="fa-solid fa-credit-card" style="font-size: 13px"></i>&ensp;CHECKOUT</a></button>
                        </td>
                    </tr>
            </tbody>
        </table>

        
        </div>
      </div>

    </div>
  </div>

  <br><br><br>
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
            <a href="about-us">About Us</a>
          </p>
          <p>
            <a href="services-and-products">Products</a>
          </p>
          <p>
            <a href="personnel-about">Our Team</a>
          </p>
          <p>
            <a href="contact-us">Contact Us</a>
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
            <a href="homepag">Home</a>
          </p>
          <p>
            <a href="FaQs">Support</a>
          </p>
          <p>
            <a href="FaQs">FAQ</a>
          </p>
        </div>

        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3  caption  py-3" style="text-align: left; font-size: 14px;">
          <!-- Links -->
          <h6 class=" subtitle text-uppercase" style="color:  #faf9f9; font-size: 14px; text-align: left;">
            NEWS
          </h6>
          <p>
            <a href="news">Events & Promos</a>
          </p>
          <p>
            <a href="customer-reviews">Reviews</a>
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
    <a class="pull-left subtitle pt-2" style="text-decoration: none; font-size: 14px;" href="homepage"> HOME </a>
    <a class=" fw-bold pull-left subtitle pt-2" style="text-decoration: none;font-size: 14px;" href="FaQs"> FAQ </a>
    <a class=" fw-bold pull-left subtitle pt-2" style="text-decoration: none;font-size: 14px;" href="contact-us"> CONTACT US </a>
  </div>
  <br><br>
  <!-- Copyright -->
</footer>
<script>
  function updatePrice(productId) {
      var quantity = parseInt(document.querySelector('#row_' + productId + ' .itemQty').value);
      var pricePerItem = parseFloat(document.querySelector('#row_' + productId + ' .pprice').value);
      var totalPrice = quantity * pricePerItem;

      document.querySelector('#priceDisplay_' + productId).innerHTML = '<i class="fa-solid fa-peso-sign"></i>&nbsp;&nbsp;' + totalPrice.toFixed(2);

      // Update total amount
      updateTotalAmount();
  }

  function updateTotalAmount() {
      var totalAmount = 0;
      var rows = document.querySelectorAll('tbody tr');

      rows.forEach(function (row) {
          var totalPriceCell = row.querySelector('[id^="priceDisplay_"]');
          if (totalPriceCell) {
              totalAmount += parseFloat(totalPriceCell.textContent.replace(/[^\d.]/g, ''));
          }
      });

      // Display the total amount
      document.querySelector('#totalAmount').textContent = totalAmount.toFixed(2);
  }


</script>

<!-- Your HTML code ... -->

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
  function confirmClear() {
      if (confirm('Are you sure you want to clear your cart?')) {
          // Use Fetch API to make an asynchronous request
          fetch('{{ route('clearCart') }}', {
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


<script>
  function removeItem(productId) {
      if (confirm('Are you sure you want to remove this item?')) {
          fetch('{{ url('clear-item') }}/' + productId, {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
              },
          })
          .then(response => response.json())
          .then(data => {
              if (data.message) {
                  // Display SweetAlert success message
                  swal({
                      title: "Success",
                      text: data.message,
                      icon: "success",
                  });

                  // Add a slight delay before reloading the page
                  setTimeout(function() {
                      location.reload();
                  }, 1000); // 1000 milliseconds = 1 second
              }
          })
          .catch(error => {
              console.error('Error removing item:', error);
          });

          return true;
      }
      return false;
  }
</script>







</body>

</html>
