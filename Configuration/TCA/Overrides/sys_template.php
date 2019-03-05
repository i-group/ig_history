<?php

(function () {
    /**
     * The extension key
     */
    $extKey = 'ig_history';

    /**
     * Add static TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extKey,
        'Configuration/TypoScript',
        'History'
    );
})();
