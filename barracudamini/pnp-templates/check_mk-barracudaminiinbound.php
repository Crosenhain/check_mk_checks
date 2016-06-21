<?php

$ds_name[1] = "Barracuda Inbound Message Statistics";
$opt[1] = "--vertical-label 'Messages' -l0 --title \"Message Statistics for $hostname\" ";

$def[1] = rrd::def("InboundBlocked", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::area("InboundBlocked", "#ff0000", "InboundBlocked", 'STACK');
$def[1] .= rrd::gprint("InboundBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("InboundVirusBlocked", $RRDFILE[2], $DS[1], "AVERAGE");
$def[1] .= rrd::area("InboundVirusBlocked", "#ff8400", "InboundVirusBlocked", 'STACK');
$def[1] .= rrd::gprint("InboundVirusBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("InboundRateLimited", $RRDFILE[3], $DS[1], "AVERAGE");
$def[1] .= rrd::area("InboundRateLimited", "#9600ff", "InboundRateLimited", 'STACK');
$def[1] .= rrd::gprint("InboundRateLimited", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("InboundQuarantined", $RRDFILE[4], $DS[1], "AVERAGE");
$def[1] .= rrd::area("InboundQuarantined", "#33b0ff", "InboundQuarantined", 'STACK');
$def[1] .= rrd::gprint("InboundQuarantined", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("InboundTagged", $RRDFILE[5], $DS[1], "AVERAGE");
$def[1] .= rrd::area("InboundTagged", "#fdff33", "InboundTagged", 'STACK');
$def[1] .= rrd::gprint("InboundTagged", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("InboundAllowed", $RRDFILE[6], $DS[1], "AVERAGE");
$def[1] .= rrd::area("InboundAllowed", "#45e126", "Allowed", 'STACK');
$def[1] .= rrd::gprint("InboundAllowed", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

?>
