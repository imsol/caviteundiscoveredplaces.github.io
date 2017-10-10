<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
   .div1{
       border: solid gray 1px;
            width: 30%;
            border-radius: 15px;
            margin: 100px auto;
            background-color: transparent;
            padding: 30px;
            color: lightblue;
            padding-bottom: 20px; 
    }
    body{
      background-image: url(images/BlackBerry_Blue-wallpaper-10424950.jpg);

        }
        .input{
            
            padding: 10px;
            color:white;
            background-color: dodgerblue;
            border-radius: 30px;
            width: 200px;

            
        }
        .img{
      border-radius: 360px;
            border:5px solid black;

            
    }
        .input1{
            
            padding: 10px;
           
            border-radius: 15px;
            width: 200px;
            margin-bottom: 10px;
            color: black;
            
        }
        .a{
            color: white;
            text-decoration: none;
        }
          .input2{
            
            padding: 10px;
            color:white;
            background-color: dodgerblue;
            border-radius: 30px;
            width: 80px;
            text-align: right;
           
            
        }
        p{
            margin-top: 20px;


        }
</style>
<body>
  <?php
       require('db.php');
        include("auth.php");
          $epr='';
   ?>
   <?php      

       if($epr=='update')
       {

                
              
      


         ?>

        
             <?php 
           }
           
      if($epr!='update1'){
                 $id=$_GET['id'];
                  $rows="SELECT * FROM admin WHERE id='$id'";
                  $row=mysqli_query($con,$rows);
                 $st_row=mysqli_fetch_array($row);
                 
          ?>
              <div class="div1">
             <h2 align="center">Update Admin Account</h2>
             <form  action='index.php?epr=saveup' method="post">
            <table>
                    <tr>
                      <td>
                      
                      <input type="hidden" name="id2" id="id" value="<?PHP echo $st_row['id'] ?>" required placeholder="Input ID">
                      </td>
              </tr>
                <tr>
                   
                    <td><label>Nname</label><input type="text" class="input1" value="<?PHP echo $st_row['firstname'] ?>" name="fnamee"> </td>
                </tr>
                <tr>
                  
                    <td>  <label>Address</label><input type="text" class="input1" value="<?PHP echo $st_row['middlename'] ?>" name="Addr" > </td>
                </tr>
                <tr>
                  
                    <td>  <label>Lastname</label><input type="text" class="input1" value="<?PHP echo $st_row['lastname'] ?>" name="lastname"> </td>
                </tr>
                <tr>
                   
                    <td> <label>Contact No</label><input type="number" class="input1" value="<?PHP echo $st_row['contact'] ?>" name="contact" ></td>
                </tr>
                <tr>
                   
                    <td> <label>Address</label><input type="text" class="input1" value="<?PHP echo $st_row['address'] ?>" name="address" > </td>
                </tr>
                <tr>
                    
                    <td><label>Username</label><input type="text" class="input1" value="<?PHP echo $st_row['username'] ?>" name="username" ></td>
                </tr>
                 <tr>
                   
                    <td> <label>Email</label><input type="email" class="input1" value="<?PHP echo $st_row['email'] ?>" name="email"  </td>
                </tr>
                 <tr>
                   
                    <td><label>password</label><input type="password" class="input1" name="password" > </td>
                </tr>
                
                 <tr>
                  
                    <td><input class="input" type="submit" required ></td>
     
                </tr>
            </table>
              <p style="text-decoration: none;" align="right"  ><a href='index.php'  class="input">Back</a></p>
            </form>
          </div>
        <?php }
        
      ?>    

</body>
</html>