<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteIdentifikation StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteIdentifikation extends AbstractStructBase
{
    /**
     * The rolle
     * @var \THAG\XKfz\StructType\Code_Rolle|null
     */
    public ?\THAG\XKfz\StructType\Code_Rolle $rolle = null;
    /**
     * The person
     * @var \THAG\XKfz\StructType\HalterZWTyp|null
     */
    public ?\THAG\XKfz\StructType\HalterZWTyp $person = null;
    /**
     * The kundennummer
     * @var string|null
     */
    public ?string $kundennummer = null;
    /**
     * The kontakte
     * @var \THAG\XKfz\StructType\Type_Kontakte|null
     */
    public ?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null;
    /**
     * The identifikation
     * @var \THAG\XKfz\StructType\Type_Identifikation|null
     */
    public ?\THAG\XKfz\StructType\Type_Identifikation $identifikation = null;
    /**
     * The dokument
     * @var \THAG\XKfz\StructType\Type_IdentifikationsDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_IdentifikationsDokument $dokument = null;
    /**
     * Constructor method for Type.VorgangskomponenteIdentifikation
     * @uses Type_VorgangskomponenteIdentifikation::setRolle()
     * @uses Type_VorgangskomponenteIdentifikation::setPerson()
     * @uses Type_VorgangskomponenteIdentifikation::setKundennummer()
     * @uses Type_VorgangskomponenteIdentifikation::setKontakte()
     * @uses Type_VorgangskomponenteIdentifikation::setIdentifikation()
     * @uses Type_VorgangskomponenteIdentifikation::setDokument()
     * @param \THAG\XKfz\StructType\Code_Rolle $rolle
     * @param \THAG\XKfz\StructType\HalterZWTyp $person
     * @param string $kundennummer
     * @param \THAG\XKfz\StructType\Type_Kontakte $kontakte
     * @param \THAG\XKfz\StructType\Type_Identifikation $identifikation
     * @param \THAG\XKfz\StructType\Type_IdentifikationsDokument $dokument
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Rolle $rolle = null, ?\THAG\XKfz\StructType\HalterZWTyp $person = null, ?string $kundennummer = null, ?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null, ?\THAG\XKfz\StructType\Type_Identifikation $identifikation = null, ?\THAG\XKfz\StructType\Type_IdentifikationsDokument $dokument = null)
    {
        $this
            ->setRolle($rolle)
            ->setPerson($person)
            ->setKundennummer($kundennummer)
            ->setKontakte($kontakte)
            ->setIdentifikation($identifikation)
            ->setDokument($dokument);
    }
    /**
     * Get rolle value
     * @return \THAG\XKfz\StructType\Code_Rolle|null
     */
    public function getRolle(): ?\THAG\XKfz\StructType\Code_Rolle
    {
        return $this->rolle;
    }
    /**
     * Set rolle value
     * @param \THAG\XKfz\StructType\Code_Rolle $rolle
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
     */
    public function setRolle(?\THAG\XKfz\StructType\Code_Rolle $rolle = null): self
    {
        $this->rolle = $rolle;
        
        return $this;
    }
    /**
     * Get person value
     * @return \THAG\XKfz\StructType\HalterZWTyp|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\HalterZWTyp
    {
        return $this->person;
    }
    /**
     * Set person value
     * @param \THAG\XKfz\StructType\HalterZWTyp $person
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
     */
    public function setPerson(?\THAG\XKfz\StructType\HalterZWTyp $person = null): self
    {
        $this->person = $person;
        
        return $this;
    }
    /**
     * Get kundennummer value
     * @return string|null
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }
    /**
     * Set kundennummer value
     * @param string $kundennummer
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;
        
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
     */
    public function setKontakte(?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null): self
    {
        $this->kontakte = $kontakte;
        
        return $this;
    }
    /**
     * Get identifikation value
     * @return \THAG\XKfz\StructType\Type_Identifikation|null
     */
    public function getIdentifikation(): ?\THAG\XKfz\StructType\Type_Identifikation
    {
        return $this->identifikation;
    }
    /**
     * Set identifikation value
     * @param \THAG\XKfz\StructType\Type_Identifikation $identifikation
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
     */
    public function setIdentifikation(?\THAG\XKfz\StructType\Type_Identifikation $identifikation = null): self
    {
        $this->identifikation = $identifikation;
        
        return $this;
    }
    /**
     * Get dokument value
     * @return \THAG\XKfz\StructType\Type_IdentifikationsDokument|null
     */
    public function getDokument(): ?\THAG\XKfz\StructType\Type_IdentifikationsDokument
    {
        return $this->dokument;
    }
    /**
     * Set dokument value
     * @param \THAG\XKfz\StructType\Type_IdentifikationsDokument $dokument
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
     */
    public function setDokument(?\THAG\XKfz\StructType\Type_IdentifikationsDokument $dokument = null): self
    {
        $this->dokument = $dokument;
        
        return $this;
    }
}
