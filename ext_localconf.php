<?php
defined('TYPO3_MODE') || die('Access denied.');

(function () {
    /**
     * The extension key
     */
    $extKey = 'ig_history';

    /**
     * With vendor prefixed extensionName (e.g. 'Vendor.ExtensionName')
     */
    $extensionNameWithVendor = \Igroup\IgTemplate\Utility\ExtensionUtility::getExtensionName($extKey, true);

    /**
     * Configure single plugin
     * Use \Igroup\IgTemplate\Utility\ExtensionUtility::configurePlugins() for more than one plugin!
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        $extensionNameWithVendor,
        'History',
        [
            'Period' => 'list'
        ]
    );

    /**
     * Configure wizards
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            web_list {
                table.tx_ighistory_domain_model_element.hideTable = 1
                deniedNewTables := addToList(tx_ighistory_domain_model_element)
            } 
            
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    history {
                        iconIdentifier = ig_history-plugin-history
                        title = LLL:EXT:ig_history/Resources/Private/Language/locallang_db.xlf:tx_ig_history_history.name
                        description = LLL:EXT:ig_history/Resources/Private/Language/locallang_db.xlf:tx_ig_history_history.description
                        tt_content_defValues {
                            CType = list
                            list_type = ighistory_history
                        }
                    }
                }
                show = *
            }
       }'
    );

    /**
     * Add icons to the IconRegistry
     */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'ig_history-plugin-history',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:ig_history/Resources/Public/Icons/user_plugin_history.svg']
    );
})();
