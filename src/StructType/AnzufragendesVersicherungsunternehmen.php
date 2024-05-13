<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnzufragendesVersicherungsunternehmen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class AnzufragendesVersicherungsunternehmen extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The VUInterneVermittlernummer
     * @var string|null
     */
    public ?string $VUInterneVermittlernummer = null;
    /**
     * Constructor method for AnzufragendesVersicherungsunternehmen
     * @uses AnzufragendesVersicherungsunternehmen::setVersicherungsunternehmensnummer()
     * @uses AnzufragendesVersicherungsunternehmen::setVUInterneVermittlernummer()
     * @param string $versicherungsunternehmensnummer
     * @param string $vUInterneVermittlernummer
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $vUInterneVermittlernummer = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVUInterneVermittlernummer($vUInterneVermittlernummer);
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\AnzufragendesVersicherungsunternehmen
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get VUInterneVermittlernummer value
     * @return string|null
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }
    /**
     * Set VUInterneVermittlernummer value
     * @param string $vUInterneVermittlernummer
     * @return \THAG\XKfz\StructType\AnzufragendesVersicherungsunternehmen
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;
        
        return $this;
    }
}
