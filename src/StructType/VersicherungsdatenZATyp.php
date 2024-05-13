<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersicherungsdatenZATyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VersicherungsdatenZATyp extends AbstractStructBase
{
    /**
     * The DatumVersicherungsbeginn
     */
    public ?string $DatumVersicherungsbeginn = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The Versicherungsscheinnummer
     */
    public ?string $Versicherungsscheinnummer = null;

    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The DatumEndeVersicherungsschutz
     */
    public ?string $DatumEndeVersicherungsschutz = null;

    /**
     * Constructor method for VersicherungsdatenZATyp
     *
     * @uses VersicherungsdatenZATyp::setDatumVersicherungsbeginn()
     * @uses VersicherungsdatenZATyp::setVersicherungsunternehmensnummer()
     * @uses VersicherungsdatenZATyp::setVersicherungsscheinnummer()
     * @uses VersicherungsdatenZATyp::setVersicherungsbestaetigungsnummer()
     * @uses VersicherungsdatenZATyp::setDatumEndeVersicherungsschutz()
     */
    public function __construct(?string $datumVersicherungsbeginn = null, ?string $versicherungsunternehmensnummer = null, ?string $versicherungsscheinnummer = null, ?string $versicherungsbestaetigungsnummer = null, ?string $datumEndeVersicherungsschutz = null)
    {
        $this
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setDatumEndeVersicherungsschutz($datumEndeVersicherungsschutz);
    }

    /**
     * Get DatumVersicherungsbeginn value
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }

    /**
     * Set DatumVersicherungsbeginn value
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;

        return $this;
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
     * Get Versicherungsscheinnummer value
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }

    /**
     * Set Versicherungsscheinnummer value
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;

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
     * Get DatumEndeVersicherungsschutz value
     */
    public function getDatumEndeVersicherungsschutz(): ?string
    {
        return $this->DatumEndeVersicherungsschutz;
    }

    /**
     * Set DatumEndeVersicherungsschutz value
     */
    public function setDatumEndeVersicherungsschutz(?string $datumEndeVersicherungsschutz = null): self
    {
        $this->DatumEndeVersicherungsschutz = $datumEndeVersicherungsschutz;

        return $this;
    }
}
