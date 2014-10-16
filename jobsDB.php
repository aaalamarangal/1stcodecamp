<?php

function dbopen()
{
	$db = new mysqli('localhost','root','freehugs','jobs');
	return $db;
}

function addjob($title, $salary, $jobdescription,$location, $qualifications,$employer,$website)
{ 
    $sql = "insert into jobs(title, salary, job descrition, location, qualification, employer, website) 
                     VALUES ('$title', 'salary', 'jobdescription','location','qualification','employer','website')";

    echo $sql;

    $db= new mysqli('local host','root','freehugs', 'jobs');
    $result=mysqli_query($db,$sql);
}

function getjobs()
{
	$db=dbopen();
	$sql="select * from jobs";
	return mysqli_query($db,$sql);
}

function getjob($id)
{
	$db=dbopen();
	$sql="select * from jobs where id = '$id'";
	return mysqli_query($db,$sql);
}

function confirmuser($name,$password)
{
	$sql= "select * from user where name = '$name' and password = '$password'";
	$result = mysqli_query($db,$sql);
	$count  =mysqli_num_rows($result);
	return $count;
} 

echo confirm user('tim cook', 'def');
/*
$result = getjobs();
while($row=mysqli_fetch_assoc($result))
{
	echo $row['title'] . "<br>";
}
*/
?>
