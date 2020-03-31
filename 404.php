<?
	include("includes/template.php");
	openPage("Page not found");
	openBody();
?>

	<div class="err">404: Page does not exist - <?=qs("url")?></div>

<? 
	closeBody();
?>

