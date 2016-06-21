#!/usr/bin/python

register_rule("datasource_programs",
    "special_agents:barracudamini",
    Dictionary(
        title = _("Barracuda <=300"),
        help = _( "For Barracuda devices that don't support SNMP"),
        elements = [
            ( "username",
                TextAscii(
                    title = _("Username"),
                    allow_empty = False,
                    default_value= "admin"
                )
            ),
            ( "password",
                TextAscii(
                    title = _("Password"),
                    allow_empty = False
                )
            ),
        ]
    ),
    factory_default = FACTORY_DEFAULT_UNUSED,
    match = "first")