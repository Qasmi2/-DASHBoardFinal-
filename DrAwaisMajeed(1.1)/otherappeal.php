<?php include 'MasterPageFront.php' ?>         
            
<?php include 'MasterPageFrontMenu.php' ?>       
  

<div class="container">    
  <div class="row content"> 

          <?php include 'MasterSideBar.php' ?>    
      
        <div class="col-sm-8 text-left"> 
       
        <div>
           
           
         <form class="well form-horizontal" action="createEvent.php " method="post"  id="event_form">
      

<!-- Form Name -->
<fieldset>
<legend>Appeal  Details</legend>


<div class="form-group">
  <label class="col-md-4 control-label" >Enter Appeal  </label> 
    <div class="col-md-5 col-xm-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
  <input name="event_type" placeholder="Need Water , Medicain etc " class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Appeal Description</label>
    <div class="col-md-5 col-xm-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="event_description" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>
<!-- Text area -->
  
<div class="form-group"> 
  <label class="col-md-4 control-label">Select Resources & Quantity </label>
    <div class="col-md-3 col-xm-3 selectContainer">
    <div class="input-group">
     
        
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div data-role="dynamic-fields">
                <div class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="field-name">Field Name</label>
                        <input type="text" class="form-control" id="field-name" placeholder="Field Name">
                    </div>
                    <span>-</span>
                    <div class="form-group">
                        <label class="sr-only" for="field-value">Field Value</label>
                        <input type="text" class="form-control" id="field-value" placeholder="Field Value">
                    </div>
                    <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>  <!-- /div.form-inline -->
            </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <!-- /div.col-md-12 -->
    </div>  <!-- /div.row -->
</div>
        
        
   </div>
</div>
</div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Appeal Description</label>
    <div class="col-md-5 col-xm-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="event_description" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Successfully Create Event .</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success" name="btn-create-event">Create Event <span class="glyphicon glyphicon-ok"></span></button>
  </div>
</div>

</fieldset>
        </form>
      </div>
        
        
         </div>

      </div>
</div>
  
<?php include 'MasterFooter.php' ?>     