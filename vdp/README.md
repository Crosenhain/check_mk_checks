# VDP Backup Monitoring
## psql setup

You'll need to SSH into your VDP server, connect to psql, and run the following:

```
create user checkmk with password 'StrongPassword';
grant connect on database mcdb to checkmk;
grant select on v_activities to checkmk;
grant select on v_node_space to checkmk;
```

## Other notes
You'll need to install the check_mk agent manually (place it in `/usr/local/bin`) and also copy in the xinetd script (which goes into `/etc/xinetd.d/check_mk`). 

Use yast to ensure xinetd will run on boot, which should also start it.

You'll need to modify the firewall file, `/etc/firewall.base`, and allow tcp/6556 through.

## Thanks
I was inspired to write this after looking over https://bitbucket.org/alexstaz/check_vdp/overview
