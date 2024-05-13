<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeughinweiseZCTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeughinweiseZCTyp extends AbstractStructBase
{
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * The TextFahrzeugmaengel
     * @var string|null
     */
    public ?string $TextFahrzeugmaengel = null;
    /**
     * The TextFahrzeugschaeden
     * @var string|null
     */
    public ?string $TextFahrzeugschaeden = null;
    /**
     * The TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot
     * @var string|null
     */
    public ?string $TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = null;
    /**
     * The TextMassnahme
     * @var string|null
     */
    public ?string $TextMassnahme = null;
    /**
     * Constructor method for FahrzeughinweiseZCTyp
     * @uses FahrzeughinweiseZCTyp::setVerwendungFahrzeug()
     * @uses FahrzeughinweiseZCTyp::setTextFahrzeugmaengel()
     * @uses FahrzeughinweiseZCTyp::setTextFahrzeugschaeden()
     * @uses FahrzeughinweiseZCTyp::setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot()
     * @uses FahrzeughinweiseZCTyp::setTextMassnahme()
     * @param string $verwendungFahrzeug
     * @param string $textFahrzeugmaengel
     * @param string $textFahrzeugschaeden
     * @param string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot
     * @param string $textMassnahme
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
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZCTyp
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
    }
    /**
     * Get TextFahrzeugmaengel value
     * @return string|null
     */
    public function getTextFahrzeugmaengel(): ?string
    {
        return $this->TextFahrzeugmaengel;
    }
    /**
     * Set TextFahrzeugmaengel value
     * @param string $textFahrzeugmaengel
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZCTyp
     */
    public function setTextFahrzeugmaengel(?string $textFahrzeugmaengel = null): self
    {
        $this->TextFahrzeugmaengel = $textFahrzeugmaengel;
        
        return $this;
    }
    /**
     * Get TextFahrzeugschaeden value
     * @return string|null
     */
    public function getTextFahrzeugschaeden(): ?string
    {
        return $this->TextFahrzeugschaeden;
    }
    /**
     * Set TextFahrzeugschaeden value
     * @param string $textFahrzeugschaeden
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZCTyp
     */
    public function setTextFahrzeugschaeden(?string $textFahrzeugschaeden = null): self
    {
        $this->TextFahrzeugschaeden = $textFahrzeugschaeden;
        
        return $this;
    }
    /**
     * Get TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot value
     * @return string|null
     */
    public function getTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot(): ?string
    {
        return $this->TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot;
    }
    /**
     * Set TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot value
     * @param string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZCTyp
     */
    public function setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot(?string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = null): self
    {
        $this->TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot;
        
        return $this;
    }
    /**
     * Get TextMassnahme value
     * @return string|null
     */
    public function getTextMassnahme(): ?string
    {
        return $this->TextMassnahme;
    }
    /**
     * Set TextMassnahme value
     * @param string $textMassnahme
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZCTyp
     */
    public function setTextMassnahme(?string $textMassnahme = null): self
    {
        $this->TextMassnahme = $textMassnahme;
        
        return $this;
    }
}
