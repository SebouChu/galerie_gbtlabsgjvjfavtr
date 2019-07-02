<?php

namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Controller;

use Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\TagRepository;

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
 * AlbumController
 */
class AlbumController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * albumRepository
     *
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\AlbumRepository
     * @inject
     */
    protected $albumRepository = null;

    /**
     * tagRepository
     *
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\TagRepository
     * @inject
     */
    protected $tagRepository = null;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $albums = $this->albumRepository->findAll();
        $tags = $this->tagRepository->findAll();
        $this->view->assign('albums', $albums)->assign('tags', $tags);
    }

    /**
     * action show
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $album
     * @return void
     */
    public function showAction(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $album)
    {
        $this->view->assign('album', $album);
    }

    /**
     * action search
     *
     * @param $keyword
     * @return void
     */
    public function searchAction()
    {
      if ($this->request->hasArgument('keyword')) {
        $keyword = $this->request->getArgument('keyword');
      } else {
        $keyword = '';
      }

      $albums = $this->albumRepository->search($keyword);
      $this->view->assign('albums', $albums)->assign('keyword', $keyword);
    }

    /**
     * action latest
     *
     * @return void
     */
    public function latestAction()
    {
        $albums = $this->albumRepository->findLatest();
        $this->view->assign('albums', $albums);
    }

    /**
     * action addTag
     *
     * @return void
     */
    public function addTagAction()
    {

    }
}
