<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeraeusserungsanzeigeZCTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeraeusserungsanzeigeZCTyp extends AbstractStructBase
{
    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The TextErwerberdaten
     */
    public ?string $TextErwerberdaten = null;

    /**
     * Constructor method for VeraeusserungsanzeigeZCTyp
     *
     * @uses VeraeusserungsanzeigeZCTyp::setPerson()
     * @uses VeraeusserungsanzeigeZCTyp::setAnschrift()
     * @uses VeraeusserungsanzeigeZCTyp::setTextErwerberdaten()
     */
    public function __construct(?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?string $textErwerberdaten = null)
    {
        $this
            ->setPerson($person)
            ->setAnschrift($anschrift)
            ->setTextErwerberdaten($textErwerberdaten);
    }

    /**
     * Get Person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }

    /**
     * Set Person value
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * Get Anschrift value
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }

    /**
     * Set Anschrift value
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;

        return $this;
    }

    /**
     * Get TextErwerberdaten value
     */
    public function getTextErwerberdaten(): ?string
    {
        return $this->TextErwerberdaten;
    }

    /**
     * Set TextErwerberdaten value
     */
    public function setTextErwerberdaten(?string $textErwerberdaten = null): self
    {
        $this->TextErwerberdaten = $textErwerberdaten;

        return $this;
    }
}
