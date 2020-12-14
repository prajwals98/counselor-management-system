<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
	
	
	
		
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet" />
<link href="bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet" />
<link href="dist/css/sb-admin-2.css" rel="stylesheet" />
<link href="bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	
	
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_slidebar.php'); ?>	
                   <div class="span9" id="content">
				   <body>
                      <div class="row-fluid">
					     <?php $query= mysql_query("select * from login where login_id = '$session_id'")or die(mysql_error());
						   $row = mysql_fetch_array($query);
						 ?>
						 
		
						 
				        
					   			
					  <!-- block -->
                        <div id="block_bg" class="block">
                               <div class="navbar navbar-inner block-header" >
							<h1 align="center">INTERNAL ASSESSMENT FOR 1ST YEAR</h1>
                               
                            </div>
							
                           <div class="block-content collapse in">
				         
									
				               <div class="block-content collapse in">
                           
         
				
				
				 </div></div></div> </div> </div></div> </div></div></div></div></div></div></div></div ></div>
				
			
				
				
				
				<div class="pull-center">
		   <a href="allmarks.php" class="btn btn-info" id="print" data-placement="right" title="Back">Back</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
				<form method="post">

<?php
								$query = mysql_query("select * from marks where usn='$staff_fullname'")or die(mysql_error());
								$num_row = mysql_num_rows($query);
								$row = mysql_fetch_array($query);
								
								?>				
				
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading"><center><b style="color:darkblue">INTERNAL MARKS FOR 1ST SEMESTER</center></b></div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=2>
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-7">
			<th><input class="form-control" name="sc11" value="<?php echo $row['sc1']; ?>" >	</th>
			</div>   
            <div class="col-lg-7">
			<th><input class="form-control" name="sc21" value="<?php echo $row['sc2']; ?>" >	</th>
			</div>   
              <div class="col-lg-6">
			 <th><input class="form-control" name="sc31" value="<?php echo $row['sc3']; ?>" >	</th>
			</div>
