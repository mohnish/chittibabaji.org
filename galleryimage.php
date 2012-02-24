<?php 
	//Logic for Navigation!
	
	if((int)$page_id>01 && (int)$page_id<16)
	{
		$prev_counter=(int)$page_id-1;
		$next_counter=(int)$page_id+1;
		$previous = "<a href=\"galleryindex.php?id=".$prev_counter."\" >Previous</a>";
		$next= "<a href=\"galleryindex.php?id=".$next_counter."\" >Next</a>";
	}
	
	if((int)$page_id<=01)
	{
		$previous="";
		$prev_counter="";
		$next_counter=(int)$page_id+1;
		$next= "<a href=\"galleryindex.php?id=".$next_counter."\" >Next</a>";
	}
	if((int)$page_id>=16)
	{
		$next="";
		$next_counter="";
		$prev_counter=(int)$page_id-1;
		$previous = "<a href=\"galleryindex.php?id=".$prev_counter."\" >Previous</a>";
	}
	
?>


<p align="center">
	<?php echo $previous;?> || <a href="galleryindex.php">Gallery Home</a> || <?php echo $next;?>
</p>

<br /><br />
<div align="center">
<?php

	echo $content;
	
?>
</div>