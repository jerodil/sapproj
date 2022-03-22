<div class="modal" id="create-grievance" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form class="form-horizontal" id="grievance-frm">
    <input type="hidden" name="action" id="action">    
    <input type="hidden" name="grievance_id" id="grievance_id">    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Add Grievance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="text" name="ir_no" class="form-control input-ir-no" id="ir_no" aria-describedby="ir_noHelp" placeholder="IR No" required="required">
        </div>
        <div class="form-group">
			<select name="mode_of_com" class="form-control input-mode-of-com" id="mode_of_com" aria-describedby="mode_of_comHelp" placeholder="Mode of Commununication" required="required">
				<option value="---">Mode of Commununication</option>
				<option value="sms">SMS</option>
				<option value="walkin">Walk-in</option>
				<option value="phonecall">Phone Call</option>
				<option value="email">Email</option>
			</select>
            
        </div>
        <div class="form-group">
            <input type="text" name="fname" class="form-control input-fname" id="fname" aria-describedby="fnameHelp" placeholder="First Name" required="required">
        </div>
		<div class="form-group">
            <input type="text" name="mname" class="form-control input-mname" id="mname" aria-describedby="mnameHelp" placeholder="Middle Name">
        </div>
		<div class="form-group">
            <input type="text" name="lname" class="form-control input-lname" id="lname" aria-describedby="lnameHelp" placeholder="Last Name" required="required">
        </div>
		<div class="form-group">
            <input type="text" name="ext" class="form-control input-ext" id="ext" aria-describedby="=extHelp" placeholder="Extension Name" >
        </div>
        <div class="form-group">
            <div class="form-group">
            <input type="text" name="cpnum" class="form-control input-cpnum" id="cpnum" aria-describedby="cpnumHelp" placeholder="Contact Number">
        </div>
		 <div class="form-group">
			<select name="mode_of_com" class="form-control input-mode-of-com" id="mode_of_com" aria-describedby="mode_of_comHelp" placeholder="Mode of Commununication" required="required">
				<option value="---">Gender</option>
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			</select>
            
        </div>
        </div>
        <div class="form-group">
            <input type="text" name="region" class="form-control input-region" id="region" aria-describedby="regionHelp" placeholder="Region" disabled="true">
        </div>
		<div class="form-group">
			<label>Beneficiary Concerns</label>
            <textarea id="con" name="act" rows="2" cols="50">
			</textarea>
        </div>
		<div class="form-group">
		<label>Action Taken</label>
            <textarea id="act" name="act" rows="2" cols="50">
			</textarea>
        </div>
        <div class="form-group">
            <div class="form-group">
            <input type="text" name="staff" class="form-control input-class" id="staff" aria-describedby="staffHelp" placeholder="Name of Staff" required="required">
        </div>
        </div> <div class="form-group">
            <input type="date" name="date_created" class="form-control input-date_created" id="date_created" aria-describedby="addressHelp" placeholder="Address" required="required">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="grievance-btn">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>