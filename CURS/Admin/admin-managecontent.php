
<?php
    include('../accountmodule/dbcon.php');
    include('auth.php');
?>
<?php
 

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Secured Page</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript">
      window.onbeforeunload = function() {
      return"You won't be able to comeback to this page again ";
      };
      history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    alert("You won't be able to comeback to this page again, please click the logout button!");
    history.pushState(null, null, document.URL);
});
    </script>
</head>
<body>
  <div class="container">
    <?php include('admin-Nav.php'); ?>
  </div>
<p class="p" align="center">List of user Info</p>
    <div>
        
        
        <div align="center" class="nav">
            </div>
        <table  class="table-condensed" align="center" border="1" cellspacing="10" cellpadding="0" width="850">
            <thead>
                
                <th align="center"><p>Admin ID<p></th>
                <th align="center"><p>Firstname</p></th>
                <th align="center" ><p>e-mail</p></th>
                <th align="center" ><p>Address</p></th>
                <th align="center" ><p>Phone</p></th>
                <th align="center" ><p>Username</p></th>
                <th align="center" ><p>password</p></th>
                <th align="center" ><p>type</p></th>
                <th colspan="3" align="center"><p>Options</p></th>
               
                </thead>
        
            <?php
               
                $query = "SELECT * FROM `users` ORDER BY id ASC";
                $result = mysqli_query($db_con,$query);
                while($row = mysqli_fetch_array($result))
                {
                    echo '<tr style="background-color:white;">';
                    echo '<td class="td">'.$row['id'].'</td>';
                    echo '<td class="td">'.$row['fname'].'</td>';
                    echo '<td class="td">'.$row['email'].'</td>';
                    echo '<td class="td">'.$row['Addr'].'</td>';
                    echo '<td class="td">'.$row['phone_no'].'</td>';
                    echo '<td class="td">'.$row['username'].'</td>';
                    echo '<td class="td">'.$row['password'].'</td>';   
                    echo '<td class="td">'.$row['type'].'</td>';        
                    echo '<td><a href="adminadd.php?id='.$row['id'].'" class="a1">VIEW</a></td>';
                    echo '<td><a href="update.php?epr=update1&id='.$row['id'].'"  class="a1">EDIT</a></td>';
                    echo '<td><a href="delete.php?id='.$row['id'].'"  class="a1"  onclick="return confirm(\'Are you sure?\')">DELETE</a></td>';
                    echo '</tr>';
                }
            $epr='';
            if(isset($_GET['epr'])){
                  $epr=$_GET['epr'];

             if($epr=='saveup'){
         
            $fnmae=$_POST['fnmae'];;
             $email=$_POST['email'];
              $address=$_POST['address'];
              $username=$_POST['username'];
              $password=$_POST['password'];
                 $id=$_POST['id2'];
          $query="UPDATE `users` SET `fnmae`='$fnmae', `email`=$email `username`='$username',`password`='".md5($password)."' WHERE id='$id'";
          $result=mysqli_query($db_con, $query);
        if($result)
        {
            echo "<div align='center' class='div1' style='background-color:white'>
            <h3>You are Updated successfully.</h3>
            <br/>Click here to <a href='index.php'>OK</a></div>";
        }
        else{
            echo"<div><h3>You are Updated Unsuccessfully.</h3></div>";
        }
        
            }
          }
         
            ?>
        </table>
    </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>