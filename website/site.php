<?php
$prettydate = date("m/d/y");
$curmonth = substr($prettydate, 0, 2);
$curday = substr($prettydate, 3, 2);

// for testing on windows
/*
$prettydate = `date /T`;
$curmonth = substr($prettydate, 4, 2);
$curday = substr($prettydate, 7, 2);
*/

$dayrequested = false;

if ($_REQUEST['month'] != '' && $_REQUEST['day'] != '') {
  $curmonth = $_REQUEST['month'];
  $curday = $_REQUEST['day'];
	$dayrequested = true;
}

$curdevopath = "fixed/" . $curmonth . "-" . $curday . ".html";
$curdevoevepath = "fixed/" . $curmonth . "-" . $curday . "e.html";

$curmonth = intval($curmonth);
$curday = intval($curday);

$daysinmonth = array(0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

$prevday = $curday - 1;
if ($prevday < 1){
  $prevmonth = $curmonth - 1;
  if ($prevmonth < 1) {
    $prevmonth = 12;
  }
  $prevday = $daysinmonth[$prevmonth];
}
else {
  $prevmonth = $curmonth;
}
if ($prevmonth < 10) {
  $prevmonth = "0" . $prevmonth;
}
if ($prevday < 10) {
  $prevday = "0" . $prevday;
}

$nextday = $curday + 1;
if ($nextday > $daysinmonth[$curmonth]){
  $nextday = 1;
  $nextmonth = $curmonth + 1;
  if ($nextmonth > 12) {
    $nextmonth = 1;
  }
}
else {
  $nextmonth = $curmonth;
}
if ($nextmonth < 10) {
  $nextmonth = "0" . $nextmonth;
}
if ($nextday < 10) {
  $nextday = "0" . $nextday;
}
?>
