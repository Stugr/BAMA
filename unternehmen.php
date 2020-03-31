<?
	include("includes/template.php");
	
	$lang = array(
		"de" => array(
			"title" => "Unternehmen",
			"heading" => "Unternehmen",
		),
		"en" => array(
			"title" => "Company",
			"heading" => "Company",
		)
	);
	
	openPage(lang("title"));
	openBody();
?>


<? MakeHeading(lang("heading")) ?>

<? if($language=="en") { //english ?>

<p>BAMA-Mineral&ouml;l-Kontor GmbH & Co. KG is one of the leading private mineral oil businesses for end users in Germany.</p>
<p>Competitive prices and a long-term, trusting relationship with our business partners are the main points of BAMA's business philosophy.</p>
<p>New ideas and support in the realisation of your projects are self-evident for us. BAMA has a solid foundation for all activities.</p>


<? } else { //german ?>

<p>BAMA-Mineral&ouml;l-Kontor GmbH & Co. KG ist im Endverbrauchergesch&auml;ft eins der f&uuml;hrenden privaten Mineral&ouml;lhandelsunternehmen in der Bundesrepublik Deutschland. </p>
<p>Marktgerechte Preise und ein langfristiges, vertrauensvolles Verh&auml;ltnis zu unseren Gesch&auml;ftspartnern sind Schwerpunkte der BAMA Unternehmensphilosophie.</p>
<p>Neue Ideen und aktive Unterst&uuml;tzung bei der Realisierung von Projekten sind f&uuml;r uns selbstverst&auml;ndlich. BAMA besitzt f&uuml;r alle Aktivit&auml;ten eine solide Grundlage.</p>


<? } //end language ?>

<? 
	closeBody();
?>

