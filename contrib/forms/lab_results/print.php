<?php

include_once("../../globals.php");

include_once("../../../library/api.inc");

formHeader("Lab Results");

?>

<link rel=stylesheet href="<?php echo $css_header;?>" type="text/css">

<html>

<head>
<?php html_header_show();?>

<title>Edit Lab Results</title>

</head>

<body <?php echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>

<br><br>

<form method='post' action="<?php echo $rootdir;?>/forms/lab_results/save.php?mode=new" name='lab_results_form' enctype="multipart/form-data">

<span class=title>Edit Lab Results</span>

<br>

<span class=text>Notes:</span><br>

<textarea name="notes" wrap="virtual" cols="45" rows="10">
<?php

$row = formFetch('form_lab_results', $_GET['id']);

echo $row['notes'];

?>

</textarea>

<br><br>

<a href="<?php echo $GLOBALS['form_exit_url']; ?>" onclick="top.restoreSession()">Done</a>

</body>

<?php

formFooter();

?>
