<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'autohaus';

    /**
     * Default TypoScript for Autohaus
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'autohaus'
    );
});
