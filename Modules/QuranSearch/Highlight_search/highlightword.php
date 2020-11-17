<?php
	$conn = mysqli_connect("localhost", "root", "root", "blogs_sample");	
	$keyword = "";	
	$queryCondition = "";
	if(!empty($_POST["keyword"])) {
		$keyword = $_POST["keyword"];
		$wordsAry = explode(" ", $keyword);
		$wordsCount = count($wordsAry);
		$queryCondition = " WHERE ";
		for($i=0;$i<$wordsCount;$i++) {
			$queryCondition .= "title LIKE '%" . $wordsAry[$i] . "%' OR description LIKE '%" . $wordsAry[$i] . "%'";
			if($i!=$wordsCount-1) {
				$queryCondition .= " OR ";
			}
		}
	}
	$orderby = " ORDER BY id desc"; 
	$sql = "SELECT * FROM links " . $queryCondition;
	$result = mysqli_query($conn,$sql);	
?>
<?php 
	function highlightKeywords($text, $keyword) {
		$wordsAry = explode(" ", $keyword);
		$wordsCount = count($wordsAry);
		
		for($i=0;$i<$wordsCount;$i++) {
			$highlighted_text = "<span style='font-weight:bold;'>$wordsAry[$i]</span>";
			$text = str_ireplace($wordsAry[$i], $highlighted_text, $text);
		}

		return $text;
	}
?>
<html>
	<head>
	<title>Highlighting</title>
	<style>
		body{
			width: 600px;
			font-family: "Segoe UI",Optima,Helvetica,Arial,sans-serif;
			line-height: 25px;
		}
		.search-box {
			padding: 30px;
			background-color: #C0FBDA;
			border-radius: 5px;
		}
		.search-label{
			margin:2px;
		}
		.demoInputBox {    
			padding: 10px;
			border: 0;
			border-radius: 4px;
			margin: 0px 5px 15px;
			width: 250px;
		}
		.btnSearch{    
			padding: 10px;
			background: #8A8A8A;
			border: 0;
			border-radius: 4px;
			margin: 0px 5px;
			color: #FFF;
			width: 150px;
		}
		.result-title {
			color: #AA00FF;
		}
		.result-description{
			margin: 5px 0px 15px;
		}
	</style>
	</head>
	<body>
		<h2>Highlighting Keywords</h2>
    <div>      
			<form name="frmSearch" method="post" action="">
			<div class="search-box">
				<label class="search-label">Enter Search Keyword:</label>
				<div>
					<input type="text" name="keyword" class="demoInputBox" value="<?php echo $keyword; ?>"	/>
				</div>				
				<div>
					<input type="submit" name="go" class="btnSearch" value="Search">
				</div>
			</div>
			</form>	
			<?php 
				while($row = mysqli_fetch_assoc($result)) { 
				$new_title = $row["title"];
				if(!empty($_POST["keyword"])) {
					$new_title = highlightKeywords($row["title"],$_POST["keyword"]);
				}
				$new_description = $row["description"];
				if(!empty($_POST["keyword"])) {
					$new_description = highlightKeywords($row["description"],$_POST["keyword"]);
				}
			?>
			<div>
				<div class="result-title"><?php echo $new_title; ?></div>
				<div class="result-description"><?php echo $new_description; ?></div>
			</div>
			<?php } ?>
		</div>
	</body>
</html>