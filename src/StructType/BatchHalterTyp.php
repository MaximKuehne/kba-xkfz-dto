<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchHalterTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchHalterTyp extends AbstractStructBase
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
     * The Fahrtenbuchauflage
     * @var \THAG\XKfz\StructType\Fahrtenbuchauflage|null
     */
    public ?\THAG\XKfz\StructType\Fahrtenbuchauflage $Fahrtenbuchauflage = null;
    /**
     * Constructor method for BatchHalterTyp
     * @uses BatchHalterTyp::setPerson()
     * @uses BatchHalterTyp::setAnschrift()
     * @uses BatchHalterTyp::setFahrtenbuchauflage()
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param \THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage
     */
    public function __construct(?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null)
    {
        $this
            ->setPerson($person)
            ->setAnschrift($anschrift)
            ->setFahrtenbuchauflage($fahrtenbuchauflage);
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
     * @return \THAG\XKfz\StructType\BatchHalterTyp
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
     * @return \THAG\XKfz\StructType\BatchHalterTyp
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get Fahrtenbuchauflage value
     * @return \THAG\XKfz\StructType\Fahrtenbuchauflage|null
     */
    public function getFahrtenbuchauflage(): ?\THAG\XKfz\StructType\Fahrtenbuchauflage
    {
        return $this->Fahrtenbuchauflage;
    }
    /**
     * Set Fahrtenbuchauflage value
     * @param \THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage
     * @return \THAG\XKfz\StructType\BatchHalterTyp
     */
    public function setFahrtenbuchauflage(?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null): self
    {
        $this->Fahrtenbuchauflage = $fahrtenbuchauflage;
        
        return $this;
    }
}
