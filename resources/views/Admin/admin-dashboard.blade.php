@include('AdminHeaders.__headersAdmin-dashboard')
<html lang="en" ng-app="myApp">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<body ng-controller="MyController">
  <form action="/add/product" method="POST" name="overall" enctype="multipart/form-data" >
    @csrf
    @if (session('admin'))
      @php $admin = session('admin') @endphp
 <div class="container-fluid xl mw-100 no-padding" style="background-image: url({{asset('img/aloginbg1.png')}});">
  <div class="row">
     <nav class="navbar navbar-expand-sm navbar-light px-5" style="height: 70px; background-color:  #AF1D27;
box-shadow: rgba(28, 28, 28, 0.45) 0px 25px 20px -20px;">
    <div class="container-fluid">

      <a href="admin-dashboard#dashboard"><img src="{{ asset('img/logo.png')}}" height="46" class="ps-5"></a>
    <a class="navbar-brand" style="font-weight: bolder; color: whitesmoke;margin-left: 10px; border: 2px solid white; padding: 10px; border-radius: 5vh; font-size: 14px;">ADMIN PANEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link active content" aria-current="page" href="admin-dashboard#profile" style="color:#faf9f9; font-size: 15px; ">Profile <i class='fas fa-user-circle' style="font-size: 18px"></i></a>
      </li>    
      </ul>     
    </div>
    </div>
  </nav>
</div>
</div>

<!-- Sidebar Panel -->
<div class="admin-panel clearfix title">
  <div class="slidebar">
    <div class="logo">
      <br><br>
      <center>
        <img src="img/adminn1.png" height="90" width="90">
      </center>
    </div>
    <br>
    <ul>
      <li><a href="#dashboard" id="targeted">
        <i class="fa fa-dashboard"></i>&ensp;dashboard </a></li>

     <div class="dropdown3">
        <li><a onclick="myFunction3()" class="dropbtn3" style="cursor: pointer;"><i class="fa-solid fa-clipboard-list"></i>&ensp;Orders
          <i class="fa-solid fa-caret-down" style="margin-left: 85px;"></i></a></li>
        <div id="myDropdown3" class="dropdown-content3">
          <li><a href="#orders">&emsp;&emsp;&ensp; > Pending Orders</a></li>
          <li><a href="#completed">&emsp;&emsp;&ensp; > Completed Orders</a></li>
          <li><a href="#cancelled">&emsp;&emsp;&ensp; > Cancelled Orders</a></li>
        </div>
    </div>

      <li><a href="#products"><i class="fa-solid fa-box"></i>&ensp;Products</a></li>

      <div class="dropdown">
        <li><a onclick="myFunction()" class="dropbtn" style="cursor: pointer;"><i class="fa-regular fa-user"></i>&ensp;Users 
          <i class="fa-solid fa-caret-down" style="margin-left: 85px;"></i></a></li>
        <div id="myDropdown" class="dropdown-content">
        <li><a href="#customers">&emsp;&emsp;&ensp; > Customers</a></li>
        <li><a href="#admin">&emsp;&emsp;&ensp; > Admin</a></li>
    </div>
    <li><a href="#profile"><i class="fa-regular fa-address-card"></i>&ensp;Profile</a></li>
  </div>
      <li><a href="/admin-login" onclick="return confirm('Are you sure want to logout?');" ><i class="fa-solid fa-right-from-bracket"></i>&ensp;Logout</a></li>
    </ul>
  </div>
<!-- Sidebar Panel -->

<!-- Topbar -->
  <div class="main title">
    <ul class="topbar clearfix">     
      <li>
        <div class="myDIV"><a href="#dashboard"><i class="fa fa-dashboard" style="color: dimgray"></i></div></a>
        <div class="hide">Dashboard</div>
      </li>

      <li>
        <div class="myDIV"><a href="adminlogin.php" onclick="return confirm('Are you sure want to logout?');" ><i class="fa-solid fa-right-from-bracket"></i></div></a>
        <div class="hide">Logout</div>
      </li>

      <li>
        <div class="myDIV"><a href="#orders"><i class="fa-solid fa-check-to-slot" style="color: dimgray"></i></div></a>
        <div class="hide">Manage&nbsp;Orders</div>
      <li>
        <div class="dropdown2">
          <div class="myDIV"><a onclick="myFunction2()"><i class="fa-solid fa-pen-to-square" style="color: dimgray;"></i></div></a>
          <div class="hide">Edit</div>
          <div class="dropdown-content2">
          <a href="adminproducts.php">Products</a>
          <a href="adminusers.php">Users</a>
          <a href="adminadmin.php">Admin</a>

        </div>
      </li>
      <li>
        <div class="dropdown2">
          <div class="myDIV"><a onclick="myFunction2()"><i class="fa-solid fa-circle-plus" style="color: dimgray;"></i></div></a>
          <div class="hide">Add</div>
          <div class="dropdown-content2">
          <a href="#products">Products</a>
          <a href="addadminadmin.php">Admin</a>
        </div>
      </li>

      
      <a style="width: 20%;">Welcome! {{ $admin->admin_Username }}</a>

    </ul>
