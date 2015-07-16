<?php

$ds_name[1] = "Barracuda Inbound Message Statistics";
$opt[1] = "--vertical-label 'Messages' -l0 --title \"Message Statistics for $hostname\" ";

$def[1] = rrd::def("hourlyInboundBlocked", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyInboundBlocked", "#ff0000", "hourlyInboundBlocked", 'STACK');
$def[1] .= rrd::gprint("hourlyInboundBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyInboundVirusBlocked", $RRDFILE[2], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyInboundVirusBlocked", "#ff8400", "hourlyInboundVirusBlocked", 'STACK');
$def[1] .= rrd::gprint("hourlyInboundVirusBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyInboundRateControlled", $RRDFILE[3], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyInboundRateControlled", "#9600ff", "hourlyInboundRateControlled", 'STACK');
$def[1] .= rrd::gprint("hourlyInboundRateControlled", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyInboundQuarantined", $RRDFILE[4], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyInboundQuarantined", "#33b0ff", "hourlyInboundQuarantined", 'STACK');
$def[1] .= rrd::gprint("hourlyInboundQuarantined", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyInboundTagged", $RRDFILE[5], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyInboundTagged", "#fdff33", "hourlyInboundTagged", 'STACK');
$def[1] .= rrd::gprint("hourlyInboundTagged", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyAllowed", $RRDFILE[6], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyAllowed", "#45e126", "hourlyAllowed", 'STACK');
$def[1] .= rrd::gprint("hourlyAllowed", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

?>

