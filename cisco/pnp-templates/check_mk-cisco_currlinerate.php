<?php

$ds_name[1] = "Cisco Current Rate";
$opt[1] = "--vertical-label 'Rate' -l0 --title \"Current Rate for $hostname\" ";

$def[1] = rrd::def("Download", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::line1("Download", "#11dd33", "Download");
$def[1] .= rrd::gprint("Download", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("Upload", $RRDFILE[2], $DS[1], "AVERAGE");
$def[1] .= rrd::line1("Upload", "#ff33b9", "Upload");
$def[1] .= rrd::gprint("Upload", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

?>

