<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AbfrageGebuehrenrueckstand StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AbfrageGebuehrenrueckstand extends AbstractStructBase
{
    /**
     * The person
     */
    public ?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * Constructor method for Type.AbfrageGebuehrenrueckstand
     *
     * @uses Type_AbfrageGebuehrenrueckstand::setPerson()
     * @uses Type_AbfrageGebuehrenrueckstand::setKennzeichen()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null)
    {
        $this
            ->setPerson($person)
            ->setKennzeichen($kennzeichen);
    }

    /**
     * Get person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage
    {
        return $this->person;
    }

    /**
     * Set person value
     */
    public function setPerson(?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person = null): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }
}
