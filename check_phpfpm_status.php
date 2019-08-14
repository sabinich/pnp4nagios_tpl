<?php
#
# Copyright (c) 2019 vadim s. sabinich <vadim@sabini.ch> (https://sabini.ch) 
# for plugin check_phpfpm_status by regilero (https://github.com/regilero/check_phpfpm_status)


$opt[1] = "--vertical-label \"PHP-FPM\" --title \"Server $hostname\" ";
$ds_name[1] = "Idle/Busy";

$def[1] = rrd::def("var1", $RRDFILE[1], $DS[1]);
$def[1] .= rrd::def("var2", $RRDFILE[2], $DS[2]);
$def[1] .= rrd::def("var8", $RRDFILE[8], $DS[8]);
$def[1] .= rrd::gradient("var1", "#66CCFFdd", "0000ffdd", "Idle");
$def[1] .= rrd::gprint("var1", array("LAST", "AVERAGE", "MAX"), "%.3lf");
$def[1] .= rrd::line1("var1", "#000000");
$def[1] .= rrd::gradient("var2", "#ff5c00dd", "#ffdc00dd", "Busy");
$def[1] .= rrd::gprint("var2", array("LAST", "AVERAGE", "MAX"), "%.3lf");
$def[1] .= rrd::line1("var2", "#000000");
$def[1] .= rrd::line1("var8", "#000000", "ReqPerSec ");
$def[1] .= rrd::gprint("var8", array("LAST", "AVERAGE", "MAX"), "%.3lf");


$opt[2] = "--vertical-label \"Processes\" --title \"Server $hostname\" ";
$ds_name[2] = "Processes";

$def[2] = rrd::def("var3", $RRDFILE[3], $DS[3]);
$def[2] .= rrd::def("var4", $RRDFILE[4], $DS[4]);
$def[2] .= rrd::def("var8", $RRDFILE[8], $DS[8]);
$def[2] .= rrd::gradient("var3", "#66CCFFdd", "0000ffdd", "MaxProcesses");
$def[2] .= rrd::gprint("var3", array("LAST", "AVERAGE", "MAX"), "%.3lf");
$def[2] .= rrd::line1("var3", "#000000");
$def[2] .= rrd::gradient("var4", "#ff5c00dd", "#ffdc00dd", "MaxProcessesReach");
$def[2] .= rrd::gprint("var4", array("LAST", "AVERAGE", "MAX"), "%.3lf");
$def[2] .= rrd::line1("var4", "#000000");
$def[2] .= rrd::line1("var8", "#000000", "ReqPerSec ");
$def[2] .= rrd::gprint("var8", array("LAST", "AVERAGE", "MAX"), "%.3lf");

$opt[3] = "--vertical-label \"Queue\" --title \"Server $hostname\" ";
$ds_name[3] = "Queue";

$def[3] = rrd::def("var5", $RRDFILE[5], $DS[5]);
$def[3] .= rrd::def("var6", $RRDFILE[4], $DS[6]);
$def[3] .= rrd::def("var7", $RRDFILE[7], $DS[7]);
$def[3] .= rrd::def("var8", $RRDFILE[8], $DS[8]);
$def[3] .= rrd::gradient("var5", "#66CCFFdd", "0000ffdd", "Queue");
$def[3] .= rrd::gprint("var5", array("LAST", "AVERAGE", "MAX"), "%.3lf");
$def[3] .= rrd::line1("var5", "#000000");
$def[3] .= rrd::gradient("var6", "#ff5c00dd", "#ffdc00dd", "MaxQueueReach");
$def[3] .= rrd::gprint("var6", array("LAST", "AVERAGE", "MAX"), "%.3lf");
$def[3] .= rrd::line1("var6", "#000000");
$def[3] .= rrd::gradient("var7", "#ff5c00dd", "#ffdc00dd", "QueueLen");
$def[3] .= rrd::gprint("var7", array("LAST", "AVERAGE", "MAX"), "%.3lf");
$def[3] .= rrd::line1("var7", "#000000");
$def[3] .= rrd::line1("var8", "#000000", "ReqPerSec ");
$def[3] .= rrd::gprint("var8", array("LAST", "AVERAGE", "MAX"), "%.3lf");

?>
