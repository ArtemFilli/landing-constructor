<?
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="'. $_GET['zip'] .'"');
readfile($_GET['zip']);
unlink($_GET['zip']);
?>