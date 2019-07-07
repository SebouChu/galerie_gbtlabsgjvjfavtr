<?php
namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model;

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
 * Categorie
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * Albums
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album>
     * @lazy
     */
    protected $albums = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->albums = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds an Album
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $album
     * @return void
     */
    public function addAlbum(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $album)
    {
        $this->albums->attach($album);
    }

    /**
     * Removes an Album
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $albumToRemove The Album to be removed
     * @return void
     */
    public function removeAlbum(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $albumToRemove)
    {
        $this->albums->detach($albumToRemove);
    }

    /**
     * Returns the albums
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album> $albums
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * Sets the albums
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album> $albums
     * @return void
     */
    public function setAlbums(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $albums)
    {
        $this->albums = $albums;
    }
}
