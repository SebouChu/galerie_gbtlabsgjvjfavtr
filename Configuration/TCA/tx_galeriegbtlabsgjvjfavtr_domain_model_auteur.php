<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur',
        'label' => 'lastname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'lastname,firstname,job,address,email,phone_number,website,biography,albums,social_networks',
        'iconfile' => 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Public/Icons/tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, lastname, firstname, job, address, email, phone_number, website, biography, albums, social_networks',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, lastname, firstname, job, address, email, phone_number, website, biography, albums, social_networks, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
            ],
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
                'foreign_table' => 'tx_galeriegbtlabsgjvjfavtr_domain_model_auteur',
                'foreign_table_where' => 'AND tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.pid=###CURRENT_PID### AND tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
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
                ],
            ],
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
            ],
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
                ],
            ],
        ],

        'lastname' => [
            'exclude' => false,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'firstname' => [
            'exclude' => false,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.firstname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'job' => [
            'exclude' => false,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.job',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'phone_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.phone_number',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'website' => [
            'exclude' => false,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.website',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'biography' => [
            'exclude' => false,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.biography',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'albums' => [
            'exclude' => true,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.albums',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_galeriegbtlabsgjvjfavtr_domain_model_album',
                'foreign_field' => 'auteur',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'social_networks' => [
            'exclude' => true,
            'label' => 'LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.social_networks',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_galeriegbtlabsgjvjfavtr_domain_model_socialnetwork',
                'foreign_field' => 'auteur',
                'maxitems' => 9999,
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
