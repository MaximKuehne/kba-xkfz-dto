<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersicherungsdatenZVTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VersicherungsdatenZVTyp extends AbstractStructBase
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
     * The MerkmalBefreiungVersicherungspflicht
     */
    public ?bool $MerkmalBefreiungVersicherungspflicht = null;

    /**
     * The DatumEndeVersicherungsschutz
     */
    public ?string $DatumEndeVersicherungsschutz = null;

    /**
     * The Verkehrsjahr
     */
    public ?string $Verkehrsjahr = null;

    /**
     * The DatumNichtbestehenVersicherung
     */
    public ?string $DatumNichtbestehenVersicherung = null;

    /**
     * The DatumEingangFehlenderVersicherungsschutz
     */
    public ?string $DatumEingangFehlenderVersicherungsschutz = null;

    /**
     * The MerkmalMassnahmeZulassungsbehoerdeEingeleitet
     */
    public ?bool $MerkmalMassnahmeZulassungsbehoerdeEingeleitet = null;

    /**
     * The DatumEingangVersicherungsbestaetigung
     */
    public ?string $DatumEingangVersicherungsbestaetigung = null;

    /**
     * The DatumAnlageVersicherung
     */
    public ?string $DatumAnlageVersicherung = null;

    /**
     * Constructor method for VersicherungsdatenZVTyp
     *
     * @uses VersicherungsdatenZVTyp::setDatumVersicherungsbeginn()
     * @uses VersicherungsdatenZVTyp::setVersicherungsunternehmensnummer()
     * @uses VersicherungsdatenZVTyp::setVersicherungsscheinnummer()
     * @uses VersicherungsdatenZVTyp::setVersicherungsbestaetigungsnummer()
     * @uses VersicherungsdatenZVTyp::setMerkmalBefreiungVersicherungspflicht()
     * @uses VersicherungsdatenZVTyp::setDatumEndeVersicherungsschutz()
     * @uses VersicherungsdatenZVTyp::setVerkehrsjahr()
     * @uses VersicherungsdatenZVTyp::setDatumNichtbestehenVersicherung()
     * @uses VersicherungsdatenZVTyp::setDatumEingangFehlenderVersicherungsschutz()
     * @uses VersicherungsdatenZVTyp::setMerkmalMassnahmeZulassungsbehoerdeEingeleitet()
     * @uses VersicherungsdatenZVTyp::setDatumEingangVersicherungsbestaetigung()
     * @uses VersicherungsdatenZVTyp::setDatumAnlageVersicherung()
     */
    public function __construct(?string $datumVersicherungsbeginn = null, ?string $versicherungsunternehmensnummer = null, ?string $versicherungsscheinnummer = null, ?string $versicherungsbestaetigungsnummer = null, ?bool $merkmalBefreiungVersicherungspflicht = null, ?string $datumEndeVersicherungsschutz = null, ?string $verkehrsjahr = null, ?string $datumNichtbestehenVersicherung = null, ?string $datumEingangFehlenderVersicherungsschutz = null, ?bool $merkmalMassnahmeZulassungsbehoerdeEingeleitet = null, ?string $datumEingangVersicherungsbestaetigung = null, ?string $datumAnlageVersicherung = null)
    {
        $this
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setMerkmalBefreiungVersicherungspflicht($merkmalBefreiungVersicherungspflicht)
            ->setDatumEndeVersicherungsschutz($datumEndeVersicherungsschutz)
            ->setVerkehrsjahr($verkehrsjahr)
            ->setDatumNichtbestehenVersicherung($datumNichtbestehenVersicherung)
            ->setDatumEingangFehlenderVersicherungsschutz($datumEingangFehlenderVersicherungsschutz)
            ->setMerkmalMassnahmeZulassungsbehoerdeEingeleitet($merkmalMassnahmeZulassungsbehoerdeEingeleitet)
            ->setDatumEingangVersicherungsbestaetigung($datumEingangVersicherungsbestaetigung)
            ->setDatumAnlageVersicherung($datumAnlageVersicherung);
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
     * Get MerkmalBefreiungVersicherungspflicht value
     */
    public function getMerkmalBefreiungVersicherungspflicht(): ?bool
    {
        return $this->MerkmalBefreiungVersicherungspflicht;
    }

    /**
     * Set MerkmalBefreiungVersicherungspflicht value
     */
    public function setMerkmalBefreiungVersicherungspflicht(?bool $merkmalBefreiungVersicherungspflicht = null): self
    {
        $this->MerkmalBefreiungVersicherungspflicht = $merkmalBefreiungVersicherungspflicht;

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

    /**
     * Get Verkehrsjahr value
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }

    /**
     * Set Verkehrsjahr value
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;

        return $this;
    }

    /**
     * Get DatumNichtbestehenVersicherung value
     */
    public function getDatumNichtbestehenVersicherung(): ?string
    {
        return $this->DatumNichtbestehenVersicherung;
    }

    /**
     * Set DatumNichtbestehenVersicherung value
     */
    public function setDatumNichtbestehenVersicherung(?string $datumNichtbestehenVersicherung = null): self
    {
        $this->DatumNichtbestehenVersicherung = $datumNichtbestehenVersicherung;

        return $this;
    }

    /**
     * Get DatumEingangFehlenderVersicherungsschutz value
     */
    public function getDatumEingangFehlenderVersicherungsschutz(): ?string
    {
        return $this->DatumEingangFehlenderVersicherungsschutz;
    }

    /**
     * Set DatumEingangFehlenderVersicherungsschutz value
     */
    public function setDatumEingangFehlenderVersicherungsschutz(?string $datumEingangFehlenderVersicherungsschutz = null): self
    {
        $this->DatumEingangFehlenderVersicherungsschutz = $datumEingangFehlenderVersicherungsschutz;

        return $this;
    }

    /**
     * Get MerkmalMassnahmeZulassungsbehoerdeEingeleitet value
     */
    public function getMerkmalMassnahmeZulassungsbehoerdeEingeleitet(): ?bool
    {
        return $this->MerkmalMassnahmeZulassungsbehoerdeEingeleitet;
    }

    /**
     * Set MerkmalMassnahmeZulassungsbehoerdeEingeleitet value
     */
    public function setMerkmalMassnahmeZulassungsbehoerdeEingeleitet(?bool $merkmalMassnahmeZulassungsbehoerdeEingeleitet = null): self
    {
        $this->MerkmalMassnahmeZulassungsbehoerdeEingeleitet = $merkmalMassnahmeZulassungsbehoerdeEingeleitet;

        return $this;
    }

    /**
     * Get DatumEingangVersicherungsbestaetigung value
     */
    public function getDatumEingangVersicherungsbestaetigung(): ?string
    {
        return $this->DatumEingangVersicherungsbestaetigung;
    }

    /**
     * Set DatumEingangVersicherungsbestaetigung value
     */
    public function setDatumEingangVersicherungsbestaetigung(?string $datumEingangVersicherungsbestaetigung = null): self
    {
        $this->DatumEingangVersicherungsbestaetigung = $datumEingangVersicherungsbestaetigung;

        return $this;
    }

    /**
     * Get DatumAnlageVersicherung value
     */
    public function getDatumAnlageVersicherung(): ?string
    {
        return $this->DatumAnlageVersicherung;
    }

    /**
     * Set DatumAnlageVersicherung value
     */
    public function setDatumAnlageVersicherung(?string $datumAnlageVersicherung = null): self
    {
        $this->DatumAnlageVersicherung = $datumAnlageVersicherung;

        return $this;
    }
}
