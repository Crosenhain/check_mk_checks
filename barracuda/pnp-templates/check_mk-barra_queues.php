<?php

$ds_name[1] = "Barracuda Queues";
$opt[1] = "--vertical-label 'Queue Length' -l0 --title \"Queue Length for $hostname\" ";

$def[1] = rrd::def("inqueue", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::area("inqueue", "#22cc22", "inqueue", 'STACK');
$def[1] .= rrd::gprint("inqueue", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("outqueue", $RRDFILE[2], $DS[1], "AVERAGE");
$def[1] .= rrd::area("outqueue", "#2222FF", "outqueue", 'STACK');
$def[1] .= rrd::gprint("outqueue", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("deferredqueue", $RRDFILE[3], $DS[1], "AVERAGE");
$def[1] .= rrd::area("deferredqueue", "#ee3399", "deferredqueue", 'STACK');
$def[1] .= rrd::gprint("deferredqueue", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

$def[1] .= rrd::def("notifyqueue", $RRDFILE[4], $DS[1], "AVERAGE");
$def[1] .= rrd::area("notifyqueue", "#ffaa33", "notifyqueue", 'STACK');
$def[1] .= rrd::gprint("notifyqueue", array("LAST", "MAX", "AVERAGE"), "%6.0lf");

?>
