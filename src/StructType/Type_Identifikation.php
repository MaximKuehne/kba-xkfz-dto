<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Identifikation StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Identifikation extends AbstractStructBase
{
    /**
     * The datumDerIdentifikation
     * @var string|null
     */
    public ?string $datumDerIdentifikation = null;
    /**
     * The VerantwortlichePerson
     * @var string|null
     */
    public ?string $VerantwortlichePerson = null;
    /**
     * Constructor method for Type.Identifikation
     * @uses Type_Identifikation::setDatumDerIdentifikation()
     * @uses Type_Identifikation::setVerantwortlichePerson()
     * @param string $datumDerIdentifikation
     * @param string $verantwortlichePerson
     */
    public function __construct(?string $datumDerIdentifikation = null, ?string $verantwortlichePerson = null)
    {
        $this
            ->setDatumDerIdentifikation($datumDerIdentifikation)
            ->setVerantwortlichePerson($verantwortlichePerson);
    }
    /**
     * Get datumDerIdentifikation value
     * @return string|null
     */
    public function getDatumDerIdentifikation(): ?string
    {
        return $this->datumDerIdentifikation;
    }
    /**
     * Set datumDerIdentifikation value
     * @param string $datumDerIdentifikation
     * @return \THAG\XKfz\StructType\Type_Identifikation
     */
    public function setDatumDerIdentifikation(?string $datumDerIdentifikation = null): self
    {
        $this->datumDerIdentifikation = $datumDerIdentifikation;
        
        return $this;
    }
    /**
     * Get VerantwortlichePerson value
     * @return string|null
     */
    public function getVerantwortlichePerson(): ?string
    {
        return $this->VerantwortlichePerson;
    }
    /**
     * Set VerantwortlichePerson value
     * @param string $verantwortlichePerson
     * @return \THAG\XKfz\StructType\Type_Identifikation
     */
    public function setVerantwortlichePerson(?string $verantwortlichePerson = null): self
    {
        $this->VerantwortlichePerson = $verantwortlichePerson;
        
        return $this;
    }
}
