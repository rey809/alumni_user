<style type="text/css">

div .col-xs-6{
  margin: 0px;
  padding: 0px;
  width: 1%;
}
#messages{
  padding: 5px;
  margin-top: 5px;
}

#messageserror{
  padding: 5px;
  margin-top: 5px;
}

</style>
<!-- Modal -->

<div class="container">
  <div class="modal fade" id="validate-id" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Validate Alumni ID No.</h4>
        </div>
        <div class="modal-body">

            <div class="form">
              <div class="col-xs-12">
                  <div class="form-group phone-number">
                    <div class="col-xs-3">
                      <input type="text" name="id_one" class="form-control" id="id_one" value="" size="3" maxlength="4" title="" required>
                    </div>
                             
                    <div class="col-xs-3">
                      <input type="text" name="id_two" class="form-control" id="id_two" value="" size="3" maxlength="4" title="" required>
                    </div>
                    <div class="col-xs-4">
                      <input type="text" name="id_three" class="form-control" id="id_three" value="" size="4" maxlength="4" required title="">
                    </div>  
                    <div class="col-xs-6">
                      <div id="messages"></div>   
                    </div>    
                     <div class="col-xs-6">
                      <div id="messageserror"></div>     
                    </div>                 
                  </div>
              </div><br><br><br>
                
              <div class="col-xs-8">
                <div class="form-group">
                  <button type="submit" class="btn Check_Alumni_ID btn-primary btn-block" id="btn2" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Loading..." name="check_alumni_id" data-inline="true">Validate</button>
                 </div>
              </div>
            </div>        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
<?php include('page-registration.php'); ?>


