<?php
$text = "The quick brown fox jumped over the lazy dog The quick brown fox jumped over the lazy dogThe quick brown The quick brown fox jumped over the lazy dog The quick brown fox jumped over the lazy dogThe quick brown The quick brown fox jumped over the lazy dog The quick brown fox jumped over the lazy dogThe quick brown The quick brown fox jumped over the lazy dog The quick brown fox jumped over the lazy dogThe quick brown The quick brown fox jumped over the lazy dog The quick brown fox jumped over the lazy dogThe quick brown The quick brown fox jumped over the lazy dog The quick brown fox jumped over the lazy dogThe quick brown .";
$newtext = wordwrap($text,65, "<br /><hr/>");
echo $newtext;
?>


<p>+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++</p>

<?php
if(isset($_REQUEST['st_submit'])){
	$text_wrap = $_REQUEST['text_wrap'];
	$newtext = wordwrap($text_wrap,20, "<br /><hr/>\n");
	echo $newtext;
}
?>
<form action="" method="POST">
	<table>
		<tr>
			<td>Message:</td>
			<td><textarea type="text" name="text_wrap"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="st_submit" value="submit" /></td>
		</tr>
	</table>
</form>

<style type="text/css">
:focus{background-color:#E8E8FF;}
</style>





