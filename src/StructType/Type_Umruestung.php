<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Umruestung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Umruestung extends AbstractStructBase
{
    /**
     * The artDerUmruestung
     * @var \THAG\XKfz\StructType\Code_ArtDerUmruestung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUmruestung $artDerUmruestung = null;
    /**
     * The codeDesSystems
     * @var \THAG\XKfz\StructType\Code_Systemcode|null
     */
    public ?\THAG\XKfz\StructType\Code_Systemcode $codeDesSystems = null;
    /**
     * The beschreibungUmruestung
     * @var string|null
     */
    public ?string $beschreibungUmruestung = null;
    /**
     * Constructor method for Type.Umruestung
     * @uses Type_Umruestung::setArtDerUmruestung()
     * @uses Type_Umruestung::setCodeDesSystems()
     * @uses Type_Umruestung::setBeschreibungUmruestung()
     * @param \THAG\XKfz\StructType\Code_ArtDerUmruestung $artDerUmruestung
     * @param \THAG\XKfz\StructType\Code_Systemcode $codeDesSystems
     * @param string $beschreibungUmruestung
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
     * @return \THAG\XKfz\StructType\Code_ArtDerUmruestung|null
     */
    public function getArtDerUmruestung(): ?\THAG\XKfz\StructType\Code_ArtDerUmruestung
    {
        return $this->artDerUmruestung;
    }
    /**
     * Set artDerUmruestung value
     * @param \THAG\XKfz\StructType\Code_ArtDerUmruestung $artDerUmruestung
     * @return \THAG\XKfz\StructType\Type_Umruestung
     */
    public function setArtDerUmruestung(?\THAG\XKfz\StructType\Code_ArtDerUmruestung $artDerUmruestung = null): self
    {
        $this->artDerUmruestung = $artDerUmruestung;
        
        return $this;
    }
    /**
     * Get codeDesSystems value
     * @return \THAG\XKfz\StructType\Code_Systemcode|null
     */
    public function getCodeDesSystems(): ?\THAG\XKfz\StructType\Code_Systemcode
    {
        return $this->codeDesSystems;
    }
    /**
     * Set codeDesSystems value
     * @param \THAG\XKfz\StructType\Code_Systemcode $codeDesSystems
     * @return \THAG\XKfz\StructType\Type_Umruestung
     */
    public function setCodeDesSystems(?\THAG\XKfz\StructType\Code_Systemcode $codeDesSystems = null): self
    {
        $this->codeDesSystems = $codeDesSystems;
        
        return $this;
    }
    /**
     * Get beschreibungUmruestung value
     * @return string|null
     */
    public function getBeschreibungUmruestung(): ?string
    {
        return $this->beschreibungUmruestung;
    }
    /**
     * Set beschreibungUmruestung value
     * @param string $beschreibungUmruestung
     * @return \THAG\XKfz\StructType\Type_Umruestung
     */
    public function setBeschreibungUmruestung(?string $beschreibungUmruestung = null): self
    {
        $this->beschreibungUmruestung = $beschreibungUmruestung;
        
        return $this;
    }
}
