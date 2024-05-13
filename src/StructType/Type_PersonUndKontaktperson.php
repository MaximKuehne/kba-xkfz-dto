<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonUndKontaktperson StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonUndKontaktperson extends AbstractStructBase
{
    /**
     * The personAnschriftUndKontakt
     * @var \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt|null
     */
    public ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt = null;
    /**
     * The kontaktperson
     * @var \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt|null
     */
    public ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson = null;
    /**
     * Constructor method for Type.PersonUndKontaktperson
     * @uses Type_PersonUndKontaktperson::setPersonAnschriftUndKontakt()
     * @uses Type_PersonUndKontaktperson::setKontaktperson()
     * @param \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt
     * @param \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson
     */
    public function __construct(?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt = null, ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson = null)
    {
        $this
            ->setPersonAnschriftUndKontakt($personAnschriftUndKontakt)
            ->setKontaktperson($kontaktperson);
    }
    /**
     * Get personAnschriftUndKontakt value
     * @return \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt|null
     */
    public function getPersonAnschriftUndKontakt(): ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt
    {
        return $this->personAnschriftUndKontakt;
    }
    /**
     * Set personAnschriftUndKontakt value
     * @param \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt
     * @return \THAG\XKfz\StructType\Type_PersonUndKontaktperson
     */
    public function setPersonAnschriftUndKontakt(?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt = null): self
    {
        $this->personAnschriftUndKontakt = $personAnschriftUndKontakt;
        
        return $this;
    }
    /**
     * Get kontaktperson value
     * @return \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt|null
     */
    public function getKontaktperson(): ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt
    {
        return $this->kontaktperson;
    }
    /**
     * Set kontaktperson value
     * @param \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson
     * @return \THAG\XKfz\StructType\Type_PersonUndKontaktperson
     */
    public function setKontaktperson(?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson = null): self
    {
        $this->kontaktperson = $kontaktperson;
        
        return $this;
    }
}
