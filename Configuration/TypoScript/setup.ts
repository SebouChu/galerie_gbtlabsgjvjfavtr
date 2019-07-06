plugin.tx_galeriegbtlabsgjvjfavtr_plugin {
    settings {
        pagination {
            itemsPerPage = 10
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
        widget.TYPO3\CMS\Fluid\ViewHelpers\Widget\PaginateViewHelper.templateRootPath = {$plugin.tx_galeriegbtlabsgjvjfavtr_plugin.view.templateRootPath}
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

plugin.tx_galeriegbtlabsgjvjfavtr._CSS_DEFAULT_STYLE (
    .f3-widget-paginator {
        padding: 0;
        float: right;
    }

    .f3-widget-paginator li {
        border-top: 1px solid #0e8db3;
        border-bottom: 1px solid #0e8db3;
        border-left: 1px solid #bbb;
        list-style: none;
        display: inline-block;
        padding: 0 0.5em;
    }

    .f3-widget-paginator li:first-of-type {
        border-left: 1px solid #0e8db3;
        border-radius: 2px 0 0 2px;
    }

    .f3-widget-paginator li:last-of-type {
        border-right: 1px solid #0e8db3;
        border-radius: 0 2px 2px 0;
    }

    .f3-widget-paginator .current {
        background-color: #10a0cb;
        color: white;
    }

    /** Liste des tags dans un ul**/
    .liste-tags {
        padding: 0;
    }

    .liste-tags li {
        list-style: none;
        padding: 10px 10px;
    }

    .liste-tags li:nth-child(2n) {
        background-color: #f8f8f8;
    }
)
