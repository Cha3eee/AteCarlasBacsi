<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Orders</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="customercss/index-splash-design.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <style type="text/css">
     body {
      background-color:  #FAF9F9;
      overflow-x: hidden;

    }

 #leftbox {
      float:left; 
      background: #AF1D27;
      width:18%;
      height: 800px;
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
    font-weight: 300;
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
          float: left;

      }

input[type=text], input[type=password], select, input[type=number], input[type=date], input[type=tel], input[type=email], textarea {
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