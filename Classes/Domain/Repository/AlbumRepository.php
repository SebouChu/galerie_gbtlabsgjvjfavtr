<?php
namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Repository;

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
 * The repository for Albums
 */
class AlbumRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findLatest()
    {
        return $this->createQuery()->setOrderings([
            'publicationDate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
        ])->setLimit(6)->execute();
    }

    public function search(string $keyword)
    {
        $query = $this->createQuery();
        return $query->matching($query->like('name', '%'.$keyword.'%'))
                      ->execute();
    }
}
