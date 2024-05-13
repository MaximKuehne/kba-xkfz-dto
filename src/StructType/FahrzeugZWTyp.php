<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugZWTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugZWTyp extends AbstractStructBase
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
     * The MerkmalSondererfassungNutzfahrzeuge
     */
    public ?bool $MerkmalSondererfassungNutzfahrzeuge = null;

    /**
     * The PlausipruefungAbweichungBestaetigt
     */
    public ?string $PlausipruefungAbweichungBestaetigt = null;

    /**
     * Constructor method for FahrzeugZWTyp
     *
     * @uses FahrzeugZWTyp::setAnzahlVorhalter()
     * @uses FahrzeugZWTyp::setDatumErstzulassung()
     * @uses FahrzeugZWTyp::setHinweisBeschraenkung()
     * @uses FahrzeugZWTyp::setMerkmalSondererfassungNutzfahrzeuge()
     * @uses FahrzeugZWTyp::setPlausipruefungAbweichungBestaetigt()
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

    /**
     * Get MerkmalSondererfassungNutzfahrzeuge value
     */
    public function getMerkmalSondererfassungNutzfahrzeuge(): ?bool
    {
        return $this->MerkmalSondererfassungNutzfahrzeuge;
    }

    /**
     * Set MerkmalSondererfassungNutzfahrzeuge value
     */
    public function setMerkmalSondererfassungNutzfahrzeuge(?bool $merkmalSondererfassungNutzfahrzeuge = null): self
    {
        $this->MerkmalSondererfassungNutzfahrzeuge = $merkmalSondererfassungNutzfahrzeuge;

        return $this;
    }

    /**
     * Get PlausipruefungAbweichungBestaetigt value
     */
    public function getPlausipruefungAbweichungBestaetigt(): ?string
    {
        return $this->PlausipruefungAbweichungBestaetigt;
    }

    /**
     * Set PlausipruefungAbweichungBestaetigt value
     */
    public function setPlausipruefungAbweichungBestaetigt(?string $plausipruefungAbweichungBestaetigt = null): self
    {
        $this->PlausipruefungAbweichungBestaetigt = $plausipruefungAbweichungBestaetigt;

        return $this;
    }
}
