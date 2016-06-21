register_check_parameters(
    subgroup_networking,
    "cisco_attenuation",
    _("Cisco Attenuation"),
    Dictionary(
        elements = [
            ( "download",
                Tuple(
                    title = _("Maximum download attenuation"),
                    elements = [
                        Integer(title = _("Warning if below "), default_value = 14),
                        Integer(title = _("Critical if below "), default_value = 16),
                    ]
                )
            ),
            ( "upload",
                Tuple(
                    title = _("Maximum upload attenuation"),
                    elements = [
                        Integer(title = _("Warning if below "), default_value = 24),
                        Integer(title = _("Critical if below "), default_value = 26),
                    ],
                ),
            ),
        ],
    ),
    TextAscii(title=_('WLAN')),
    'dict',
)