<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Igroup.IgHistory',
            'History',
            [
                'Period' => 'list'
            ],
            // non-cacheable actions
            [
                'Period' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
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

		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            'ig_history-plugin-history',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:ig_history/Resources/Public/Icons/user_plugin_history.svg']
        );
    }
);
