<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VersicherungsdatenZVTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VersicherungsdatenZVTyp extends AbstractStructBase
{
    /**
     * The DatumVersicherungsbeginn
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginn = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The Versicherungsscheinnummer
     * @var string|null
     */
    public ?string $Versicherungsscheinnummer = null;
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The MerkmalBefreiungVersicherungspflicht
     * @var bool|null
     */
    public ?bool $MerkmalBefreiungVersicherungspflicht = null;
    /**
     * The DatumEndeVersicherungsschutz
     * @var string|null
     */
    public ?string $DatumEndeVersicherungsschutz = null;
    /**
     * The Verkehrsjahr
     * @var string|null
     */
    public ?string $Verkehrsjahr = null;
    /**
     * The DatumNichtbestehenVersicherung
     * @var string|null
     */
    public ?string $DatumNichtbestehenVersicherung = null;
    /**
     * The DatumEingangFehlenderVersicherungsschutz
     * @var string|null
     */
    public ?string $DatumEingangFehlenderVersicherungsschutz = null;
    /**
     * The MerkmalMassnahmeZulassungsbehoerdeEingeleitet
     * @var bool|null
     */
    public ?bool $MerkmalMassnahmeZulassungsbehoerdeEingeleitet = null;
    /**
     * The DatumEingangVersicherungsbestaetigung
     * @var string|null
     */
    public ?string $DatumEingangVersicherungsbestaetigung = null;
    /**
     * The DatumAnlageVersicherung
     * @var string|null
     */
    public ?string $DatumAnlageVersicherung = null;
    /**
     * Constructor method for VersicherungsdatenZVTyp
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
     * @param string $datumVersicherungsbeginn
     * @param string $versicherungsunternehmensnummer
     * @param string $versicherungsscheinnummer
     * @param string $versicherungsbestaetigungsnummer
     * @param bool $merkmalBefreiungVersicherungspflicht
     * @param string $datumEndeVersicherungsschutz
     * @param string $verkehrsjahr
     * @param string $datumNichtbestehenVersicherung
     * @param string $datumEingangFehlenderVersicherungsschutz
     * @param bool $merkmalMassnahmeZulassungsbehoerdeEingeleitet
     * @param string $datumEingangVersicherungsbestaetigung
     * @param string $datumAnlageVersicherung
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
     * @return string|null
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }
    /**
     * Set DatumVersicherungsbeginn value
     * @param string $datumVersicherungsbeginn
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get Versicherungsscheinnummer value
     * @return string|null
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }
    /**
     * Set Versicherungsscheinnummer value
     * @param string $versicherungsscheinnummer
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;
        
        return $this;
    }
    /**
     * Get Versicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }
    /**
     * Set Versicherungsbestaetigungsnummer value
     * @param string $versicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get MerkmalBefreiungVersicherungspflicht value
     * @return bool|null
     */
    public function getMerkmalBefreiungVersicherungspflicht(): ?bool
    {
        return $this->MerkmalBefreiungVersicherungspflicht;
    }
    /**
     * Set MerkmalBefreiungVersicherungspflicht value
     * @param bool $merkmalBefreiungVersicherungspflicht
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setMerkmalBefreiungVersicherungspflicht(?bool $merkmalBefreiungVersicherungspflicht = null): self
    {
        $this->MerkmalBefreiungVersicherungspflicht = $merkmalBefreiungVersicherungspflicht;
        
        return $this;
    }
    /**
     * Get DatumEndeVersicherungsschutz value
     * @return string|null
     */
    public function getDatumEndeVersicherungsschutz(): ?string
    {
        return $this->DatumEndeVersicherungsschutz;
    }
    /**
     * Set DatumEndeVersicherungsschutz value
     * @param string $datumEndeVersicherungsschutz
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setDatumEndeVersicherungsschutz(?string $datumEndeVersicherungsschutz = null): self
    {
        $this->DatumEndeVersicherungsschutz = $datumEndeVersicherungsschutz;
        
        return $this;
    }
    /**
     * Get Verkehrsjahr value
     * @return string|null
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }
    /**
     * Set Verkehrsjahr value
     * @param string $verkehrsjahr
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;
        
        return $this;
    }
    /**
     * Get DatumNichtbestehenVersicherung value
     * @return string|null
     */
    public function getDatumNichtbestehenVersicherung(): ?string
    {
        return $this->DatumNichtbestehenVersicherung;
    }
    /**
     * Set DatumNichtbestehenVersicherung value
     * @param string $datumNichtbestehenVersicherung
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setDatumNichtbestehenVersicherung(?string $datumNichtbestehenVersicherung = null): self
    {
        $this->DatumNichtbestehenVersicherung = $datumNichtbestehenVersicherung;
        
        return $this;
    }
    /**
     * Get DatumEingangFehlenderVersicherungsschutz value
     * @return string|null
     */
    public function getDatumEingangFehlenderVersicherungsschutz(): ?string
    {
        return $this->DatumEingangFehlenderVersicherungsschutz;
    }
    /**
     * Set DatumEingangFehlenderVersicherungsschutz value
     * @param string $datumEingangFehlenderVersicherungsschutz
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setDatumEingangFehlenderVersicherungsschutz(?string $datumEingangFehlenderVersicherungsschutz = null): self
    {
        $this->DatumEingangFehlenderVersicherungsschutz = $datumEingangFehlenderVersicherungsschutz;
        
        return $this;
    }
    /**
     * Get MerkmalMassnahmeZulassungsbehoerdeEingeleitet value
     * @return bool|null
     */
    public function getMerkmalMassnahmeZulassungsbehoerdeEingeleitet(): ?bool
    {
        return $this->MerkmalMassnahmeZulassungsbehoerdeEingeleitet;
    }
    /**
     * Set MerkmalMassnahmeZulassungsbehoerdeEingeleitet value
     * @param bool $merkmalMassnahmeZulassungsbehoerdeEingeleitet
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setMerkmalMassnahmeZulassungsbehoerdeEingeleitet(?bool $merkmalMassnahmeZulassungsbehoerdeEingeleitet = null): self
    {
        $this->MerkmalMassnahmeZulassungsbehoerdeEingeleitet = $merkmalMassnahmeZulassungsbehoerdeEingeleitet;
        
        return $this;
    }
    /**
     * Get DatumEingangVersicherungsbestaetigung value
     * @return string|null
     */
    public function getDatumEingangVersicherungsbestaetigung(): ?string
    {
        return $this->DatumEingangVersicherungsbestaetigung;
    }
    /**
     * Set DatumEingangVersicherungsbestaetigung value
     * @param string $datumEingangVersicherungsbestaetigung
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setDatumEingangVersicherungsbestaetigung(?string $datumEingangVersicherungsbestaetigung = null): self
    {
        $this->DatumEingangVersicherungsbestaetigung = $datumEingangVersicherungsbestaetigung;
        
        return $this;
    }
    /**
     * Get DatumAnlageVersicherung value
     * @return string|null
     */
    public function getDatumAnlageVersicherung(): ?string
    {
        return $this->DatumAnlageVersicherung;
    }
    /**
     * Set DatumAnlageVersicherung value
     * @param string $datumAnlageVersicherung
     * @return \THAG\XKfz\StructType\VersicherungsdatenZVTyp
     */
    public function setDatumAnlageVersicherung(?string $datumAnlageVersicherung = null): self
    {
        $this->DatumAnlageVersicherung = $datumAnlageVersicherung;
        
        return $this;
    }
}
