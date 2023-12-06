@include('AdminHeaders.__headersAdmin-admin-products-perpage')

<form method="POST" action="{{ route('demo.update', ['prodID' => $products->productID]) }}" id="productsperpage">
  @csrf
  @method('PUT')
    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="{{ route('admin.dashboard.products') }}">
          <i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 200px"></i>
      </a>
        
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
                          <input type="text" class="form-control input2" name="Food_ID" id="prodID" value="{{$products->productID}}" required placeholder="Product ID" readonly>
                      </div>
                      <div class="col-sm-7 form-group">
                        <!-- Empty Grid -->
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="name-f">Product Name</label>
                          <input type="text" class="form-control input2" name="product_name" id="prodName" value="{{$products->product_name}}" required placeholder="Product Name">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="name-l">Category</label>
                          <input type="text" class="form-control input2" name="product_category" id="category" value="{{$products->product_category}} " placeholder="Category" readonly>
                      </div>
   
                      <div class="col-sm-2 form-group">
                          <label for="qty">Quantity</label>
                           <input name = "product_quantity" type = "text" 
                            id = "qty" value=" {{$products->product_quantity}} " required placeholder="Quantity" ondblclick="onDoubleClick(this)" onblur="lostFocus(this)">
                      </div>
                      <div class="col-sm-3 form-group">
                          <label for="price">Price</label>
                          <input type="text" class="form-control  input2" name="product_price" id="price" value=" {{$products->product_price}}" required placeholder="Price">
                      </div>
                           <div class="col-sm-8 form-group">
                          <label for="qty">Description</label>
                          <textarea rows="6" cols="10" name="product_desc" placeholder="Some product description here..." style="border-radius: 1vh; border: 1px solid lightgray; padding: 6px 15px; font-size: 12px; width: 100%">{{$products->product_desc}}</textarea>

                      </div>
                     
                      </p>
                      <div class="col-sm-12 form-group mb-0">
                        <br><br>
                         <input class="title" type="submit" id="submit" name="submit" value="SAVE" style="box-shadow: none">

                         <a href="{{ route('admin.dashboard.products') }}"><input class="title" type="button" value="CANCEL" style="background-color: transparent; border: 1px solid #c0c0c0; color: #615f5f; box-shadow: none;"></a>
                      </form>
                      <form method="POST" action="{{ route('product.delete', ['prodID' => $products->productID]) }}">
                        @csrf
                        @method('DELETE')

                         <input class="title" type="submit" name="submitdelete" value=" X DELETE" style="box-shadow: none; float: right; background-color:#EC5656" onclick="return confirm('Are you sure you want to delete?');">
                      </div>          
                  </div>
                </div>
      </td> 
    </tr>
   </table>
  </div>
  <script>
    document.getElementById('productsperpage').addEventListener('submit', function (event) {
        event.preventDefault();  // Prevent the default form submission behavior

        // Display a confirmation dialog
        const confirmed = window.confirm('Are you sure you want to update the product?');

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
            alert('Product updated successfully');
        })
        .catch(error => {
            // Handle errors if needed
            console.error('Error:', error);
        });
    });
</script>


    
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