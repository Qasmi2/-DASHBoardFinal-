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
<legend>Donation Appeal </legend>
<!-- Form Name -->


<!-- Text input-->



<!-- Text input-->


<div class="form-group"> 
  <label class="col-md-4 control-label">Require Amount </label>
    <div class="col-md-5 col-xm-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="event_state" class="form-control selectpicker" >
      <option value="A+ " >1-50$ </option>
      <option value="B+">50$-100$</option>
<option value="A-">100$-200$</option>
<option value="B-">200$-300$</option>
<option value="AB+">300$-400$</option>
<option value="AB-">400$-500$</option>
  


    </select>
        <input type="number" name="donationAmount" placeholder="other Ammount"/>
        
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Account. NO. </label>  
    <div class="col-md-5 col-xm-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
  <input name="accountNo" placeholder="Account no." class="form-control" type="text">
    </div>
  </div>
</div>
<!-- Text input-->
      


<!-- Text input-->
 
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Successfully Create Event .</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success" name="btn-create-event">Create Appeal <span class="glyphicon glyphicon-ok"></span></button>
  </div>
</div>

        </div>
        
        
         </div>

      </div>
</div>
  
<?php include 'MasterFooter.php' ?>     