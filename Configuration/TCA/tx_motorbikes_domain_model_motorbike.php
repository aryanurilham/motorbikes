<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike',
        'label' => 'modelname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'modelname',
        'iconfile' => 'EXT:motorbikes/Resources/Public/Icons/tx_motorbikes_domain_model_motorbike.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, modelname, producer, tank, suspension, wheels, handlebar, frontlamp, rearlight, spy',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, modelname, producer, tank, suspension, wheels, handlebar, frontlamp, rearlight, spy, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_motorbikes_domain_model_motorbike',
                'foreign_table_where' => 'AND {#tx_motorbikes_domain_model_motorbike}.{#pid}=###CURRENT_PID### AND {#tx_motorbikes_domain_model_motorbike}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'modelname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.modelname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'producer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.producer',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_producer',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'tank' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.tank',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_tank',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'suspension' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.suspension',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_suspension',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'wheels' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.wheels',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_wheels',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'handlebar' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.handlebar',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_handlebar',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'frontlamp' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.frontlamp',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_frontlamp',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'rearlight' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.rearlight',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_rearlight',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'spy' => [
            'exclude' => true,
            'label' => 'LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_domain_model_motorbike.spy',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_motorbikes_domain_model_spy',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    
    ],
];
