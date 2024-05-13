<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeughinweiseZCTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeughinweiseZCTyp extends AbstractStructBase
{
    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * The TextFahrzeugmaengel
     */
    public ?string $TextFahrzeugmaengel = null;

    /**
     * The TextFahrzeugschaeden
     */
    public ?string $TextFahrzeugschaeden = null;

    /**
     * The TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot
     */
    public ?string $TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = null;

    /**
     * The TextMassnahme
     */
    public ?string $TextMassnahme = null;

    /**
     * Constructor method for FahrzeughinweiseZCTyp
     *
     * @uses FahrzeughinweiseZCTyp::setVerwendungFahrzeug()
     * @uses FahrzeughinweiseZCTyp::setTextFahrzeugmaengel()
     * @uses FahrzeughinweiseZCTyp::setTextFahrzeugschaeden()
     * @uses FahrzeughinweiseZCTyp::setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot()
     * @uses FahrzeughinweiseZCTyp::setTextMassnahme()
     */
    public function __construct(?string $verwendungFahrzeug = null, ?string $textFahrzeugmaengel = null, ?string $textFahrzeugschaeden = null, ?string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = null, ?string $textMassnahme = null)
    {
        $this
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setTextFahrzeugmaengel($textFahrzeugmaengel)
            ->setTextFahrzeugschaeden($textFahrzeugschaeden)
            ->setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot($textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot)
            ->setTextMassnahme($textMassnahme);
    }

    /**
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

        return $this;
    }

    /**
     * Get TextFahrzeugmaengel value
     */
    public function getTextFahrzeugmaengel(): ?string
    {
        return $this->TextFahrzeugmaengel;
    }

    /**
     * Set TextFahrzeugmaengel value
     */
    public function setTextFahrzeugmaengel(?string $textFahrzeugmaengel = null): self
    {
        $this->TextFahrzeugmaengel = $textFahrzeugmaengel;

        return $this;
    }

    /**
     * Get TextFahrzeugschaeden value
     */
    public function getTextFahrzeugschaeden(): ?string
    {
        return $this->TextFahrzeugschaeden;
    }

    /**
     * Set TextFahrzeugschaeden value
     */
    public function setTextFahrzeugschaeden(?string $textFahrzeugschaeden = null): self
    {
        $this->TextFahrzeugschaeden = $textFahrzeugschaeden;

        return $this;
    }

    /**
     * Get TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot value
     */
    public function getTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot(): ?string
    {
        return $this->TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot;
    }

    /**
     * Set TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot value
     */
    public function setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot(?string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = null): self
    {
        $this->TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot;

        return $this;
    }

    /**
     * Get TextMassnahme value
     */
    public function getTextMassnahme(): ?string
    {
        return $this->TextMassnahme;
    }

    /**
     * Set TextMassnahme value
     */
    public function setTextMassnahme(?string $textMassnahme = null): self
    {
        $this->TextMassnahme = $textMassnahme;

        return $this;
    }
}
