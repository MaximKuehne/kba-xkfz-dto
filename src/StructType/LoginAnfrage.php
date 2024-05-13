<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginAnfrage StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LoginAnfrage extends AbstractStructBase
{
    /**
     * The Nutzerkennung
     */
    public ?string $Nutzerkennung = null;

    /**
     * The AlternativeNutzerkennung
     */
    public ?string $AlternativeNutzerkennung = null;

    /**
     * The PIN
     */
    public ?string $PIN = null;

    /**
     * The NeuePIN
     */
    public ?string $NeuePIN = null;

    /**
     * Constructor method for LoginAnfrage
     *
     * @uses LoginAnfrage::setNutzerkennung()
     * @uses LoginAnfrage::setAlternativeNutzerkennung()
     * @uses LoginAnfrage::setPIN()
     * @uses LoginAnfrage::setNeuePIN()
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
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }

    /**
     * Set Nutzerkennung value
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;

        return $this;
    }

    /**
     * Get AlternativeNutzerkennung value
     */
    public function getAlternativeNutzerkennung(): ?string
    {
        return $this->AlternativeNutzerkennung;
    }

    /**
     * Set AlternativeNutzerkennung value
     */
    public function setAlternativeNutzerkennung(?string $alternativeNutzerkennung = null): self
    {
        $this->AlternativeNutzerkennung = $alternativeNutzerkennung;

        return $this;
    }

    /**
     * Get PIN value
     */
    public function getPIN(): ?string
    {
        return $this->PIN;
    }

    /**
     * Set PIN value
     */
    public function setPIN(?string $pIN = null): self
    {
        $this->PIN = $pIN;

        return $this;
    }

    /**
     * Get NeuePIN value
     */
    public function getNeuePIN(): ?string
    {
        return $this->NeuePIN;
    }

    /**
     * Set NeuePIN value
     */
    public function setNeuePIN(?string $neuePIN = null): self
    {
        $this->NeuePIN = $neuePIN;

        return $this;
    }
}
