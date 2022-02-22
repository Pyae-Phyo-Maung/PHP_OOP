<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Testing</title>
  <style>
    html{
      font-size:20px;
      background-color:gray;
    }
    a{
      text-decoration:none;
    }
    a:link,a:visited{
      color:#000;
    }
    a:active,a:hover{
      color:#fff;
    }
    .section-form{
      width:100%;
      text-align:center;
    }
    form{
      padding-left:20%;
      width:50%;
      height:auto;
      border:1px solid #fenjfd;
      margin-bottom:50px;
    }
    input[type=text],input[type=number]{
      width:100%;
      padding:10px;
      border-radiue:5%;
    }
    input[type=submit]{
      width:20%;
      height:auto;
      font-size:20px;
      margin-top:20px;
      border-radius:5%;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.section-form::before {
  content: "";
  display: block;
  width: 800px;
  height: 2px;
  background-color: #f39c12;
  margin-left:20%;
  margin-top: 20px;
}
</style>
</head>
<body>
    <?php include ("views/component/Navbar.php"); ?>