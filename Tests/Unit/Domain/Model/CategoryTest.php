<?php
namespace Gtasjjat\GalerieGbtlabsgjvjfavtr\Tests\Unit\Domain\Model;

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
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlbumsReturnsInitialValueForAlbum()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAlbums()
        );
    }

    /**
     * @test
     */
    public function setAlbumsForObjectStorageContainingAlbumSetsAlbums()
    {
        $album = new \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album();
        $objectStorageHoldingExactlyOneAlbums = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAlbums->attach($album);
        $this->subject->setAlbums($objectStorageHoldingExactlyOneAlbums);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAlbums,
            'albums',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAlbumToObjectStorageHoldingAlbums()
    {
        $album = new \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album();
        $albumsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $albumsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($album));
        $this->inject($this->subject, 'albums', $albumsObjectStorageMock);

        $this->subject->addAlbum($album);
    }

    /**
     * @test
     */
    public function removeAlbumFromObjectStorageHoldingAlbums()
    {
        $album = new \Gtasjjat\GalerieGbtlabsgjvjfavtr\Domain\Model\Album();
        $albumsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $albumsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($album));
        $this->inject($this->subject, 'albums', $albumsObjectStorageMock);

        $this->subject->removeAlbum($album);
    }
}
