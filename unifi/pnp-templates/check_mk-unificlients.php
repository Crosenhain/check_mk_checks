<?php
$ds_name[1] = "UniFI Clients";
$opt[1] = "--vertical-label 'Clients' -l0 --title \"Wireless clients on $hostname\" ";
#
$def[1] = "HRULE:$WARN[1]#FFFF00 ";
$def[1] .= "HRULE:$CRIT[1]#FF0000 ";
$def[1] .= rrd::def("clients5", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::area("clients5", "#22cc22", "5GHz", 'STACK');
$def[1] .= rrd::gprint("clients5", array("LAST", "MAX", "AVERAGE"), "%6.0lf");
$def[1] .= rrd::def("clients2", $RRDFILE[2], $DS[1], "AVERAGE");
$def[1] .= rrd::area("clients2", "#2222FF", "2.4GHz", 'STACK');
$def[1] .= rrd::gprint("clients2", array("LAST", "MAX", "AVERAGE"), "%6.0lf");
?>

