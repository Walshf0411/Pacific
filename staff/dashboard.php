<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="stylesheet" type="text/css" href="../css/calendar.css">
</head>

<body id="top">
	<?php
      require "../php/includes/db.php";
   $active="dashboard";
   include('../layouts/nav.php');
   
//    $result2 = mysqli_query($conn,"SELECT class_id,assignment_name,date_of_submission,assignment_id,assignment_marks from assignments where user_id = ".$user->id." ");
   $result2 = mysqli_query($conn,"SELECT distinct c.class_name, a.class_id,a.assignment_name,a.date_of_submission,a.assignment_marks,a.assignment_id from assignments as a,class as c where a.user_id = $user->id and c.class_id = a.class_id  ");
   $rowcount = mysqli_num_rows($result2);
   $result4 = mysqli_query($conn,"SELECT distinct  c.class_name, a.class_id,a.assignment_name,a.date_of_submission,a.assignment_marks,a.assignment_id from assignments as a,class as c,assignment_evaluation as ae where a.user_id = $user->id and c.class_id = a.class_id   ");
   $rowcount2 = mysqli_num_rows($result4);
   $result5 =  mysqli_query($conn,"SELECT pe.project_id,p.project_name from project_evaluation as pe,projects as p where pe.project_id = p.project_id and pe.user_id = $user->id ");
   $rowcount5 = mysqli_num_rows($result5);

?> 
   
   
   <section class="stats">
   		<div class="row">
               <h5 class="add">Basic Statistics</h5>
   			<div class="card col-twelve">
   					<div class="card-body">
   						<div class="row">
   							<div class="col-three">
   								<div class="card dash-box">
   									<h2><i style="font-size:3rem;" class="fa fa-clipboard" aria-hidden="true">&nbsp;<?php  echo $rowcount5;?></i></h2>
   									<h6>Projects Evaluated</h6>
   								</div>
								
							</div>
							<div class="col-three">
								<div class="card dash-box">
   									<h2><i style="font-size:3rem;" class="fa fa-tasks" aria-hidden="true">&nbsp;<?php  echo $rowcount;?></i></h2>
   									<h6>Assignments Created</h6>
   								</div>
							</div>
                     <div class="col-three">
                        <div class="card dash-box">
                              <h2><i style="font-size:3rem;" class="fa fa-tasks" aria-hidden="true">&nbsp;<?php echo $rowcount2; ?></i></h2>
                              <h6>Assignments Evaluated</h6>
                           </div>
                     </div>
							<div class="col-three">
								<div class="card dash-box">
   									<h2><i style="font-size:3rem;" class="fa fa-newspaper-o" aria-hidden="true">&nbsp;<?php echo $rowcount-$rowcount2  ?></i></h2>
   									<h6>Correction Pending</h6>
   								</div>
							</div>
   						</div>
   					</div>
   				  				
   			</div>

   		</div>

            <div class="row">
                  <div class="col-five">
                        <div class="container">
                              <h5 class="add">Projects Evaluated</h5>                 
                              <table class="table-common">
                                    <tr>
                                    <th>Title</th>
                                    </tr>
                                    <?php
                                          //include('../php/create_assignments.php');
                                          
                                          while($rows = mysqli_fetch_assoc($result5))
                                          {
                                    ?>
                                    <tr>
                                    <td><a href="projectinfo.php?project_id=<?php echo $rows['project_id']; ?>"><h4><?php  echo $rows['project_name']; ?></h4></a></td>
                                    </tr>
                              <?php  }
                              

                              ?>
                              </table>
                        </div>
                  </div>
			
                  <div class="col-six">
                        <div style="overflow-x:auto;" class="container">
                              <h5 class="add">Assignments</h5>                 
                              <table class="table-common">
                                    <tr>
                                    <th>Title</th>
                                    
                                    <th>Marks</th>
                                    <th>Class Assigned</th>
                                    <th>Deadline</th>
                                    
                                    </tr>

                                    <!-- <tr>
                                    <th>Deadline</th>
                                    </tr> -->

                                    <!-- ============================================================ -->
                                    <?php
                                          //include('../php/create_assignments.php');
                                          
                                          while($rows = mysqli_fetch_assoc($result2))
                                          {
                                    ?>
                                    <tr>
                                    <td><a href="assignment_info.php?id=<?php echo $rows['class_id'] ; ?>&id2=<?php echo $rows['assignment_id']; ?>"><h4><?php  echo $rows['assignment_name']; ?></h4></a></td>
                                    <td><a href="assignment_info.php"><h4><?php  echo $rows['assignment_marks']; ?></h4></a></td>
                                    <td><a href="student_list.php?id=<?php echo $rows['class_id']; ?>"><h4><?php  echo $rows['class_name']; ?></h4></a></td>

                                    <td><a href="assignment_info.php"><h4><?php  echo $rows['date_of_submission']; ?></h4></a></td>
                                    
                  
                                    </tr>
                              <?php  }
                              

                              ?>
 
                              </table>
                        </div>
                  </div>

   		</div>

   </section>
	
	
	<?php include('../layouts/footer.php') ?>
   <script src="../js/jquery-1.11.3.min.js"></script>
   <script src="../js/plugins.js"></script>
   <script src="../js/notify.js"></script>
   <script src="../js/main.js"></script>
</body>
</html>