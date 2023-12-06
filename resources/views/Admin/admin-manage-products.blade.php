@include('AdminHeaders.__headersAdmin-admin-manage-products');
<form method = "post" action = " ">
    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="admin-dashboard#products"><i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 200px"></i></a>      
      </center>
    </div> 
  <div id = "middlebox">
   <table border="0" width="50%" cellpadding="60" cellspacing="0" align="center">
    <tr>
      <td>
        <div class="row jumbotron">
                <div class="conbox content2" style="width: 990px">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Products</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Manage Products</font><br><br>
                   <div class="row jumbotron">
                    <hr>
                   
                    <div class="col-sm-3 form-group">
                          <label for="name-f">Product ID</label>
                          <input type="text" class="form-control input2" name="Food_ID" id="prodID" value=" 10001 " required placeholder="Product ID">
                      </div>
                      <div class="col-sm-7 form-group">
                        <!-- Empty Grid -->
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="name-f">Product Name</label>
                          <input type="text" class="form-control input2" name="Food" id="prodName" value=" Cheesy Eggnog " required placeholder="Product Name" readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="name-l">Category</label>
                          <input type="text" class="form-control input2" name="Category" id="category" value=" Dessert " placeholder="Category">
                      </div>
                      <div class="col-sm-8 form-group">
                          <label for="qty">Description</label>
                          <textarea name = "Description" rows="5" cols="10"  type = "text" 
                            id = "qty" value="" required placeholder="Some description here..." readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)">A filipino style chinese fried rice. The rice is stir-fried with garlic, onion, bacon, and egg. But added with a little bit twist, it is topped with their special cheese sauce and fried garlic</textarea>
                      </div>
                      <div class="col-sm-2 form-group">
                          <label for="qty">Quantity</label>
                           <input name = "Quantity" type = "text" 
                            id = "qty" value="2" required placeholder="Quantity" readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)">
                      </div>
                      <div class="col-sm-2 form-group">
                          <label for="price">Price</label>
                          <input type="text" class="form-control  input2" name="Price" id="price" value="40.00" required placeholder="Price" readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)">
                      </div>

                       <div class="col-sm-12 form-group mb-0">
                        <br><br>
                         <input class="title" type="submit" name="submit" value="SAVE" style="box-shadow: none">

                         <a href="admin-dashboard#products"><input class="title" type="button" value="CANCEL" style="background-color: transparent; border: 1px solid #c0c0c0; color: #615f5f; box-shadow: none;"></a>

                         <input class="title" type="submit" value=" X DELETE" name="deleteprod" onclick="return confirm('Are you sure you want to delete?');" style="box-shadow: none; float: right; background-color:#EC5656">
                      </div>   
            <p align="center"><br>
               

                <a href='adminproducts.php?page=".($page-1)."' class='btn btn-danger' style='background: #8f8f8f; border-radius: 5vh; border: 0px solid; font-weight: bold'><i class='fa-solid fa-angle-left'></i></a>



                

                <a href='adminproducts.php?page=".$i."' class='btn btn-primary' style='color: #8f8f8f; font-size: 14.5px; font-family: Poppins; font-weight: bold; background-color: transparent; border: 0px solid; margin: 5px;'>1</a>

                
                <a href='adminproducts.php?page=".($page+1)."' class='btn btn-danger' style='background: #8f8f8f; border-radius: 5vh; border: 0px solid; font-weight: bold;'><i class='fa-solid fa-angle-right'></i></a>

                </p>
                            
                  </div>
                </div>
      </td> 
    </tr>
   </table>
  </div>
  <script type="text/javascript">
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
</form>
</body>
</html>