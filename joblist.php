<?php
include 'jobsDB.php';
$jobs = getjobs();
?>


<!DOCTYPE html>
<html>
    <head>
	  <title>joblist.html</title>
    </head>



<body>
     <h1>joblist</h1>

<?php
while($job=mysqli_fetch_assoc($jobs))
{
?>
     <section>
	<ul>
		<li id= "li1"> job title: <?php echo $job  ['title'];?></li>
		<li id= "li2"> employer: <?php echo $job ['employer'];?<>/li>
		<li id= "li3"> location: <?php echo $job ['location'];?<>/li>
	</ul>
    </section/>
}
<?php

?>
    </body>
</html>

<style>
section{
	height: 220px;
	width: 250px;
	border-radius:5px;
	box-shadow: 5px 5px 5px 5px 5px blue;
	background-color:#FF9F57;
	float:left;
}

body{
	background-color:skyblue;
}

h1{
	text-align:center;
}

li
{
font-size:30px;
}

#li2{
	text-decoration:none;
}

section:hover{
	  background -color: red;
	  color:green;
}
</style>
