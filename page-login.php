<!-- Modal -->
<div class="container">
  <div class="modal fade" id="myModal" role="dialog" style="overflow: scroll;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
        <div class="card">
          <img class="card-img-top" src="assets/img/img_avatar.png" alt="Card image cap">
        </div>
          <form id="form" role="form" method="post" action="#">
            <div class="form-group">
              <label for="exampleInputUsername">Username</label>
              <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <!-- <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" required> Remember me
              </label>
            </div> -->
              <button type="submit" class="btn btn-success btn-lg btn-block"  name="login" id="btnl">Login</button>
                      <div class="text-right">
        </div> 
          </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include 'includes/connect.php';
    if(isset($_POST['login']))  
    {  
        $username=$_POST['username'];  
        $password= md5($_POST['password']);  
      
        $check_user="select * from alumni WHERE username='$username' || email = '$username' AND password='$password'";  
      
        $run=mysqli_query($con,$check_user);  
      
        if(mysqli_num_rows($run))  
        {  
            echo "<script>window.open('home.php','_self')</script>";  
      
            $_SESSION['username']=$username;//here session is used and value of $user_email store in $_SESSION.  
      
        } 
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
          echo "<script>window.open('index.php','_self')</script>"; 
        }  
    }  
?>  