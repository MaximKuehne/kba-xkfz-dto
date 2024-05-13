<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchHalterTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchHalterTyp extends AbstractStructBase
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
     * The Fahrtenbuchauflage
     */
    public ?\THAG\XKfz\StructType\Fahrtenbuchauflage $Fahrtenbuchauflage = null;

    /**
     * Constructor method for BatchHalterTyp
     *
     * @uses BatchHalterTyp::setPerson()
     * @uses BatchHalterTyp::setAnschrift()
     * @uses BatchHalterTyp::setFahrtenbuchauflage()
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
     * Get Fahrtenbuchauflage value
     */
    public function getFahrtenbuchauflage(): ?\THAG\XKfz\StructType\Fahrtenbuchauflage
    {
        return $this->Fahrtenbuchauflage;
    }

    /**
     * Set Fahrtenbuchauflage value
     */
    public function setFahrtenbuchauflage(?\THAG\XKfz\StructType\Fahrtenbuchauflage $fahrtenbuchauflage = null): self
    {
        $this->Fahrtenbuchauflage = $fahrtenbuchauflage;

        return $this;
    }
}
