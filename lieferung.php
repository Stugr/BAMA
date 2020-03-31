<?
	include("includes/template.php");
	
	$lang = array(
		"de" => array(
			"title" => "Lieferung",
			"heading" => "Lieferung",
		),
		"en" => array(
			"title" => "Delivery",
			"heading" => "Delivery",
		)
	);
	
	openPage(lang("title"));
	openBody();
?>

<? MakeHeading(lang("heading")) ?>

<? if($language=="en") { //english ?>

<p>BAMA sells heating oil EL and diesel fuel EN 590 with the support of modern computer and telecommunication technology. The competent BAMA team ensures a fast and easy order processing around the clock. In urgent cases, we also deliver on Sundays and public holidays.</p>

<p>Our planning, in cooperation with our friendly staff, will ensure a flexible and reliable delivery on time. Our fleet is kept clean, neat and tidy at all times and is being serviced daily. BAMA delivers safe and reliable.</p>

<? } else { //german ?>

<p>Die BAMA vertreibt Heiz&ouml;l EL und Dieselkraftstoff EN 590, unterst&uuml;tzt durch modernste EDV und Telekommunikation-Medien gew&auml;hrleistet das kompetente BAMA Team eine schnelle und problemlose Bestellannahme rund um die Uhr. In dringenden F&auml;llen liefern wir auch an Sonn- und Feiertagen.</p>

<p>Unsere Disposition in Zusammenarbeit mit unserem freundlichen Tankwagenpersonal sorgen jederzeit f&uuml;r eine flexible, p&uuml;nktliche und zuverl&auml;ssige Lieferung. Unser Fuhrpark ist sauber und gepflegt, die Fahrzeugtechnik wird t&auml;glich gewartet. BAMA liefert sicher und zuverl&auml;ssig.</p>


<? } //end language ?>

<? 
	closeBody();
?>

