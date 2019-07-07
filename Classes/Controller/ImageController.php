<?php
namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Controller;

use Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\ImageRepository;
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
     * imageRepository
     *
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\ImageRepository
     */
    protected $imageRepository = null;

    /**
     * Constructor initialising injected dependencies
     *
     * @param ImageRepository $imageRepository
     */
    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * action latest
     *
     * @return void
     */
    public function latestAction()
    {
        $images = $this->imageRepository->findLatest();
        $this->view->assign('images', $images);
    }
}