<div class="col-lg-6">
			 <th><input class="form-control" name="sc41" value="<?php echo $row['sc4']; ?>" >	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc51" value="<?php echo $row['sc5']; ?>" >	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc61" value="<?php echo $row['sc6']; ?>" >	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc71" value="<?php echo $row['sc7']; ?>" >	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc81" value="<?php echo $row['sc8']; ?>">	</th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control"  name="t1s11" value="<?php echo $row['t1s1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control"  name="t1s21" value="<?php echo $row['t1s2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s31" value="<?php echo $row['t1s3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s41" value="<?php echo $row['t1s4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s51" value="<?php echo $row['t1s5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s61" value="<?php echo $row['t1s6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s71" value="<?php echo $row['t1s7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s81" value="<?php echo $row['t1s8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1total1" value="<?php echo $row['t1total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="t2s11" value="<?php echo $row['t2s1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="t2s21" value="<?php echo $row['t2s2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s31" value="<?php echo $row['t2s3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s41" value="<?php echo $row['t2s4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s51" value="<?php echo $row['t2s5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s61" value="<?php echo $row['t2s6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s71" value="<?php echo $row['t2s7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s81" value="<?php echo $row['t2s8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2total1" value="<?php echo $row['t2total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="t3s11" value="<?php echo $row['t3s1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="t3s21" value="<?php echo $row['t3s2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s31" value="<?php echo $row['t3s3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s41" value="<?php echo $row['t3s4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s51" value="<?php echo $row['t3s5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s61" value="<?php echo $row['t3s6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s71" value="<?php echo $row['t3s7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s81" value="<?php echo $row['t3s8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3total1" value="<?php echo $row['t3total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="a1s11" value="<?php echo $row['a1s1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="a1s21" value="<?php echo $row['a1s2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s31" value="<?php echo $row['a1s3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s41" value="<?php echo $row['a1s4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s51" value="<?php echo $row['a1s5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s61" value="<?php echo $row['a1s6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s71" value="<?php echo $row['a1s7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s81" value="<?php echo $row['a1s8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1total1" value="<?php echo $row['a1total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="as1s11" value="<?php echo $row['as1s1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="as1s21" value="<?php echo $row['as1s2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s31" value="<?php echo $row['as1s3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s41" value="<?php echo $row['as1s4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s51" value="<?php echo $row['as1s5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s61" value="<?php echo $row['as1s6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s71" value="<?php echo $row['as1s7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s81" value="<?php echo $row['as1s8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1total1" value="<?php echo $row['as1total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="f1s11" value="<?php echo $row['f1s1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="f1s21" value="<?php echo $row['f1s2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s31" value="<?php echo $row['f1s3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s41" value="<?php echo $row['f1s4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s51" value="<?php echo $row['f1s5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s61" value="<?php echo $row['f1s6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s71" value="<?php echo $row['f1s7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s81" value="<?php echo $row['f1s8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1total1" value="<?php echo $row['f1total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="e1s11" value="<?php echo $row['e1s1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="e1s21" value="<?php echo $row['e1s2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s31" value="<?php echo $row['e1s3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s41" value="<?php echo $row['e1s4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s51" value="<?php echo $row['e1s5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s61" value="<?php echo $row['e1s6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s71" value="<?php echo $row['e1s7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s81" value="<?php echo $row['e1s8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1total1" value="<?php echo $row['e1total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="totals11" value="<?php echo $row['totals1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="totals21" value="<?php echo $row['totals2']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals31" value="<?php echo $row['totals3']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals41" value="<?php echo $row['totals4']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals51" value="<?php echo $row['totals5']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals61" value="<?php echo $row['totals6']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals71" value="<?php echo $row['totals7']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals81" value="<?php echo $row['totals8']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="total1" value="<?php echo $row['total']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div>
					
					
					<!-- <div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" align="right" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
	                                            });
												$(document).ready(function() {
												$(document).unload(function() {
												$('#save1').attr('disabled', 'disabled');
												});
											});
	                                            </script>
                                          </div> -->
                                        </div>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div> </div></div> </div></div></div></div></div></div></div></div ></div>
			
			
                  	<center>
					<div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" align="right" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
	                                            });
												$(document).ready(function() {
												$(document).unload(function() {
												$('#save1').attr('disabled', 'disabled');
												});
											});
	                                            </script>
                                          </div>
                                        </div></center>               



<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading"><center><b style="color:darkblue">INTERNAL MARKS FOR 2ND SEMESTER</center></b></div>
			<div class="panel-body">
			<div class="row">
			
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="panel panel-default">
            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" border=1>
                                    <thead>
                                        <tr>
										 <div class="col-lg-6">
			 <th>Subject Code</th>
			</div>
                                         <div class="col-lg-6">
			<th><input class="form-control" name="sc12" value="<?php echo $row['sc11']; ?>" >	</th>
			</div>   
            <div class="col-lg-6">
			<th><input class="form-control" name="sc22" value="<?php echo $row['sc21']; ?>" >	</th>
			</div>   
              <div class="col-lg-6">
			 <th><input class="form-control" name="sc32" value="<?php echo $row['sc31']; ?>" >	</th>
			</div>
<div class="col-lg-6">
			 <th><input class="form-control" name="sc42" value="<?php echo $row['sc41']; ?>" >	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc52" value="<?php echo $row['sc51']; ?>">	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc62" value="<?php echo $row['sc61']; ?>">	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc72" value="<?php echo $row['sc71']; ?>" >	</th>
			</div> 
<div class="col-lg-6">
			 <th><input class="form-control" name="sc82" value="<?php echo $row['sc81']; ?>">	</th>
			</div> 
<div class="col-lg-6">
			 <th> Total	</th>
			</div> 			
            </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                  <div class="col-lg-6">
				  <td>Test 1</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control"  name="t1s12" value="<?php echo $row['t1s11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control"  name="t1s22" value="<?php echo $row['t1s21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s32" value="<?php echo $row['t1s31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s42" value="<?php echo $row['t1s41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s52" value="<?php echo $row['t1s51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s62" value="<?php echo $row['t1s61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s72" value="<?php echo $row['t1s71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1s82" value="<?php echo $row['t1s81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control"  name="t1total2" value="<?php echo $row['t1total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>

          <tr> 
                  <div class="col-lg-6">
				  <td>Test 2</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="t2s12" value="<?php echo $row['t2s11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="t2s22" value="<?php echo $row['t2s21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s32" value="<?php echo $row['t2s31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s42" value="<?php echo $row['t2s41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s52" value="<?php echo $row['t2s51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s62" value="<?php echo $row['t2s61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s72" value="<?php echo $row['t2s71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2s82" value="<?php echo $row['t2s81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t2total2" value="<?php echo $row['t2total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>

 <tr> 
                  <div class="col-lg-6">
				  <td>Test 3</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="t3s12" value="<?php echo $row['t3s11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="t3s22" value="<?php echo $row['t3s21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s32" value="<?php echo $row['t3s31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s42" value="<?php echo $row['t3s41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s52" value="<?php echo $row['t3s51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s62" value="<?php echo $row['t3s61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s72" value="<?php echo $row['t3s71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3s82" value="<?php echo $row['t3s81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="t3total2" value="<?php echo $row['t3total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Average</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="a1s12" value="<?php echo $row['a1s11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="a1s22" value="<?php echo $row['a1s21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s32" value="<?php echo $row['a1s31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s42" value="<?php echo $row['a1s41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s52" value="<?php echo $row['a1s51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s62" value="<?php echo $row['a1s61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s72" value="<?php echo $row['a1s71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1s82" value="<?php echo $row['a1s81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="a1total2" value="<?php echo $row['a1total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Assignment</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="as1s12" value="<?php echo $row['as1s11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="as1s22" value="<?php echo $row['as1s21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s32" value="<?php echo $row['as1s31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s42" value="<?php echo $row['as1s41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s52" value="<?php echo $row['as1s51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s62" value="<?php echo $row['as1s61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s72" value="<?php echo $row['as1s71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1s82" value="<?php echo $row['as1s81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="as1total2" value="<?php echo $row['as1total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Final Internal Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="f1s12" value="<?php echo $row['f1s11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="f1s22" value="<?php echo $row['f1s21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s32" value="<?php echo $row['f1s31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s42" value="<?php echo $row['f1s41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s52" value="<?php echo $row['f1s51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s62" value="<?php echo $row['f1s61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s72" value="<?php echo $row['f1s71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1s82" value="<?php echo $row['f1s81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="f1total2" value="<?php echo $row['f1total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>External Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="e1s12" value="<?php echo $row['e1s11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="e1s22" value="<?php echo $row['e1s21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s32" value="<?php echo $row['e1s31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s42" value="<?php echo $row['e1s41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s52" value="<?php echo $row['e1s51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s62" value="<?php echo $row['e1s61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s72" value="<?php echo $row['e1s71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1s82" value="<?php echo $row['e1s81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="e1total2" value="<?php echo $row['e1total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  <tr> 
                  <div class="col-lg-6">
				  <td>Total Marks</td>
				  </div>
                  <div class="col-lg-6">
			<td><input class="form-control" name="totals12" value="<?php echo $row['total11']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
            <div class="col-lg-6">
			<td><input class="form-control" name="totals22" value="<?php echo $row['total21']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals32" value="<?php echo $row['total31']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals42" value="<?php echo $row['total41']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals52" value="<?php echo $row['total51']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals62" value="<?php echo $row['total61']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals72" value="<?php echo $row['total71']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="totals82" value="<?php echo $row['total81']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
			<div class="col-lg-6">
			<td><input class="form-control" name="total2" value="<?php echo $row['total1']; ?>" pattern="^\d{1,3}$" title="Marks should be 1 or 3 digits. e.g. 0,50"></td>
			</div>
                  </tr>
				  
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        
                        <!-- /.panel-body -->
                    </div> </div></div> </div></div></div></div></div></div></div></div ></div>
					
					<center>
					<div class="control-group">
                                          <div class="controls">
												<button name="save1" class="btn btn-info" align="right" id="save1" data-placement="center" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save1').tooltip('show');
	                                            $('#save1').tooltip('hide');
	                                            });
												$(document).ready(function() {
												$(document).unload(function() {
												$('#save1').attr('disabled', 'disabled');
												});
											});
	                                            </script>
                                          </div>
                                        </div></center>
                    <!-- /.panel -->
                </div>
			</div>	
			<br><br>					
		  </div>
			
			
                                								 
           </form>                             
	
		  
					
		    
			<br><br>
			
			
			</div>	
			<br><br>
		</div>
      	</div>
		</div>					
       
		<?php		
				
if(isset($_POST['save1']))
{			
				
$usn = $staff_fullname;
$sc11 = $_POST['sc11'];
$sc21 = $_POST['sc21'];
$sc31 	=$_POST['sc31']       ;
$sc41 	=$_POST['sc41']       ;
$sc51 	=$_POST['sc51']       ;
$sc61 	=$_POST['sc61']       ;
$sc71 	=$_POST['sc71']       ;
$sc81 =$_POST['sc81']       ;
$t1s11 	= $_POST['t1s11']  ;
$t1s21 	=$_POST['t1s21']      ;
$t1s31 =$_POST['t1s31']      ;
$t1s41 =$_POST['t1s41']      ;
$t1s51 	=$_POST['t1s51']      ;
$t1s61 	=$_POST['t1s61']      ;
$t1s71 =$_POST['t1s71']      ;
$t1s81=$_POST['t1s81']      ;
$t1total1 =$_POST['t1total1']   ;
$t2s11 =$_POST['t2s11']      ;
$t2s21 	=$_POST['t2s21']      ;
$t2s31 =$_POST['t2s31']      ;
$t2s41 =$_POST['t2s41']      ;
$t2s51 	=$_POST['t2s51']      ;
$t2s61 =$_POST['t2s61']      ;
$t2s71 	=$_POST['t2s71']      ;
$t2s81 =$_POST['t2s81']      ;
$t2total1 	=$_POST['t2total1']   ;
$t3s11 =$_POST['t3s11']      ;
$t3s21 =$_POST['t3s21']      ;
$t3s31 	=$_POST['t3s31']      ;
$t3s41 	=$_POST['t3s41']      ;
$t3s51 	=$_POST['t3s51']      ;
$t3s61 	=$_POST['t3s61']      ;
$t3s71 	=$_POST['t3s71']      ;
$t3s81 =$_POST['t3s81']      ;
$t3total1 	=$_POST['t3total1']   ;
$a1s11 	=$_POST['a1s11']      ;
$a1s21 	=$_POST['a1s21']      ;
$a1s31 	=$_POST['a1s31']      ;
$a1s41 	=$_POST['a1s41']      ;
$a1s51 =$_POST['a1s51']      ;
$a1s61 	=$_POST['a1s61']      ;
$a1s71 	=$_POST['a1s71']      ;
$a1s81 	=$_POST['a1s81']      ;
$a1total1 	=$_POST['a1total1']   ;
$as1s11 	=$_POST['as1s11']     ;
$as1s21 =$_POST['as1s21']     ;
$as1s31 	=$_POST['as1s31']     ;
$as1s41 	=$_POST['as1s41']     ;
$as1s51 	=$_POST['as1s51']     ;
$as1s61 	=$_POST['as1s61']     ;
$as1s71 	=$_POST['as1s71']     ;
$as1s81 	=$_POST['as1s81']     ;
$as1total1 =$_POST['as1total1']  ;
$f1s11	=$_POST['f1s11']      ;
$f1s21 	=$_POST['f1s21']      ;
$f1s31 	=$_POST['f1s31']      ;
$f1s41 	=$_POST['f1s41']      ;
$f1s51 	=$_POST['f1s51']      ;
$f1s61 	=$_POST['f1s61']      ;
$f1s71 	=$_POST['f1s71']      ;
$f1s81 	=$_POST['f1s81']      ;
$f1total1 =$_POST['f1total1']   ;
$e1s11 =$_POST['e1s11']      ;
$e1s21 	=$_POST['e1s21']      ;
$e1s31 =$_POST['e1s31']      ;
$e1s41 	=$_POST['e1s41']      ;
$e1s51 	=$_POST['e1s51']      ;
$e1s61 =$_POST['e1s61']      ;
$e1s71 	=$_POST['e1s71']      ;
$e1s81 =$_POST['e1s81']      ;
$e1total1 	=$_POST['e1total1']   ;
$totals11 	=$_POST['totals11']   ;
$totals21 =$_POST['totals21']   ;
$totals31 	=$_POST['totals31']   ;
$totals41 	=$_POST['totals41']   ;
$totals51 	=$_POST['totals51']   ;
$totals61 	=$_POST['totals61']   ;
$totals71 	=$_POST['totals71']   ;
$totals81 	=$_POST['totals81']   ;
$total1=$_POST['total1']     ;


$sc12 = $_POST['sc12'];
$sc22 = $_POST['sc22'];
$sc32 	=$_POST['sc32']       ;
$sc42 	=$_POST['sc42']       ;
$sc52 	=$_POST['sc52']       ;
$sc62 	=$_POST['sc62']       ;
$sc72 	=$_POST['sc72']       ;
$sc82 =$_POST['sc82']       ;
$t1s12 	= $_POST['t1s12']  ;
$t1s22 	=$_POST['t1s22']      ;
$t1s32 =$_POST['t1s32']      ;
$t1s42 =$_POST['t1s42']      ;
$t1s52 	=$_POST['t1s52']      ;
$t1s62 	=$_POST['t1s62']      ;
$t1s72 =$_POST['t1s72']      ;
$t1s82=$_POST['t1s82']      ;
$t1total2 =$_POST['t1total2']   ;
$t2s12 =$_POST['t2s12']      ;
$t2s22 	=$_POST['t2s22']      ;
$t2s32 =$_POST['t2s32']      ;
$t2s42 =$_POST['t2s42']      ;
$t2s52 	=$_POST['t2s52']      ;
$t2s62 =$_POST['t2s62']      ;
$t2s72 	=$_POST['t2s72']      ;
$t2s82 =$_POST['t2s82']      ;
$t2total2 	=$_POST['t2total2']   ;
$t3s12 =$_POST['t3s12']      ;
$t3s22 =$_POST['t3s22']      ;
$t3s32 	=$_POST['t3s32']      ;
$t3s42 	=$_POST['t3s42']      ;
$t3s52 	=$_POST['t3s52']      ;
$t3s62 	=$_POST['t3s62']      ;
$t3s72 	=$_POST['t3s72']      ;
$t3s82 =$_POST['t3s82']      ;
$t3total2 	=$_POST['t3total2']   ;
$a1s12 	=$_POST['a1s12']      ;
$a1s22 	=$_POST['a1s22']      ;
$a1s32 	=$_POST['a1s32']      ;
$a1s42 	=$_POST['a1s42']      ;
$a1s52 =$_POST['a1s52']      ;
$a1s62 	=$_POST['a1s62']      ;
$a1s72 	=$_POST['a1s72']      ;
$a1s82 	=$_POST['a1s82']      ;
$a1total2 	=$_POST['a1total2']   ;
$as1s12 	=$_POST['as1s12']     ;
$as1s22 =$_POST['as1s22']     ;
$as1s32 	=$_POST['as1s32']     ;
$as1s42 	=$_POST['as1s42']     ;
$as1s52 	=$_POST['as1s52']     ;
$as1s62 	=$_POST['as1s62']     ;
$as1s72 	=$_POST['as1s72']     ;
$as1s82 	=$_POST['as1s82']     ;
$as1total2 =$_POST['as1total2']  ;
$f1s12	=$_POST['f1s12']      ;
$f1s22 	=$_POST['f1s22']      ;
$f1s32 	=$_POST['f1s32']      ;
$f1s42 	=$_POST['f1s42']      ;
$f1s52 	=$_POST['f1s52']      ;
$f1s62 	=$_POST['f1s62']      ;
$f1s72 	=$_POST['f1s72']      ;
$f1s82 	=$_POST['f1s82']      ;
$f1total2 =$_POST['f1total2']   ;
$e1s12 =$_POST['e1s12']      ;
$e1s22 	=$_POST['e1s22']      ;
$e1s32 =$_POST['e1s32']      ;
$e1s42 	=$_POST['e1s42']      ;
$e1s52 	=$_POST['e1s52']      ;
$e1s62 =$_POST['e1s62']      ;
$e1s72 	=$_POST['e1s72']      ;
$e1s82 =$_POST['e1s82']      ;
$e1total2 	=$_POST['e1total2']   ;
$totals12 	=$_POST['totals12']   ;
$totals22 =$_POST['totals22']   ;
$totals32 	=$_POST['totals32']   ;
$totals42 	=$_POST['totals42']   ;
$totals52 	=$_POST['totals52']   ;
$totals62 	=$_POST['totals62']   ;
$totals72 	=$_POST['totals72']   ;
$totals82 	=$_POST['totals82']   ;
$total2=$_POST['total2']     ;
	

$result = mysql_query("select sc1 from marks where usn = '$staff_fullname'");
if(mysql_num_rows($result)==0)
{
mysql_query("INSERT INTO marks VALUES('$usn',
'$sc11', 	   
'$sc21', 	   
'$sc31', 	   
'$sc41', 	   
'$sc51', 	   
'$sc61', 	   
'$sc71', 	   
'$sc81',      
'$t1s11', 	   
'$t1s21', 	   
'$t1s31',     
'$t1s41',     
'$t1s51', 	   
'$t1s61', 	   
'$t1s71',     
'$t1s81',     
'$t1total1',  
'$t2s11',     
'$t2s21', 	   
'$t2s31',     
'$t2s41',     
'$t2s51', 	   
'$t2s61',     
'$t2s71', 	   
'$t2s81',     
'$t2total1', 
'$t3s11',     
'$t3s21',     
'$t3s31', 	   
'$t3s41', 	   
'$t3s51', 	   
'$t3s61', 	   
'$t3s71', 	   
'$t3s81',     
'$t3total1', 
'$a1s11', 	   
'$a1s21', 	   
'$a1s31', 	   
'$a1s41', 	   
'$a1s51',     
'$a1s61', 	   
'$a1s71', 	   
'$a1s81', 	   
'$a1total1', 
'$as1s11', 
'$as1s21',    
'$as1s31', 
'$as1s41', 
'$as1s51', 
'$as1s61', 
'$as1s71', 
'$as1s81', 
'$as1total1', 
'$f1s11',	   
'$f1s21', 	   
'$f1s31', 	   
'$f1s41', 	   
'$f1s51', 	   
'$f1s61', 	   
'$f1s71', 	   
'$f1s81', 	   
'$f1total1',  
'$e1s11',     
'$e1s21', 	   
'$e1s31',     
'$e1s41', 	   
'$e1s51', 	   
'$e1s61',     
'$e1s71', 	   
'$e1s81',     
'$e1total1', 
'$totals11', 
'$totals21',  
'$totals31', 
'$totals41', 
'$totals51', 
'$totals61', 
'$totals71', 
'$totals81', 
'$total1',  
'$sc12', 	   
'$sc22', 	   
'$sc32', 	   
'$sc42', 	   
'$sc52', 	   
'$sc62', 	   
'$sc72', 	   
'$sc82',      
'$t1s12', 	   
'$t1s22', 	   
'$t1s32',     
'$t1s42',     
'$t1s52', 	   
'$t1s62', 	   
'$t1s72',     
'$t1s82',     
'$t1total2',  
'$t2s12',     
'$t2s22', 	   
'$t2s32',     
'$t2s42',     
'$t2s52', 	   
'$t2s62',     
'$t2s72', 	   
'$t2s82',     
'$t2total2', 
'$t3s12',     
'$t3s22',     
'$t3s32', 	   
'$t3s42', 	   
'$t3s52', 	   
'$t3s62', 	   
'$t3s72', 	   
'$t3s82',     
'$t3total2', 
'$a1s12', 	   
'$a1s22', 	   
'$a1s32', 	   
'$a1s42', 	   
'$a1s52',     
'$a1s62', 	   
'$a1s72', 	   
'$a1s82', 	   
'$a1total2', 
'$as1s12', 
'$as1s22',    
'$as1s32', 
'$as1s42', 
'$as1s52', 
'$as1s62', 
'$as1s72', 
'$as1s82', 
'$as1total2', 
'$f1s12',	   
'$f1s22', 	   
'$f1s32', 	   
'$f1s42', 	   
'$f1s52', 	   
'$f1s62', 	   
'$f1s72', 	   
'$f1s82', 	   
'$f1total2',  
'$e1s12',     
'$e1s22', 	   
'$e1s32',     
'$e1s42', 	   
'$e1s52', 	   
'$e1s62',     
'$e1s72', 	   
'$e1s82',     
'$e1total2', 
'$totals12', 
'$totals22',  
'$totals32', 
'$totals42', 
'$totals52', 
'$totals62', 
'$totals72', 
'$totals82', 
'$total2')  
	")or die (mysql_error());	
}
else
{
	mysql_query("UPDATE marks SET sc1='$sc11',sc2='$sc21',sc3='$sc31',sc4='$sc41',sc5='$sc51',sc6='$sc61',sc7='$sc71',sc8='$sc81',t1s1='$t1s11',t1s2='$t1s21',t1s3='$t1s31',t1s4='$t1s41',t1s5='$t1s51',t1s6='$t1s61',t1s7='$t1s71',t1s8='$t1s81',t1total='$t1total1',t2s1='$t2s11',t2s2='$t2s21',t2s3='$t2s31',t2s4='$t2s41',t2s5='$t2s51',t2s6='$t2s61',t2s7='$t2s71',t2s8='$t2s81',t2total='$t2total1',t3s1='$t3s11',t3s2='$t3s21',t3s3='$t3s31',t3s4='$t3s41',t3s5='$t3s51',t3s6='$t3s61',t3s7='$t3s71',t3s8='$t3s81',t3total='$t3total1',a1s1='$a1s11',a1s2='$a1s21',a1s3='$a1s31',a1s4='$a1s41',a1s5='$a1s51',a1s6='$a1s61',a1s7='$a1s71',a1s8='$a1s81',a1total='$a1total1',as1s1='$as1s11',as1s2='$as1s21',as1s3='$as1s31',as1s4='$as1s41',as1s5='$as1s51',as1s6='$as1s61',as1s7='$as1s71',as1s8='$as1s81',as1total='$as1total1',f1s1='$f1s11',f1s2='$f1s21',f1s3='$f1s31',f1s4='$f1s41',f1s5='$f1s51',f1s6='$f1s61',f1s7='$f1s71',f1s8='$f1s81',f1total='$f1total1',e1s1='$e1s11',e1s2='$e1s21',e1s3='$e1s31',e1s4='$e1s41',e1s5='$e1s51',e1s6='$e1s61',e1s7='$e1s71',e1s8='$e1s81',e1total='$e1total1',totals1='$totals11',totals2='$totals21',totals3='$totals31',totals4='$totals41',totals5='$totals51',totals6='$totals61',totals7='$totals71',totals8='$totals81',total='$total1',sc11='$sc12',sc21='$sc22',sc31='$sc32',sc41='$sc42',sc51='$sc52',sc61='$sc62',sc71='$sc72',sc81='$sc82',t1s11='$t1s12',t1s21='$t1s22',t1s31='$t1s32',t1s41='$t1s42',t1s51='$t1s52',t1s61='$t1s62',t1s71='$t1s72',t1s81='$t1s82',t1total1='$t1total2',t2s11='$t2s12',t2s21='$t2s22',t2s31='$t2s32',t2s41='$t2s42',t2s51='$t2s52',t2s61='$t2s62',t2s71='$t2s72',t2s81='$t2s82',t2total1='$t2total2',t3s11='$t3s12',t3s21='$t3s22',t3s31='$t3s32',t3s41='$t3s42',t3s51='$t3s52',t3s61='$t3s62',t3s71='$t3s72',t3s81='$t3s82',t3total1='$t3total2',a1s11='$a1s12',a1s21='$a1s22',a1s31='$a1s32',a1s41='$a1s42',a1s51='$a1s52',a1s61='$a1s62',a1s71='$a1s72',a1s81='$a1s82',a1total1='$a1total2',as1s11='$as1s12',as1s21='$as1s22',as1s31='$as1s32',as1s41='$as1s42',as1s51='$as1s52',as1s61='$as1s62',as1s71='$as1s72',as1s81='$as1s82',as1total1='$as1total2',f1s11='$f1s12',f1s21='$f1s22',f1s31='$f1s32',f1s41='$f1s42',f1s51='$f1s52',f1s61='$f1s62',f1s71='$f1s72',f1s81='$f1s82',f1total1='$f1total2',e1s11='$e1s12',e1s21='$e1s22',e1s31='$e1s32',e1s41='$e1s42',e1s51='$e1s52',e1s61='$e1s62',e1s71='$e1s72',e1s81='$e1s82',e1total1='$e1total2',total11='$totals12',total21='$totals22',total31='$totals32',total41='$totals42',total51='$totals52',total61='$totals62',total71='$totals72',total81='$totals82',total1='$total2' WHERE usn = '$staff_fullname' ") or die(mysql_error());

}
echo "
		<script>
		window.location = 'academicdetails.php'; 
		alert('Details Updated');
		</script>";
}?>		
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			                 </div>	
					     
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>
	
</html>