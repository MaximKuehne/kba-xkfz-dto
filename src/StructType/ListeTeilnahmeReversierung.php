<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeTeilnahmeReversierung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeTeilnahmeReversierung extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * Constructor method for ListeTeilnahmeReversierung
     *
     * @uses ListeTeilnahmeReversierung::setVersicherungsunternehmensnummer()
     */
    public function __construct(?string $versicherungsunternehmensnummer = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer);
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
}
