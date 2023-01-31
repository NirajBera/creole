<?php
// //checkdate() is check  validate a Gregorian date.
// var_dump(checkdate(3,31,2023));
// //date_add() toadd month day and yeaR IN PERTUCAL DATE
// $date=date_create("2023-05-15");
// date_add($date,date_interval_create_from_date_string("40 day"));
// echo date_format($date,"Y-m-d");
// echo "<br>";
// //date_create_form_format() to return format date given by you
// $date1= date_create_from_format("j-M-Y","15-dec-2003");
// echo date_format($date,"Y/m/d");

// date_date_set() it set a new date
$date = date_create();
date_date_set($date,2023,12,30);
echo "<br>";
echo date_format($date,"Y/m/d"); 
//date_default_timezone_get() is give time zone
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get();
echo "<br>";

//date_diff() it give diffence between two date
$date1=date_create("2015-10-30");
$date2=date_create("2016-02-12");
echo "<br>";
$diff=date_diff($date1,$date2);
echo "<br>";
echo $diff->format("%R%a days");
echo "<br>";

//date_get_last_error() it give a error while you insert date in string
$date=date_create("adddstts");
print_r(date_get_last_errors());
echo "<br>";
echo $diff->format("Month: %m, days: %d.");
echo "<br>";
$date = date_create();
//isodate
date_isodate_set($date,2013,5,2);
echo date_format($date,'Y-m-d');
echo "<br>";
//modify
date_modify($date1,"+ 20 days");
echo date_format($date1,'Y-m-d');
echo "<br>";


//ofset get
$winter=date_create("2022-12-31",timezone_open("Europe/Oslo"));
echo date_offset_get($winter);
echo "<br>";
//date_parse_form_format
print_r(date_parse_from_format("j.n.Y","12.5.2022"));
echo "<br>";
print_r(date_parse('2022-05-01'));
echo "<br>";
date_sub($date,date_interval_create_from_date_string("25 day"));
echo date_format($date,"Y");
echo "<br>";
$date = date_create('2022-05-12');
echo "<br>";
date_time_set($date,12,20,550);
echo "<br>";
echo date_format($date,"Y-m-d H:i:s");
echo "<br>";
echo date_timestamp_get($date);
date_timestamp_set($date,1371803321);
$t=date_timezone_get($date);
echo timezone_name_get($t);
echo "<br>";
echo date('l');
echo "<br>";
print_r(getdate());
echo "<br>";
$mytime=gettimeofday();
echo "$mytime[sec].$mytime[usec]";
echo "<br>";
echo gmdate("l jS \of F Y h:i:s A");
echo "<br>";
echo date("l",gmmktime(0,0,0,2,25,2022));
echo "<br>";
print_r(localtime(time(),true));
echo "<br>";
echo(microtime());
echo "<br>";
echo date('l',mktime(0,0,0,10,2,2022));
echo "<br>";
echo(strftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");
echo "<br>";
echo(strtotime("next monday"));
$t=time();
echo(date("Y-m-d",$t));
print_r(timezone_identifiers_list(16));
echo "<br>";
$tz=timezone_open("Asia/Kolkata");
print_r(timezone_location_get($tz));
echo "<br>";
echo timezone_name_from_abbr("IST");
echo "<br>";
$tz=timezone_open("Europe/Paris");
echo timezone_name_get($tz);
echo "<br>";
echo timezone_version_get();


?>