<?
	function Replacer($str)
	{
		return strtolower(str_replace("'","",str_replace(" ","_",$str)));
	}

	function UnReplacer($str)
	{
		return strtolower(str_replace("_"," ",$str));
	}

	function Capitalise($tmpStr)
	{
		if (strlen($tmpStr)>0)
		{
			return strtoupper(substr($tmpStr,0,1)).substr($tmpStr,strlen($tmpStr)-(strlen($tmpStr)-1));
		}
			else
		{
			return "";
		}
	}
	
	function CutOffString($str,$pos)
	{
		$str=$str;
		if (strlen($str)>0)
		{
			if (strlen($str)>intval($pos))
			{
				return substr($str,0,$pos)."...";
			}
				else
			{
				return $str;
			} 
		}
			else
		{
			return "";
		} 
	}
	
	function ReplaceInput($replacingString)
	{
	  return str_replace("'","''",$replacingString);
	}

	function escapeonget($reqString)
	{
		return str_replace("\"","&quot;",stripslashes($reqString));
	}
	
	function escapeonset($reqString)
	{
		return str_replace("\n","<br>",addslashes($reqString));
	}
	
	function qs($str)
	{
		if (isset($_GET[$str])) {
			return $_GET[$str];
		}
		else {
			return "";
		}
	}
	
	function post($str)
	{
		if (isset($_POST[$str])) {
			return $_POST[$str];
		}
		else {
			return "";
		}
	}
	
	$p;
	$pArr;
	$errorList;
	$formError = false;
	$messages;
	$formData;
	
	function postVars($arr)
	{
		global $p;
		global $pArr;
		$p = array();
		$pArr = $arr;
		foreach($arr as $str)
		{
			$p[$str] = "";
		}
	}
	
	function postVarsGet()
	{
		global $p;
		global $pArr;
		foreach($pArr as $str)
		{
			$p[$str] = $_POST[$str];
		}
	}
	
	function error($str=NULL)
	{
		global $errorList;
		global $formError;
		if (!is_null($str)) {
			$errorList[] = $str;
			$formError = true;
		} else {
			return $formError;
		}
	}
	
	function message($str)
	{
		global $messages;
		$messages[] = $str;
	}
	
	function isRequired($str, $ref)
	{
		global $formData;
		global $formError;
		if (empty($str)) {
			$formData[$ref]["error"] = true;
//			$formData[$ref]["errortext"] = $formData[$ref]["label"]." is a required field";
			if(strlen(lang("errortext"))>0) {
				$formData[$ref]["errortext"] = lang("errortext");
			} else {
				$formData[$ref]["errortext"] = " is a required field";
			}
			$formError = true;
//			error($formData[$ref]["errortext"]);
		} else {
			return true;
		}
	}
	
	function formPosted()
	{
		global $formData;
		if (strlen(post("submit")) > 0) {
			$formData["form_is_posted"] = true;
			return true;
		}
	}
	
	function formError($str, $ref)
	{
		global $formData;
		global $formError;
		$formData[$ref]["error"] = true;
		$formData[$ref]["errortext"] = $str;
		$formError = true;
//		error($formData[$ref]["errortext"]);
	}
	
	function insertFormData($type, $lbl, $var, $req = false, $populateFromPost = true)
	{
		global $formData;
		$formData[$var] = array(
			"label" => $lbl,
			"type" => $type,
			"populate" => $populateFromPost,
			"requested" => $req,
			"error" => false,
			"errortext" => "",
			"value" => "",
		);
		
		
	}
	
	function insertForm($formPosted = true)
	{
		global $formData;
		foreach($formData as $key => $value)
		{
			if ($key != "form_is_posted")
			{
				if ($value["type"] == "textarea")
				{
?>
		<div<? if ($value["error"]) { ?> class="verr"<? } ?>><label for="<?=$key?>"><?=$value["label"]?>:</label><textarea name="<?=$key?>"><? if ($value["populate"] && $formPosted) { print post($key); } else { print $value["value"]; } ?></textarea><? if($value["requested"]) { print " *"; } ?><?=" ".$value["errortext"]?></div>
<?					
				}
				else
				{
?>
		<div<? if ($value["error"]) { ?> class="verr"<? } ?>><label for="<?=$key?>"><?=$value["label"]?>:</label><input name="<?=$key?>" type="<?=$value["type"]?>" value="<? if ($value["populate"] && $formPosted) { print post($key); } else { print $value["value"]; } ?>" /><? if($value["requested"]) { print " *"; } ?><?=" ".$value["errortext"]?></div>
<?
				}
			}
		}
	}
	
	function loggedIn($redir=false)
	{
		$redirDefault=BASE_URL;
		if(!isset($_SESSION["userid"]) && $redir)
		{
			if(is_bool($redir) || $redir == 1) { $redir = $redirDefault; }
			header("Location: ".$redir);
		}
		return isset($_SESSION["userid"]);
	}
	
	function lang($val) {
		global $language;
		global $lang;
		$return = "";
		
		if(isset($lang[$language][$val]))	{
			$return = $lang[$language][$val];
		} else if(isset($lang["de"][$val])) {
			// default to german
			$return = $lang["de"][$val];
		}
		return $return;
	}
?>