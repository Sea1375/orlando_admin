<?php
  include('../Config/Connection.php');
             session_start();
            $login_check=$_SESSION['id'];
           if ($login_check!='1') 
            {
             header("location: ../Login/login.php");
            }
            if(isset($_POST['submittickettype']))
            {
            $ticketType=$_POST['ticketType'];
            $numberofdays=$_POST['numberofdays'];
            $adultprice=$_POST['adultprice'];
            $childprice=$_POST['childprice'];
            $ticketname=$_POST['ticketname'];
            $active=$_POST['active'];
            $create_date=time();
            $park_insert = "INSERT INTO tickettypes (ticket_type,numberofdays,adult_price,child_price,ticket_name,adctive,created_on)
            VALUES ('$ticketType','$numberofdays','$adultprice','$childprice','$ticketname','$active','$create_date')";
            $result = mysqli_query($db,$park_insert);
            header( "Location: TicketsDetails.php" );
            }
    
    include('../includes/header.php');
?>


      <div id="content-wrapper">
	  <div class="container-fluid">
	  <div class="col-md-12">
		<h3>Add Ticket Type</h3>
	   <hr>
	   </div>	
	 </div>
       <div class="container" style="display:flex;justify-content:center;margin-top:4%; ">
	   <div class="col-md-7">
       <form action="AddTicketType.php" autocomplete='off' method="post">
        <div class="form-group">
    <label for="fname">Ticket Type *</label>
    <input type="text" class="form-control" required name="ticketType" id="name" aria-describedby="fname" placeholder="Ticket Type *">
  </div>
   <div class="form-group">
    <label for="fname">Number Of Days *</label>
    <input type="text" class="form-control" onkeypress="return AllowNumbersOnly(event)" required name="numberofdays" id="noofdays" aria-describedby="fname" placeholder="Number Of Days *">
  </div>
   <div class="form-group">
    <label for="fname">Adult price *</label>
    <input type="text" class="form-control" required name="adultprice" id="adultprice" aria-describedby="adultprice" placeholder="Adult price *">
  </div>
  <div class="form-group">
    <label for="fname">Child price *</label>
    <input type="text" class="form-control" required name="childprice" id="childprice" aria-describedby="childprice" placeholder="Child price *">
  </div> 

  <div class="form-group">
    <label for="fname">Ticket name *</label>
    <input type="text" class="form-control" required name="ticketname" id="ticketname" aria-describedby="ticketname" placeholder="Ticket name *">
  </div>
<label for="place">Active *</label> 
     <select class="form-control" name="active">
    <option value="True">true</option>
    <option value="False">false</option>
    
  </select><br>
  <div class="form-group" style="text-align:center;">
 <button type="submit"  name="submittickettype"class="btn btn-primary">Submit</button>
 </div>
</form>
</div>
</div>
       
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Universal Orlando Resort 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          
      </div>
    </div>

  

  </body>

</html>
 <script type="text/javascript">

  
     function AllowNumbersOnly(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
      e.preventDefault();
    }
  }
  
</script>
