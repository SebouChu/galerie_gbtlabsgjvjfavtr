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
 * Auteur
 */
class Auteur extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom de famille
     *
     * @var string
     * @validate NotEmpty
     */
    protected $lastname = '';

    /**
     * Prénom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $firstname = '';

    /**
     * Profession
     *
     * @var string
     */
    protected $job = '';

    /**
     * Adresse
     *
     * @var string
     */
    protected $address = '';

    /**
     * Adresse email
     *
     * @var string
     * @validate NotEmpty
     */
    protected $email = '';

    /**
     * Numéro de téléphone
     *
     * @var string
     */
    protected $phoneNumber = '';

    /**
     * Site internet
     *
     * @var string
     */
    protected $website = '';

    /**
     * Biographie
     *
     * @var string
     */
    protected $biography = '';

    /**
     * Albums
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album>
     * @cascade remove
     * @lazy
     */
    protected $albums = null;

    /**
     * Social Networks
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\SocialNetwork>
     * @cascade remove
     */
    protected $socialNetworks = null;

    /**
     * Returns the lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Returns the firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Returns the job
     *
     * @return string $job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Sets the job
     *
     * @param string $job
     * @return void
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the phoneNumber
     *
     * @return string $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets the phoneNumber
     *
     * @param string $phoneNumber
     * @return void
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns the website
     *
     * @return string $website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Sets the website
     *
     * @param string $website
     * @return void
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * Returns the biography
     *
     * @return string $biography
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Sets the biography
     *
     * @param string $biography
     * @return void
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
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
        $this->albums = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->socialNetworks = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Album
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $album
     * @return void
     */
    public function addAlbum(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album $album)
    {
        $this->albums->attach($album);
    }

    /**
     * Removes a Album
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

    /**
     * Adds a SocialNetwork
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\SocialNetwork $socialNetwork
     * @return void
     */
    public function addSocialNetwork(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\SocialNetwork $socialNetwork)
    {
        $this->socialNetworks->attach($socialNetwork);
    }

    /**
     * Removes a SocialNetwork
     *
     * @param \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\SocialNetwork $socialNetworkToRemove The SocialNetwork to be removed
     * @return void
     */
    public function removeSocialNetwork(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\SocialNetwork $socialNetworkToRemove)
    {
        $this->socialNetworks->detach($socialNetworkToRemove);
    }

    /**
     * Returns the socialNetworks
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\SocialNetwork> $socialNetworks
     */
    public function getSocialNetworks()
    {
        return $this->socialNetworks;
    }

    /**
     * Sets the socialNetworks
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\SocialNetwork> $socialNetworks
     * @return void
     */
    public function setSocialNetworks(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $socialNetworks)
    {
        $this->socialNetworks = $socialNetworks;
    }
}
