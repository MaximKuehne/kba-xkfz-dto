<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonAnschriftUndKontakt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonAnschriftUndKontakt extends AbstractStructBase
{
    /**
     * The person
     */
    public ?\THAG\XKfz\StructType\Type_PersonUndAnschrift $person = null;

    /**
     * The kontakte
     */
    public ?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null;

    /**
     * Constructor method for Type.PersonAnschriftUndKontakt
     *
     * @uses Type_PersonAnschriftUndKontakt::setPerson()
     * @uses Type_PersonAnschriftUndKontakt::setKontakte()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_PersonUndAnschrift $person = null, ?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null)
    {
        $this
            ->setPerson($person)
            ->setKontakte($kontakte);
    }

    /**
     * Get person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Type_PersonUndAnschrift
    {
        return $this->person;
    }

    /**
     * Set person value
     */
    public function setPerson(?\THAG\XKfz\StructType\Type_PersonUndAnschrift $person = null): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get kontakte value
     */
    public function getKontakte(): ?\THAG\XKfz\StructType\Type_Kontakte
    {
        return $this->kontakte;
    }

    /**
     * Set kontakte value
     */
    public function setKontakte(?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null): self
    {
        $this->kontakte = $kontakte;

        return $this;
    }
}
