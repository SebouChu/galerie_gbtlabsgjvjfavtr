<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Gtasjjat.GalerieGbtlabsgjvjfavtr',
            'Plugin',
            [
                'Image' => 'latest, new, create',
                'Category' => 'list, show',
                'Auteur' => 'list, show',
                'Album' => 'list, show, latest, addTag',
                'Tag' => 'list, new, create, delete'
            ],
            // non-cacheable actions
            [
                'Album' => 'search',
                'Auteur' => 'search',
                'Category' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    plugin {
                        iconIdentifier = galerie_gbtlabsgjvjfavtr-plugin-plugin
                        title = LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galerie_gbtlabsgjvjfavtr_plugin.name
                        description = LLL:EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Language/locallang_db.xlf:tx_galerie_gbtlabsgjvjfavtr_plugin.description
                        tt_content_defValues {
                            CType = list
                            list_type = galeriegbtlabsgjvjfavtr_plugin
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'galerie_gbtlabsgjvjfavtr-plugin-plugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:galerie_gbtlabsgjvjfavtr/Resources/Public/Icons/user_plugin_plugin.svg']
			);
		
    }
);
