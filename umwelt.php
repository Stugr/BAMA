<?
	include("includes/template.php");
	
	$lang = array(
		"de" => array(
			"title" => "Umwelt",
			"heading" => "Umwelt",
		),
		"en" => array(
			"title" => "Environment",
			"heading" => "Environment",
		)
	);
	
	openPage(lang("title"));
	openBody();
?>

<? MakeHeading(lang("heading")) ?>

<? if($language=="en") { //english ?>

<p>To be able to act in an environmentally responsible manner, BAMA decided, long before European regulations, to concentrate on the trade of low-sulfur diesel fuel EN 590 and heating oil EL.</p>


<? } else { //german ?>

<p>Umweltorientiertes Wirtschaften und verantwortliches Handeln sind die Grunds&auml;tze des Unternehmens, deshalb hat sich BAMA lange vor europaweiten Regelungen auf den Vertrieb von fast schwefelfreien Dieselkraftstoff EN 590 und Heiz&ouml;l EL konzentriert.</p>

<? } //end language ?>

<? 
	closeBody();
?>

