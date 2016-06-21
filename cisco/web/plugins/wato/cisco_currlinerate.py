register_check_parameters(
    subgroup_networking,
    "cisco_currlinerate",
    _("Cisco Current Line Rate"),
    Dictionary(
        elements = [
            ( "download",
                Tuple(
                    title = _("Minimum download line rate"),
                    elements = [
                        Integer(title = _("Warning if below "), default_value = 200000),
                        Integer(title = _("Critical if below "), default_value = 150000),
                    ]
                )
            ),
            ( "upload",
                Tuple(
                    title = _("Minimum upload line rate"),
                    elements = [
                        Integer(title = _("Warning if below "), default_value = 20000),
                        Integer(title = _("Critical if below "), default_value = 10000),
                    ],
                ),
            ),
        ],
    ),
    TextAscii(title=_('WLAN')),
    'dict',
)