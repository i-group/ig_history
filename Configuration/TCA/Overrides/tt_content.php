<?php

(function () {
    /**
     * The extension key
     */
    $extKey = 'ig_history';

    /**
     * List of all plugins and their options
     * Set option 'flexForm' to true to register flexform file in 'Configuration/FlexForms' folder for the plugin
     * File name = plugin name (e.g. 'PluginName' => 'PluginName.xml')
     */
    $plugins = [
        'History' => [
            'flexForm' => true
        ]
    ];

    /**
     * Register plugins
     */
    \Igroup\IgTemplate\Utility\ExtensionUtility::registerPlugins($extKey, $plugins);
})();
