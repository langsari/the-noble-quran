<?php 
				while($row = mysqli_fetch_assoc($result)) { 
			
				if(!empty($_POST["keyword"])) {
					$new_title = highlightKeywords($row["title"],$_POST["keyword"]);
				}
				
				if(!empty($_POST["keyword"])) {
					$new_description = highlightKeywords($row["description"],$_POST["keyword"]);
                }
                if(!empty($_POST["keyword"])) {
					$new_arabic = highlightKeywords($row["arabic"],$_POST["keyword"]);
				}
			?>
			<div>
				<div class="result-title"><?php echo $new_title; ?></div>
                <div class="result-arabic"><?php echo $new_arabic; ?></div>
				<div class="result-description"><?php echo $new_description; ?></div>
			</div>
			<?php } ?>