<!-- Topbar -->

<!-- Dashboard -->


      <div class="row title">
      <div class="mainContent clearfix">
      <div id="dashboard" class="col-md-9">
        <h2 class="header"><span class="icon"></span>Dashboard</h2>
        <div class="row">
          <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
            <tr>
              <td colspan="2">
                <div class="conbox">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Welcome to Your Dashboard</font><br><br>
                  <p style="color:#c0c0c0; font-size: 15px" class="content2">
                    ➤ <font color="#615f5f">&nbsp;Start the day by processing orders or managing your products  now.</font><br>
                    ➤ <font color="#615f5f">&nbsp;Check your orders from time to time to avoid cancellation of orders from your customers.</font><br>

                    <center class="title">
                    <a href="#orders" class="button1" style="background-image: url(img/pink1.png);">
                      Process Orders <br><br><br><br><br>
                    </a>
                    <a href="#products" class="button1" style="background-image: url(img/yellow1.png);">
                      Check Product<br><br><br><br><br></a>
                    <a href="#customers" class="button1" style="background-image: url(img/blue1.png);">
                      Manage Customers<br><br><br><br><br>
                    </a>
                  </center>
                  </p>
                </div>
              </td>
            </tr>
            <!-- Dummy Posts -->
            <tr>
              <td width="50%">
                <div class="conbox">
                    <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Posts</font><br><br>
                    <p style="color:#c0c0c0; font-size: 15px" line-height: 0.3 class="content2">
                        ➤ There are <font color="#38a85c"><b>&nbsp;{{ $countApprovedOrders }} </b></font><font color="#615f5f"> Approved orders.</font><br>
                        ➤ There are <font color="#38a85c"><b>&nbsp;{{ $countPendingOrders }} </b></font><font color="#615f5f"> Pending orders. </font><br>
                        ➤ There are <font color="#38a85c"><b>&nbsp;{{ $countCompletedOrders }} </b></font><font color="#615f5f"> Completed orders. </font><br>
                        ➤ There are <font color="#38a85c"><b>&nbsp;{{ $countCancelledOrders }} </b></font><font color="#615f5f"> Cancelled/Rejected orders. </font><br><br>
                    </p> 
                </div>
            </td>
            
              <!-- Feedback Notification -->
              <td width="50%">
                <div class="conbox">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Feedback</font><br><br>

                  <p class="feedback content2">
                    <i class="fa-solid fa-circle-info" style="font-size: 12px; color: #E4D232"></i>&emsp;Some of your orders have not been processed yet. Process it <a href="#orders" style="color: dodgerblue;">now</a> before it gets too late. 
                  </p>

                  <p class="feedback2 content2" style="color: #faf9f9;">
                    <i class="fa-solid fa-thumbs-up" style="font-size: 12px; color: #faf9f9;"></i>&emsp;Hooray! One of your customer give you a positive feedback!
                  </p>
                </div>
              </td>
            </tr>
            <td colspan="2">
                <div class="conbox">
            <!-- Customer Table -->
            <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Customers Order Table</font><br><br>
            <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style=" border: 0px solid; border-collapse: collapse;">

                  
              
                    <tr style="font-size: 13px; color: dimgrey;  border-bottom: 1px solid #c0c0c0;">
                      <td>ORDER ID</td>
                      <td>CUSTOMER FIRST NAME</td>
                      <td>CUSTOMER LAST NAME</td>
                      <td>ORDER(s)</td>
                      <td>DATE ORDERED</td>
                      <td>DELIVERY DATE</td>
                      <td>STATUS</td>
                    </tr>
                    <tr>
                      @foreach ($ordersInformation as $ordersInformation)
                      <tr style="font-size: 15px; color: #615f5f; " class="content2">
                      <td> {{$ordersInformation->orderID}} </td>
                      <td> {{$ordersInformation->user_FirstName}} </td>
                      <td> {{$ordersInformation->user_FirstName}} </td>
                      <td> 
                        @if ($ordersInformation->orderItems)
                        @foreach ($ordersInformation->orderItems as $orderItem)
                            {{ $orderItem->product_name }} (x{{ $orderItem->order_quantity }}),
                        @endforeach
                    @else
                        No items
                    @endif </td>
                      <td> {{$ordersInformation->created_at}} </td>
                      <td> {{$ordersInformation->order_DeliveryDate}} </td>
                      <td> {{$ordersInformation->order_Status}} </td>
                    </tr>  
                    @endforeach
                  </table>
            </div>
            </td>
          </td>
      </tr>
      </table>
  </div>
