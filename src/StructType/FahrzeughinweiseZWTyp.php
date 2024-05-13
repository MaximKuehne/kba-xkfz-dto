<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeughinweiseZWTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeughinweiseZWTyp extends AbstractStructBase
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
     * The MerkmalVerstossGegenKraftfahrzeugsteuer
     */
    public ?bool $MerkmalVerstossGegenKraftfahrzeugsteuer = null;

    /**
     * The TextSonstigeHinweise
     */
    public ?string $TextSonstigeHinweise = null;

    /**
     * Constructor method for FahrzeughinweiseZWTyp
     *
     * @uses FahrzeughinweiseZWTyp::setVerwendungFahrzeug()
     * @uses FahrzeughinweiseZWTyp::setTextFahrzeugmaengel()
     * @uses FahrzeughinweiseZWTyp::setTextFahrzeugschaeden()
     * @uses FahrzeughinweiseZWTyp::setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot()
     * @uses FahrzeughinweiseZWTyp::setMerkmalVerstossGegenKraftfahrzeugsteuer()
     * @uses FahrzeughinweiseZWTyp::setTextSonstigeHinweise()
     */
    public function __construct(?string $verwendungFahrzeug = null, ?string $textFahrzeugmaengel = null, ?string $textFahrzeugschaeden = null, ?string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = null, ?bool $merkmalVerstossGegenKraftfahrzeugsteuer = null, ?string $textSonstigeHinweise = null)
    {
        $this
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setTextFahrzeugmaengel($textFahrzeugmaengel)
            ->setTextFahrzeugschaeden($textFahrzeugschaeden)
            ->setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot($textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot)
            ->setMerkmalVerstossGegenKraftfahrzeugsteuer($merkmalVerstossGegenKraftfahrzeugsteuer)
            ->setTextSonstigeHinweise($textSonstigeHinweise);
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
     * Get MerkmalVerstossGegenKraftfahrzeugsteuer value
     */
    public function getMerkmalVerstossGegenKraftfahrzeugsteuer(): ?bool
    {
        return $this->MerkmalVerstossGegenKraftfahrzeugsteuer;
    }

    /**
     * Set MerkmalVerstossGegenKraftfahrzeugsteuer value
     */
    public function setMerkmalVerstossGegenKraftfahrzeugsteuer(?bool $merkmalVerstossGegenKraftfahrzeugsteuer = null): self
    {
        $this->MerkmalVerstossGegenKraftfahrzeugsteuer = $merkmalVerstossGegenKraftfahrzeugsteuer;

        return $this;
    }

    /**
     * Get TextSonstigeHinweise value
     */
    public function getTextSonstigeHinweise(): ?string
    {
        return $this->TextSonstigeHinweise;
    }

    /**
     * Set TextSonstigeHinweise value
     */
    public function setTextSonstigeHinweise(?string $textSonstigeHinweise = null): self
    {
        $this->TextSonstigeHinweise = $textSonstigeHinweise;

        return $this;
    }
}
