<!DOCTYPE html>
<html>
<head>
	  <title>CSS contact form</title>
</head>

<body>

<h2>create job </h2>

<form class="form">

    <p class="name">
         <input type="text" name="title" id= "title" place holder="job title"/>
         <label for= "title"> job title</label>
    </p>

    <p class="salary">
        <input type= "text" name="salary" id="salary" placeholder="salary"/>
        <label for= "salary">salary</label>
   </p>
   <p class ="text">
   		<textarea name= "text" placeholder= "description" /></textarea>
   	</p>

   	<p class="location">
   	    <input type="text" name="location" id="location" placeholder="location"/>
   	    <label for="location">location</label>
    </p>

    <p class="qualification">
        <input type= "text" name="qualification" id= "qualification" placeholder="qualification"/>
        <label for="qualification">qualification</label>
    </p>

    <p class="employer">
        <input type= "text" name="employer" id= "employer" placeholder="employer"/>
        <label for="employer">employer</label>
    </p>

    <p class="website">
        <input type= "text" name="website" id= "website" placeholder="website"/>
        <label for="website">website</label>
    </p>

    <p class ="submit">
        <input type="submit" value="submit"/>
    </p>

</form>
</body>
</html>
