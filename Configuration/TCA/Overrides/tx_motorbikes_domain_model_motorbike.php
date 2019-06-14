<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
   'motorbikes',
   'tx_motorbikes_domain_model_motorbike'
);
