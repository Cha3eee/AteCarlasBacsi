@include('AdminHeaders.__headersAdmin-admin-manage-orders')

    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="/admin-dashboard#orders"><i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 500px"></i></a>      
      </center>
    </div> 
  <div id = "middlebox">
	 <table border="0" width="50%" cellpadding="60" cellspacing="0" align="center">
	 	<tr>
	 		<td>
	 			<div class="row jumbotron">
                <div class="conbox content2" style="width: 990px">
                  <font style="font-weight: 300; font-size: 30px; color: #615f5f;">Orders</font>
                  <font style="font-size: 20px; color: #615f5f">&nbsp;Customer Orders</font><br><br>
                   <div class="row jumbotron">
                    <hr>
                    <form method="POST" action="{{ route('user.status.complete.admin') }}">
                      @csrf
                      @method('PUT')
                     <div class="col-sm-12 form-group">
                          <label for="name-f">Order ID</label>
                          <input type="text" class="form-control input2" name="OID" id="OID" value=" {{$orders->orderID}} " required readonly>
                      </div>
                      
                      <div class="col-sm-2 form-group">
                        <label for="name-f">Customer ID</label>
                          <input type="text" class="form-control input2" name="CID" id="CID" value=" {{$orders->userID}} " required readonly>
                      </div>

                      <div class="col-sm-5 form-group">
                        <label for="name-f">Customer First Name</label>
                          <input type="text" class="form-control input2" name="fname" id="CID" value=" {{$orders->user_FirstName}} " required readonly>
                      </div>

                      <div class="col-sm-5 form-group">
                        <label for="name-f">Customer Last Name</label>
                          <input type="text" class="form-control input2" name="lname" id="CID" value=" {{$orders->user_LastName}} " required readonly>
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
                        <label for="name-f">Order Status</label>
                          <input type="text" class="form-control input2" name="order_Status" id="status" value="{{$orders->order_Status}}" required readonly>
                      </div>
                      <div class="col-sm-2 form-group">
                          <label for="age">Total Order Amount</label>
                          <input type="text" class="form-control input2" name="amount" id="status" value="{{$orders->order_TotalAmount}}" required readonly>
                          
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
                          <input type="text" class="input2" id="email" name="user_Email" required value="{{$orders->user_Email}}" readonly>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="pass">Phone Number</label>
                          <input type="tel" class="input2" id="number" name="number" required value="{{$orders->user_PhoneNum}}" readonly>
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="pass">Mode of Payment</label>
                          <input type="text" class="input2" id="MOP" name="MOP" required value="{{$orders->order_PaymentMode}}" readonly>
                      </div>
                      <div class="col-sm-12 form-group mb-0"><br>
                        <input type="submit" name="action" value="X REJECT" class="title" style="box-shadow: none; background-color: #D77976; border: 0px solid #1c1c1c; color: #834A48;" onclick="return confirm('Are you sure you want to cancel?');" />
                        <input type="submit" name="action" value="✔ APPROVE" class="title" style="box-shadow: none; background-color: #91C48A; color: #506D4C;" />
                    </div>

            </p>         
                  </div>
                </div>
              </form>
	 		</td>	
	 	</tr>
	 </table>
  </div>
</body>
</html>
