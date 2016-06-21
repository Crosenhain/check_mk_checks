<?php

$ds_name[1] = "Barracuda Outbound Message Statistics";
$opt[1] = "--vertical-label 'Messages' -l0 --title \"Message Statistics for $hostname\" ";

$def[1] = rrd::def("OutboundPolicyBlocked", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundPolicyBlocked", "#ff3333", "OutboundPolicyBlocked", 'STACK');
$def[1] .= rrd::gprint("OutboundPolicyBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("OutboundSpamBlocked", $RRDFILE[2], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundSpamBlocked", "#ff33b9", "OutboundSpamBlocked", 'STACK');
$def[1] .= rrd::gprint("OutboundSpamBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("OutboundVirusBlocked", $RRDFILE[3], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundVirusBlocked", "#ff7633", "OutboundVirusBlocked", 'STACK');
$def[1] .= rrd::gprint("OutboundVirusBlocked", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("OutboundRateLimited", $RRDFILE[4], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundRateLimited", "#9600ff", "OutboundRateLimited", 'STACK');
$def[1] .= rrd::gprint("OutboundRateLimited", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("OutboundQuarantined", $RRDFILE[5], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundQuarantined", "#33b0ff", "OutboundQuarantined", 'STACK');
$def[1] .= rrd::gprint("OutboundQuarantined", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("OutboundEncrypted", $RRDFILE[6], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundEncrypted", "#3333aa", "OutboundEncrypted", 'STACK');
$def[1] .= rrd::gprint("OutboundEncrypted", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("OutboundRedirected", $RRDFILE[7], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundRedirected", "#33aa84", "OutboundRedirected", 'STACK');
$def[1] .= rrd::gprint("OutboundRedirected", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("OutboundSent", $RRDFILE[8], $DS[1], "AVERAGE");
$def[1] .= rrd::area("OutboundSent", "#45e126", "OutboundSent", 'STACK');
$def[1] .= rrd::gprint("OutboundSent", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

?>
