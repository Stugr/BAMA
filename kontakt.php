<?
	include("includes/template.php");
	
	$lang = array(
		"de" => array(
			"title" => "Kontakt",
			"heading" => "BAMA Mineral&ouml;l-Kontor GmbH & CO. KG",
			"heading_image" => "bama-mineralol-kontor-gmb-co-kg",
			"heading2" => "Kontaktaufnahme",
			"name" => "Ihr Name",
			"subject" => "Betreff",
			"message" => "Nachricht",
			"send" => "Abschicken",
			"msg" => "Vielen Dank, Ihre Email wurde versendet",
			"errortext" => " bitte ausgef&uuml;llen"
		),
		"en" => array(
			"title" => "Contact",
			"heading" => "BAMA Mineral&ouml;l-Kontor GmbH & CO. KG",
			"heading_image" => "bama-mineralol-kontor-gmb-co-kg",
			"heading2" => "Contact",
			"name" => "Name",
			"subject" => "Subject",
			"message" => "Message",
			"send" => "Send",
			"msg" => "Thank you, your email has been sent",
			"errortext" => " is a required field"
		)
	);
	
	insertFormData("text",lang("name"),"name",true);
	insertFormData("text","Email","email",true);
	insertFormData("text",lang("subject"),"subject",true);
	insertFormData("textarea",lang("message"),"message",true);
	
	
	if (formPosted())
	{
		$name = post("name");
		$email = post("email");
		$subject = post("subject");
		$message = post("message");
		
		isRequired($name,"name");
		isRequired($email,"email");
		isRequired($subject,"subject");
		isRequired($message,"message");
		
		if (!error())
		{
			mail("nickstug@gmail.com", "BAMA Webseite: ".$subject, "Name: ".$name."\nEmail: ".$email."\nBetreff: ".$subject."\nNachricht: ".$message, "From: ".$email."\r\n"."X-Mailer: php");
			header("Location: ".$_SERVER["REQUEST_URI"]."?msg=".lang("msg"));
		}
	}
	
	openPage(lang("title"));
	
	openBody();
?>

<? MakeHeading(lang("heading"),lang("heading_image")) ?>

<div style="float: left; width: 50%;">
	<p>Residenzstrasse 32<br />
	D-13409 Berlin<br />
	Tel.:  +49 30 49890 00<br />
	Fax.: +49 30 49890 01<br />
	<script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!29{)rt{y+xx=l;=+;" +
"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
"\"(4)11\\\\,Q\\\"SYDN5[00\\\\\\\\^L04\\\\04\\\\00\\\\\\\\,q(255u23;8: 2>4#&" +
"-`+&0+01\\\\\\\\2/%7|!4c03\\\\\\\\35\\\\0b\\\\00\\\\0Y\\\\NWLP27\\\\04\\\\0" +
"2\\\\\\\\Qi4W03\\\\\\\\_C@[GB06\\\\0F\\\\GLGKAWKMrL\\\\\\\\s~~|r[jmtv{/~gqx" +
",b1Qom`{g'&9l+em\\\\n4\\\\02\\\\\\\\16\\\\04\\\\01\\\\\\\\rT\\\\\\\\26\\\\0" +
"2\\\\02\\\\\\\\33\\\\00\\\\00\\\\\\\\27\\\\04\\\\03\\\\\\\\26\\\\0\\\\\\\\(" +
"\\\"}fo;n uret}r);+)y+^(i)t(eAodrCha.c(xdeCoarChomfrg.intr=So+7;12%=;y=2y*)" +
")+y14(1i>f({i+)i+l;i<0;i=r(foh;gten.l=x,l\\\"\\\\\\\"\\\\o=i,r va){,y(x fon" +
"tincfu)\\\"\")"                                                              ;
while(x=eval(x));
//-->
//]]>
</script>
</p>
</div>

<div style="margin-left: 50%; margin-bottom: 30px;">
	<p>Salzbrunner Strasse 17<br />
	D-14193 Berlin<br />
	Tel.:  +49 30 89 57 88 - 0<br />
	Fax.: +49 30 89 57 88 22<br />
	<script type="text/javascript">
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
</script></p>
</div>

<? MakeHeading(lang("heading2")) ?>


<form name="contact" method="post" action="<?=$_SERVER["REQUEST_URI"]?>" id="contact" class="form">
	<? insertForm(formPosted()) ?>
	<input name="submit" type="submit" value="<?=lang("send")?>" class="submit" />
</form>

<? 
	closeBody();
?>
