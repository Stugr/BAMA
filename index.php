<?
	define('BASE_URL', dirname($_SERVER["SCRIPT_NAME"])."/");
	include("includes/mod_rewrite.php");
	include("includes/functions.php");
	$language = "de";
	if(qs("language")) {
		$language = qs("language");
	}
	
	$lang = array(
		"de" => array(
			"url" => "unternehmen",
		),
		"en" => array(
			"url" => "company",
		)
	);
	
	if ($modRewrite) {
		header("Location: ".BASE_URL.$language."/".lang("url")."/" );
	} else {
		header("Location: ".BASE_URL.lang("url").".php?language=".$language );
	}
?>