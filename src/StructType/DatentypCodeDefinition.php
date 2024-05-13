<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCodeDefinition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCodeDefinition extends AbstractStructBase
{
    /**
     * The Datencode
     */
    public ?string $Datencode = null;

    /**
     * The CodeName
     */
    public ?string $CodeName = null;

    /**
     * The CodeBeschreibung
     */
    public ?string $CodeBeschreibung = null;

    /**
     * Constructor method for DatentypCodeDefinition
     *
     * @uses DatentypCodeDefinition::setDatencode()
     * @uses DatentypCodeDefinition::setCodeName()
     * @uses DatentypCodeDefinition::setCodeBeschreibung()
     */
    public function __construct(?string $datencode = null, ?string $codeName = null, ?string $codeBeschreibung = null)
    {
        $this
            ->setDatencode($datencode)
            ->setCodeName($codeName)
            ->setCodeBeschreibung($codeBeschreibung);
    }

    /**
     * Get Datencode value
     */
    public function getDatencode(): ?string
    {
        return $this->Datencode;
    }

    /**
     * Set Datencode value
     */
    public function setDatencode(?string $datencode = null): self
    {
        $this->Datencode = $datencode;

        return $this;
    }

    /**
     * Get CodeName value
     */
    public function getCodeName(): ?string
    {
        return $this->CodeName;
    }

    /**
     * Set CodeName value
     */
    public function setCodeName(?string $codeName = null): self
    {
        $this->CodeName = $codeName;

        return $this;
    }

    /**
     * Get CodeBeschreibung value
     */
    public function getCodeBeschreibung(): ?string
    {
        return $this->CodeBeschreibung;
    }

    /**
     * Set CodeBeschreibung value
     */
    public function setCodeBeschreibung(?string $codeBeschreibung = null): self
    {
        $this->CodeBeschreibung = $codeBeschreibung;

        return $this;
    }
}
