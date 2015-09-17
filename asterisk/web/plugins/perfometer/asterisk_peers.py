#!/usr/bin/python
# -*- encoding: utf-8; py-indent-offset: 4 -*-
def perfometer_asterisk_peers(row, check_command, perf_data):
    h = '<table><tr>'
    value = saveint(perf_data[0][1])
    warn = saveint(perf_data[0][2])
    crit = saveint(perf_data[0][3])
    perc_used = int(value/10)
    perc_free = int(crit) - int(perc_used)
    if (int(value) >= int(crit)):
        colour = "#ff0000"
    elif (int(value) >= int(warn)):
        colour = "#ffff00"
    else:
        colour = "#00ff22"

    h += perfometer_td(perc_used, colour)
    h += perfometer_td(perc_free, "white")
    h += "</tr></table>"
    return "%.0fms" % int(value), h

perfometers['check_mk-asterisk_peers'] = perfometer_asterisk_peers