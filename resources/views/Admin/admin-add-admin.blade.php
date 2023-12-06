@include('AdminHeaders.__headersAdmin-add-admin')
<?php
// Generate a random number between 1000 and 9999
$randomNumber = mt_rand(10000, 99999);

// Format the ID as "AD-1000"
$uniqueID = "AD-" . $randomNumber;
?>
  <form action="/add/admin" method="POST">
    @csrf
    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="admin-dashboard#admin"><i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 270px"></i></a>      
      </center>
    </div> 
  <div id = "middlebox">
   <table border="0" width="50%" cellpadding="60" cellspacing="0" align="center">
    <tr>
      <td>
        <div class="row jumbotron">
                <div class="conbox content2" style="width: 990px">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Admin Profile</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Add a New Admin</font><br><br>
                   <div class="row jumbotron">
                    <hr>
                     <div class="col-sm-3 form-group">
                     <label for="name-f">Admin ID</label>
                          <input type="text" class="form-control input2" name="adminID" id="name-f" value="<?php echo $uniqueID; ?>"  readonly style="background-color: #EEEEEE; color: #808080">
                    
                      </div>
                      <div class="col-sm-7 form-group">
                        <!-- Empty Grid -->
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="name-f">First Name</label>
                          <input type="text" class="form-control input2" name="admin_FirstName" id="name-f" value="" placeholder="Enter First Name">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="name-l">Last Name</label>
                          <input type="text" class="form-control input2" name="admin_LastName" id="name-l" value="" placeholder="Enter Last Name">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="sex">Gender</label>
                       <select name="admin_Gender" id="">
                            <option value="selectgender" hidden>Select Gender</option>
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                          <p class="validationlabel2"></p>
                      </div>
                      <div class="col-sm-4 form-group">
                          <label for="Date">Date Of Birth</label>
                           <input name = "admin_Birthdate" type = "text" 
                            id = "date" onfocus="(this.type='date')" class="input2" onblur="getAge();" max="2004-06-30" min="1923-01-01" value="" placeholder="Birthdate">
                          
                          <p class="validationlabel2"></p>
                          
                      </div>
                      <div class="col-sm-2 form-group">
                          <label for="age">Age</label>
                          <input type="number" class="form-control  input2" name="admin_Age" id="u_Age"  maxlength="2" required readonly value="" placeholder="Age">
                          <br><br>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="phone">Phone Number</label>
                          <input type="text" class="form-control input2" name="admin_PhoneNum" id="phonenum" value="" placeholder="1234-567-8901">
                          <p class="validationlabel2"></p>
                          
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control input2" name="admin_Email" id="email" value="" placeholder="Enter your email"> 
                         
                          <p class="validationlabel2">  </p>
                         
                      </div>
                    
                      <div class="col-sm-6 form-group">
                          <label for="tel">Username</label>
                          <input type="text" name="admin_Username" class="form-control input2" id="tel" value="" placeholder="Enter your username">
                          
                          <p class="validationlabel2"></p>
                        
                      </div>
                      <div class="col-sm-6 form-group">
                        <div class="input-icons">
                          <label for="pass">Password</label>
                          <input type="password" name="admin_Password" class="input2" id="id_password" placeholder="Enter your password" value="">
                           <i id="togglePassword" class="fa fa-eye" style="cursor: pointer; color: #1c1c1c; margin-top: 13px " onClick="viewPassword()" aria-hidden="true"></i>
                          
                          <p class="validationlabel2"></p>
                          
                          
                          <p class="validationlabel2"></p>
                          
                        </div>
                      </div>
                      <div class="col-sm-6 form-group mb-0">
                        <br>
                     
                          <p class="validationlabel">Please do not leave empty fields</p>
                        
                      </div>
                      <div class="col-sm-6 form-group mb-0">
                        <br><br>
                         <input class="title" type="submit" value="ADD" style="box-shadow: none" name="register">

                         <a href="admin-dashboard#admin"><input class="title" type="button" value="CANCEL" style="background-color: transparent; border: 1px solid #c0c0c0; color: #615f5f; box-shadow: none"></a>
                      </div>          
                  </div>
                </div>
      </td> 
    </tr>
   </table>
  </div>
</form>
  <script type="text/javascript">

function getAge(){
    var u_Birthday = document.getElementById('date').value;
    u_Birthday = new Date(u_Birthday);
    var today = new Date();
    var u_Age = Math.floor((today-u_Birthday) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('u_Age').value=u_Age;
}
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script>
</body>
</html>