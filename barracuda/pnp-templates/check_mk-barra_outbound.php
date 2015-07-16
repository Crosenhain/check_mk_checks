<?php

$ds_name[1] = "Barracuda Outbound Message Statistics";
$opt[1] = "--vertical-label 'Messages' -l0 --title \"Message Statistics for $hostname\" ";

$def[1] = rrd::def("hourlyOutboundPolicyBlocked", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyOutboundPolicyBlocked", "#ff3333", "hourlyOutboundPolicyBlocked", 'STACK');
$def[1] .= rrd::gprint("hourlyOutboundPolicyBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyOutboundSpamBlocked", $RRDFILE[2], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyOutboundSpamBlocked", "#ff33b9", "hourlyOutboundSpamBlocked", 'STACK');
$def[1] .= rrd::gprint("hourlyOutboundSpamBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyOutboundVirusBlocked", $RRDFILE[3], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyOutboundVirusBlocked", "#ff7633", "hourlyOutboundVirusBlocked", 'STACK');
$def[1] .= rrd::gprint("hourlyOutboundVirusBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyOutboundRateControlled", $RRDFILE[4], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyOutboundRateControlled", "#9600ff", "hourlyOutboundRateControlled", 'STACK');
$def[1] .= rrd::gprint("hourlyOutboundRateControlled", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyOutboundQuarantined", $RRDFILE[5], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyOutboundQuarantined", "#33b0ff", "hourlyOutboundQuarantined", 'STACK');
$def[1] .= rrd::gprint("hourlyOutboundQuarantined", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyEncrypted", $RRDFILE[6], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyEncrypted", "#3333aa", "hourlyEncrypted", 'STACK');
$def[1] .= rrd::gprint("hourlyEncrypted", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlyRedirected", $RRDFILE[7], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlyRedirected", "#33aa84", "hourlyRedirected", 'STACK');
$def[1] .= rrd::gprint("hourlyRedirected", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("hourlySent", $RRDFILE[8], $DS[1], "AVERAGE");
$def[1] .= rrd::area("hourlySent", "#45e126", "hourlySent", 'STACK');
$def[1] .= rrd::gprint("hourlySent", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

?>

