<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rechteklasse StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Rechteklasse extends AbstractStructBase
{
    /**
     * The Rechteklassennummer
     * @var string|null
     */
    public ?string $Rechteklassennummer = null;
    /**
     * The Rechteklassenname
     * @var string|null
     */
    public ?string $Rechteklassenname = null;
    /**
     * The Beschreibung
     * @var string|null
     */
    public ?string $Beschreibung = null;
    /**
     * Constructor method for Rechteklasse
     * @uses Rechteklasse::setRechteklassennummer()
     * @uses Rechteklasse::setRechteklassenname()
     * @uses Rechteklasse::setBeschreibung()
     * @param string $rechteklassennummer
     * @param string $rechteklassenname
     * @param string $beschreibung
     */
    public function __construct(?string $rechteklassennummer = null, ?string $rechteklassenname = null, ?string $beschreibung = null)
    {
        $this
            ->setRechteklassennummer($rechteklassennummer)
            ->setRechteklassenname($rechteklassenname)
            ->setBeschreibung($beschreibung);
    }
    /**
     * Get Rechteklassennummer value
     * @return string|null
     */
    public function getRechteklassennummer(): ?string
    {
        return $this->Rechteklassennummer;
    }
    /**
     * Set Rechteklassennummer value
     * @param string $rechteklassennummer
     * @return \THAG\XKfz\StructType\Rechteklasse
     */
    public function setRechteklassennummer(?string $rechteklassennummer = null): self
    {
        $this->Rechteklassennummer = $rechteklassennummer;
        
        return $this;
    }
    /**
     * Get Rechteklassenname value
     * @return string|null
     */
    public function getRechteklassenname(): ?string
    {
        return $this->Rechteklassenname;
    }
    /**
     * Set Rechteklassenname value
     * @param string $rechteklassenname
     * @return \THAG\XKfz\StructType\Rechteklasse
     */
    public function setRechteklassenname(?string $rechteklassenname = null): self
    {
        $this->Rechteklassenname = $rechteklassenname;
        
        return $this;
    }
    /**
     * Get Beschreibung value
     * @return string|null
     */
    public function getBeschreibung(): ?string
    {
        return $this->Beschreibung;
    }
    /**
     * Set Beschreibung value
     * @param string $beschreibung
     * @return \THAG\XKfz\StructType\Rechteklasse
     */
    public function setBeschreibung(?string $beschreibung = null): self
    {
        $this->Beschreibung = $beschreibung;
        
        return $this;
    }
}
