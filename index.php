 <?php   
 //index.php  
 $conn=mysqli_connect('localhost','root','','insert_data') or die();  
 $msg="";  
 if (isset($_POST['insert'])) {  
      $name=$_POST['name'];  
      $email=$_POST['email'];  
      $number=$_POST['number'];  
      $query= "INSERT INTO `information`(`name`, `email`, `mobile`) VALUES ('$name','$email','$number')";  
      $data=mysqli_query($conn,$query);  
      if ($data) {  
           $msg="Your data inserted successfully";  
      }else{  
           $msg="Try after some time !";  
      }  
 }  
 ?> 
 
 
<!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Insert data in database using PHP MySQLi</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                background: #5d6d7d;  
                width: 100%;  
                min-height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
           }  
           .container{  
                width: 500px;  
                background: #fff;  
           }  
           .container form{  
                width: 100%;  
                padding: 30px;  
           }  
           .container form input{  
                width: 100%;  
                padding: 15px 10px;  
                outline: none;  
                margin: 10px 0;  
           }  
           .btn{  
                cursor: pointer;  
                background: red;  
                border: none;  
                padding: 10px 30px;  
                color: #fff;  
           }  
           h1{  
                display: block;  
                text-align: center;  
                padding-top: 20px;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <h1>Insert Data</h1>  
      <form method="post" action="">  
           <input type="text" name="name" placeholder="Enter your name" required>  
           <input type="email" name="email" placeholder="Enter your email address" required>  
           <input type="text" name="number" placeholder="Enter your mobile number" required>  
           <input type="submit" name="insert" value="Insert Data" class="btn"><br>  
           <?php echo $msg; ?>  
      </form>  
 </div>  
 </body>  
 </html>  