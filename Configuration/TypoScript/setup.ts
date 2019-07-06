
plugin.tx_galeriegbtlabsgjvjfavtr_plugin {
    settings {
        pagination {
            itemsPerPage = 10
            insertAbove = 1
            insertBelow = 1
            maximumNumberOfLinks = 5
        }
    }
    view {
        templateRootPaths.0 = EXT:{extension.extensionKey}/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_galeriegbtlabsgjvjfavtr_plugin.view.templateRootPath}
        partialRootPaths.0 = EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_galeriegbtlabsgjvjfavtr_plugin.view.partialRootPath}
        layoutRootPaths.0 = EXT:galerie_gbtlabsgjvjfavtr/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_galeriegbtlabsgjvjfavtr_plugin.view.layoutRootPath}
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}