</div>


<!-- Dashboard -->

<!-- Pending Orders -->
       <div id="orders" class="col-md-9">
         <h2 class="header"><span class="icon"></span>Manage Orders</h2>
        <div class="row mx-4">
            <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
            <tr>
              <td colspan="2">
                <div class="conbox content2">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Pending Orders Table</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Manage Pending Orders</font><br><br>
                  <!-- Search Bar -->

                  <input type="text" id="searchresult" placeholder="🔍︎ Search..." name="searchbar" value=""style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 14px; width: 40%; float: left;" >
                  <input type="submit" value="🔍︎ Search" name="searchsubmit" class="title" style="width: 10%; padding: 6px 10px; float: left; margin-left: 10px; font-size: 12px; border-radius: 1vh; box-shadow: none;">
                  <!-- Search Bar -->

                    <br><br>
                    <center class="title"1>

                    <br>

                      <!-- Display Table Design -->
                    
                      <table border="0" width="100%" cellpadding="7" cellspacing="0" align="center" style=" border: 0px solid; border-collapse: collapse;">
                    <tr style="font-size: 13px; color: dimgrey;  border-bottom: 2px solid #E6E8EB; background-color: #F7F7F7;">
                       <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;ORDER ID</td>
                      <td><i class="fa-solid fa-id-badge" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;CUSTOMER ID</td>
                      <td><i class="fa-solid fa-user" style="font-size: 12px; color: #cccaca;"></i>&emsp;FIRST NAME</td>
                      <td><i style="font-size: 12px; color: #cccaca;"></i>&emsp;LAST NAME</td>
                      <td><i class="fa-solid fa-cheese" style="font-size: 12px; color: #cccaca;"></i>&emsp;ORDER(s)</td>
                      <td><i class="fa-solid fa-calendar-check" style="font-size: 12px; color: #cccaca;"></i>&emsp;DATE ORDERED</td>
                      <td><i class="fa-solid fa-calendar-days" style="font-size: 12px; color: #cccaca;"></i>&emsp;DELIVERY DATE</td>
                      <td><i class="fa-solid fa-paper-plane" style="font-size: 12px; color: #cccaca;"></i>&emsp;STATUS</td>
                      <td style="text-align: center"><i class="fa-solid fa-location-crosshairs" style="font-size: 12px; color: #cccaca;"></i>&emsp;ACTION</td>
                    </tr>
                    @foreach ($ordersInfo as $orderInfo)
                      <tr style="font-size: 13px; color: #615f5f; border-bottom: 1px solid #F3F3F3;" class="content2">
                          <td>{{ $orderInfo->orderID }}</td>
                          <td>{{ $orderInfo->userID }}</td>
                          <td>{{ $orderInfo->user_FirstName }}</td>
                          <td>{{ $orderInfo->user_LastName }}</td>
                          <td>
                              @if ($orderInfo->orderItems)
                                  @foreach ($orderInfo->orderItems as $orderItem)
                                      {{ $orderItem->product_name }} (x{{ $orderItem->order_quantity }}),
                                  @endforeach
                              @else
                                  No items
                              @endif
                          </td>
                          <td>{{ $orderInfo->created_at }}</td>
                          <td>{{ $orderInfo->order_DeliveryDate }}</td>
                          <td>{{ $orderInfo->order_Status }}</td>
                          <td><center><a href='{{ route('admin.status.view', ['orderID' => $orderInfo->orderID]) }}'><button type="button" style="background-color:#828282; border: 0px solid; font-size: 12px; padding: 8px 10px; color: white; border-radius: 1vh; float: right; margin-left: 5px"><i class="fa-solid fa-truck-fast"></i>&emsp;Process Order</button></a></center></td>
                      </tr>
                  @endforeach

                </table>
                    <br>
                    </center>
                  </p>
                </div>
              </td>
            </tr>
          </table>
        </center>
      </div>
    </div>
<!-- End Pending Orders -->

