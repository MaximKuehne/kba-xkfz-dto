<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZusatzprotokollierungAnlass01 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZusatzprotokollierungAnlass01 extends AbstractStructBase
{
    /**
     * The Anfrageanlass
     */
    public ?int $Anfrageanlass = null;

    /**
     * The VerantwortlichePerson
     */
    public ?string $VerantwortlichePerson = null;

    /**
     * The Ergaenzungstext
     */
    public ?string $Ergaenzungstext = null;

    /**
     * Constructor method for ZusatzprotokollierungAnlass01
     *
     * @uses ZusatzprotokollierungAnlass01::setAnfrageanlass()
     * @uses ZusatzprotokollierungAnlass01::setVerantwortlichePerson()
     * @uses ZusatzprotokollierungAnlass01::setErgaenzungstext()
     */
    public function __construct(?int $anfrageanlass = null, ?string $verantwortlichePerson = null, ?string $ergaenzungstext = null)
    {
        $this
            ->setAnfrageanlass($anfrageanlass)
            ->setVerantwortlichePerson($verantwortlichePerson)
            ->setErgaenzungstext($ergaenzungstext);
    }

    /**
     * Get Anfrageanlass value
     */
    public function getAnfrageanlass(): ?int
    {
        return $this->Anfrageanlass;
    }

    /**
     * Set Anfrageanlass value
     */
    public function setAnfrageanlass(?int $anfrageanlass = null): self
    {
        $this->Anfrageanlass = $anfrageanlass;

        return $this;
    }

    /**
     * Get VerantwortlichePerson value
     */
    public function getVerantwortlichePerson(): ?string
    {
        return $this->VerantwortlichePerson;
    }

    /**
     * Set VerantwortlichePerson value
     */
    public function setVerantwortlichePerson(?string $verantwortlichePerson = null): self
    {
        $this->VerantwortlichePerson = $verantwortlichePerson;

        return $this;
    }

    /**
     * Get Ergaenzungstext value
     */
    public function getErgaenzungstext(): ?string
    {
        return $this->Ergaenzungstext;
    }

    /**
     * Set Ergaenzungstext value
     */
    public function setErgaenzungstext(?string $ergaenzungstext = null): self
    {
        $this->Ergaenzungstext = $ergaenzungstext;

        return $this;
    }
}
