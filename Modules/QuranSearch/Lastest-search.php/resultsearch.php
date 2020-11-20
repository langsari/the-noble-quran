<?php 
				while($row = mysqli_fetch_assoc($result)) { 
			
				if(!empty($_POST["keyword"])) {
					$new_surah = highlightKeywords($row["surah"],$_POST["keyword"]);
				}
				
				if(!empty($_POST["keyword"])) {
					$new_arabic = highlightKeywords($row["arabic"],$_POST["keyword"]);
                }
                if(!empty($_POST["keyword"])) {
					$new_meaning = highlightKeywords($row["meaning"],$_POST["keyword"]);
				}
			?>
			<div>
				<div class="result-surah"><?php echo $new_surah; ?></div>
                <div class="result-arabic"><?php echo $new_arabic; ?></div>
				<div class="result-meaning"><?php echo $new_meaning; ?></div>
			</div>
			<?php } ?>