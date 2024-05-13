<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginAnfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LoginAnfrage extends AbstractStructBase
{
    /**
     * The Nutzerkennung
     * @var string|null
     */
    public ?string $Nutzerkennung = null;
    /**
     * The AlternativeNutzerkennung
     * @var string|null
     */
    public ?string $AlternativeNutzerkennung = null;
    /**
     * The PIN
     * @var string|null
     */
    public ?string $PIN = null;
    /**
     * The NeuePIN
     * @var string|null
     */
    public ?string $NeuePIN = null;
    /**
     * Constructor method for LoginAnfrage
     * @uses LoginAnfrage::setNutzerkennung()
     * @uses LoginAnfrage::setAlternativeNutzerkennung()
     * @uses LoginAnfrage::setPIN()
     * @uses LoginAnfrage::setNeuePIN()
     * @param string $nutzerkennung
     * @param string $alternativeNutzerkennung
     * @param string $pIN
     * @param string $neuePIN
     */
    public function __construct(?string $nutzerkennung = null, ?string $alternativeNutzerkennung = null, ?string $pIN = null, ?string $neuePIN = null)
    {
        $this
            ->setNutzerkennung($nutzerkennung)
            ->setAlternativeNutzerkennung($alternativeNutzerkennung)
            ->setPIN($pIN)
            ->setNeuePIN($neuePIN);
    }
    /**
     * Get Nutzerkennung value
     * @return string|null
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }
    /**
     * Set Nutzerkennung value
     * @param string $nutzerkennung
     * @return \THAG\XKfz\StructType\LoginAnfrage
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;
        
        return $this;
    }
    /**
     * Get AlternativeNutzerkennung value
     * @return string|null
     */
    public function getAlternativeNutzerkennung(): ?string
    {
        return $this->AlternativeNutzerkennung;
    }
    /**
     * Set AlternativeNutzerkennung value
     * @param string $alternativeNutzerkennung
     * @return \THAG\XKfz\StructType\LoginAnfrage
     */
    public function setAlternativeNutzerkennung(?string $alternativeNutzerkennung = null): self
    {
        $this->AlternativeNutzerkennung = $alternativeNutzerkennung;
        
        return $this;
    }
    /**
     * Get PIN value
     * @return string|null
     */
    public function getPIN(): ?string
    {
        return $this->PIN;
    }
    /**
     * Set PIN value
     * @param string $pIN
     * @return \THAG\XKfz\StructType\LoginAnfrage
     */
    public function setPIN(?string $pIN = null): self
    {
        $this->PIN = $pIN;
        
        return $this;
    }
    /**
     * Get NeuePIN value
     * @return string|null
     */
    public function getNeuePIN(): ?string
    {
        return $this->NeuePIN;
    }
    /**
     * Set NeuePIN value
     * @param string $neuePIN
     * @return \THAG\XKfz\StructType\LoginAnfrage
     */
    public function setNeuePIN(?string $neuePIN = null): self
    {
        $this->NeuePIN = $neuePIN;
        
        return $this;
    }
}
