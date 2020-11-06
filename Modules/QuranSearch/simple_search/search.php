<?php
	$con = mysqli_connect('localhost', 'root', 'root', 'tutorial_search');
	/*
		localhost - it's location of the mysql server, usually localhost
		root - your username
		third is your password
		
		if connection fails it will stop loading the page and display an error
	*/
	
	//mysql_select_db("tutorial_search") or die(mysql_error());
	/* tutorial_search is the name of database we've created */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 1;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($con,$query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($con,"SELECT * FROM articles
			WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysqli_error());
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
		
        echo "<p><p><h3>".$results['title']."</h3>".$results['arabic']."</p>".$results['text']."</p>";   
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>
</body>
</html>