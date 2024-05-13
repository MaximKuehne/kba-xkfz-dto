<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenAnfrage StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenAnfrage extends AbstractStructBase
{
    /**
     * The AnzahlNachrichtenId
     * @var string|null
     */
    public ?string $AnzahlNachrichtenId = null;
    /**
     * The AbDatensatzId
     * @var string|null
     */
    public ?string $AbDatensatzId = null;
    /**
     * The AnzahlDatensaetze
     * @var string|null
     */
    public ?string $AnzahlDatensaetze = null;
    /**
     * The SortierungSpalte
     * @var string|null
     */
    public ?string $SortierungSpalte = null;
    /**
     * The SortierungRichtung
     * @var string|null
     */
    public ?string $SortierungRichtung = null;
    /**
     * Constructor method for BriefkastenAnfrage
     * @uses BriefkastenAnfrage::setAnzahlNachrichtenId()
     * @uses BriefkastenAnfrage::setAbDatensatzId()
     * @uses BriefkastenAnfrage::setAnzahlDatensaetze()
     * @uses BriefkastenAnfrage::setSortierungSpalte()
     * @uses BriefkastenAnfrage::setSortierungRichtung()
     * @param string $anzahlNachrichtenId
     * @param string $abDatensatzId
     * @param string $anzahlDatensaetze
     * @param string $sortierungSpalte
     * @param string $sortierungRichtung
     */
    public function __construct(?string $anzahlNachrichtenId = null, ?string $abDatensatzId = null, ?string $anzahlDatensaetze = null, ?string $sortierungSpalte = null, ?string $sortierungRichtung = null)
    {
        $this
            ->setAnzahlNachrichtenId($anzahlNachrichtenId)
            ->setAbDatensatzId($abDatensatzId)
            ->setAnzahlDatensaetze($anzahlDatensaetze)
            ->setSortierungSpalte($sortierungSpalte)
            ->setSortierungRichtung($sortierungRichtung);
    }
    /**
     * Get AnzahlNachrichtenId value
     * @return string|null
     */
    public function getAnzahlNachrichtenId(): ?string
    {
        return $this->AnzahlNachrichtenId;
    }
    /**
     * Set AnzahlNachrichtenId value
     * @param string $anzahlNachrichtenId
     * @return \THAG\XKfz\StructType\BriefkastenAnfrage
     */
    public function setAnzahlNachrichtenId(?string $anzahlNachrichtenId = null): self
    {
        $this->AnzahlNachrichtenId = $anzahlNachrichtenId;
        
        return $this;
    }
    /**
     * Get AbDatensatzId value
     * @return string|null
     */
    public function getAbDatensatzId(): ?string
    {
        return $this->AbDatensatzId;
    }
    /**
     * Set AbDatensatzId value
     * @param string $abDatensatzId
     * @return \THAG\XKfz\StructType\BriefkastenAnfrage
     */
    public function setAbDatensatzId(?string $abDatensatzId = null): self
    {
        $this->AbDatensatzId = $abDatensatzId;
        
        return $this;
    }
    /**
     * Get AnzahlDatensaetze value
     * @return string|null
     */
    public function getAnzahlDatensaetze(): ?string
    {
        return $this->AnzahlDatensaetze;
    }
    /**
     * Set AnzahlDatensaetze value
     * @param string $anzahlDatensaetze
     * @return \THAG\XKfz\StructType\BriefkastenAnfrage
     */
    public function setAnzahlDatensaetze(?string $anzahlDatensaetze = null): self
    {
        $this->AnzahlDatensaetze = $anzahlDatensaetze;
        
        return $this;
    }
    /**
     * Get SortierungSpalte value
     * @return string|null
     */
    public function getSortierungSpalte(): ?string
    {
        return $this->SortierungSpalte;
    }
    /**
     * Set SortierungSpalte value
     * @param string $sortierungSpalte
     * @return \THAG\XKfz\StructType\BriefkastenAnfrage
     */
    public function setSortierungSpalte(?string $sortierungSpalte = null): self
    {
        $this->SortierungSpalte = $sortierungSpalte;
        
        return $this;
    }
    /**
     * Get SortierungRichtung value
     * @return string|null
     */
    public function getSortierungRichtung(): ?string
    {
        return $this->SortierungRichtung;
    }
    /**
     * Set SortierungRichtung value
     * @param string $sortierungRichtung
     * @return \THAG\XKfz\StructType\BriefkastenAnfrage
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;
        
        return $this;
    }
}
