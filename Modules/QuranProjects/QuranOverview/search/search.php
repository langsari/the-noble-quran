<?php
	require 'connection.php';
    require 'highlight.php';
    ?>
<html>
	<head>
	<title>Quran Search</title>
	<link rel = "stylesheet" type = "text/css" href = "css/search1.css" >
    </head>
	<body>
		<h2>The Noble Quran</h2>
        <div>      
			<form name="frmSearch" method="post" action="">
			<div class="search-box">
				<div>
					<input type="text" name="keyword" class="demoInputBox" value="<?php echo $keyword; ?>"	/>
				</div>				
				<div>
					<input type="submit" name="go" class="btnSearch" value="Search">
				</div>
			</div>
			</form>	
			<?php 
			require 'resultsearch.php';
			?>
		</div>
	</body>
</html>