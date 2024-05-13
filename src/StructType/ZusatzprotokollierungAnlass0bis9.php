<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZusatzprotokollierungAnlass0bis9 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZusatzprotokollierungAnlass0bis9 extends AbstractStructBase
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
     * Constructor method for ZusatzprotokollierungAnlass0bis9
     *
     * @uses ZusatzprotokollierungAnlass0bis9::setAnfrageanlass()
     * @uses ZusatzprotokollierungAnlass0bis9::setVerantwortlichePerson()
     * @uses ZusatzprotokollierungAnlass0bis9::setErgaenzungstext()
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
