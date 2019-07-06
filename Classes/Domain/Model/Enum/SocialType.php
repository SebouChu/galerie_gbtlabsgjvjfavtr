<?php

namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Enum;

final class SocialType extends \TYPO3\CMS\Core\Type\Enumeration
{
   const __default = self::TWITTER;

   /** @var int Twitter */
   const TWITTER = 0;

   /** @var int Facebook */
   const FACEBOOK = 1;

   /** @var int Instagram */
   const INSTAGRAM = 2;

   /** @var int LinkedIn */
   const LINKEDIN = 3;
 }
 