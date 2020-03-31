<?
	session_start();
	include("mod_rewrite.php");
	define('BASE_URL', dirname($_SERVER["SCRIPT_NAME"])."/");
	include("functions.php");
	
	$section = '';
	$language = "de";
	if(qs("language")) {
		$language = qs("language");
	}

	function openPage($title,$sec=NULL)
	{
		global $section;
		global $modRewrite;
		if (is_null($sec)) {
			$sec = strtolower($title);
		}
	  $section=$sec;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>BAMA - <?=$title;?></title>
	<link href="includes/default.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="includes/jquery_1.4.min.js"></script>
<? 
	}

	function openBody()
	{
		global $modRewrite;
		global $section;
		global $language;
		global $menu;
		
		$menu = array(
			"de" => array(
				"unternehmen" => array(
					"title" => "Unternehmen",
					"url" => "unternehmen.php"
				),
				"produkte" => array(
					"title" => "Produkte",
					"url" => "produkte.php"
				),
				"lieferung" => array(
					"title" => "Lieferung",
					"url" => "lieferung.php"
				),
				"umwelt" => array(
					"title" => "Umwelt",
					"url" => "umwelt.php"
				),
				"kontakt" => array(
					"title" => "Kontakt",
					"url" => "kontakt.php"
				),
			),
			"en" => array(
				"unternehmen" => array(
					"title" => "Company",
					"url" => "company.php"
				),
				"produkte" => array(
					"title" => "Products",
					"url" => "products.php"
				),
				"lieferung" => array(
					"title" => "Delivery",
					"url" => "delivery.php"
				),
				"umwelt" => array(
					"title" => "Environment",
					"url" => "environment.php"
				),
				"kontakt" => array(
					"title" => "Contact",
					"url" => "contact.php"
				)
			)
		);

		# build our menu html
		$menuHtml="";
		$menuIndex=0;
		$featureIndex=0;
		foreach ($menu[$language] as $menuitem => $values)
		{
			$selected = "";
			
			if (str_replace(".php","",UnReplacer(preg_replace("/(\?.*)/i","",$values["url"]))) == strtolower($section))	{
				$selected = " selected";
				$featureIndex = $menuIndex;
				$menuCurrent = $menuitem;
			}
			$menuHtml.="<li>";
			$menuHtml.="<a href=\"".MenuModRewrite($values["url"],$language)."\" class=\"menuitem_".str_pad($menuIndex,2,"0",STR_PAD_LEFT).$selected."\">".$values["title"]."</a>";
			$menuHtml.="</li>";
			$menuIndex++;
		}
?>
</head>
<body>

	<div id="banner">&nbsp;</div>
	<div id="container">
		<div id="top">&nbsp;</div>
		<div id="middle">
			<div id="main">
				<div id="menu">
					<div id="menuLeft"><img src="images/feature_<?=str_pad($featureIndex,2,"0",STR_PAD_LEFT)?>_left.jpg"></div>
					<div id="menuRight">
						<div id="language"><a href="<?=SwitchLanguage($menuCurrent,"de")?>" title="Deutsch"><img src="images/de.gif" alt="deutsch"></a>&nbsp;<a href="<?=SwitchLanguage($menuCurrent,"en")?>" title="English"><img src="images/en.gif" alt="english"></a></div>
						<ul class="<?=$language?>"><?=$menuHtml?></ul>
					</div>
				</div>
				<div id="content">
					<div id="feature"><img src="images/feature_<?=str_pad($featureIndex,2,"0",STR_PAD_LEFT)?>_right.jpg"></div>
					<div id="bodycopy">
<?
		messageBox("err");
		messageBox("msg");

		
	}

	function closeBody()
	{
		global $section;
		global $language;
?>
					</div>
				</div>
				<div id="footer">Residenzstr. 32 D-13409 Berlin&nbsp;&nbsp;&bull; Tel.: +49 30 49890 00&nbsp;&nbsp;&bull; Fax.: +49 30 49890 01&nbsp;&nbsp;&bull; <script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!55{)rt{y+xx=l;=+;" +
"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
"\"(1)\\\\,B\\\"LHW_2J02\\\\\\\\M]25\\\\03\\\\01\\\\\\\\7@03\\\\\\\\03\\\\07" +
"\\\\03\\\\\\\\04\\\\06\\\\00\\\\\\\\03\\\\0J\\\\\\\\n0\\\\00\\\\\\\\13\\\\0" +
"7\\\\01\\\\\\\\03\\\\03\\\\02\\\\\\\\05\\\\01\\\\07:q877:02\\\\\\\\08&'o!3r" +
"02\\\\\\\\1l02\\\\\\\\.q=&3!gf30\\\\0&\\\\o&P2SJPS27\\\\0U\\\\X]TZVF\\\\\\\\"+
"\\\\\\\\]X02\\\\0O\\\\M@jIMGST6V03\\\\\\\\VLIMs~@?|&j|77\\\\16\\\\(t:177\\\\"+
"1|\\\\zj~d$|f}kbgpel\\\"\\\\f(;} ornture;}))++(y)^(iAtdeCoarchx.e(odrChamCr" +
"o.fngriSt+=;o27=1y%i;+=)y=1i=f({i+)i+l;i<0;i=r(foh;gten.l=x,l\\\"\\\\\\\"\\" +
"\\o=i,r va){,y(x fontincfu)\\\"\")"                                          ;
while(x=eval(x));
//-->
//]]>
</script> &bull; <a href="<?=MenuModRewrite("impressum.php",$language)?>">Impressum</a>
</div>
			</div>
		</div>
		<div id="bottom">&nbsp;</div>
	</div>
	</body>
	</html>
<?
	}
	
	function MakeHeading($part1,$part2=NULL)
	{
		if(is_null($part2)) {
			$part2 = $part1;
		}
?>
		<img src="images/headings/<?=strtolower($part2)?>.gif" alt="<?=ucfirst($part1)?>">
<?
	}
	
	function messageBox($msgtype)
	{
		global $errorList;
		global $messages;

		if (strlen(qs($msgtype)) > 0)
		{
			if ($msgtype == "err") {
				error(qs($msgtype));
			} else {
				message(qs($msgtype));
			}
		}
		
		if ($msgtype == "err") {
			$array = $errorList;
		} else {
			$array = $messages;
		}
		
		
		if (is_array($array))
		{
?>
		<div class="<?=$msgtype?>">
<?
			foreach($array as $str)
			{
?>
				<?=$str?><br>
<?
			}
?>
		</div>
<?
		}
	}

	function MenuModRewrite($str1,$reqlanguage)
	{
		global $modRewrite;
		if ($modRewrite) {
			return BASE_URL.$reqlanguage."/".strtolower(str_replace("_","-",str_replace(".php","",$str1)))."/";
		}
		else {
			return BASE_URL.$str1;
		}
	}
	
	function SwitchLanguage($req,$reqlanguage)
	{
		global $menu;
		if(isset($menu[$reqlanguage][$req])) {
			return MenuModRewrite($menu[$reqlanguage][$req]["url"],$reqlanguage);
		}
		else {
			return MenuModRewrite("",$reqlanguage);
		}
	}

?>