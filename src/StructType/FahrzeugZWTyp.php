<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugZWTyp extends AbstractStructBase
{
    /**
     * The AnzahlVorhalter
     * @var int|null
     */
    public ?int $AnzahlVorhalter = null;
    /**
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * The HinweisBeschraenkung
     * @var bool|null
     */
    public ?bool $HinweisBeschraenkung = null;
    /**
     * The MerkmalSondererfassungNutzfahrzeuge
     * @var bool|null
     */
    public ?bool $MerkmalSondererfassungNutzfahrzeuge = null;
    /**
     * The PlausipruefungAbweichungBestaetigt
     * @var string|null
     */
    public ?string $PlausipruefungAbweichungBestaetigt = null;
    /**
     * Constructor method for FahrzeugZWTyp
     * @uses FahrzeugZWTyp::setAnzahlVorhalter()
     * @uses FahrzeugZWTyp::setDatumErstzulassung()
     * @uses FahrzeugZWTyp::setHinweisBeschraenkung()
     * @uses FahrzeugZWTyp::setMerkmalSondererfassungNutzfahrzeuge()
     * @uses FahrzeugZWTyp::setPlausipruefungAbweichungBestaetigt()
     * @param int $anzahlVorhalter
     * @param string $datumErstzulassung
     * @param bool $hinweisBeschraenkung
     * @param bool $merkmalSondererfassungNutzfahrzeuge
     * @param string $plausipruefungAbweichungBestaetigt
     */
    public function __construct(?int $anzahlVorhalter = null, ?string $datumErstzulassung = null, ?bool $hinweisBeschraenkung = null, ?bool $merkmalSondererfassungNutzfahrzeuge = null, ?string $plausipruefungAbweichungBestaetigt = null)
    {
        $this
            ->setAnzahlVorhalter($anzahlVorhalter)
            ->setDatumErstzulassung($datumErstzulassung)
            ->setHinweisBeschraenkung($hinweisBeschraenkung)
            ->setMerkmalSondererfassungNutzfahrzeuge($merkmalSondererfassungNutzfahrzeuge)
            ->setPlausipruefungAbweichungBestaetigt($plausipruefungAbweichungBestaetigt);
    }
    /**
     * Get AnzahlVorhalter value
     * @return int|null
     */
    public function getAnzahlVorhalter(): ?int
    {
        return $this->AnzahlVorhalter;
    }
    /**
     * Set AnzahlVorhalter value
     * @param int $anzahlVorhalter
     * @return \THAG\XKfz\StructType\FahrzeugZWTyp
     */
    public function setAnzahlVorhalter(?int $anzahlVorhalter = null): self
    {
        $this->AnzahlVorhalter = $anzahlVorhalter;
        
        return $this;
    }
    /**
     * Get DatumErstzulassung value
     * @return string|null
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }
    /**
     * Set DatumErstzulassung value
     * @param string $datumErstzulassung
     * @return \THAG\XKfz\StructType\FahrzeugZWTyp
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
    /**
     * Get HinweisBeschraenkung value
     * @return bool|null
     */
    public function getHinweisBeschraenkung(): ?bool
    {
        return $this->HinweisBeschraenkung;
    }
    /**
     * Set HinweisBeschraenkung value
     * @param bool $hinweisBeschraenkung
     * @return \THAG\XKfz\StructType\FahrzeugZWTyp
     */
    public function setHinweisBeschraenkung(?bool $hinweisBeschraenkung = null): self
    {
        $this->HinweisBeschraenkung = $hinweisBeschraenkung;
        
        return $this;
    }
    /**
     * Get MerkmalSondererfassungNutzfahrzeuge value
     * @return bool|null
     */
    public function getMerkmalSondererfassungNutzfahrzeuge(): ?bool
    {
        return $this->MerkmalSondererfassungNutzfahrzeuge;
    }
    /**
     * Set MerkmalSondererfassungNutzfahrzeuge value
     * @param bool $merkmalSondererfassungNutzfahrzeuge
     * @return \THAG\XKfz\StructType\FahrzeugZWTyp
     */
    public function setMerkmalSondererfassungNutzfahrzeuge(?bool $merkmalSondererfassungNutzfahrzeuge = null): self
    {
        $this->MerkmalSondererfassungNutzfahrzeuge = $merkmalSondererfassungNutzfahrzeuge;
        
        return $this;
    }
    /**
     * Get PlausipruefungAbweichungBestaetigt value
     * @return string|null
     */
    public function getPlausipruefungAbweichungBestaetigt(): ?string
    {
        return $this->PlausipruefungAbweichungBestaetigt;
    }
    /**
     * Set PlausipruefungAbweichungBestaetigt value
     * @param string $plausipruefungAbweichungBestaetigt
     * @return \THAG\XKfz\StructType\FahrzeugZWTyp
     */
    public function setPlausipruefungAbweichungBestaetigt(?string $plausipruefungAbweichungBestaetigt = null): self
    {
        $this->PlausipruefungAbweichungBestaetigt = $plausipruefungAbweichungBestaetigt;
        
        return $this;
    }
}
