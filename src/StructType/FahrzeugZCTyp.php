<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugZCTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugZCTyp extends AbstractStructBase
{
    /**
     * The AnzahlVorhalter
     */
    public ?int $AnzahlVorhalter = null;

    /**
     * The DatumErstzulassung
     */
    public ?string $DatumErstzulassung = null;

    /**
     * The HinweisBeschraenkung
     */
    public ?bool $HinweisBeschraenkung = null;

    /**
     * Constructor method for FahrzeugZCTyp
     *
     * @uses FahrzeugZCTyp::setAnzahlVorhalter()
     * @uses FahrzeugZCTyp::setDatumErstzulassung()
     * @uses FahrzeugZCTyp::setHinweisBeschraenkung()
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
     */
    public function getAnzahlVorhalter(): ?int
    {
        return $this->AnzahlVorhalter;
    }

    /**
     * Set AnzahlVorhalter value
     */
    public function setAnzahlVorhalter(?int $anzahlVorhalter = null): self
    {
        $this->AnzahlVorhalter = $anzahlVorhalter;

        return $this;
    }

    /**
     * Get DatumErstzulassung value
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }

    /**
     * Set DatumErstzulassung value
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;

        return $this;
    }

    /**
     * Get HinweisBeschraenkung value
     */
    public function getHinweisBeschraenkung(): ?bool
    {
        return $this->HinweisBeschraenkung;
    }

    /**
     * Set HinweisBeschraenkung value
     */
    public function setHinweisBeschraenkung(?bool $hinweisBeschraenkung = null): self
    {
        $this->HinweisBeschraenkung = $hinweisBeschraenkung;

        return $this;
    }
}
