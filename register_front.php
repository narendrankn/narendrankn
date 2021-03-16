<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-glyph.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style1.css">  
<script src="js/user-login.js"></script>

<style>
#success_message{ display: none;}
.display-page{
        text-align: center;
        text-transform: uppercase;
        color:#b30000;
      }
      #unerror,#dserror,#deperror,#emerror,#pherror,#comperror{
  margin:0 auto;
  display: table;
}
#register-btn{
  width: 100%;
}
</style>
</head>
<body>
  <header class="headers fixed-top  clearfix">
    <div class="header-page row center-page">
      <div class="logo col-md-2">
        <a class="navbar-brand" href="index.html">AMC</a>
      </div>
      <div class="lists col-md-10">
        <a class="link1 " href="index.html">Home </a>
        <a class="link1 " href="register.html">Register</a></li>
        <a class="link1 " href="check_status.html"> Complaint Status</a>
        <a class="link1 " href="contact.html">Contact</a> 
        <a class="link1 " href="services.html">Services</a> 
        <a class="link1 " href="login-page.html"> Login</a>
      </div>
  </header>
  <br>
  <br>
  <br>
  <!--  action="online-complaint.php"  -->
  <div class="container-wrap clearfix">
    <div class="container-page center-page">
      <form class=" form-horizontal form-page" action="register.php" method="post" name="form1" id="contact_form" >
      <fieldset>
        <!-- Form Name -->
        <legend class="display-page">Register Complaint!</legend>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Name</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="name" placeholder="Your Name" class="form-control" onKeyUp="validateName()" id="username" type="text">
			 
            </div>
          </div>
        </div>
        <span id="unerror"></span>
        
                <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Designation</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="designation" placeholder="Designation" id="design" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <span id="dserror"></span>
        
        <!-- Select Basic -->
  <div class="form-group"> 
    <label class="col-md-4 control-label">Department</label>
    <div class="col-md-4 selectContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="department" id="dept" class="form-control selectpicker"  style="height:auto;" placeholder="select">
          <!--<option value=" " >Please select your department</option>-->
          <option value="select">Please select your department</option>
          <option value="Accounts-I">Accounts-I</option>
          <option value="Accounts-II">Accounts-II</option>
          <option value="Admin-I">Admin-I</option>
          <option value="Admin-II">Admin-II</option>
          <option value="CCAR">CCAR</option>
          <option value="CD">CD</option>
          <option value="CDD">CDD</option>
          <option value="CED">CED</option>
          <option value="CISWU">CISWU</option>
          <option value="DCCD">DCCD</option>
          <option value="DG OFFICE">DG OFFICE   </option>             
          <option value="DIRECTOR office">DIRECTOR office</option>
          <option value="DMD">DMD</option>
          <option value="DSD">DSD</option>
          <option value="EATD">EATD</option>
          <option value="EMS">EMS</option>
          <option value="ERED">ERED</option>
          <option value="EVRC">EVRC</option>
          <option value="HPL">HPL</option>
          <option value="HV">HV</option>
          <option value="I&amp;PD">I&amp;PD</option>
          <option value="IDHRT">IDHRT</option>
          <option value="LCM">LCM</option>
          <option value="LIBRARY">LIBRARY</option>
          <option value="MED">MED</option>
          <option value="MTD">MTD</option>
          <option value="MUAD-ID">MUAD-ID</option>
          <option value="MUAD-UARC">MUAD-UARC</option>
          <option value="OLS">OLS</option>
          <option value="PLANNING">PLANNING</option>
          <option value="PQLAB">PQLAB</option>
          <option value="PSD">PSD</option>
          <option value="PURCHASE">PURCHASE</option>
          <option value="R&amp;D">R&amp;D</option>
          <option value="SCL">SCL</option>
          <option value="SECURITY">SECURITY</option>
          <option value="TRANING">TRANING</option> 
        </select>
      </div>
    </div>
  </div>
  <span id="deperror"></span>
  <!-- Text input-->
         <div class="form-group">
    <label class="col-md-4 control-label">E-Mail</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input name="email" placeholder="E-Mail Address" id="email" class="form-control"  type="text" onKeyUp="validateEmail()">
      </div>
    </div>
  </div>
  <span id="emerror"></span>
  <!-- Text input-->       
  <div class="form-group">
    <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input name="phone" placeholder="(845)555-1212" id="phone" class="form-control" type="text" onKeyUp="validatePhone()" maxlength="10">
      </div>
    </div>
  </div>
  
  <span id="pherror"></span>
        
        <!-- Select Basic -->
  <div class="form-group"> 
    <label class="col-md-4 control-label">Type of Issue</label>
    <div class="col-md-4 selectContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="type of issue" id="Tissue" class="form-control selectpicker"  style="height:auto;" placeholder="select">
          <!--<option value=" " >Please select your department</option>-->
          <option value="select">Please select Type of Issue</option>
          <option value="Laptop">Laptop</option>
          <option value="Desktop">Desktop</option>
          <option value="Printer">Printer</option>
          <option value="Scanner">Scanner</option>
          <option value="Application Software">Application Software</option>
          <option value="Network Issue">Network Issue</option>
          <option value="Internet Issue">Internet Issue</option>
          <option value="Software Installation">Software Installation</option>
          <option value="Hardware Problem">Hardware Problem</option>
          <option value="FAS">FAS</option>
          <option value="Others">Others  </option>             
         
        </select>
      </div>
    </div>
  </div>
   <span id="TIerror"></span>
  <!-- Text input-->  
  <div class="form-group">
    <label class="col-md-4 control-label">complaint details</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <textarea class="form-control" id="complaint" name="complaint" placeholder="complaint details"></textarea>
      </div>
    </div>
  </div>
  <span id="comperror"></span>
  <!-- Success message -->
  <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4">
      <button type="submit" class="btn btn-warning" id="register-btn"onClick="return validateFormOnSubmit()" name="submitTwo" value="submit"  >Register <span class="glyphicon glyphicon-send"></span></button>
	 
    </div>
  </div>

</fieldset>
</form>
</div>
</div>
</div>

<!---
  onKeyUp="validateDesig()"
  onKeyUp="validateDept()"
  onKeyUp="validateComplaint()"
-->
</body>
</html>