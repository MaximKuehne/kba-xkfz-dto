<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Unterlage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Unterlage extends AbstractStructBase
{
    /**
     * The positionsNummer
     * @var int|null
     */
    public ?int $positionsNummer = null;
    /**
     * The art
     * @var \THAG\XKfz\StructType\Type_ArtDerUnterlage|null
     */
    public ?\THAG\XKfz\StructType\Type_ArtDerUnterlage $art = null;
    /**
     * The anzahl
     * @var int|null
     */
    public ?int $anzahl = null;
    /**
     * The bemerkung
     * @var string|null
     */
    public ?string $bemerkung = null;
    /**
     * Constructor method for Type.Unterlage
     * @uses Type_Unterlage::setPositionsNummer()
     * @uses Type_Unterlage::setArt()
     * @uses Type_Unterlage::setAnzahl()
     * @uses Type_Unterlage::setBemerkung()
     * @param int $positionsNummer
     * @param \THAG\XKfz\StructType\Type_ArtDerUnterlage $art
     * @param int $anzahl
     * @param string $bemerkung
     */
    public function __construct(?int $positionsNummer = null, ?\THAG\XKfz\StructType\Type_ArtDerUnterlage $art = null, ?int $anzahl = null, ?string $bemerkung = null)
    {
        $this
            ->setPositionsNummer($positionsNummer)
            ->setArt($art)
            ->setAnzahl($anzahl)
            ->setBemerkung($bemerkung);
    }
    /**
     * Get positionsNummer value
     * @return int|null
     */
    public function getPositionsNummer(): ?int
    {
        return $this->positionsNummer;
    }
    /**
     * Set positionsNummer value
     * @param int $positionsNummer
     * @return \THAG\XKfz\StructType\Type_Unterlage
     */
    public function setPositionsNummer(?int $positionsNummer = null): self
    {
        $this->positionsNummer = $positionsNummer;
        
        return $this;
    }
    /**
     * Get art value
     * @return \THAG\XKfz\StructType\Type_ArtDerUnterlage|null
     */
    public function getArt(): ?\THAG\XKfz\StructType\Type_ArtDerUnterlage
    {
        return $this->art;
    }
    /**
     * Set art value
     * @param \THAG\XKfz\StructType\Type_ArtDerUnterlage $art
     * @return \THAG\XKfz\StructType\Type_Unterlage
     */
    public function setArt(?\THAG\XKfz\StructType\Type_ArtDerUnterlage $art = null): self
    {
        $this->art = $art;
        
        return $this;
    }
    /**
     * Get anzahl value
     * @return int|null
     */
    public function getAnzahl(): ?int
    {
        return $this->anzahl;
    }
    /**
     * Set anzahl value
     * @param int $anzahl
     * @return \THAG\XKfz\StructType\Type_Unterlage
     */
    public function setAnzahl(?int $anzahl = null): self
    {
        $this->anzahl = $anzahl;
        
        return $this;
    }
    /**
     * Get bemerkung value
     * @return string|null
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }
    /**
     * Set bemerkung value
     * @param string $bemerkung
     * @return \THAG\XKfz\StructType\Type_Unterlage
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;
        
        return $this;
    }
}
