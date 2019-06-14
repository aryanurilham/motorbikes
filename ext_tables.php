<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Motorbike',
            'motorbike'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Producer',
            'producer'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Tank',
            'tank'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Suspension',
            'suspension'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Wheels',
            'wheels'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Handlebar',
            'handlebar'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Rearlight',
            'rearlight'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Frontlamp',
            'frontlamp'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Arya.Motorbikes',
            'Spy',
            'spy'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('motorbikes', 'Configuration/TypoScript', 'motorbike');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_motorbike', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_motorbike.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_motorbike');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_producer', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_producer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_producer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_tank', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_tank.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_tank');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_suspension', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_suspension.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_suspension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_wheels', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_wheels.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_wheels');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_handlebar', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_handlebar.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_handlebar');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_frontlamp', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_frontlamp.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_frontlamp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_rearlight', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_rearlight.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_rearlight');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_motorbikes_domain_model_spy', 'EXT:motorbikes/Resources/Private/Language/locallang_csh_tx_motorbikes_domain_model_spy.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_motorbikes_domain_model_spy');

    }
);
