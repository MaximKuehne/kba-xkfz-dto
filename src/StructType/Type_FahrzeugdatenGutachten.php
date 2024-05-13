<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.FahrzeugdatenGutachten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_FahrzeugdatenGutachten extends AbstractStructBase
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
     * Constructor method for Type.FahrzeugdatenGutachten
     * @uses Type_FahrzeugdatenGutachten::setAnzahlVorhalter()
     * @uses Type_FahrzeugdatenGutachten::setDatumErstzulassung()
     * @uses Type_FahrzeugdatenGutachten::setHinweisBeschraenkung()
     * @param int $anzahlVorhalter
     * @param string $datumErstzulassung
     * @param bool $hinweisBeschraenkung
     */
    public function __construct(?int $anzahlVorhalter = null, ?string $datumErstzulassung = null, ?bool $hinweisBeschraenkung = null)
    {
        $this
            ->setAnzahlVorhalter($anzahlVorhalter)
            ->setDatumErstzulassung($datumErstzulassung)
            ->setHinweisBeschraenkung($hinweisBeschraenkung);
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenGutachten
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenGutachten
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenGutachten
     */
    public function setHinweisBeschraenkung(?bool $hinweisBeschraenkung = null): self
    {
        $this->HinweisBeschraenkung = $hinweisBeschraenkung;
        
        return $this;
    }
}
