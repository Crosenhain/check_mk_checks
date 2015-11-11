#!/bin/bash
echo "<<<vdp_backups:sep(124)>>>"
psql -t -A -p 5555 -U checkmk mcdb -c "SELECT display_name, started_ts at time zone 'UTC' as started_ts, completed_ts at time zone 'UTC' as completed_ts, snapup_number, status_code, error_code, status_code_summary, error_code_summary, group_name, completed_ts - started_ts as elapsedtime from v_activities WHERE (cid,started_ts) IN ( SELECT cid, MAX(started_ts) FROM v_activities WHERE type LIKE '%Snapup%' GROUP BY cid )"
