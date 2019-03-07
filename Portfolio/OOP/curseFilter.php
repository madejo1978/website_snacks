<?php
class curseFilter {
	function clean($str){
	    $curzwords = array("jerk","buttface","idiot");
            $replacers = array("j**k","cuteface","id**t");
            $cleanStr = str_ireplace($curzwords, $replacers, $str);
	    return $cleanStr;
    }
}
?>