<!-- Completed Orders -->
       <div id="completed" class="col-md-9">
         <h2 class="header"><span class="icon"></span>Manage Orders</h2>
        <div class="row mx-4">
            <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
            <tr>
              <td colspan="2">
                <div class="conbox content2">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Completed Orders Table</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Manage Completed Orders</font><br><br>
                  <!-- Search Bar -->

                  <input type="text" id="searchresult" placeholder="🔍︎ Search..." name="searchbar" value=""style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 14px; width: 40%; float: left;" >
                  <input type="submit" value="🔍︎ Search" name="searchsubmit" class="title" style="width: 10%; padding: 6px 10px; float: left; margin-left: 10px; font-size: 12px; border-radius: 1vh; box-shadow: none;">
                  <!-- Search Bar -->

                    <br><br>
                    <center class="title">

                      <!-- Display Table Design -->

                      <br>

                      <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style=" border: 0px solid; border-collapse: collapse; margin-top: 10px">
                    <tr style="font-size: 13px; color: dimgrey;  border-bottom: 2px solid #E6E8EB; background-color: #F7F7F7;">
                      <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;ORDER ID</td>
                      <td width=80><i class="fa-solid fa-id-badge" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;CUSTOMER ID</td>
                      <td width=20><i class="fa-solid fa-cheese" style="font-size: 12px; color: #cccaca;"></i>&emsp;ORDER(S)</td>
                      <td style="text-align: center"><i class="fa-solid fa-calendar-check" style="font-size: 12px; color: #cccaca;"></i>&emsp;DATE ORDERED</td>
                      <td style="text-align: center"><i class="fa-solid fa-calendar-days" style="font-size: 12px; color: #cccaca;"></i>&emsp;DELIVERY DATE</td>
                      <td style="text-align: center"><i class="fa-solid fa-paper-plane" style="font-size: 12px; color: #cccaca;"></i>&emsp;STATUS</td>
                      <td style="text-align: center"><i class="fa-solid fa-location-crosshairs" style="font-size: 12px; color: #cccaca;"></i>&emsp;ACTION</td>
                    </tr>

                    @foreach ($ordersComplete as $ordersComplete)
                     <tr style="font-size: 13px; color: #615f5f; border-bottom: 1px solid #F3F3F3; " class="content2">
                      <td> {{$ordersComplete->orderID}} </td>
                      <td> {{$ordersComplete->userID}} </td>
                      <td>
                        @if ($ordersComplete->orderItems)
                          @foreach ($ordersComplete->orderItems as $orderItem)
                              {{ $orderItem->product_name }} (x{{ $orderItem->order_quantity }}),
                          @endforeach
                      @else
                          No items
                    @endif
                    </td>
                      <td style="text-align: center"> {{$ordersComplete->created_at}} </td>
                      <td style="text-align: center"> {{$ordersComplete->order_DeliveryDate}} </td>
                      <td style="text-align: center"> {{$ordersComplete->order_Status}} </td>
                      <td><center><a href='{{ route('admin.status.view', ['orderID' => $ordersComplete->orderID]) }}'><button type="button" style="background-color:#828282; border: 0px solid; font-size: 12px; padding: 8px 10px; color: white; border-radius: 1vh; float: right; margin-left: 5px"><i class="fa-solid fa-truck-fast"></i>&emsp;Process Order</button></a></center></td>
                   </tr>
                   @endforeach
                  
                 </table><br><br>
                    <Br>

                    </center>
                  </p>
                </div>
              </td>
            </tr>
          </table>
        </center>
      </div>
    </div>
<!--End Completed Orders -->

