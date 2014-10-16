
<?php
	$name = $_GET['name'];
	$title = $_GET['title'];
	$blogpost = $_GET['blogpost'];
?>
    <form action="shiva.php">
         name:<input type="text" name="name">
         title:<input type="text" name="title">
         blogpost:<input type="text" name="blogpost">
         <input type="submit">
      
    </form>



	<?php
    $conn=mysql_connect("localhost","root","freehugs");
    mysql_select_db('test');
    $sql ="insert into blog (name, title, blog_post) values('" .$name ."', '".$title."', '". $blogpost ."')";
    $result=mysql_query($sql);
    while($row=mysql_fetch_assoc($result))
    {
    	   echo $row['name'];
    	   echo $row['blog_post'];
    	   echo $row['title'];
    }


	if(!$conn)
	{
		 die('could not connect:'.mysql_error());
	}
	   mysql_free_result($result);

?>
