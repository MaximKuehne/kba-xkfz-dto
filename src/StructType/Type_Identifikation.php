<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Identifikation StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Identifikation extends AbstractStructBase
{
    /**
     * The datumDerIdentifikation
     */
    public ?string $datumDerIdentifikation = null;

    /**
     * The VerantwortlichePerson
     */
    public ?string $VerantwortlichePerson = null;

    /**
     * Constructor method for Type.Identifikation
     *
     * @uses Type_Identifikation::setDatumDerIdentifikation()
     * @uses Type_Identifikation::setVerantwortlichePerson()
     */
    public function __construct(?string $datumDerIdentifikation = null, ?string $verantwortlichePerson = null)
    {
        $this
            ->setDatumDerIdentifikation($datumDerIdentifikation)
            ->setVerantwortlichePerson($verantwortlichePerson);
    }

    /**
     * Get datumDerIdentifikation value
     */
    public function getDatumDerIdentifikation(): ?string
    {
        return $this->datumDerIdentifikation;
    }

    /**
     * Set datumDerIdentifikation value
     */
    public function setDatumDerIdentifikation(?string $datumDerIdentifikation = null): self
    {
        $this->datumDerIdentifikation = $datumDerIdentifikation;

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
}