<!--Cancelled Orders -->
       <div id="cancelled" class="col-md-9">
         <h2 class="header"><span class="icon"></span>Manage Orders</h2>
        <div class="row mx-4">
            <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
            <tr>
              <td colspan="2">
                <div class="conbox content2">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Cancelled Orders Table</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Manage Cancelled Orders</font><br><br>
                  <!-- Search Bar -->

                  <input type="text" id="searchresult" placeholder="🔍︎ Search..." name="searchbar" value=""style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 14px; width: 40%; float: left;" >
                  <input type="submit" value="🔍︎ Search" name="searchsubmit" class="title" style="width: 10%; padding: 6px 10px; float: left; margin-left: 10px; font-size: 12px; border-radius: 1vh; box-shadow: none;">
                  <!-- Search Bar -->

                    <br><br> 
                    <center class="title">

                      <!-- Display Table Design -->
                      
                      <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style=" border: 0px solid; border-collapse: collapse; margin-top: 10px">
                    <tr style="font-size: 13px; color: dimgrey;  border-bottom: 2px solid #E6E8EB; background-color: #F7F7F7;">
                      <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;ORDER ID</td>
                      <td width=80><i class="fa-solid fa-id-badge" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;CUSTOMER ID</td>
                      <td width=20><i class="fa-solid fa-cheese" style="font-size: 12px; color: #cccaca;"></i>&emsp;ORDER(S)</td>
                      <td style="text-align: center"><i class="fa-solid fa-calendar-check" style="font-size: 12px; color: #cccaca;"></i>&emsp;DATE ORDERED</td>
                      <td style="text-align: center"><i class="fa-solid fa-calendar-days" style="font-size: 12px; color: #cccaca;"></i>&emsp;DELIVERY DATE</td>
                      <td style="text-align: center"><i class="fa-solid fa-paper-plane" style="font-size: 12px; color: #cccaca;"></i>&emsp;STATUS</td>
                      <td style="text-align: center"><i class="fa-solid fa-location-crosshairs" style="font-size: 12px; color: #cccaca;"></i>&emsp;ACTION</td>
                    </tr>

                    @foreach ($ordersCancelled as $ordersCancelled)
                     <tr style="font-size: 13px; color: #615f5f; border-bottom: 1px solid #F3F3F3; " class="content2">
                      <td> {{$ordersCancelled->orderID}} </td>
                      <td> {{$ordersCancelled->userID}} </td>
                      <td>
                        @if ($ordersCancelled->orderItems)
                          @foreach ($ordersCancelled->orderItems as $orderItem)
                              {{ $orderItem->product_name }} (x{{ $orderItem->order_quantity }}),
                          @endforeach
                      @else
                          No items
                    @endif
                    </td>
                      <td style="text-align: center"> {{$ordersCancelled->created_at}} </td>
                      <td style="text-align: center"> {{$ordersCancelled->order_DeliveryDate}} </td>
                      <td style="text-align: center"> {{$ordersCancelled->order_Status}}</td>
                      <td><center><a href='{{ route('admin.status.view', ['orderID' => $ordersCancelled->orderID]) }}'><button type="button" style="background-color:#828282; border: 0px solid; font-size: 12px; padding: 8px 10px; color: white; border-radius: 1vh; float: right; margin-left: 5px"><i class="fa-solid fa-truck-fast"></i>&emsp;Process Order</button></a></center></td>
                  </tr>
                  @endforeach
                 </table><br><br>
                    <Br>
                    </center>
                  </p>
                </div>
              </td>
            </tr>
          </table>
        </center>
      </div>
    </div>
<!-- End Cancelled Orders -->

