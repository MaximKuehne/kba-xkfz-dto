<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCodeDefinition StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCodeDefinition extends AbstractStructBase
{
    /**
     * The Datencode
     * @var string|null
     */
    public ?string $Datencode = null;
    /**
     * The CodeName
     * @var string|null
     */
    public ?string $CodeName = null;
    /**
     * The CodeBeschreibung
     * @var string|null
     */
    public ?string $CodeBeschreibung = null;
    /**
     * Constructor method for DatentypCodeDefinition
     * @uses DatentypCodeDefinition::setDatencode()
     * @uses DatentypCodeDefinition::setCodeName()
     * @uses DatentypCodeDefinition::setCodeBeschreibung()
     * @param string $datencode
     * @param string $codeName
     * @param string $codeBeschreibung
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
     * @return string|null
     */
    public function getDatencode(): ?string
    {
        return $this->Datencode;
    }
    /**
     * Set Datencode value
     * @param string $datencode
     * @return \THAG\XKfz\StructType\DatentypCodeDefinition
     */
    public function setDatencode(?string $datencode = null): self
    {
        $this->Datencode = $datencode;
        
        return $this;
    }
    /**
     * Get CodeName value
     * @return string|null
     */
    public function getCodeName(): ?string
    {
        return $this->CodeName;
    }
    /**
     * Set CodeName value
     * @param string $codeName
     * @return \THAG\XKfz\StructType\DatentypCodeDefinition
     */
    public function setCodeName(?string $codeName = null): self
    {
        $this->CodeName = $codeName;
        
        return $this;
    }
    /**
     * Get CodeBeschreibung value
     * @return string|null
     */
    public function getCodeBeschreibung(): ?string
    {
        return $this->CodeBeschreibung;
    }
    /**
     * Set CodeBeschreibung value
     * @param string $codeBeschreibung
     * @return \THAG\XKfz\StructType\DatentypCodeDefinition
     */
    public function setCodeBeschreibung(?string $codeBeschreibung = null): self
    {
        $this->CodeBeschreibung = $codeBeschreibung;
        
        return $this;
    }
}
