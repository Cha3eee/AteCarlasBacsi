@include('AdminHeaders.__headersAdmin-admin-manage-users')
<form action="{{ route('admin.user.update', ['userID' => $profile->userID]) }}" method="POST">

    @csrf
    @method('PUT')
    <div id = "leftbox">
      <center>
        <i class="fa-solid fa-ellipsis-vertical" style="font-size: 70px; color: #faf9f9; margin-top: 250px;"></i><br>
        <a href="/admin-dashboard#customers"><i class="fa-solid fa-circle-arrow-left" style="color: #faf9f9; font-size: 45px; margin-top: 290px"></i></a>      
      </center>
    </div> 
  <div id = "middlebox">
   <table border="0" width="50%" cellpadding="60" cellspacing="0" align="center">
    <tr>
      <td>
        <div class="row jumbotron">
                <div class="conbox content2" style="width: 990px">
                  <font style="font-weight: 300; font-size: 24px; color: #615f5f;">Customer Profile</font>
                  <font style="font-size: 14px; color: #615f5f">&nbsp;Registered Customer Profile</font><br><br>
                   <div class="row jumbotron">
                    <hr>
                     
                     <div class="col-sm-3 form-group">
                          <label for="name-f">Customer ID</label>
                          <input type="text" class="form-control input2" name="CustID" id="name-f" value=" {{$profile->userID}} " required placeholder="Customer ID" readonly>
                      </div>
                      <div class="col-sm-7 form-group">
                        <!-- Empty Grid -->
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="name-f">First Name</label>
                          <input type="text" class="form-control input2" name="fname" id="name-f" value="{{$profile->user_FirstName}}" required placeholder="First Name" readonly>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="name-l">Last Name</label>
                          <input type="text" class="form-control input2" name="lname" id="name-l" value=" {{$profile->user_LastName}} " required placeholder="Last Name" readonly>
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="sex">Gender</label>
                          <input type="text" id="sex" name="CustGender" value=" {{$profile->user_Gender}} " placeholder="Gender" readonly></input>
                      </div>
                      <div class="col-sm-4 form-group">
                          <label for="Date">Date Of Birth</label>
                           <input name = "CustBirthday" type = "text" 
                            id = "date" value="{{$profile->user_Birthdate}}" required onfocus="(this.type='date')" class="input2" onblur="getAge();" max="2004-06-30" min="1923-01-01" placeholder="Birthdate" readonly>
                      </div>
                      <div class="col-sm-2 form-group">
                          <label for="age">Age</label>
                          <input type="number" class="form-control  input2" name="CustAge" id="u_Age"  maxlength="2" value="{{$profile->user_Age}}" required readonly placeholder="Age" readonly>
                      </div>
                       <div class="col-sm-6 form-group">
                          <label for="address-1">Home Address</label>
                          <input type="text" class="form-control input2" name="Custaddress" id="address" value="{{$profile->user_Address}}" required placeholder="Home Address" readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)">
                      </div>
                      <div class="col-sm-6 form-group">
                          <label for="phone">Phone Number</label>
                          <input type="tel" class="form-control input2" name="Custphonenum" id="phonenum" value="{{$profile->user_PhoneNum}}" required pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="1234-567-8901" readonly ondblclick="onDoubleClick(this)" onblur="lostFocus(this)">
                      </div>
                      <div class="col-sm-7 form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control input2" name="user_Email" id="email" value="{{$profile->user_Email}}" required placeholder="Email">
                      </div>
                      <div class="col-sm-5 form-group">
                          <label for="tel">Username</label>
                          <input type="tel" name="user_Username" class="form-control input2" id="username" value="{{$profile->user_Username}}" required placeholder="Username">
                      </div>
                      
                       <div class="col-sm-12 form-group mb-0">
                <br><br>
                <input class="title" name="update_account" type="submit" value="SAVE" style="box-shadow: none">

                <a href="/admin-dashboard#customers"><input class="title" type="button" value="CANCEL" style="background-color: transparent; border: 1px solid #c0c0c0; color: #615f5f; box-shadow: none;"></a>
                       </form>
                <form method="POST" action="{{ route('admin.user.delete', ['userID' => $profile->userID]) }}">
                  @csrf
                  @method('DELETE')
                <input class="title" type="submit" name="deleteprod" value=" X DELETE" style="box-shadow: none; float: right; background-color:#EC5656" onclick="return confirm('Are you sure you want to delete?');">
                </form>
            </div>

                  </div>
                 
                </div>
      </td> 
    </tr>
   </table>
  </div>
</body>
</html>