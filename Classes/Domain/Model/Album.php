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
 * Album
 */
class Album extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Description (wysiwyg)
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * publicationDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $publicationDate = null;

    /**
     * Images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Image>
     * @cascade remove
     * @lazy
     */
    protected $images = null;

    /**
     * Categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category>
     */
    protected $categories = null;

    /**
     * Tags
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag>
     * @lazy
     */
    protected $tags = null;

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
     * Returns the publicationDate
     *
     * @return \DateTime $publicationDate
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Sets the publicationDate
     *
     * @param \DateTime $publicationDate
     * @return void
     */
    public function setPublicationDate(\DateTime $publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
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
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Image
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Image $image
     * @return void
     */
    public function addImage(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Image $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a Image
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Image $imageToRemove The Image to be removed
     * @return void
     */
    public function removeImage(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Image $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Image> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Image> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Adds a Category
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Adds a Tag
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }
}
