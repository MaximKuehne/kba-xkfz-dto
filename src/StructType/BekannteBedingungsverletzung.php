<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BekannteBedingungsverletzung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BekannteBedingungsverletzung extends AbstractStructBase
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
     * The ListeFelddefinition
     * @var \THAG\XKfz\StructType\ListeFelddefinition|null
     */
    public ?\THAG\XKfz\StructType\ListeFelddefinition $ListeFelddefinition = null;
    /**
     * Constructor method for BekannteBedingungsverletzung
     * @uses BekannteBedingungsverletzung::setBedingung()
     * @uses BekannteBedingungsverletzung::setBedingungsbeschreibung()
     * @uses BekannteBedingungsverletzung::setListeFelddefinition()
     * @param string $bedingung
     * @param string $bedingungsbeschreibung
     * @param \THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition
     */
    public function __construct(?string $bedingung = null, ?string $bedingungsbeschreibung = null, ?\THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition = null)
    {
        $this
            ->setBedingung($bedingung)
            ->setBedingungsbeschreibung($bedingungsbeschreibung)
            ->setListeFelddefinition($listeFelddefinition);
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
     * @return \THAG\XKfz\StructType\BekannteBedingungsverletzung
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
     * @return \THAG\XKfz\StructType\BekannteBedingungsverletzung
     */
    public function setBedingungsbeschreibung(?string $bedingungsbeschreibung = null): self
    {
        $this->Bedingungsbeschreibung = $bedingungsbeschreibung;
        
        return $this;
    }
    /**
     * Get ListeFelddefinition value
     * @return \THAG\XKfz\StructType\ListeFelddefinition|null
     */
    public function getListeFelddefinition(): ?\THAG\XKfz\StructType\ListeFelddefinition
    {
        return $this->ListeFelddefinition;
    }
    /**
     * Set ListeFelddefinition value
     * @param \THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition
     * @return \THAG\XKfz\StructType\BekannteBedingungsverletzung
     */
    public function setListeFelddefinition(?\THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition = null): self
    {
        $this->ListeFelddefinition = $listeFelddefinition;
        
        return $this;
    }
}
