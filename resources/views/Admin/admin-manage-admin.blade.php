@include('AdminHeaders.__headersAdmin-manage-admin')
  <form action="{{route('admin.update', ['adminID' => $admins->adminID])}}"method="POST" name="updateusers">
    @csrf
    @method('PUT')
    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="/admin-dashboard#admin"><i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 270px"></i></a>      
      </center>
    </div> 
  <div id = "middlebox">
   <table border="0" width="50%" cellpadding="60" cellspacing="0" align="center">
    <tr>
      <td>
        <div class="row jumbotron">
                <div class="conbox content2" style="width: 990px">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Admin Profile</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Manage Admin Profiles</font><br><br>
                   <div class="row jumbotron">
                    <hr>
                    <form action=" " method="POST">

                    <div class="col-sm-3 form-group">
                          <label for="name-f">Admin ID</label>
                          <input type="text" class="form-control input2" name="adminID" id="name-f" placeholder="Admin ID" readonly value=" {{$admins->adminID}} ">
                      </div>
                      <div class="col-sm-7 form-group">
                        <!-- Empty Grid -->
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="name-f">First Name</label>
                          <input type="text" class="form-control input2" name="admin_FirstName" id="name-f" placeholder="First Name" value="{{$admins->admin_FirstName}}">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="name-l">Last Name</label>
                          <input type="text" class="form-control input2" name="admin_LastName" id="name-l" placeholder="Last Name" readonly value="{{$admins->admin_LastName}} ">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="sex">Gender</label>
                          <input type="text" id="sex" name="admin_Gender" value="{{$admins->admin_Gender}} " placeholder="Gender" readonly></input>
                      </select>
                      </div>
                      <div class="col-sm-4 form-group">
                          <label for="Date">Date Of Birth</label>
                           <input name = "admin_Birthday" type = "text" 
                            id = "date" onfocus="(this.type='date')" class="input2" onblur="getAge();" max="2004-06-30" min="1923-01-01" placeholder="Birthdate" readonly value="{{$admins->admin_Birthdate}}">
                      </div>
                      <div class="col-sm-2 form-group">
                          <label for="age">Age</label>
                          <input type="number" class="form-control  input2" name="admin_Age" id="u_Age"  maxlength="2"readonly placeholder="Age" readonly value="{{$admins->admin_Age}}">
                          <br><br>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="phone">Phone Number</label>
                          <input type="tel" class="form-control input2" name="admin_PhoneNum" id="phonenum" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="1234-567-8901" readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)" value="{{$admins->admin_PhoneNum}}">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control input2" name="admin_Email" id="email" placeholder="Email" readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)" value="{{$admins->admin_Email}}">
                      </div>
                    
                      <div class="col-sm-6 form-group">
                          <label for="tel">Username</label>
                          <input type="tel" name="admin_Username" class="form-control input2" id="tel" placeholder="Username" readonly value="{{$admins->admin_Username}}">
                      </div>

                      <div class="col-sm-12 form-group mb-0">
                        <div class="col-sm-12 form-group mb-0">
                <br><br>
                <input class="title" name="update_account" type="submit" value="SAVE" style="box-shadow: none">

                <a href="admin-dashboard#admin"><input class="title" type="button" value="CANCEL" style="background-color: transparent; border: 1px solid #c0c0c0; color: #615f5f; box-shadow: none;"></a>
                        </form>

                <form method="POST" action="{{ route('admin.delete', ['adminID' => $admins->adminID]) }}">
                  @csrf
                  @method('DELETE')

                <input class="title" type="submit" value=" X DELETE" name="deleteadmin" style="box-shadow: none; float: right; background-color:#EC5656" onclick="return confirm('Are you sure you want to delete?');"></a>
            </div>
                        <br><br>
    </tr>
   </table>
  </div>
  <script type="text/javascript">
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
</form>
</body>
</html>