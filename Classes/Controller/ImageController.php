<?php

namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Controller;

/***
 *
 * This file is part of the "galerie_cantonnais" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Gaétan BASILE <gaetan.basile.1@etu.u-bordeaux>
 *           Théo LECOQ
 *           Aurore BAUME
 *           Sebastien GAYA
 *           Julien VANELIAN
 *           Jessica FERREIRA
 *           Alexandre VIAS
 *           Thibault ROBERT
 *
 ***/

/**
 * ImageController
 */
class ImageController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action latest
     *
     * @return void
     */
    public function latestAction()
    {
        $images = $this->createQuery()
            ->setOrderings([
                'publicationDate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
            ])
            ->setLimit(5)
            ->execute();
        $this->view->assign('images', $images);
    }
}
