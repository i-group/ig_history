<?php
defined('TYPO3_MODE') || die('Access denied.');

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ighistory_domain_model_period', 'EXT:ig_history/Resources/Private/Language/locallang_csh_tx_ighistory_domain_model_period.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ighistory_domain_model_period');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ighistory_domain_model_element', 'EXT:ig_history/Resources/Private/Language/locallang_csh_tx_ighistory_domain_model_element.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ighistory_domain_model_element');
})();
