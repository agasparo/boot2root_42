<?php

$dir = "./";
read($dir);

function read($dir) {

	if (is_dir($dir)) {
	  	if ($dh = opendir($dir)) {
	    	while (($file = readdir($dh)) !== false && $file != "read.php"){
	    	  is_useless($dir, $file);
	    	}
	    	closedir($dh);
	  	}
	}
}

function is_useless($dir, $filename) {

	$content = file_get_contents($dir."/".$filename);
	$content = str_replace("void useless() {", "", $content);
	$content = str_replace("}", "", $content);
	$content = str_replace("}", "", $content);
	$content = str_replace("*/", "", $content);
	$content = str_replace("/*", "", $content);
	$content = str_replace("\t", "", $content);
	$content = str_replace('printf("Hahahaha Got you!!!\n");', "", $content);
	$ret  = $content;
	$content = str_replace("\n", "", $content);
	if (preg_match("#file(.*)#", $content, $matches)) {
		$content = str_replace("//".$matches[0], "", $content);
	}
	if (!empty($content)) {
		echo $ret."\n";
	}
}

?>