<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.FahrzeugdatenZulBeschTeil1 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_FahrzeugdatenZulBeschTeil1 extends AbstractStructBase
{
    /**
     * The textFarben
     */
    public ?string $textFarben = null;

    /**
     * The textSonstigeVermerke
     */
    public ?string $textSonstigeVermerke = null;

    /**
     * Constructor method for Type.FahrzeugdatenZulBeschTeil1
     *
     * @uses Type_FahrzeugdatenZulBeschTeil1::setTextFarben()
     * @uses Type_FahrzeugdatenZulBeschTeil1::setTextSonstigeVermerke()
     */
    public function __construct(?string $textFarben = null, ?string $textSonstigeVermerke = null)
    {
        $this
            ->setTextFarben($textFarben)
            ->setTextSonstigeVermerke($textSonstigeVermerke);
    }

    /**
     * Get textFarben value
     */
    public function getTextFarben(): ?string
    {
        return $this->textFarben;
    }

    /**
     * Set textFarben value
     */
    public function setTextFarben(?string $textFarben = null): self
    {
        $this->textFarben = $textFarben;

        return $this;
    }

    /**
     * Get textSonstigeVermerke value
     */
    public function getTextSonstigeVermerke(): ?string
    {
        return $this->textSonstigeVermerke;
    }

    /**
     * Set textSonstigeVermerke value
     */
    public function setTextSonstigeVermerke(?string $textSonstigeVermerke = null): self
    {
        $this->textSonstigeVermerke = $textSonstigeVermerke;

        return $this;
    }
}
