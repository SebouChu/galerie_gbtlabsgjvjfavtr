<?php
namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Gaétan BASILE <gaetan.basile.1@etu.u-bordeaux>
 * @author Théo LECOQ 
 * @author Aurore BAUME 
 * @author Sebastien GAYA 
 * @author Julien VANELIAN 
 * @author Jessica FERREIRA 
 * @author Alexandre VIAS 
 * @author Thibault ROBERT 
 */
class ImageControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Controller\ImageController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Gtasjjat\GalerieGbtlabsgjvjfavtr\Controller\ImageController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
