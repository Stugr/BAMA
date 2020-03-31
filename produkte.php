<?
	include("includes/template.php");
	
	$lang = array(
		"de" => array(
			"title" => "Produkte",
			"heading" => "Produkte",
		),
		"en" => array(
			"title" => "Products",
			"heading" => "Products",
		)
	);
	
	openPage(lang("title"));
	openBody();
?>

<? MakeHeading(lang("heading")) ?>

<? if($language=="en") { //english ?>


<p>We only sell high-end products to  ensure a trouble-free operation of heating systems and vehicle fleets.</p>

<ul>
	<li>Heating oil EL DIN 51603 (standard quality, No. 4)</li>
	<li>Heating oil EL DIN 51603 (low sulfur, No.2)</li>
	<li>Heating oil EL DIN 51603 (premium)</li>
	<li>Diesel  fuel  EN 590</li>
</ul>


<? } else { //german ?>

<p>Wir vertreiben ausschlie&szlig;lich Markenprodukte, die einen st&ouml;rungsfreien Betrieb von Heizanlagen und Fuhrparks gew&auml;hrleisten.</p>

<ul>
	<li>Heiz&ouml;l EL nach DIN 51603 (Standardqualit&auml;t)</li>
	<li>Heiz&ouml;l EL nach DIN 51603 (Schwefelarm)</li>
	<li>Superheiz&ouml;l nach DIN 51603 / ISO 9001</li>
	<li>Dieselkraftstoff nach EN 590</li>
</ul>



<? } //end language ?>

<? 
	closeBody();
?>

