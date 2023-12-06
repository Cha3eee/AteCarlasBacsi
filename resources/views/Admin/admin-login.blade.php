@include('AdminHeaders.__headersAdmin-login');
<form action="/admin-login/success" method="POST">
  @csrf
<nav class="navbar navbar-expand-sm navbar-light px-5" style="height: 70px; background-color:  #AF1D27;
box-shadow: rgba(28, 28, 28, 0.45) 0px 25px 20px -20px;">
    <div class="container-fluid">

      <a href="admin-login"><img src="{{ asset('img/logo.png') }}" height="46" class="ps-5"></a>
    <a class="navbar-brand subtitle ps-2" href="#" style="color: #ffffff;">

      <div class="title" style="font-size: 11.5px;">
        ATE CARLA'S
      </div>
      <b>BACSILOG</b>
    </a>
    <a class="navbar-brand" style="font-weight: bolder; color: whitesmoke;margin-left: 10px; border: 2px solid white; padding: 10px; border-radius: 5vh; font-size: 14px;">ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link active content" aria-current="page" href="index.php" style="color:#faf9f9; font-size: 14px; "><img src="{{ asset('img/visit.png')}}" height="16" width="16"> Visit Website</a>
      </li>    
      </ul>     
    </div>
    </div>
  </nav>

 <div class="container-fluid xl mw-100 no-padding" style="background-image: url({{asset('img/aloginbg1.png')}});">
  <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-0 col-xs-0 d-flex align-items-center">
        <table border="1" width="90%" cellpadding="30" cellspacing="0" align="center" style="border: 0px solid  #faf9f9;">
          <tr>
            <td>
              <div class="login-page">
                <div class="form">
                  <img src="{{ asset('img/door-key.png') }}" height="100" width="100"><br><br>
                    <h2 style="color: #AF1D27; font-weight: bold;" class="title">Admin Login</h2> 
                    <h5 style="color: #1c1c1c; font-size: 17.5px;" class="title">Login to your account.</h5> <br>
                      <form class="login-form" action="" method="">
                      <div class="input-container">
                      <!--   <p class="error"> o $login_error; ?></p> -->
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field content text-black" type="text" placeholder="Username" name="admin_Username">
                      </div>

                      <div class="input-container">
                          <i class="fa fa-key icon"></i>
                          <input class="input-field content text-black" type="password" placeholder="Password" name="admin_Password" id="id_password">
                        <div class="input-icons">
                           <i class="far fa-eye icon" id="togglePassword" style="cursor: pointer; color: #1c1c1c; background: transparent; margin-top: -60px; margin-left: 160px;"></i>
                          </div>
                      </div>
                     <a href="admin-dashboard#dashboard"><input type="submit" name="" value="LOG IN" style=" background-color: #902923; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px; width: 240px; height: 50px; font-weight: bold;" class="btn btn-outline-dark2 text-white title"></a>
                  </form>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
  </div>
</div>
    <footer>
      <p><hr></p>
    </footer>
    <script type="text/javascript">
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
</form>
</body>
</html>

