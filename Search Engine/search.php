<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css"> <!-- -->
<h1><a href="searchengine.html">	Search Results	</a></h1>


	<form action= './search.php' method='get'>
		<input type='text' name='k' size='50' value='<?php echo $_GET['k']; ?>' />
		<input type='submit' value='Search'>
	
	
	</form>

	
	


<hr>
</head>

<body>
		
		
<?php
	
	$k = $_GET['k'] ;
	$terms = explode(" ", $k);
	$query = "SELECT * FROM Results WHERE ";
	
	$nums = 0;
	$i = 0;

	foreach ($terms as $each) {
		
		$i++;
		if ($i == 1) {
			$query.= "keywords LIKE '%$each%' ";
		}else{
		$query.= "OR keywords LIKE '%$each%' ";
		}
		
	}
	
	
	
	$conn = new mysqli("localhost", "root", "Password", "Results_DB");
	
	if($conn ->connect_error){
	
	die("Connection failed: " . $conn->connect_error);
	
	}
	
	
	
	$return = mysqli_query($conn,$query);
	echo "<div class='query'>$query</div>";
	
	
		while($row = mysqli_fetch_array($return)) {
			if($row > 0){
				$id= $row['id'];
				$title= $row['title'];
				$url= $row['pageurl'];
				$content= $row['pagecontent'];
				$keywords= $row['keywords'];
				
				$urlParts = parse_url($url); # Parse url into its parts.
				$domain = $urlParts['scheme'] . '://' . $urlParts['host']; # Pull domain from url.
				
				$favicon = "https://www.google.com/s2/favicons?domain=$domain";

				$html = " <br> <br>
				
				<div class='searchResult'>
				<a href=$url >
					 <h2>$title</h2>
				</a>
				<img src='$favicon' class='favicon'><p>$url</p>
				";

			echo $html;

			
			} else {
		echo "No results found for search";
			}
	
		}

		
	
	
	
	#mysqli.close();
	
	
	
?>	

</body>


</html>