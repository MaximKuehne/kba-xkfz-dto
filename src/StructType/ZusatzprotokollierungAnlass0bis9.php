<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZusatzprotokollierungAnlass0bis9 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZusatzprotokollierungAnlass0bis9 extends AbstractStructBase
{
    /**
     * The Anfrageanlass
     * @var int|null
     */
    public ?int $Anfrageanlass = null;
    /**
     * The VerantwortlichePerson
     * @var string|null
     */
    public ?string $VerantwortlichePerson = null;
    /**
     * The Ergaenzungstext
     * @var string|null
     */
    public ?string $Ergaenzungstext = null;
    /**
     * Constructor method for ZusatzprotokollierungAnlass0bis9
     * @uses ZusatzprotokollierungAnlass0bis9::setAnfrageanlass()
     * @uses ZusatzprotokollierungAnlass0bis9::setVerantwortlichePerson()
     * @uses ZusatzprotokollierungAnlass0bis9::setErgaenzungstext()
     * @param int $anfrageanlass
     * @param string $verantwortlichePerson
     * @param string $ergaenzungstext
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
     * @return int|null
     */
    public function getAnfrageanlass(): ?int
    {
        return $this->Anfrageanlass;
    }
    /**
     * Set Anfrageanlass value
     * @param int $anfrageanlass
     * @return \THAG\XKfz\StructType\ZusatzprotokollierungAnlass0bis9
     */
    public function setAnfrageanlass(?int $anfrageanlass = null): self
    {
        $this->Anfrageanlass = $anfrageanlass;
        
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
     * @return \THAG\XKfz\StructType\ZusatzprotokollierungAnlass0bis9
     */
    public function setVerantwortlichePerson(?string $verantwortlichePerson = null): self
    {
        $this->VerantwortlichePerson = $verantwortlichePerson;
        
        return $this;
    }
    /**
     * Get Ergaenzungstext value
     * @return string|null
     */
    public function getErgaenzungstext(): ?string
    {
        return $this->Ergaenzungstext;
    }
    /**
     * Set Ergaenzungstext value
     * @param string $ergaenzungstext
     * @return \THAG\XKfz\StructType\ZusatzprotokollierungAnlass0bis9
     */
    public function setErgaenzungstext(?string $ergaenzungstext = null): self
    {
        $this->Ergaenzungstext = $ergaenzungstext;
        
        return $this;
    }
}
