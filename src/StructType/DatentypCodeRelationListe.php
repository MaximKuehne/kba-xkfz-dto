<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCodeRelationListe StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCodeRelationListe extends AbstractStructBase
{
    /**
     * The CodeDatentypName
     * @var string|null
     */
    public ?string $CodeDatentypName = null;
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
     * The DatentypName
     * @var string|null
     */
    public ?string $DatentypName = null;
    /**
     * The DateneintragName
     * @var string|null
     */
    public ?string $DateneintragName = null;
    /**
     * The DateneintragBeschreibung
     * @var string|null
     */
    public ?string $DateneintragBeschreibung = null;
    /**
     * The DatenDefault
     * @var string|null
     */
    public ?string $DatenDefault = null;
    /**
     * Constructor method for DatentypCodeRelationListe
     * @uses DatentypCodeRelationListe::setCodeDatentypName()
     * @uses DatentypCodeRelationListe::setCodeName()
     * @uses DatentypCodeRelationListe::setCodeBeschreibung()
     * @uses DatentypCodeRelationListe::setDatentypName()
     * @uses DatentypCodeRelationListe::setDateneintragName()
     * @uses DatentypCodeRelationListe::setDateneintragBeschreibung()
     * @uses DatentypCodeRelationListe::setDatenDefault()
     * @param string $codeDatentypName
     * @param string $codeName
     * @param string $codeBeschreibung
     * @param string $datentypName
     * @param string $dateneintragName
     * @param string $dateneintragBeschreibung
     * @param string $datenDefault
     */
    public function __construct(?string $codeDatentypName = null, ?string $codeName = null, ?string $codeBeschreibung = null, ?string $datentypName = null, ?string $dateneintragName = null, ?string $dateneintragBeschreibung = null, ?string $datenDefault = null)
    {
        $this
            ->setCodeDatentypName($codeDatentypName)
            ->setCodeName($codeName)
            ->setCodeBeschreibung($codeBeschreibung)
            ->setDatentypName($datentypName)
            ->setDateneintragName($dateneintragName)
            ->setDateneintragBeschreibung($dateneintragBeschreibung)
            ->setDatenDefault($datenDefault);
    }
    /**
     * Get CodeDatentypName value
     * @return string|null
     */
    public function getCodeDatentypName(): ?string
    {
        return $this->CodeDatentypName;
    }
    /**
     * Set CodeDatentypName value
     * @param string $codeDatentypName
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe
     */
    public function setCodeDatentypName(?string $codeDatentypName = null): self
    {
        $this->CodeDatentypName = $codeDatentypName;
        
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
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe
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
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe
     */
    public function setCodeBeschreibung(?string $codeBeschreibung = null): self
    {
        $this->CodeBeschreibung = $codeBeschreibung;
        
        return $this;
    }
    /**
     * Get DatentypName value
     * @return string|null
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }
    /**
     * Set DatentypName value
     * @param string $datentypName
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;
        
        return $this;
    }
    /**
     * Get DateneintragName value
     * @return string|null
     */
    public function getDateneintragName(): ?string
    {
        return $this->DateneintragName;
    }
    /**
     * Set DateneintragName value
     * @param string $dateneintragName
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe
     */
    public function setDateneintragName(?string $dateneintragName = null): self
    {
        $this->DateneintragName = $dateneintragName;
        
        return $this;
    }
    /**
     * Get DateneintragBeschreibung value
     * @return string|null
     */
    public function getDateneintragBeschreibung(): ?string
    {
        return $this->DateneintragBeschreibung;
    }
    /**
     * Set DateneintragBeschreibung value
     * @param string $dateneintragBeschreibung
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe
     */
    public function setDateneintragBeschreibung(?string $dateneintragBeschreibung = null): self
    {
        $this->DateneintragBeschreibung = $dateneintragBeschreibung;
        
        return $this;
    }
    /**
     * Get DatenDefault value
     * @return string|null
     */
    public function getDatenDefault(): ?string
    {
        return $this->DatenDefault;
    }
    /**
     * Set DatenDefault value
     * @param string $datenDefault
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe
     */
    public function setDatenDefault(?string $datenDefault = null): self
    {
        $this->DatenDefault = $datenDefault;
        
        return $this;
    }
}
