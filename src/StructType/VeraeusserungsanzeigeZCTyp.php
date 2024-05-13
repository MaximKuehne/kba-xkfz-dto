<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeraeusserungsanzeigeZCTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VeraeusserungsanzeigeZCTyp extends AbstractStructBase
{
    /**
     * The Person
     * @var \THAG\XKfz\StructType\Person|null
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;
    /**
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * The TextErwerberdaten
     * @var string|null
     */
    public ?string $TextErwerberdaten = null;
    /**
     * Constructor method for VeraeusserungsanzeigeZCTyp
     * @uses VeraeusserungsanzeigeZCTyp::setPerson()
     * @uses VeraeusserungsanzeigeZCTyp::setAnschrift()
     * @uses VeraeusserungsanzeigeZCTyp::setTextErwerberdaten()
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param string $textErwerberdaten
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
     * @return \THAG\XKfz\StructType\Person|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \THAG\XKfz\StructType\Person $person
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;
        
        return $this;
    }
    /**
     * Get Anschrift value
     * @return \THAG\XKfz\StructType\Anschrift|null
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }
    /**
     * Set Anschrift value
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get TextErwerberdaten value
     * @return string|null
     */
    public function getTextErwerberdaten(): ?string
    {
        return $this->TextErwerberdaten;
    }
    /**
     * Set TextErwerberdaten value
     * @param string $textErwerberdaten
     * @return \THAG\XKfz\StructType\VeraeusserungsanzeigeZCTyp
     */
    public function setTextErwerberdaten(?string $textErwerberdaten = null): self
    {
        $this->TextErwerberdaten = $textErwerberdaten;
        
        return $this;
    }
}
