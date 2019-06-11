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
 * SocialNetwork
 */
class SocialNetwork extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Identifiant du compte
     *
     * @var string
     * @validate NotEmpty
     */
    protected $identifier = '';

    /**
     * Type de réseau (FB, Twitter, etc.)
     *
     * @var int
     * @validate NotEmpty
     */
    protected $socialType = 0;

    /**
     * Returns the identifier
     *
     * @return string $identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the identifier
     *
     * @param string $identifier
     * @return void
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns the socialType
     *
     * @return int $socialType
     */
    public function getSocialType()
    {
        return $this->socialType;
    }

    /**
     * Sets the socialType
     *
     * @param int $socialType
     * @return void
     */
    public function setSocialType($socialType)
    {
        $this->socialType = $socialType;
    }
}
