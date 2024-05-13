<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeughinweiseZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeughinweiseZWTyp extends AbstractStructBase
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
     * The MerkmalVerstossGegenKraftfahrzeugsteuer
     * @var bool|null
     */
    public ?bool $MerkmalVerstossGegenKraftfahrzeugsteuer = null;
    /**
     * The TextSonstigeHinweise
     * @var string|null
     */
    public ?string $TextSonstigeHinweise = null;
    /**
     * Constructor method for FahrzeughinweiseZWTyp
     * @uses FahrzeughinweiseZWTyp::setVerwendungFahrzeug()
     * @uses FahrzeughinweiseZWTyp::setTextFahrzeugmaengel()
     * @uses FahrzeughinweiseZWTyp::setTextFahrzeugschaeden()
     * @uses FahrzeughinweiseZWTyp::setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot()
     * @uses FahrzeughinweiseZWTyp::setMerkmalVerstossGegenKraftfahrzeugsteuer()
     * @uses FahrzeughinweiseZWTyp::setTextSonstigeHinweise()
     * @param string $verwendungFahrzeug
     * @param string $textFahrzeugmaengel
     * @param string $textFahrzeugschaeden
     * @param string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot
     * @param bool $merkmalVerstossGegenKraftfahrzeugsteuer
     * @param string $textSonstigeHinweise
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
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZWTyp
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
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZWTyp
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
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZWTyp
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
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZWTyp
     */
    public function setTextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot(?string $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = null): self
    {
        $this->TextBerechtigungBetriebFahrzeugTrotzVerkehrsverbot = $textBerechtigungBetriebFahrzeugTrotzVerkehrsverbot;
        
        return $this;
    }
    /**
     * Get MerkmalVerstossGegenKraftfahrzeugsteuer value
     * @return bool|null
     */
    public function getMerkmalVerstossGegenKraftfahrzeugsteuer(): ?bool
    {
        return $this->MerkmalVerstossGegenKraftfahrzeugsteuer;
    }
    /**
     * Set MerkmalVerstossGegenKraftfahrzeugsteuer value
     * @param bool $merkmalVerstossGegenKraftfahrzeugsteuer
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZWTyp
     */
    public function setMerkmalVerstossGegenKraftfahrzeugsteuer(?bool $merkmalVerstossGegenKraftfahrzeugsteuer = null): self
    {
        $this->MerkmalVerstossGegenKraftfahrzeugsteuer = $merkmalVerstossGegenKraftfahrzeugsteuer;
        
        return $this;
    }
    /**
     * Get TextSonstigeHinweise value
     * @return string|null
     */
    public function getTextSonstigeHinweise(): ?string
    {
        return $this->TextSonstigeHinweise;
    }
    /**
     * Set TextSonstigeHinweise value
     * @param string $textSonstigeHinweise
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZWTyp
     */
    public function setTextSonstigeHinweise(?string $textSonstigeHinweise = null): self
    {
        $this->TextSonstigeHinweise = $textSonstigeHinweise;
        
        return $this;
    }
}
