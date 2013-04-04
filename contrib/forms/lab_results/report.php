<?php
//------------Forms generated from formsWiz
include_once("../../globals.php");
include_once($GLOBALS["srcdir"]."/api.inc");
function lab_results_report( $pid, $encounter, $cols, $id) {
$count = 0;
$data = formFetch("form_lab_results", $id);
if ($data) {
print "<table><tr>";
foreach($data as $key => $value) {
if ($key == "id" || $key == "pid" || $key == "user" || $key == "groupname" || $key == "authorized" || $key == "activity" || $key == "date" || $value == "" || $value == "0000-00-00 00:00:00") {
	continue;
}
if ($value == "on") {
$value = "yes";
}
$key=ucwords(str_replace("_"," ",$key));
$value=nl2br($value);
print "<td valign=top><span class=bold>$key: </span></td><td valign=top><span class=text>$value</span></td>";
$count++;
if ($count == $cols) {
$count = 0;
print "</tr><tr>\n";
}
}
}
print "</tr></table>";
}
?> 
