<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteIdentifikation StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteIdentifikation extends AbstractStructBase
{
    /**
     * The rolle
     */
    public ?\THAG\XKfz\StructType\Code_Rolle $rolle = null;

    /**
     * The person
     */
    public ?\THAG\XKfz\StructType\HalterZWTyp $person = null;

    /**
     * The kundennummer
     */
    public ?string $kundennummer = null;

    /**
     * The kontakte
     */
    public ?\THAG\XKfz\StructType\Type_Kontakte $kontakte = null;

    /**
     * The identifikation
     */
    public ?\THAG\XKfz\StructType\Type_Identifikation $identifikation = null;

    /**
     * The dokument
     */
    public ?\THAG\XKfz\StructType\Type_IdentifikationsDokument $dokument = null;

    /**
     * Constructor method for Type.VorgangskomponenteIdentifikation
     *
     * @uses Type_VorgangskomponenteIdentifikation::setRolle()
     * @uses Type_VorgangskomponenteIdentifikation::setPerson()
     * @uses Type_VorgangskomponenteIdentifikation::setKundennummer()
     * @uses Type_VorgangskomponenteIdentifikation::setKontakte()
     * @uses Type_VorgangskomponenteIdentifikation::setIdentifikation()
     * @uses Type_VorgangskomponenteIdentifikation::setDokument()
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
     */
    public function getRolle(): ?\THAG\XKfz\StructType\Code_Rolle
    {
        return $this->rolle;
    }

    /**
     * Set rolle value
     */
    public function setRolle(?\THAG\XKfz\StructType\Code_Rolle $rolle = null): self
    {
        $this->rolle = $rolle;

        return $this;
    }

    /**
     * Get person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\HalterZWTyp
    {
        return $this->person;
    }

    /**
     * Set person value
     */
    public function setPerson(?\THAG\XKfz\StructType\HalterZWTyp $person = null): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get kundennummer value
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }

    /**
     * Set kundennummer value
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;

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

    /**
     * Get identifikation value
     */
    public function getIdentifikation(): ?\THAG\XKfz\StructType\Type_Identifikation
    {
        return $this->identifikation;
    }

    /**
     * Set identifikation value
     */
    public function setIdentifikation(?\THAG\XKfz\StructType\Type_Identifikation $identifikation = null): self
    {
        $this->identifikation = $identifikation;

        return $this;
    }

    /**
     * Get dokument value
     */
    public function getDokument(): ?\THAG\XKfz\StructType\Type_IdentifikationsDokument
    {
        return $this->dokument;
    }

    /**
     * Set dokument value
     */
    public function setDokument(?\THAG\XKfz\StructType\Type_IdentifikationsDokument $dokument = null): self
    {
        $this->dokument = $dokument;

        return $this;
    }
}
