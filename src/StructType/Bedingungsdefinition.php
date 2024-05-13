<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bedingungsdefinition StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bedingungsdefinition extends AbstractStructBase
{
    /**
     * The Bedingung
     * @var string|null
     */
    public ?string $Bedingung = null;
    /**
     * The Bedingungsbeschreibung
     * @var string|null
     */
    public ?string $Bedingungsbeschreibung = null;
    /**
     * The ListeFeldbezeichnung
     * @var \THAG\XKfz\StructType\ListeFeldbezeichnung|null
     */
    public ?\THAG\XKfz\StructType\ListeFeldbezeichnung $ListeFeldbezeichnung = null;
    /**
     * Constructor method for Bedingungsdefinition
     * @uses Bedingungsdefinition::setBedingung()
     * @uses Bedingungsdefinition::setBedingungsbeschreibung()
     * @uses Bedingungsdefinition::setListeFeldbezeichnung()
     * @param string $bedingung
     * @param string $bedingungsbeschreibung
     * @param \THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung
     */
    public function __construct(?string $bedingung = null, ?string $bedingungsbeschreibung = null, ?\THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung = null)
    {
        $this
            ->setBedingung($bedingung)
            ->setBedingungsbeschreibung($bedingungsbeschreibung)
            ->setListeFeldbezeichnung($listeFeldbezeichnung);
    }
    /**
     * Get Bedingung value
     * @return string|null
     */
    public function getBedingung(): ?string
    {
        return $this->Bedingung;
    }
    /**
     * Set Bedingung value
     * @param string $bedingung
     * @return \THAG\XKfz\StructType\Bedingungsdefinition
     */
    public function setBedingung(?string $bedingung = null): self
    {
        $this->Bedingung = $bedingung;
        
        return $this;
    }
    /**
     * Get Bedingungsbeschreibung value
     * @return string|null
     */
    public function getBedingungsbeschreibung(): ?string
    {
        return $this->Bedingungsbeschreibung;
    }
    /**
     * Set Bedingungsbeschreibung value
     * @param string $bedingungsbeschreibung
     * @return \THAG\XKfz\StructType\Bedingungsdefinition
     */
    public function setBedingungsbeschreibung(?string $bedingungsbeschreibung = null): self
    {
        $this->Bedingungsbeschreibung = $bedingungsbeschreibung;
        
        return $this;
    }
    /**
     * Get ListeFeldbezeichnung value
     * @return \THAG\XKfz\StructType\ListeFeldbezeichnung|null
     */
    public function getListeFeldbezeichnung(): ?\THAG\XKfz\StructType\ListeFeldbezeichnung
    {
        return $this->ListeFeldbezeichnung;
    }
    /**
     * Set ListeFeldbezeichnung value
     * @param \THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung
     * @return \THAG\XKfz\StructType\Bedingungsdefinition
     */
    public function setListeFeldbezeichnung(?\THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung = null): self
    {
        $this->ListeFeldbezeichnung = $listeFeldbezeichnung;
        
        return $this;
    }
}
