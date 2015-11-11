# check_mk_checks
Some check_mk checks I've created

## Asterisk
We created these for our use case, feel free to suggest improvements! 

Install the agent on the asterisk server and throw the "asterisk" plugin into /usr/lib/check_mk_agent/plugins/ (or wherever your distro has that folder).

## Billion
The Billion checks have been tested against a 7800VDOX.

## Barracuda
The Barracuda checks have been tested against a virtual spam firewall - so I didn't bother with any of the physical hardware metrics.

## vdp
I have used this check against a VMWare VDP appliance, which appears to be Suse Linux underneath. The agent plugin just runs a psql query, formats it nicely, and then adds it to the check_mk-agent output.

##Notes

I use OMD, which means I place these files in the individual sites, eg "/omd/sites/sitename/local/share/check_mk/checks"

Any of the pnp-templates go in "/omd/sites/sitename/local/share/check_mk/pnp-templates"
