<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonUndKontaktperson StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonUndKontaktperson extends AbstractStructBase
{
    /**
     * The personAnschriftUndKontakt
     */
    public ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt = null;

    /**
     * The kontaktperson
     */
    public ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson = null;

    /**
     * Constructor method for Type.PersonUndKontaktperson
     *
     * @uses Type_PersonUndKontaktperson::setPersonAnschriftUndKontakt()
     * @uses Type_PersonUndKontaktperson::setKontaktperson()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt = null, ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson = null)
    {
        $this
            ->setPersonAnschriftUndKontakt($personAnschriftUndKontakt)
            ->setKontaktperson($kontaktperson);
    }

    /**
     * Get personAnschriftUndKontakt value
     */
    public function getPersonAnschriftUndKontakt(): ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt
    {
        return $this->personAnschriftUndKontakt;
    }

    /**
     * Set personAnschriftUndKontakt value
     */
    public function setPersonAnschriftUndKontakt(?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $personAnschriftUndKontakt = null): self
    {
        $this->personAnschriftUndKontakt = $personAnschriftUndKontakt;

        return $this;
    }

    /**
     * Get kontaktperson value
     */
    public function getKontaktperson(): ?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt
    {
        return $this->kontaktperson;
    }

    /**
     * Set kontaktperson value
     */
    public function setKontaktperson(?\THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt $kontaktperson = null): self
    {
        $this->kontaktperson = $kontaktperson;

        return $this;
    }
}