<!-- Products -->
<form action="" method="POST" enctype="multipart/form-data" >
  @csrf
  <div id="products" class="col-md-9" style="z-index: 4;">
      <h2 class="header"><span class="icon"></span>Manage Products</h2>
      <div class="row mx-4">
          <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
              <tr>
                  <td colspan="2">
                      <div class="conbox content2">
                          <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Product Inventory</font>
                          <font style="font-size: 14px; color: #615f5f">Add Product</font>
                          <br><br>
                          <div class="title">
                              <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style=" border: 0px solid;">
                                  <td width="15%">
                                      <h5 style="font-size: 14px; font-weight: 400">Product ID</h5>
                                      <?php
                                          function productID($length = 6)	{
                                            return substr(str_shuffle("0123456789"), 0, $length);
                                          }
                                            $productID = productID();
                                      ?>
                                    <input type="text"
                                            placeholder="Product ID"
                                            name="productID"
                                            id="productID"
                                            style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 12px; width: 100%; background-color: #EEEEEE; color: #808080"
                                            value=""
                                            readonly>
                                     
                                  </td>
                          </td>
                          <td>
                            <h5 style="font-size: 14px; font-weight: 400">Product Name</h5>
                          <input type="text" placeholder="Product Name" name="product_name" style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 12px; width: 100%" value="">
                          </td>
                           <td>
                            <h5 style="font-size: 14px; font-weight: 400">Category</h5>
                            <select name="product_category" id="cars" style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 12px; width: 100%;" onchange="updateProductID()">
                              <option value="Muncheese">Muncheese</option>
                              <option value="Silog">Silog</option>
                              <option value="Desserts">Desserts</option>
                              <option value="Sandwiches">Sandwiches</option>
                          </select>
                          </td>
                          <td width="10%">
                            <h5 style="font-size: 14px; font-weight: 400">Price</h5>
                             <input type="number" placeholder="Price" name="product_price" style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 12px;" value="">
                          </td>
                          <td width="10%">
                            <h5 style="font-size: 14px; font-weight: 400">Qty</h5>
                             <input type="number" placeholder="Qty" name="product_quantity" style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 12px;" value="">
                         
                          <tr>

                          <td width="15%" colspan="4">
                            <textarea rows="6" cols="10" name="product_desc" placeholder="Some product description here..." style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 12px; width: 100%" value=""></textarea>  
                          </td>
                  


                          <!-- File Upload Products -->
                          <td class="content2" width="20%">
                              <input type="file" id="myFile" name="product_image" style="font-size: 12px;">

                              <input type="submit" value="Add Product" class="title" name="addproduct" style="font-size: 12px; float: right; background-color:#F8F8FA; border: 0px solid; font-size: 12px; padding: 5px 10px; color: #1c1c1c; border-radius: 1vh; width: 50%; box-shadow: none;">


                          </td>
                        </tr>
                    <!-- Products Table -->
                    <tr>

                      <!-- Display Table Design -->
                    <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style=" border: 0px solid; border-collapse: collapse; margin-top: -5px;">
                    <hr style="margin-top: 0px">

                      <font style="font-size: 14px; color: #615f5f" class="content2">Products Table</font> <br><br>
                      <!-- Search Bar -->

                    <input type="text" id="searchresult" placeholder="🔍︎ Search..." name="searchbarprod" style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 14px; width: 40%; float: left;" >
                  <input type="submit" value="🔍︎ Search" name="searchsubmitproducts" class="title" style="width: 10%; padding: 6px 10px; float: left; margin-left: 10px; font-size: 12px; border-radius: 1vh; ; box-shadow: none;">

                    <!-- Display Table Design AND SEARCH SA ORDERS START-->

                     <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style=" border: 0px solid; border-collapse: collapse; margin-top: 65px ">
                     <tr style="font-size: 13px; color: dimgrey;  border-bottom: 2px solid #E6E8EB; background-color: #F7F7F7;">
                      <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;FOOD ID</td>
                      <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;CATEGORY</td>
                      <td><i class="fa-solid fa-bowl-food" style="font-size: 12px; color: #cccaca;"></i>&emsp;PRODUCT NAME</td>
                      <td style="text-align: center"><i class="fa-solid fa-question" style="font-size: 12px; color: #cccaca;"></i>&emsp;QUANTITY</td>
                      <td style="text-align: center"> <i class="fa-solid fa-calendar-days" style="font-size: 12px; color: #cccaca;"></i>&emsp;PRICE</td>
                      <td  style="text-align: center"><i class="fa-solid fa-location-crosshairs" style="font-size: 12px; color: #cccaca;"></i>&emsp;ACTION</td>
                      </tr>
                      @foreach ($products as $productInfo) 
                    <tr style="font-size: 13px; color: #615f5f; border-bottom: 1px solid #F3F3F3;" class="content2">
                      <td> {{$productInfo->productID}} </td>
                      <td> {{$productInfo->product_category}} </td>
                      <td> {{$productInfo->product_name}} </td>
                      <td style="text-align: center"> {{$productInfo->product_quantity}} </td>
                      <td style="text-align: center"> {{$productInfo->product_price}} </td>
                      <td><center><a href='{{ route('admin.products.view', ['prodID' => $productInfo->productID]) }}'><button type="button" style="background-color:#828282; border: 0px solid; font-size: 12px; padding: 8px 10px; color: white; border-radius: 1vh; float: right;">Manage Product</button></a></center></td>


                    </tr>
                    @endforeach
                  </table><br><br>
                    </div>
                  </p>
                </div>
              </td>
            </tr>
          </table>
      </div>
    </div>
  </form>
<!-- End Products -->

