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
 * AuteurController
 */
class AuteurController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * auteurRepository
     *
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\AuteurRepository
     * @inject
     */
    protected $auteurRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $auteurs = $this->auteurRepository->findAll();
        $this->view->assign('auteurs', $auteurs);
    }

    /**
     * action show
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Auteur $auteur
     * @return void
     */
    public function showAction(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Auteur $auteur)
    {
        $this->view->assign('auteur', $auteur);
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

        $auteurs = $this->auteurRepository->search($keyword);
        $this->view->assign('auteurs', $auteurs)->assign('keyword', $keyword);
    }
}
