<?php

  if(isset($_POST['create_user'])){
      
      global $connection;
                       
                        $username = $_POST['username'];
                        $user_firstname = $_POST['user_firstname'];
                        $user_lastname = $_POST['user_lastname'];
//                        $user_image = $_FILES['image']['name'];
//                        $usert_image_temp = $_FILES['image']['tmp_name'];
                        $user_email = $_POST['user_email'];
                        $user_role = $_POST['user_role'];
                        $user_password = $_POST['user_password'];
                        

      
//                       move_uploaded_file($user_image_temp,"../images/$user_image");
//      
//      
//                                
                         $query = "INSERT INTO users (username, user_firstname, user_lastname, user_email, user_role, user_password)   ";
                         $query .= "VALUE('{$username}','{$user_firstname}','{$user_lastname}', '{$user_email}', '{$user_role}', '{$user_password}') ";



                         $create_user_query = mysqli_query($connection, $query); 

                         confirm($create_user_query);
                        
                         echo "<p class='bg-success'>User Created: "."" . "<a href='users.php'>View Users</a></p> ";  

                        
                       
  
  }

                                
                             
      
?>

   
   

<form action="" method="post" enctype="multipart/form-data">

    
<div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="title">Lastname</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>
    
<!--
     <div class="form-group">
        <label for="title">Post Image</label>
        <input type="file" class="form-control" name="image">
    </div>
-->
    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
     <div class="form-group">
        <label for="title">Email</label>
        <input type="text" class="form-control" name="user_email">
    </div>
     <div class="form-group">
        <label for="title">Password</label>
         <input type="password" class="form-control" name="user_password">
    </div>
    <div class="form-group">
       <select name="user_role" id="">
          <option value="selectoption">Select Option</option>
           <option value="admin">admin</option>
           <option value="subscriber">subscriber</option>
       </select>
    </div>
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_user" value="Add User">
    </div>
</form>






                    