<!-- User: Customer -->
       <div id="customers" class="col-md-9">
         <h2 class="header"><span class="icon"></span>Customers</h2>
        <div class="row mx-4">
            <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
            <tr>
              <td colspan="2">
                <div class="conbox content2">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Users Table</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Manage Customer Profile</font><br><br>
                  <!-- Search Bar -->
                  <input type="text" id="searchresult" placeholder="🔍︎ Search..." name="searchbarcust" value=""style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 14px; width: 40%; float: left;" >
                  <input type="submit" value="🔍︎ Search" name="searchsubmitcust" class="title" style="width: 10%; padding: 6px 10px; float: left; margin-left: 10px; font-size: 12px; border-radius: 1vh; box-shadow: none;">
                  <!-- Search Bar -->

                    

                    <br><br>
                    <center class="title">
                    <!-- Display Table Design AND SEARCH SA ORDERS START-->

                     <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style=" border: 0px solid; border-collapse: collapse; margin-top: 10px;">
                      <tr style="font-size: 13px; color: dimgrey;  border-bottom: 2px solid #E6E8EB; background-color: #F7F7F7;">
                      <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;CUSTOMER ID</td>
                      <td><i class="fa-solid fa-user" style="font-size: 12px; color: #cccaca;"></i></i>&emsp;FIRST NAME</td>
                      <td><i style="font-size: 12px; color: #cccaca;"></i>&emsp;LAST NAME</td>
                      <td><i class="fa-solid fa fa-address-card" style="font-size: 12px; color: #cccaca;"></i>&emsp;USERNAME</td>
                      <td><i class="fa-solid fa-calendar-days" style="font-size: 12px; color: #cccaca;"></i>&emsp;EMAIL</td>
                      <td><i class="fa-solid fa-cog" style="font-size: 12px; color: #cccaca;"></i>&emsp;ACTION</td>
                      </tr>
                     @foreach ($customerInfo as $customerInfo)
                         
                     
                    <tr style="font-size: 13px; color: #615f5f; border-bottom: 1px solid #F3F3F3;" class="content2">
                      <td> {{$customerInfo->userID}} </td>
                      <td> {{$customerInfo->user_FirstName}} </td>
                      <td> {{$customerInfo->user_LastName}}</td>
                      <td> {{$customerInfo->user_Username}} </td>
                      <td> {{$customerInfo->user_Email}}</td>
                      <td>
                        <a href="{{ route('admin.user.view', ['userID' => $customerInfo->userID]) }}">
                          <button type="button" style="background-color:#828282; border: 0px solid; font-size: 12px; padding: 8px 10px; color: white; border-radius: 1vh; float: right; margin-left: 5px">
                            <i class="fa-solid fa-user"></i>&emsp;Manage Customer
                          </button>
                        </a>
                      </td>
                      
                    </tr>
                    @endforeach
                 </table><br><br>
                    </center>
                  </p>
                </div>
              </td>
            </tr>
          </table>
        </center>
      </div>
    </div>
<!-- End of Customers -->

