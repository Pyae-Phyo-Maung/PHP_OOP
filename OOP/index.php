<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
    body{
        font-family:sans-serif;
        background-image:
        linear-gradient(to right, rgba(255,255,255,0.5), rgba(255,255,255,0.5)),
        url('photos/gray.jpeg');
        overflow:hidden;
        background-size:cover;
        background-position:center;
     
    }
    .container{
        margin:7% auto;
        width:380px;
        background-color:rgba(255,255,255,0.1);
        magin:auto;
        border-radius:25px;
        box-shadow:0 0 17px #333;
    }
    .header{
        text-align:center;
        padding-top:75px;
    }
    .header h1{
        color:#333;
        font-size:45px;
        margin-bottom:80px;
    }
    .main{
        text-align:center;
    }
    .main input,button{
        width:300px;
        height:40px;
        border:none;
        outline:none;
        padding-left:40px;
        box-sizing:border-box;
        font-size:15px;
        margin-bottom:40px;
        color: #333;
        border-radius:50px;
    }
    .main span{
        position:relative;
    }
    .main i{
        position:absolute;
        left:15px;
        color:#333;
        font-size:16px;
        top:2px;
    }
    .main button{
        padding-left:0px;
        background-color: #83acf1;
        letter-spacing:1px;
        font-weight:bold;
        margin-bottom:70px;
    }
    .main button:hover{
        background-color:#7799d4;
        box-shadow: 2px 2px 2px #555;
    }
    .main input:hover{
        background-color:#ddd;
        box-shadow: 2px 2px 2px #555;
    }
    </style>
</head>
<body>
    <div class="container">
            <div class="header">
                <h1>Login</h1>
            </div>
            <div class="main">
                <form>
                    <span>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="name" >
                    </span><br>
                    <span>
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password" >
                    </span>
                    <button>Login</button>
                </form>
            </div>

    </div> 
</body>
</html>