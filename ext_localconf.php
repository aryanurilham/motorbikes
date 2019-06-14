<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Motorbike',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Producer',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Tank',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Suspension',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Wheels',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Handlebar',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Rearlight',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Frontlamp',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Arya.Motorbikes',
            'Spy',
            [
                'Motorbike' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Motorbike' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    motorbike {
                        iconIdentifier = motorbikes-plugin-motorbike
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_motorbike.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_motorbike.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_motorbike
                        }
                    }
                    producer {
                        iconIdentifier = motorbikes-plugin-producer
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_producer.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_producer.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_producer
                        }
                    }
                    tank {
                        iconIdentifier = motorbikes-plugin-tank
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_tank.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_tank.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_tank
                        }
                    }
                    suspension {
                        iconIdentifier = motorbikes-plugin-suspension
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_suspension.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_suspension.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_suspension
                        }
                    }
                    wheels {
                        iconIdentifier = motorbikes-plugin-wheels
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_wheels.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_wheels.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_wheels
                        }
                    }
                    handlebar {
                        iconIdentifier = motorbikes-plugin-handlebar
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_handlebar.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_handlebar.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_handlebar
                        }
                    }
                    rearlight {
                        iconIdentifier = motorbikes-plugin-rearlight
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_rearlight.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_rearlight.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_rearlight
                        }
                    }
                    frontlamp {
                        iconIdentifier = motorbikes-plugin-frontlamp
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_frontlamp.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_frontlamp.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_frontlamp
                        }
                    }
                    spy {
                        iconIdentifier = motorbikes-plugin-spy
                        title = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_spy.name
                        description = LLL:EXT:motorbikes/Resources/Private/Language/locallang_db.xlf:tx_motorbikes_spy.description
                        tt_content_defValues {
                            CType = list
                            list_type = motorbikes_spy
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-motorbike',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_motorbike.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-producer',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_producer.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-tank',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_tank.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-suspension',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_suspension.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-wheels',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_wheels.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-handlebar',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_handlebar.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-rearlight',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_rearlight.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-frontlamp',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_frontlamp.svg']
			);
		
			$iconRegistry->registerIcon(
				'motorbikes-plugin-spy',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:motorbikes/Resources/Public/Icons/user_plugin_spy.svg']
			);
		
    }
);
