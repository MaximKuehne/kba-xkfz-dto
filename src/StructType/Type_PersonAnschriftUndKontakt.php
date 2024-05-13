<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonAnschriftUndKontakt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonAnschriftUndKontakt extends AbstractStructBase
{
    /**
     * The person
     * @var \THAG\XKfz\StructType\Type_PersonUndAnschrift|null
     */
    public ?\THAG\XKfz\StructType\Type_PersonUndAnschrift $person = null;
    /**
     * The kontakte
     * @var \THAG\XKfz\StructType\Type_Kontakte|null
     */
    public ?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null;
    /**
     * Constructor method for Type.PersonAnschriftUndKontakt
     * @uses Type_PersonAnschriftUndKontakt::setPerson()
     * @uses Type_PersonAnschriftUndKontakt::setKontakte()
     * @param \THAG\XKfz\StructType\Type_PersonUndAnschrift $person
     * @param \THAG\XKfz\StructType\Type_Kontakte $kontakte
     */
    public function __construct(?\THAG\XKfz\StructType\Type_PersonUndAnschrift $person = null, ?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null)
    {
        $this
            ->setPerson($person)
            ->setKontakte($kontakte);
    }
    /**
     * Get person value
     * @return \THAG\XKfz\StructType\Type_PersonUndAnschrift|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Type_PersonUndAnschrift
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \THAG\XKfz\StructType\Type_PersonUndAnschrift $person
     * @return \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt
     */
    public function setPerson(?\THAG\XKfz\StructType\Type_PersonUndAnschrift $person = null): self
    {
        $this->person = $person;
        
        return $this;
    }
    /**
     * Get kontakte value
     * @return \THAG\XKfz\StructType\Type_Kontakte|null
     */
    public function getKontakte(): ?\THAG\XKfz\StructType\Type_Kontakte
    {
        return $this->kontakte;
    }
    /**
     * Set kontakte value
     * @param \THAG\XKfz\StructType\Type_Kontakte $kontakte
     * @return \THAG\XKfz\StructType\Type_PersonAnschriftUndKontakt
     */
    public function setKontakte(?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null): self
    {
        $this->kontakte = $kontakte;
        
        return $this;
    }
}
