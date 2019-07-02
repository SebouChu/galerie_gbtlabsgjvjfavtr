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
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $newTag
     * @return void
     */
    public function createAction(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $newTag)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->tagRepository->add($newTag);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tag
     * @return void
     */
    public function deleteAction(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tag)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->tagRepository->remove($tag);
        $this->redirect('list');
    }
}
