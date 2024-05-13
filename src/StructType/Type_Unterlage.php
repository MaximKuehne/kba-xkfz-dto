<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Unterlage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Unterlage extends AbstractStructBase
{
    /**
     * The positionsNummer
     */
    public ?int $positionsNummer = null;

    /**
     * The art
     */
    public ?\THAG\XKfz\StructType\Type_ArtDerUnterlage $art = null;

    /**
     * The anzahl
     */
    public ?int $anzahl = null;

    /**
     * The bemerkung
     */
    public ?string $bemerkung = null;

    /**
     * Constructor method for Type.Unterlage
     *
     * @uses Type_Unterlage::setPositionsNummer()
     * @uses Type_Unterlage::setArt()
     * @uses Type_Unterlage::setAnzahl()
     * @uses Type_Unterlage::setBemerkung()
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
     */
    public function getPositionsNummer(): ?int
    {
        return $this->positionsNummer;
    }

    /**
     * Set positionsNummer value
     */
    public function setPositionsNummer(?int $positionsNummer = null): self
    {
        $this->positionsNummer = $positionsNummer;

        return $this;
    }

    /**
     * Get art value
     */
    public function getArt(): ?\THAG\XKfz\StructType\Type_ArtDerUnterlage
    {
        return $this->art;
    }

    /**
     * Set art value
     */
    public function setArt(?\THAG\XKfz\StructType\Type_ArtDerUnterlage $art = null): self
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get anzahl value
     */
    public function getAnzahl(): ?int
    {
        return $this->anzahl;
    }

    /**
     * Set anzahl value
     */
    public function setAnzahl(?int $anzahl = null): self
    {
        $this->anzahl = $anzahl;

        return $this;
    }

    /**
     * Get bemerkung value
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    /**
     * Set bemerkung value
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }
}
