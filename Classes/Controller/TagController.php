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
 * TagController
 */
class TagController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * tagRepository
     *
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\TagRepository
     * @inject
     */
    protected $tagRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign('tags', $tags);
    }

    /**
     * action show
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tag
     * @return void
     */
    public function showAction(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tag)
    {
        $this->view->assign('tag', $tag);
    }
}
