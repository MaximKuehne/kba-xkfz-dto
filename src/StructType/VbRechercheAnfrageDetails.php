<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAnfrageDetails StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAnfrageDetails extends AbstractStructBase
{
    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The VbVerarbeitungshistorieVon
     */
    public ?string $VbVerarbeitungshistorieVon = null;

    /**
     * The VbVerarbeitungshistorieBis
     */
    public ?string $VbVerarbeitungshistorieBis = null;

    /**
     * Constructor method for VbRechercheAnfrageDetails
     *
     * @uses VbRechercheAnfrageDetails::setVersicherungsunternehmensnummer()
     * @uses VbRechercheAnfrageDetails::setVersicherungsbestaetigungsnummer()
     * @uses VbRechercheAnfrageDetails::setVbVerarbeitungshistorieVon()
     * @uses VbRechercheAnfrageDetails::setVbVerarbeitungshistorieBis()
     */
    public function __construct(?string $versicherungsunternehmensnummer = null, ?string $versicherungsbestaetigungsnummer = null, ?string $vbVerarbeitungshistorieVon = null, ?string $vbVerarbeitungshistorieBis = null)
    {
        $this
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbVerarbeitungshistorieVon($vbVerarbeitungshistorieVon)
            ->setVbVerarbeitungshistorieBis($vbVerarbeitungshistorieBis);
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

    /**
     * Get VbVerarbeitungshistorieVon value
     */
    public function getVbVerarbeitungshistorieVon(): ?string
    {
        return $this->VbVerarbeitungshistorieVon;
    }

    /**
     * Set VbVerarbeitungshistorieVon value
     */
    public function setVbVerarbeitungshistorieVon(?string $vbVerarbeitungshistorieVon = null): self
    {
        $this->VbVerarbeitungshistorieVon = $vbVerarbeitungshistorieVon;

        return $this;
    }

    /**
     * Get VbVerarbeitungshistorieBis value
     */
    public function getVbVerarbeitungshistorieBis(): ?string
    {
        return $this->VbVerarbeitungshistorieBis;
    }

    /**
     * Set VbVerarbeitungshistorieBis value
     */
    public function setVbVerarbeitungshistorieBis(?string $vbVerarbeitungshistorieBis = null): self
    {
        $this->VbVerarbeitungshistorieBis = $vbVerarbeitungshistorieBis;

        return $this;
    }
}
