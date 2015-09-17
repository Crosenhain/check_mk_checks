<?php

$ds_name[1] = "Asterisk Peer Latency";
$opt[1] = "--vertical-label 'Peer Latency' -l0 --title \"Peer Latency for $hostname\" ";
#
$def[1] = rrd::def("asteriskPeerLatency", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::area("asteriskPeerLatency", "#22cc22", "asteriskPeerLatency", 'STACK');
$def[1] .= rrd::gprint("asteriskPeerLatency", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

?>