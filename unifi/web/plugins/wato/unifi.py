#!/usr/bin/python

register_rule("datasource_programs",
    "special_agents:unifi",
    Dictionary(
        title = _("UniFi"),
        help = _( "Gets piggyback data from a UniFi server"),
        elements = [
            ( "username",
                TextAscii(
                    title = _("Username"),
                    allow_empty = False,
                    default_value= "admin"
                )
            ),
            ( "password",
                Password(
                    title = _("Password"),
                    allow_empty = False
                )
            ),
            ( "port",
                TextAscii(
                    title = _("port"),
                    allow_empty = True
                )
            ),
            ( "version",
                DropdownChoice(
                    title = _("Version"),
                    choices = [
                        ( "v2",          _("Version 2" ) ),
                        ( "v3",          _("Version 3" ) ),
                        ( "v4",          _("Version 4" ) ),
                        ( "v5",          _("Version 5" ) ),
                    ],
                    default = "v4",
                )
            ),
            ( "site",
                TextAscii(
                    title = _("Site"),
                    allow_empty = True
                )
            ),
        ]
    ),
    factory_default = FACTORY_DEFAULT_UNUSED,
    match = "first")

register_check_parameters(
    subgroup_networking,
    "unificlients",
    _("UniFi Clients"),
    Dictionary(
        elements = [
            ( "clients",
                Tuple(
                    title = _("Number of clients"),
                    elements = [
                        Integer(title = _("Warning if above "), default_value = 20),
                        Integer(title = _("Critical if above "), default_value = 30),
                    ]
                )
            ),
        ],
    ),
    TextAscii(title=_('Wifi')),
    'dict',
)

