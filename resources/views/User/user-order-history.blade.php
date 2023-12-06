<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Order History</title>
	<link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="customercss/index-splash-design.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  <style type="text/css">
  	 body {
      background-color:  #FAF9F9;
      overflow-x: hidden;

    }
    .order-items-box {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        max-height: 200px;
        overflow-y: auto;
    }

 #leftbox {
      float:left; 
      background: #AF1D27;
      width:18%;
      height: 1120px;
      margin: auto;
  }

  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

   #middlebox{
      float:left; 
      background:#faf9f9;
      width:82%;
      height: auto;
      margin: auto;
  }

table {
  border: 0px solid dimgray;
  border-radius: 2vh;
  background-color: #faf9f9;
}

  label {
    font-weight: 400;
    color: #615f5f;
    margin-top: 8px;
    line-height: 2;
    font-size: 13.6px;
  }

     input[type=submit],  input[type=button] {
          background-color: #828282;
          border: none;
          color: #fff;
          padding: 15px 30px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
          font-size: 14px;
          width: 25%;
          font-weight: 500;
          box-shadow: 0 0 6px #1c1c1c;
          float: right;

      }

input[type=text], input[type=password], select, input[type=number], input[type=date], input[type=tel] {
  border-radius: 1vh; 
  border: 1px solid lightgray; 
  padding: 8px; 
  font-size: 14px;
  width: 100%;
  background-color:  #f9f9f9;
}

  .input2[type=text], .input2[type=password], select, .input2[type=date], .input2[type=email], .input2[type=tel], .input2[type=number]   {
      padding: 8px;
      border-radius: 1vh;
      width: 100%;
      background-color:  #f9f9f9;
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

  .container {
        text-align: left;
        background-color: white;
        width: 90%;
        padding: 30px;
        border: 1px solid transparent;

      }

    .topnav {
     overflow: hidden;
     background-color: #3C848C;
   }

   .topnav a {
     float: left;
     color: #EFFCFA;
     text-align: center;
     padding: 20px 50px;
     text-decoration: none;
     font-size: 17px;
   }

   .topnav a:hover {
     background-color: #ddd;
     color: black;
   }

   .topnav a.active {
     background-color: #DC3F4D;
     color: white;
   }
  </style>
</head>
<body>
    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="/user-profile"><i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 500px"></i></a>      
      </center>
    </div> 
  <div id = "middlebox">
	 <table border="0" width="50%" cellpadding="60" cellspacing="0" align="center">
	 	<tr>
	 		<td>
	 			<div class="row jumbotron">
                <div class="conbox content2" style="width: 990px">
                  <font style="font-weight: 300; font-size: 30px; color: #615f5f;">Order History</font>
                   <div class="row jumbotron">
                    <hr>
                      &nbsp;&nbsp;<input type="hidden" name="prod" readonly size="24" value= "">
                      <form method="POST" action="{{ route('user.status.complete') }}">
                        @csrf
                        @method('PUT')
                     <div class="col-sm-12 form-group">
                          <label for="name-f">Order ID</label>
                          <input type="text" class="form-control input2" name="OID" id="OID" value=" {{$orders->orderID}} " required readonly>
                      </div>
                      @if ($orders->orderItems)
                      <div class="col-sm-6 form-group">
                          <label for="name-l">Order(s)</label>
                          <div class="order-items-box">
                              <ul class="list-group">
                                  @foreach ($orders->orderItems as $orderItem)
                                      <li class="list-group-item">
                                          {{ $orderItem->product_name }} (x{{ $orderItem->order_quantity }})
                                      </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  @else
                      <div class="col-sm-6 form-group">
                          <label for="name-l">Order(s)</label>
                          <p>No items</p>
                      </div>
                  @endif 

                      <div class="col-sm-2 form-group">
                          <label for="age">Total Order Amount</label>
                          <input type="text" class="form-control input2" name="amount" id="status" value="{{$orders->order_TotalAmount}}.00" required readonly>
                          
                          <br>
                      </div>

                      <div class="col-sm-2 form-group">
                          <label for="age">Status</label>
                          <input type="text" class="form-control input2" name="amount" id="status" value="{{$orders->order_Status}}" required readonly>
                          <input type="hidden" class="form-control input2" name="order_Status" id="status" value="Completed" required readonly>
                          
                          <br>
                      </div>
          
                      <div class="col-sm-12 form-group">
                          <label for="phone">Delivery Instructions</label>
                          <input type="text" class="form-control input2" name="inst" id="inst" required style="height: 150px" value="{{$orders->order_DeliveryInstructions}}" required readonly>
                      </div>
                      <div class="col-sm-12 form-group">
                          <label for="email">Delivery Address</label>
                          <input type="text" class="form-control input2" name="address" id="province" required value="{{$orders->user_Address}}" readonly>
                      </div>
                    
                      
                      <div class="col-sm-3 form-group">
                          <label for="pass">Delivery Date</label>
                          <input type="text" class="input2" id="delDate" name="delDate" required value="{{$orders->order_DeliveryDate}}" readonly>
                      </div>
                      <div class="col-sm-3 form-group">
                          <label for="pass">Delivery Time</label>
                          <input type="text" class="input2" id="delTime" name="delTime" required value="{{$orders->order_DeliveryTime}}" readonly>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="pass">Email Address</label>
                          <input type="text" class="input2" id="email" name="email" required value="{{$orders->user_Email}}" readonly>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="pass">Phone Number</label>
                          <input type="tel" class="input2" id="number" name="number" required value="{{$orders->user_PhoneNum}}" readonly>
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="pass">Mode of Payment</label>
                          <input type="text" class="input2" id="MOP" name="MOP" required value="{{$orders->order_PaymentMode}}" readonly>
                      </div>
                      <div class="col-sm-6"> </div>
                      <div class="col-sm-6"> 
                        <br><br>
                          <p class="title" style="color: dimgray; font-weight: 500; font-size: 15px"><i class="fa-solid fa-bell"></i>&ensp;I have received my order(s):</p>
                      </div>

                      <div class="col-sm-12 form-group mb-0">
                        <input type="submit" name="action" value="X NO" class="title" style="box-shadow: none; background-color: #D77976; border: 0px solid #1c1c1c; color: #834A48;" onclick="return confirm('Are you sure you want to cancel?');" />
                        <input type="submit" name="action" value="✔ YES" class="title" style="box-shadow: none; background-color: #91C48A; color: #506D4C;" />
                    </div>
                      </form>
                      
            </p>         
                  </div>
                </div>
	 		</td>	
	 	</tr>
	 </table>
  </div>
</body>
</html>