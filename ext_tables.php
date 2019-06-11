<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Gtasjjat.GalerieGbtlabsgjvjfavtr',
            'Plugin',
            'galerie_photo'
        );

        $pluginSignature = str_replace('_', '', 'galerie_gbtlabsgjvjfavtr') . '_plugin';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:galerie_gbtlabsgjvjfavtr/Configuration/FlexForms/flexform_plugin.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('galerie_gbtlabsgjvjfavtr', 'Configuration/TypoScript', 'galerie_cantonnais');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galeriegbtlabsgjvjfavtr_domain_model_image', 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_csh_tx_galeriegbtlabsgjvjfavtr_domain_model_image.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galeriegbtlabsgjvjfavtr_domain_model_image');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galeriegbtlabsgjvjfavtr_domain_model_album', 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_csh_tx_galeriegbtlabsgjvjfavtr_domain_model_album.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galeriegbtlabsgjvjfavtr_domain_model_album');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galeriegbtlabsgjvjfavtr_domain_model_category', 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_csh_tx_galeriegbtlabsgjvjfavtr_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galeriegbtlabsgjvjfavtr_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galeriegbtlabsgjvjfavtr_domain_model_tag', 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_csh_tx_galeriegbtlabsgjvjfavtr_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galeriegbtlabsgjvjfavtr_domain_model_tag');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galeriegbtlabsgjvjfavtr_domain_model_auteur', 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_csh_tx_galeriegbtlabsgjvjfavtr_domain_model_auteur.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galeriegbtlabsgjvjfavtr_domain_model_auteur');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galeriegbtlabsgjvjfavtr_domain_model_socialnetwork', 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_csh_tx_galeriegbtlabsgjvjfavtr_domain_model_socialnetwork.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galeriegbtlabsgjvjfavtr_domain_model_socialnetwork');

    }
);
