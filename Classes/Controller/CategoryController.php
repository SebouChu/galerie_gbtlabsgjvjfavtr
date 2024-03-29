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
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * categoryRepository
     *
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }

    /**
     * action show
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category $category
     * @return void
     */
    public function showAction(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {
        if ($this->request->hasArgument('keyword')) {
            $keyword = $this->request->getArgument('keyword');
        } else {
            $keyword = '';
        }
        $categories = $this->categoryRepository->search($keyword);
        $this->view->assign('categories', $categories)->assign('keyword', $keyword);
    }
}
