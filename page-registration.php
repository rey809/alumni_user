 <?php
 include ('includes/connect.php');
 ?>
 <script src="assets/js/material.min.js"></script>
    <link rel="stylesheet" href="assets/css/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style type="text/css">
      .custom-form{
        border-radius: 0px;
      }

      .right-button{
        padding: 20px;
      }

      .input-group .form-control {
        padding: 20px 20px;
      }

      .input-group .form-control {
        width: 100%;
      }
/*       #display {
display: none;
} */
    </style>
    <!-- <span id="display">Nice to meet you!</span> Display error-->
 <div class="container">
 <!-- Modal -->
  <div class="modal fade" id="myModals" role="dialog" style="overflow: scroll;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Form</h4>
        </div>
        <div class="modal-body">

    <div role="form">

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Email</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input  name="email" id="email" placeholder="Email" class="form-control custom-form" type="email" value="" required>
              </div>
          </div>

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Username</label>
             <div class="input-group">  
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="usernames" id="usernames" placeholder="Username" class="form-control custom-form"  type="text" value="" required>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Password</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input  name="passwords" id="passwords" placeholder="Password" class="form-control custom-form"  type="password" value="">
              </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Re-Type</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input name="confirmpassword" id="confirmpassword" placeholder="Password" class="form-control custom-form" type="password" value="">
              </div>
          </div>
        </div>
      </div>    
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">First Name</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="first_name" id="first_name" placeholder="First Name" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Middle Name</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="m_name" id="m_name" placeholder="Middle Intial" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Last Name</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="last_name" id="last_name" placeholder="Last Name" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group" style="padding: 0px;">
          <label class="col-md-4 control-label">Suffix</label>
             <div class="input-group" style="padding: 0px;">
             <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
              <select name="suffix" id="suffix" class="form-control custom-form" style="padding: 0px;">
                <option value="">&#x2212; &#x2212; &#x2212; Hello</option>
                <option value="glyphicon-list-alt">&#xe032; Text</option>
              </select>   
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group" style="padding: 0px;">
          <label class="col-md-4 control-label">Course</label>
             <div class="input-group" style="padding: 0px;">
             <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
              <select name="course" id="course" class="form-control custom-form" style="padding: 0px;">
                <option value="">&#x2212; &#x2212; &#x2212; Course</option>
                <option value="glyphicon-list-alt">BS-Information Technology</option>
                <option value="glyphicon-list-alt">BS-Computer Science</option>
                <option value="glyphicon-list-alt">BS-Information System</option>
              </select>   
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group" style="padding: 0px;">
          <label class="col-md-4 control-label">Level</label>
             <div class="input-group" style="padding: 0px;">
             <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
              <select name="college" id="college" class="form-control custom-form" style="padding: 0px;">
                <option value="">&#x2212; &#x2212; &#x2212; Directory</option>
                  <?php
                    $sql_directory = mysqli_query($con, " SELECT * FROM directory ");
                    while ($row_directory = mysqli_fetch_assoc($sql_directory))
                    {
                  ?>
                      <option value="<?php echo $row_directory['directory_id']; ?>"><?php echo $row_directory['name']; ?></option>
                  <?php
                    }
                  ?>
              </select>   
              </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group" style="padding: 0px;">
          <label class="col-md-4 control-label">Year Graduated</label>
             <div class="input-group" style="padding: 0px;">
             <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
              <select name="level" id="yeardate" class="form-control custom-form" style="padding: 0px;">
                <option value="">&#x2212; &#x2212; &#x2212; Year Graduated</option>
              <?php                  
                  $sql_batch = mysqli_query($con,"SELECT * FROM batch");
              while ($row_batch= mysqli_fetch_assoc($sql_batch)) 
              {
              ?>
                  <option value="<?php echo $row_batch['batch_id']; ?>"><?php echo $row_batch['year']; ?></option>
              <?php 
              }
              ?></select>
                 
              </div>
          </div>
        </div>

      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Gender</label>
            <div class="controls">
             <div class="input-group">
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                <input type="radio" id="option-1" class="mdl-radio__button" name="gender" value="Male" checked>
                <span class="mdl-radio__label">Male</span>
              </label>
              &nbsp;
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                <input type="radio" id="option-2" class="mdl-radio__button" name="gender" value="Female">
                <span class="mdl-radio__label">Female</span>
              </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">B-day</label>
            <div class="controls">
              <div class="input-group">
                  <input id="bdate" type="date" class="form-control custom-form" value="" />
                  <label for="date-picker-2" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>
                  </label>
              </div>
            </div>
          </div>
        </div>
      </div>      
      
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Contacts</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
              <input  name="contacts" id="contacts" placeholder="Contacts" class="form-control custom-form"  type="phone" value="">
              </div>
          </div>
        </div>  
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Religion</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
              <input  name="religion" id="religion" placeholder="Religion" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>            
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Address</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
              <input  name="address" id="address" placeholder="Address" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>   
          <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Scholar</label>
            <div class="controls">
             <div class="input-group">
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Scholar-1">
                <input type="radio" id="Scholar-1" class="mdl-radio__button" name="Scholar" value="1" onchange="ScholarYes()" checked>
                <span class="mdl-radio__label">Yes</span>
              </label>
              &nbsp;
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="Scholar-2">
                <input type="radio" id="Scholar-2" class="mdl-radio__button" name="Scholar" value="2" onchange="ScholarNo()">
                <span class="mdl-radio__label">No</span>
              </label>
              </div>
            </div>
          </div>
        </div>                 
      </div>

      <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-4 control-label">Employed</label>
            <div class="controls">
             <div class="input-group">
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="employed-1">
                <input type="radio" id="employed-1" class="mdl-radio__button" name="employed" value="1" onchange="EmployedYes()" checked>
                <span class="mdl-radio__label">Yes</span>
              </label>
              &nbsp;
              <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="employed-2">
                <input type="radio" id="employed-2" class="mdl-radio__button" name="employed" value="2" onchange="EmployedNo()">
                <span class="mdl-radio__label">No</span>
              </label>
              </div>
            </div>
          </div>
        </div>
        <div id="scholar-output">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group" style="padding: 0px;">
            <label class="col-md-4 control-label">Scholarship Sponsor</label>
               <div class="input-group" style="padding: 0px;">
               <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                <select name="scholarship" id="scholarship" class="form-control custom-form" style="padding: 0px;">
                  <option value="">&#x2212; &#x2212; &#x2212; Sholarship</option>
                  <option value="glyphicon-list-alt">&#xe032; Text</option>
                </select>   
                </div>
            </div>
          </div>
        </div>                
      </div>

    <div id="output">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-5 control-label">Name of Company</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
              <input  name="company" id="company" placeholder="Company" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>           
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-5 control-label">Work Position</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
              <input  name="workposition" id="workposition" placeholder="Work Position" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>           
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-5 control-label">Company Address</label>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
              <input  name="companyaddress" id="companyaddress" placeholder="Address" class="form-control custom-form"  type="text" value="">
              </div>
          </div>
        </div>           
      </div>   
    
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
          <label class="col-md-5 control-label">Date Hired</label>
            <div class="controls">
              <div class="input-group">
                  <input id="datehired" type="date" class="form-control custom-form" value="" />
                  <label for="date-picker-2" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>
                  </label>
              </div>
            </div>
          </div>
        </div>           
      </div>
      </div>
<div class="row">
    <div class="col-xs-12">
        <div class="text-right right-button">
             <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="Alumni_Registration_Check" >Submit</button>
        </div>
    </div>
</div> 
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>  
      
    </div>
  </div>
  </div>
