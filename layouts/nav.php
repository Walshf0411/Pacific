<header>

	<div class="row">

		<div class="logo">
         <a href="dashboard.php">Pacific</a>
      </div>

   	<nav id="main-nav-wrap ">
			<ul class="main-navigation">
				<?php
					if($active=="dashboard"){
						echo '<li class="current"><a href="dashboard.php" title="">Dashboard</a></li>
						<li><a href="projects.php" title="">Projects</a></li>
						<li><a href="assignments.php" title="">Assignments</a></li>
						<li class="highlight with-sep"><a href="#"><i class="fa fa-bell"></i></a></li>  
						<li class="highlight"><a href="#features" title=""><i class="fa fa-user-circle-o"></i></a></li>';
					} 
					if($active=="projects"){
						echo '<li><a href="dashboard.php" title="">Dashboard</a></li>
						<li class="current"><a href="projects.php" title="">Projects</a></li>
						<li><a href="assignments.php" title="">Assignments</a></li>
						<li class="highlight with-sep"><a href="#"><i class="fa fa-bell"></i></a></li>  
						<li class="highlight"><a href="#features" title=""><i class="fa fa-user-circle-o"></i></a></li>';
					} 
					if($active=="assignments"){
						echo '<li><a href="dashboard.php" title="">Dashboard</a></li>
						<li><a href="projects.php" title="">Projects</a></li>
						<li class="current"><a href="assignments.php" title="">Assignments</a></li>
						<li class="highlight with-sep"><a href="#"><i class="fa fa-bell"></i></a></li>  
						<li class="highlight"><a href="#features" title=""><i class="fa fa-user-circle-o"></i></a></li>';
					} 
				?>
											
			</ul>
		</nav>

		<a class="menu-toggle" href="#"><span>Menu</span></a>
		
	</div>   	
	
</header> 