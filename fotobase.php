<! DOCTYPE HTML>
<html>
<head>
   <title>Welcome To Fotobase</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <script>
     function redirect(location)
     {
          window.location.href= location;
     }
   </script>
</head>
<body style="background-color:black;background-image:url('tree.jpg');
             background-repeat:no-repeat;background-position:center;">
<div class="container" style="background-color:#ffffff;opacity:0.6;width:300px;
                              margin-top:15%;margin-left:15%;">
<div class="translucent" >
<h1>Welcome to Fotobase</h1>
<p>Login to see your pictures</p>
</div>
<div class="buttons" style="padding:5px;">
<button type="button" class="btn btn-default btn-lg">
<span class="glyphicon glyphicon-user" onclick="redirect('assign2.php')"> Login</span>
</button>
<button type="button" class="btn btn-default btn-lg">
<span class="glyphicon glyphicon-home"onclick="redirect('index.html')"> Home</span>
</button>
</div>
</div>
</body>
</HTML>