<!DOCTYPE html>
<html>
<head>
	<title>Assignment Dashboard</title>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/projects.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body id="top">
   <?php include('layouts/nav.php') ?>

   <div id="id2" class="modal">
      <form class="modal-content" action="index.html">
         <span onclick="document.getElementById('id2').style.display='none'" class="close" title="Close Modal">&times;</span>
         <div class="container">
            <h5 style="text-align: center; color: #05bca9;">Asignment</h5>
            <hr>

            <!-- Name of the assignment -->
            <div class="row">
               <div class="col-three">
                  <label for = "nameoftheassignment"><b>Name of the Assignment</b></label>
               </div>
               <div class="col-eight">
                  <input type="text" placeholder="Enter the name of the assignment" name = "nameoftheassignment" required>
               </div>
            </div>
            <div class="row">
               <div class="col-three">
                  <label for = "marksallotedtotheassignment"><b>Description</b></label>
               </div>
               <div class="col-eight">
                  <input type="text" placeholder="Enter the marks alloted to the assignment" name="marksallotedtotheassignment" required>
               </div>
            </div>
            <div class="row">
               <div class="col-three">
                  <label for = "selectclass"><b>Select Class</b></label>
               </div>
               <div class="col-eight">
                  <select class="round">
                     <option value="0">Select Class</option>
                     <option value="1">D5</option>
                     <option value="2">D10</option>
                     <option value="3">D15</option>
                     <option value="4">D20</option>               
                  </select>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-three">
                  <label for = "assignmenttype"><b>Assignment Type</b></label>
               </div>
               <div class="col-eight">
                  <select class="round">
                     <option value="0">Assignment Type</option>
                     <option value="1">Document</option>
                     <option value="2">Code</option>
                  </select>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-three">
                  <label for ="deadline">Deadline</label>
               </div>
               <div class="col-eight"></div>
            </div>
            
            <div class="formrow clearfix" style="justify-content: center;">
               <div class="col-six" style="text-align: center;">
                  <button type="submit" class="signupbtn">Save</button>
               </div>
               <div class="col-six" style="text-align: center;">
                  <button onclick="document.getElementById('id2').style.display='none'" class="cancelbtn">Cancel</button>
               </div>                           
            </div>
            



         </div>
      </form>
   </div>
  

   <section class="stats">
         <div class="row">
            <button onclick="document.getElementById('id2').style.display='block'" style="width:auto; float: right;"><i class="fa fa-plus"></i>&nbsp;Create Assignment</button>
         </div>
   		<div class="row">
   			<div class="col-twelve">
                  <div class="container">
                     <h5 class="add">Assignments</h5>                 
                     <table class="table-common">
                        <tr>
                           <th>Title</th>
                           <th>Evaluation Status</th>
                        </tr>
                        <tr>
                           <td><a href="assignment_details.php"><h4>Assignment 1</h4></a></td>
                           <td class="score">Checked</td>
                        </tr>
                        <tr>
                           <td><a href="assignment_details.php"><h4>Assignment 2</h4></a></td>
                           <td class="score">Not Checked</td>
                        </tr>
                        <tr>
                           <td><a href="assignment_details.php"><h4>Assignment 3</h4></a></td>
                           <td class="score">Not Checked</td>
                        </tr>
                     </table>
                  </div>
         </div>
   		</div>
   		<div class="row">
   			<div class="col-seven">
   			</div>
   			
   			<!-- <div class="col-three"></div> -->
   		</div>
   </section>
	
   
	<?php include('layouts/footer.php') ?>
   <script >


      var modal = document.getElementById('id2');

//When the users click anywhere outside the modal
window.onclick = function(event) {
   if (event.target == modal){
      modal.style.display = "none";
   } 
   // body...
}



       var slider = document.getElementById("MyRange");
       var output = document.getElementById("demo");
       output.innerHTML = slider.value;

       slider.oninput = function(){
          output.innerHTML = this.value;

       }
      
   </script> 
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
</body>
</html>