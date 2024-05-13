<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVersicherungsbestaetigungsnummer StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVersicherungsbestaetigungsnummer extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * Constructor method for ListeVersicherungsbestaetigungsnummer
     *
     * @uses ListeVersicherungsbestaetigungsnummer::setVersicherungsbestaetigungsnummer()
     */
    public function __construct(?string $versicherungsbestaetigungsnummer = null)
    {
        $this
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer);
    }

    /**
     * Get Versicherungsbestaetigungsnummer value
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

        return $this;
    }
}
