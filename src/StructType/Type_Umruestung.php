<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Umruestung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Umruestung extends AbstractStructBase
{
    /**
     * The artDerUmruestung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUmruestung $artDerUmruestung = null;

    /**
     * The codeDesSystems
     */
    public ?\THAG\XKfz\StructType\Code_Systemcode $codeDesSystems = null;

    /**
     * The beschreibungUmruestung
     */
    public ?string $beschreibungUmruestung = null;

    /**
     * Constructor method for Type.Umruestung
     *
     * @uses Type_Umruestung::setArtDerUmruestung()
     * @uses Type_Umruestung::setCodeDesSystems()
     * @uses Type_Umruestung::setBeschreibungUmruestung()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_ArtDerUmruestung $artDerUmruestung = null, ?\THAG\XKfz\StructType\Code_Systemcode $codeDesSystems = null, ?string $beschreibungUmruestung = null)
    {
        $this
            ->setArtDerUmruestung($artDerUmruestung)
            ->setCodeDesSystems($codeDesSystems)
            ->setBeschreibungUmruestung($beschreibungUmruestung);
    }

    /**
     * Get artDerUmruestung value
     */
    public function getArtDerUmruestung(): ?\THAG\XKfz\StructType\Code_ArtDerUmruestung
    {
        return $this->artDerUmruestung;
    }

    /**
     * Set artDerUmruestung value
     */
    public function setArtDerUmruestung(?\THAG\XKfz\StructType\Code_ArtDerUmruestung $artDerUmruestung = null): self
    {
        $this->artDerUmruestung = $artDerUmruestung;

        return $this;
    }

    /**
     * Get codeDesSystems value
     */
    public function getCodeDesSystems(): ?\THAG\XKfz\StructType\Code_Systemcode
    {
        return $this->codeDesSystems;
    }

    /**
     * Set codeDesSystems value
     */
    public function setCodeDesSystems(?\THAG\XKfz\StructType\Code_Systemcode $codeDesSystems = null): self
    {
        $this->codeDesSystems = $codeDesSystems;

        return $this;
    }

    /**
     * Get beschreibungUmruestung value
     */
    public function getBeschreibungUmruestung(): ?string
    {
        return $this->beschreibungUmruestung;
    }

    /**
     * Set beschreibungUmruestung value
     */
    public function setBeschreibungUmruestung(?string $beschreibungUmruestung = null): self
    {
        $this->beschreibungUmruestung = $beschreibungUmruestung;

        return $this;
    }
}
