<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.DatenPruefziffer StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_DatenPruefziffer extends AbstractStructBase
{
    /**
     * The fahrzeugidentifizierungsnummer
     */
    public ?string $fahrzeugidentifizierungsnummer = null;

    /**
     * The monatJahrErstzulassung
     */
    public ?string $monatJahrErstzulassung = null;

    /**
     * The datumUntersuchung
     */
    public ?string $datumUntersuchung = null;

    /**
     * The merkmalBestanden
     */
    public ?bool $merkmalBestanden = null;

    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;

    /**
     * The pruefziffer
     */
    public ?string $pruefziffer = null;

    /**
     * Constructor method for Type.DatenPruefziffer
     *
     * @uses Type_DatenPruefziffer::setFahrzeugidentifizierungsnummer()
     * @uses Type_DatenPruefziffer::setMonatJahrErstzulassung()
     * @uses Type_DatenPruefziffer::setDatumUntersuchung()
     * @uses Type_DatenPruefziffer::setMerkmalBestanden()
     * @uses Type_DatenPruefziffer::setNaechsteHauptuntersuchung()
     * @uses Type_DatenPruefziffer::setNaechsteSicherheitspruefung()
     * @uses Type_DatenPruefziffer::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_DatenPruefziffer::setPruefziffer()
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $monatJahrErstzulassung = null, ?string $datumUntersuchung = null, ?bool $merkmalBestanden = null, ?string $naechsteHauptuntersuchung = null, ?string $naechsteSicherheitspruefung = null, ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null, ?string $pruefziffer = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setMonatJahrErstzulassung($monatJahrErstzulassung)
            ->setDatumUntersuchung($datumUntersuchung)
            ->setMerkmalBestanden($merkmalBestanden)
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung)
            ->setSchluesselnummerUeberwachungsinstitutionOderZDK($schluesselnummerUeberwachungsinstitutionOderZDK)
            ->setPruefziffer($pruefziffer);
    }

    /**
     * Get fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->fahrzeugidentifizierungsnummer;
    }

    /**
     * Set fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get monatJahrErstzulassung value
     */
    public function getMonatJahrErstzulassung(): ?string
    {
        return $this->monatJahrErstzulassung;
    }

    /**
     * Set monatJahrErstzulassung value
     */
    public function setMonatJahrErstzulassung(?string $monatJahrErstzulassung = null): self
    {
        $this->monatJahrErstzulassung = $monatJahrErstzulassung;

        return $this;
    }

    /**
     * Get datumUntersuchung value
     */
    public function getDatumUntersuchung(): ?string
    {
        return $this->datumUntersuchung;
    }

    /**
     * Set datumUntersuchung value
     */
    public function setDatumUntersuchung(?string $datumUntersuchung = null): self
    {
        $this->datumUntersuchung = $datumUntersuchung;

        return $this;
    }

    /**
     * Get merkmalBestanden value
     */
    public function getMerkmalBestanden(): ?bool
    {
        return $this->merkmalBestanden;
    }

    /**
     * Set merkmalBestanden value
     */
    public function setMerkmalBestanden(?bool $merkmalBestanden = null): self
    {
        $this->merkmalBestanden = $merkmalBestanden;

        return $this;
    }

    /**
     * Get NaechsteHauptuntersuchung value
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }

    /**
     * Set NaechsteHauptuntersuchung value
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;

        return $this;
    }

    /**
     * Get NaechsteSicherheitspruefung value
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }

    /**
     * Set NaechsteSicherheitspruefung value
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;

        return $this;
    }

    /**
     * Get schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }

    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;

        return $this;
    }

    /**
     * Get pruefziffer value
     */
    public function getPruefziffer(): ?string
    {
        return $this->pruefziffer;
    }

    /**
     * Set pruefziffer value
     */
    public function setPruefziffer(?string $pruefziffer = null): self
    {
        $this->pruefziffer = $pruefziffer;

        return $this;
    }
}
