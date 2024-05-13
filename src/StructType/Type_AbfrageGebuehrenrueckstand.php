<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AbfrageGebuehrenrueckstand StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AbfrageGebuehrenrueckstand extends AbstractStructBase
{
    /**
     * The person
     * @var \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage|null
     */
    public ?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * Constructor method for Type.AbfrageGebuehrenrueckstand
     * @uses Type_AbfrageGebuehrenrueckstand::setPerson()
     * @uses Type_AbfrageGebuehrenrueckstand::setKennzeichen()
     * @param \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     */
    public function __construct(?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null)
    {
        $this
            ->setPerson($person)
            ->setKennzeichen($kennzeichen);
    }
    /**
     * Get person value
     * @return \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person
     * @return \THAG\XKfz\StructType\Type_AbfrageGebuehrenrueckstand
     */
    public function setPerson(?\THAG\XKfz\StructType\Type_PersonGebuehrenrueckstandAnfrage $person = null): self
    {
        $this->person = $person;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_AbfrageGebuehrenrueckstand
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
}
