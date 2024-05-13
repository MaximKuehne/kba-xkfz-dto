<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.DatenPruefziffer StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_DatenPruefziffer extends AbstractStructBase
{
    /**
     * The fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $fahrzeugidentifizierungsnummer = null;
    /**
     * The monatJahrErstzulassung
     * @var string|null
     */
    public ?string $monatJahrErstzulassung = null;
    /**
     * The datumUntersuchung
     * @var string|null
     */
    public ?string $datumUntersuchung = null;
    /**
     * The merkmalBestanden
     * @var bool|null
     */
    public ?bool $merkmalBestanden = null;
    /**
     * The NaechsteHauptuntersuchung
     * @var string|null
     */
    public ?string $NaechsteHauptuntersuchung = null;
    /**
     * The NaechsteSicherheitspruefung
     * @var string|null
     */
    public ?string $NaechsteSicherheitspruefung = null;
    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     * @var \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;
    /**
     * The pruefziffer
     * @var string|null
     */
    public ?string $pruefziffer = null;
    /**
     * Constructor method for Type.DatenPruefziffer
     * @uses Type_DatenPruefziffer::setFahrzeugidentifizierungsnummer()
     * @uses Type_DatenPruefziffer::setMonatJahrErstzulassung()
     * @uses Type_DatenPruefziffer::setDatumUntersuchung()
     * @uses Type_DatenPruefziffer::setMerkmalBestanden()
     * @uses Type_DatenPruefziffer::setNaechsteHauptuntersuchung()
     * @uses Type_DatenPruefziffer::setNaechsteSicherheitspruefung()
     * @uses Type_DatenPruefziffer::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_DatenPruefziffer::setPruefziffer()
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $monatJahrErstzulassung
     * @param string $datumUntersuchung
     * @param bool $merkmalBestanden
     * @param string $naechsteHauptuntersuchung
     * @param string $naechsteSicherheitspruefung
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @param string $pruefziffer
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
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->fahrzeugidentifizierungsnummer;
    }
    /**
     * Set fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get monatJahrErstzulassung value
     * @return string|null
     */
    public function getMonatJahrErstzulassung(): ?string
    {
        return $this->monatJahrErstzulassung;
    }
    /**
     * Set monatJahrErstzulassung value
     * @param string $monatJahrErstzulassung
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setMonatJahrErstzulassung(?string $monatJahrErstzulassung = null): self
    {
        $this->monatJahrErstzulassung = $monatJahrErstzulassung;
        
        return $this;
    }
    /**
     * Get datumUntersuchung value
     * @return string|null
     */
    public function getDatumUntersuchung(): ?string
    {
        return $this->datumUntersuchung;
    }
    /**
     * Set datumUntersuchung value
     * @param string $datumUntersuchung
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setDatumUntersuchung(?string $datumUntersuchung = null): self
    {
        $this->datumUntersuchung = $datumUntersuchung;
        
        return $this;
    }
    /**
     * Get merkmalBestanden value
     * @return bool|null
     */
    public function getMerkmalBestanden(): ?bool
    {
        return $this->merkmalBestanden;
    }
    /**
     * Set merkmalBestanden value
     * @param bool $merkmalBestanden
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setMerkmalBestanden(?bool $merkmalBestanden = null): self
    {
        $this->merkmalBestanden = $merkmalBestanden;
        
        return $this;
    }
    /**
     * Get NaechsteHauptuntersuchung value
     * @return string|null
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }
    /**
     * Set NaechsteHauptuntersuchung value
     * @param string $naechsteHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;
        
        return $this;
    }
    /**
     * Get NaechsteSicherheitspruefung value
     * @return string|null
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }
    /**
     * Set NaechsteSicherheitspruefung value
     * @param string $naechsteSicherheitspruefung
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;
        
        return $this;
    }
    /**
     * Get schluesselnummerUeberwachungsinstitutionOderZDK value
     * @return \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }
    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;
        
        return $this;
    }
    /**
     * Get pruefziffer value
     * @return string|null
     */
    public function getPruefziffer(): ?string
    {
        return $this->pruefziffer;
    }
    /**
     * Set pruefziffer value
     * @param string $pruefziffer
     * @return \THAG\XKfz\StructType\Type_DatenPruefziffer
     */
    public function setPruefziffer(?string $pruefziffer = null): self
    {
        $this->pruefziffer = $pruefziffer;
        
        return $this;
    }
}
