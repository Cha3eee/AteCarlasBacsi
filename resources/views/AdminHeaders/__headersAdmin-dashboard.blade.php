<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('customercss/index-splash-design.css')}}">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <style type="text/css">

    body {
  background-color:  #FAF9F9;
  overflow-x: hidden;

}

  label {
    font-weight: 300;
    color: #615f5f;
    margin-top: 8px;
    line-height: 2;
    font-size: 13.6px;
  }

.content2 {
  font-family: Arial;
}
.clearfix:after {
  content: "";
  display: block;
  height: 0;
  width: 0;
  clear: both;
}


.admin-panel {
  width: 100%;

}
/*slidebar侧边栏*/
.slidebar {
  width: 20%;
  min-height: 1980px;
  float: left;
  border-right: 2px solid #902923;
  background-color: #AF1D27;

}
.slidebar .logo {
  height: 145px;
  border-bottom: 1px solid transparent;
}
.slidebar ul {
  padding: 0;
  margin: 0;
}
.slidebar li {
  list-style-type: none;
  margin: 0;
  position: relative;

}
.slidebar li:before {
  content: "";
  font-family: 'icomoon';
  speak: none;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  position: absolute;
  display: block;
  line-height: 40px;
  right: 20px;
  -webkit-font-smoothing: antialiased;
}

.slidebar ul a {
  color: white;
  text-decoration: none;
  border-bottom: 1px solid #AF1D27;
  display: block;
  text-indent: 20px;
  text-transform: capitalize;
  padding: 14px;

}
.slidebar li:hover a {
  background-color: #faf9f9;
  box-shadow: 1px 0 0 rgb(255,255,255),inset 5px 0 0 -1px rgb(234,83,63);
  color: #AF1D27;
}
/*main*/
.main {
  float: left;
  width: 80%;
  height: 690px;
  background-color: #faf9f9;
}
.main .topbar {
  border-bottom: 1px solid rgb(235,235,235);
  margin: 0;
  padding: 0;
}
/*topbar顶部按钮栏*/
.topbar li {
  float: right;
  list-style: none;
  z-index: 100;
  position: relative;
}
.topbar li:first-child {float: left;}
.topbar a {
  display: block;
  line-height: 50px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  color: rgb(102,102,102);
  border-left: 1px solid rgb(235,235,235);
}
.topbar a:hover {
  background-color: rgb(247,247,247);
}
.topbar li:first-child a {
  border: none;
  border-right: 1px solid rgb(235,235,235);
}
/*mainContent*/
.mainContent h4 {
  line-height: 1;
  font-size: 18px;
  margin: 1.3em 0 1em;
  margin-left: 17px;
}
 
.mainContent>div {
  position: absolute;
  opacity: 0;
  -webkit-transition:opacity 200ms linear;
  -moz-transition:opacity 200ms linear;
  -ms-transition:opacity 200ms linear;
  transition:opacity 200ms linear;
}

.mainContent>div:target {
  opacity: 1;

}
.mainContent h2 {
  margin:1em 30px;
  color: rgb(234,83,63);
  font-size: 20px;
}
.mainContent h2:before {
  font-family: 'icomoon';
  content: attr(data-icon);
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  margin-right: 10px;
  -webkit-font-smoothing: antialiased;
}

 
#dashboard>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 80;
  position: relative;

}

#orders>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 70;
  position: relative;

}

#completed>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 60;
  position: relative;

}

#cancelled>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 50;
  position: relative;

}

#products>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 40;
  position: relative;

}

#customers>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 30;
  position: relative;

}

#admin>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 20;
  position: relative;

}

#profile>div {
  margin-left:  20px;
  float: left;
  border-radius: 5px;
  min-width: 100%;
  height: 262px;
  z-index: 10;
  position: relative;

}

/*logo*/
.logo a {
  display: inline-block;
  position: relative;
  left: 50%;
  top: 50%;
  margin: -45px 0 0 -45px;
  border: 1px solid #AF1D27;
  border-radius: 50%;
}

.dropdown-content {
  display: none;
  position: relative;
  background-color: #bf2a34;
  color: white;
  min-width: 100%;
  overflow: auto;
/*  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
  z-index: 1;
  cursor: pointer;
}

.dropdown-content a {
  color: black;
  padding: 0px 0px;
  text-decoration: none;
  display: block;
}


.dropdown a:hover {background-color: #ddd;}

.show {display: block; margin-left: 0;}

.dropdown-content3 {
  display: none;
  position: relative;
  background-color: #bf2a34;
  color: white;
  min-width: 100%;
  overflow: auto;
/*  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
  z-index: 1;
  cursor: pointer;
}

.dropdown-content3 a {
  color: black;
  padding: 0px 0px;
  text-decoration: none;
  display: block;
}


.dropdown3 a:hover {background-color: #ddd;}

.show3 {display:block; margin-left: 0;}


.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 150px;
    font-size: 14px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 a {
  float: none;
  color: black;
  padding: 2px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content2 a:hover {
  background-color: #ddd;
  width: 100%;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
}

.hide {
  display: none;
}
    
.myDIV:hover + .hide {
  display: block;
  color: white;
  font-size: 11.5px;
  padding: 6px 11px;
  background: rgba(0,0,0,0.7);
  border-radius: 5vh;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
  position: absolute;
  z-index: 100;
  margin-left: -13px;
}

.conbox {

  background-color: white;    
  text-align: left;
  padding: 30px 20px;
  border-radius: 5px;
  box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;
}

.button1 {
  background-color: lightgrey;
  width: 30%;
  padding: 30px 10px;
  display: inline-block;
  border: 0px solid transparent;
  text-decoration: none;
  vertical-align: top;
  text-align: left;
  color: whitesmoke;
  box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;
  font-weight: normal;

}

.feedback {
  background-color: #FCFAE6;
  border: 1px solid #E4D232;
  font-size: 12px;
  color: dimgray;
  padding: 10px 20px;

}

.feedback2 {
  background-color: #4CAF50;
  border: 1px solid #228C27;
  font-size: 12px;
  color: dimgray;
  padding: 10px 20px;

}

a.button1 {
  /* Your existing styles for the button */
  display: inline-block;
  height: 190px;
  padding: 10px 20px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-decoration: none;
  color: #FFF6F6;
  transition: transform 0.3s, box-shadow 0.3s;

}

a.button1:hover {
  /* Changing color and adding an emboss effect on hover */
  color: #fff; /* Change to your preferred color */
  background-color: #666; /* Change to your preferred color */
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  transform: translateY(-3px);
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

input[type=text], input[type=password], select, input[type=number], input[type=date], input[type=tel], textarea {
  border-radius: 1vh; 
  border: 1px solid lightgray; 
  padding: 8px; 
  font-size: 14px;
  width: 100%;
  background-color:  #f9f9f9;
}

  .input2[type=text], .input2[type=password], select, .input2[type=date], .input2[type=email], .input2[type=tel], .input2[type=number], textarea   {
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

    .validationlabel2 {
    color: #B3302E;
    width: 100%;
/*    border-bottom: 2px solid  #C95752;*/
    font-size: 13px;
    margin-top: 3px;
   }
</style>
</head>
