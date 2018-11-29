<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:ig_history/Resources/Private/Language/locallang_db.xlf:tx_ighistory_domain_model_period',
        'label' => 'year_start',
        'label_userFunc' => \Igroup\IgHistory\User\TcaLabels::class . '->periodLabel',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'default_sortby' => 'year_start ASC',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'year_start,year_end,elements',
        'iconfile' => 'EXT:ig_history/Resources/Public/Icons/tx_ighistory_domain_model_period.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, year_start, year_end, elements',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, year_start, year_end, elements, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_ighistory_domain_model_period',
                'foreign_table_where' => 'AND tx_ighistory_domain_model_period.pid=###CURRENT_PID### AND tx_ighistory_domain_model_period.sys_language_uid IN (-1,0)',
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ]
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ]
            ]
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ]
        ],

        'year_start' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ig_history/Resources/Private/Language/locallang_db.xlf:tx_ighistory_domain_model_period.year_start',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'max' => 4,
                'eval' => 'int,required'
            ]
        ],
        'year_end' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ig_history/Resources/Private/Language/locallang_db.xlf:tx_ighistory_domain_model_period.year_end',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'max' => 4,
                'eval' => 'int'
            ]
        ],
        'elements' => [
            'exclude' => true,
            'label' => 'LLL:EXT:ig_history/Resources/Private/Language/locallang_db.xlf:tx_ighistory_domain_model_period.elements',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_ighistory_domain_model_element',
                'foreign_field' => 'period',
                'foreign_sortby' => 'sorting',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ]
            ]

        ]
    
    ],
];
