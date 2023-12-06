@include('AdminHeaders.__headersAdmin-admin-orders');
  <form method="POST" action = "">
    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="admin-dashboard#orders"><i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 500px"></i></a>      
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
                   
                      &nbsp;&nbsp;<input type="hidden" name="prod" readonly size="24" value= "">
                     <div class="col-sm-12 form-group">
                          <label for="name-f">Order ID</label>
                          <input type="text" class="form-control input2" name="OID" id="OID" value=" 19029 " required readonly>
                      </div>
                      
                      <div class="col-sm-2 form-group">
                        <label for="name-f">Customer ID</label>
                          <input type="text" class="form-control input2" name="CID" id="CID" value=" 10001 " required readonly>
                      </div>

                      <div class="col-sm-5 form-group">
                        <label for="name-f">Customer First Name</label>
                          <input type="text" class="form-control input2" name="fname" id="CID" value=" Angela Roger " required readonly>
                      </div>

                      <div class="col-sm-5 form-group">
                        <label for="name-f">Customer Last Name</label>
                          <input type="text" class="form-control input2" name="lname" id="CID" value=" Yin " required readonly>
                      </div>

                       <div class="col-sm-6 form-group">
                          <label for="name-l">Order(s)</label>
                          <textarea name="prodName" rows="6" cols="80" class="form-control input2"  id="prodName" readonly placeholder="Oreo overloadz (x2), Angus Beef (x4)"></textarea><br><br>
            
                      </div>
                      
                     <div class="col-sm-2 form-group">
                        <label for="name-f">Order Status</label>
                          <input type="text" class="form-control input2" name="status" id="status" value="Pending" required readonly>
                      </div>
                      <div class="col-sm-2 form-group">
                          <label for="age">Total Order Amount</label>
                          <input type="text" class="form-control input2" name="amount" id="status" value="₱ 750" required readonly>
                          
                          <br>
                      </div>
          
                      <div class="col-sm-12 form-group">
                          <label for="phone">Delivery Instructions</label>
                          <input type="text" class="form-control input2" name="inst" id="inst" required style="height: 150px" value="Extra sauce please. Thank you." required readonly>
                      </div>
                      <div class="col-sm-12 form-group">
                          <label for="email">Delivery Address</label>
                          <input type="text" class="form-control input2" name="address" id="province" required value="#44 Champaraca St. Boni Ave., Malaon City" readonly>
                      </div>
                    
                      
                      <div class="col-sm-3 form-group">
                          <label for="pass">Delivery Date</label>
                          <input type="text" class="input2" id="delDate" name="delDate" required value=" November 23, 2023" readonly>
                      </div>
                      <div class="col-sm-3 form-group">
                          <label for="pass">Delivery Time</label>
                          <input type="text" class="input2" id="delTime" name="delTime" required value=" November 24, 2023" readonly>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="pass">Email Address</label>
                          <input type="text" class="input2" id="email" name="email" required value="angela@gmail.com" readonly>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="pass">Phone Number</label>
                          <input type="tel" class="input2" id="number" name="number" required value="0123-456-7891" readonly>
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="pass">Mode of Payment</label>
                          <input type="text" class="input2" id="MOP" name="MOP" required value=" Cash on Delivery " readonly>
                      </div>
                      <div class="col-sm-12 form-group mb-0">
                        <br>
                         <a href=""><input class="title" type="submit" name="reject" value="X REJECT" style="background-color: #D77976; border: 0px solid #1c1c1c; color: #834A48; box-shadow: none;"></a>
                        <input class="title" type="submit" name="approve" value="✓ APPROVE" style="box-shadow: none; background-color: #91C48A; color: #506D4C">
                      </div>
                    </div>
                  </form>
                        
                  </div>  
 
              <p align="center"><br><br>
                
              <a href='admin-process-orders?page="1"' class='btn btn-danger' style='background: #8f8f8f; border-radius: 5vh; border: 0px solid; font-weight: bold'><i class='fa-solid fa-angle-left'></i></a>


              <a href='admin-process-orders?page="2' class='btn btn-primary' style='color: #8f8f8f; font-size: 14.5px; font-family: Poppins; font-weight: bold; background-color: transparent; border: 0px solid; margin: 5px;'>1</a>


              <a href='admin-process-orders?page="3' class='btn btn-danger' style='background: #8f8f8f; border-radius: 5vh; border: 0px solid; font-weight: bold;'><i class='fa-solid fa-angle-right'></i></a>

            </p>         
                  </div>
                </div>
	 		</td>	
	 	</tr>
	 </table>
  </div>
</body>
</html>