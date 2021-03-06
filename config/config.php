<?php 
session_start();

//ob_start();
//$application = "dev";
$application = "prod";

ini_set("dispaly_errors", "1");
//error_reporting(E_ALL);



if($application == "dev") {
	define("HST", "localhost");
	define("USR", "root");
	define("PWD", "");
	define("DBN", "green_konkan");
	define("DBTYPE", "mysql");
	define('SITE_URL','http://localhost:81/gk/greenkokan/');
	define('DOC_ROOT','H:/My Programming Stuff/PHP Programming/htdocs/gk/greenkokan');
	define('DOC_ROOT_COMMON','H:/My Programming Stuff/PHP Programming/htdocs/gk/greenkokan/common/');

	define("EXACT_ROOT", realpath(dirname(dirname(__FILE__))));
	define('TEMPLATEDIR',DOC_ROOT.'/default/templates/');
	
	define('SITE_URL_COMMON','http://localhost:81/gk/greenkokan/common');
	define("COMMON_JS_PATH", SITE_URL_COMMON."/js");

	define('DOC_FOLDER' , '/gk/greenkokan/');
	
} else {
	define("HST", "localhost");
	define("USR", "rajeshj2016");
	define("PWD", "!QAZxsw2");
	define("DBN", "green_kokan"); 
	define("DBTYPE", "mysql");
	define('SITE_URL','http://www.greenkokan.com/');
	define('DOC_ROOT','/home/greenkokan/public_html/');
	define('DOC_ROOT_COMMON','/home/greenkokan/public_html/common');
	define("EXACT_ROOT", realpath(dirname(dirname(__FILE__))));

	define('BASEFOLDER', '/home/greenkokan/public_html/');
	define('TEMPLATEDIR',DOC_ROOT.'/default/templates/');
	
	define('SITE_URL_COMMON','http://www.greenkokan.com/common');
	define("COMMON_JS_PATH", SITE_URL_COMMON."/js");
	define('DOC_FOLDER' , '');
}
	## Set time zone
	date_default_timezone_set('Asia/Calcutta');
	/*********** Creating Object of Smarty ***********/

	require(DOC_ROOT . '/default/source/common/third-party/smarty-3.1.29/libs/Smarty.class.php');

	$smarty = new Smarty;
	$smarty->setTemplateDir(DOC_ROOT . "/default/templates");
	$smarty->force_compile = true;
	/*********** End of Creating Object of Smarty ***********/
	
	//require DOC_ROOT . "/default/source/common/third-party/less.php/lessc.inc.php";

	//$less = new lessc;
	//$less->setFormatter("compressed");
	//unlink(DOC_ROOT . "/default/assets/stylesheet/css/stylesheet.css");
	// create a new cache object, and compile
	//$cache = $less->cachedCompile();
	//$less->checkedCompile(, );

	//$inputFile = DOC_ROOT . "/default/assets/stylesheet/main.less";
	//$outputFile = DOC_ROOT . "/default/assets/stylesheet/css/stylesheet.css";

	function autoCompileLess($inputFile, $outputFile) {
		  // load the cache
		  $cacheFile = $inputFile.".cache";

		  if (file_exists($cacheFile)) {
		    $cache = unserialize(file_get_contents($cacheFile));
		  } else {
		    $cache = $inputFile;
		  }

		  $less = new lessc;

		

	  $newCache = $less->cachedCompile($cache);

	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
	    file_put_contents($cacheFile, serialize($newCache));
	    file_put_contents($outputFile, $newCache['compiled']);
	  }
	}

	//autoCompileLess($inputFile, $outputFile);
	
	## Assign site url to smarty variable
	$smarty->assign("siteroot", SITE_URL);
	$smarty->assign("version", round(microtime(true) * 1000));
	
	
	## Below file contains all the tables of the project
	include_once(DOC_ROOT.'/common/includes/tbl-names.php');
	
	## Below file contains all the contstant which we used in this project
	include_once(DOC_ROOT.'/common/includes/constants.php');
	
	## Assign site title to smarty variable
	$smarty->assign("sitetitle", TITLE);

	## JS files path for local and server in smarty variable
	$smarty->assign("common_js_path", COMMON_JS_PATH);
?>