<!-- User: Admin -->
        <div id="admin" class="col-md-9">
         <h2 class="header"><span class="icon"></span>Administrator</h2>
        <div class="row mx-4">
            <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
            <tr>
              <td colspan="2">
                <div class="conbox content2">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Users Table</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Manage Admin Profile</font><br><br>

                  <input type="text" id="searchresult" placeholder="🔍︎ Search..." name="searchbaradmin" value=""style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 14px; width: 40%; float: left;" >
                  <input type="submit" value="🔍︎ Search" name="searchsubmitadmin" class="title" style="width: 10%; padding: 6px 10px; float: left; margin-left: 10px; font-size: 12px; border-radius: 1vh; ; box-shadow: none;">
                  <!-- Search Bar -->

                    <a href="admin-add-admin"><button type="button" style="background-color:#F8F8FA; border: 0px solid; font-size: 12px; padding: 8px 10px; color: #1c1c1c; border-radius: 1vh; float: right; margin-left: 5px"><i class="fa-solid fa-plus"></i>&emsp;Add Admin</button></a>

                   

                    <br><br>
                    <center class="title">
                     <!-- Display Table Design AND SEARCH SA ORDERS START-->
                  
                     <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center" style="border: 0px solid; border-collapse: collapse; margin-top: 10px;">
                      <tr style="font-size: 13px; color: dimgrey; border-bottom: 2px solid #E6E8EB; background-color: #F7F7F7;">
                          <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i>&emsp;ADMIN ID</td>
                          <td><i class="fa-solid fa-list-ol" style="font-size: 12px; color: #cccaca;"></i>&emsp;FIRST NAME</td>
                          <td><i class="fa-solid fa-user" style="font-size: 12px; color: #cccaca;"></i>&emsp;LAST NAME</td>
                          <td><i class="fa-solid fa-question" style="font-size: 12px; color: #cccaca;"></i>&emsp;GENDER</td>
                          <td><i class="fa-solid fa-calendar-days" style="font-size: 12px; color: #cccaca;"></i>&emsp;USERNAME</td>
                          <td><i class="fa-solid fa-calendar-days" style="font-size: 12px; color: #cccaca;"></i>&emsp;ACTION</td>
                      </tr>
                  
                      @foreach ($admins as $admininfo) 
                      <tr style="font-size: 13px; color: #615f5f; border-bottom: 1px solid #F3F3F3; " class="content2">
                          <td> {{$admininfo->adminID}} </td>
                          <td> {{$admininfo->admin_FirstName}} </td>
                          <td> {{$admininfo->admin_LastName}} </td>
                          <td> {{$admininfo->admin_Gender}} </td>
                          <td> {{$admininfo->admin_Username}} </td>
                          <td>
                            <a href='{{ route('manage.admin.view', ['adminID' => $admininfo->adminID]) }}'>
                                  <button type="button" style="background-color:#828282; border: 0px solid; font-size: 12px; padding: 5px 10px; color: white; border-radius: 1vh; float: right; margin-left: 2px; text-align: center;">
                                      <i class="fa-solid fa-gear"></i>&emsp;Manage
                                  </button>
                              </a>
                          </td>
                      </tr>
                      @endforeach
                  </table>
                  
                  <br><br>

                  <!-- Display Table Design AND SEARCH SA ORDERS END-->
                    </center>
                  </p>
                </div>
              </td>
            </tr>
          </table>
        </center>
      </div>
    </div>
    <!-- End of Admin -->
    
   <!-- Admin Profile -->
      <div id="profile" class="col-md-9">
         <h2 class="header"><span class="icon"></span>Profile</h2>
        <div class="row mx-5">
          <form method="POST" action="{{ route('admin.profile.update', ['adminID' => auth()->user()->id]) }}" id="adminprofile">
            @csrf
            @method('PUT')
            <input type="hidden" name="adminID" value="{{ auth()->user()->id }}">
            <table border="0" width="100%" cellpadding="10" cellspacing="0" align="center">
                <tr>
                    <td>
                        <div class="row jumbotron">
                            <div class="conbox content2">
                                <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Admin Profile</font>
                                <font style="font-size: 14px; color: #615f5f">&nbsp;Your Profile</font><br><br>
                                <div class="row jumbotron">
                                    <!-- Input Fields -->
                                    <div class="col-sm-6 form-group">
                                        <label for="name-f">First Name</label>
                                        <input type="text" class="form-control input2" name="admin_FirstName" id="name-f" value="{{ auth()->user()->admin_FirstName }}" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="name-l">Last Name</label>
                                        <input type="text" class="form-control input2" name="admin_LastName" id="name-l" value="{{ auth()->user()->admin_LastName }}" placeholder="Last Name">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control input2" name="admin_PhoneNum" id="phonenum" value="{{ auth()->user()->admin_PhoneNum }}" placeholder="Phone number">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control input2" name="admin_Email" id="email" value="{{ auth()->user()->admin_Email }}" placeholder="Email">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="tel">Username</label>
                                        <input type="tel" name="admin_Username" class="form-control input2" id="tel" value="{{ auth()->user()->admin_Username }}" placeholder="Username">
                                    </div>
                                    <div class="col-sm-12 form-group mb-0">
                                        <br>
                                        <a href="admindashboard.php#dashboard"><input class="title" type="button" value="CANCEL" style="background-color: transparent; border: 1px solid #c0c0c0; color: #615f5f; box-shadow: none"></a>
                                        <input class="title" type="submit" value="SAVE" style="box-shadow: none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        
        
          
        </center>
      </div>
    </div>
     </div>
   </div>

   <!-- End of Admin Profile -->
  </div>
   </div>
</div>

<!-- Javascript -->
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show3");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show3')) {
        openDropdown.classList.remove('show3');
      }
    }
  }
}

function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show2");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show2')) {
        openDropdown.classList.remove('show2');
      }
    }
  }
}

 function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}

  function getAge(){
    var u_Birthday = document.getElementById('date').value;
    u_Birthday = new Date(u_Birthday);
    var today = new Date();
    var u_Age = Math.floor((today-u_Birthday) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('u_Age').value=u_Age;
}
function onDoubleClick(elem) {
  console.log('toggling readonly property');
  var element = $(elem);
  element.prop('readonly', !element.prop('readonly')); // toggle
}

function lostFocus(elem) {
  console.log('lostFocust');
  var element = $(elem);
  element.prop('readonly', true);
}
</script>
<!-- Javascript -->

<script>
  function generateRandomString(length) {
      const characters = '0123456789';
      let result = '';
      for (let i = 0; i < length; i++) {
          result += characters.charAt(Math.floor(Math.random() * characters.length));
      }
      return result;
  }

  function updateProductID() {
      var selectedOption = $("#cars option:selected").text();
      var generatedID = selectedOption.substring(0, 3, 4).toUpperCase() + "-" + generateRandomString(8);
      $("#productID").val(generatedID);
  }

  // Call the function on page load if you want to initialize the Product ID
  updateProductID();
</script>
<script>
  document.getElementById('adminprofile').addEventListener('submit', function (event) {
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
</form>
</body>
</html>
@endif