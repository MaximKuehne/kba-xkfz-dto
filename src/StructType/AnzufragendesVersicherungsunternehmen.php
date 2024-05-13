<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnzufragendesVersicherungsunternehmen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class AnzufragendesVersicherungsunternehmen extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The VUInterneVermittlernummer
     */
    public ?string $VUInterneVermittlernummer = null;

    /**
     * Constructor method for AnzufragendesVersicherungsunternehmen
     *
     * @uses AnzufragendesVersicherungsunternehmen::setVersicherungsunternehmensnummer()
     * @uses AnzufragendesVersicherungsunternehmen::setVUInterneVermittlernummer()
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $vUInterneVermittlernummer = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVUInterneVermittlernummer($vUInterneVermittlernummer);
    }

    /**
     * Get Versicherungsunternehmensnummer value
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get VUInterneVermittlernummer value
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }

    /**
     * Set VUInterneVermittlernummer value
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;

        return $this;
    }
}
