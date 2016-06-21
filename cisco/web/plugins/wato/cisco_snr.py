register_check_parameters(
    subgroup_networking,
    "cisco_snr",
    _("Cisco SNR"),
    Dictionary(
        elements = [
            ( "download",
                Tuple(
                    title = _("Minimum download SNR"),
                    elements = [
                        Integer(title = _("Warning if below "), default_value = 6),
                        Integer(title = _("Critical if below "), default_value = 4),
                    ]
                )
            ),
            ( "upload",
                Tuple(
                    title = _("Minimum upload SNR"),
                    elements = [
                        Integer(title = _("Warning if below "), default_value = 6),
                        Integer(title = _("Critical if below "), default_value = 4),
                    ],
                ),
            ),
        ],
    ),
    TextAscii(title=_('WLAN')),
    'dict',
)