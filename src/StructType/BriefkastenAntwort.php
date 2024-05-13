<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenAntwort extends AbstractStructBase
{
    /**
     * The AnzahlNachrichten
     * @var string|null
     */
    public ?string $AnzahlNachrichten = null;
    /**
     * The AnzahlNachrichtenId
     * @var string|null
     */
    public ?string $AnzahlNachrichtenId = null;
    /**
     * The NaechsteDatensatzId
     * @var string|null
     */
    public ?string $NaechsteDatensatzId = null;
    /**
     * The ListeNachrichtenId
     * @var \THAG\XKfz\StructType\ListeNachrichtenId|null
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenId $ListeNachrichtenId = null;
    /**
     * The ListeNachrichtenUebersicht
     * @var \THAG\XKfz\StructType\ListeNachrichtenUebersicht|null
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenUebersicht $ListeNachrichtenUebersicht = null;
    /**
     * Constructor method for BriefkastenAntwort
     * @uses BriefkastenAntwort::setAnzahlNachrichten()
     * @uses BriefkastenAntwort::setAnzahlNachrichtenId()
     * @uses BriefkastenAntwort::setNaechsteDatensatzId()
     * @uses BriefkastenAntwort::setListeNachrichtenId()
     * @uses BriefkastenAntwort::setListeNachrichtenUebersicht()
     * @param string $anzahlNachrichten
     * @param string $anzahlNachrichtenId
     * @param string $naechsteDatensatzId
     * @param \THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId
     * @param \THAG\XKfz\StructType\ListeNachrichtenUebersicht $listeNachrichtenUebersicht
     */
    public function __construct(?string $anzahlNachrichten = null, ?string $anzahlNachrichtenId = null, ?string $naechsteDatensatzId = null, ?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null, ?\THAG\XKfz\StructType\ListeNachrichtenUebersicht $listeNachrichtenUebersicht = null)
    {
        $this
            ->setAnzahlNachrichten($anzahlNachrichten)
            ->setAnzahlNachrichtenId($anzahlNachrichtenId)
            ->setNaechsteDatensatzId($naechsteDatensatzId)
            ->setListeNachrichtenId($listeNachrichtenId)
            ->setListeNachrichtenUebersicht($listeNachrichtenUebersicht);
    }
    /**
     * Get AnzahlNachrichten value
     * @return string|null
     */
    public function getAnzahlNachrichten(): ?string
    {
        return $this->AnzahlNachrichten;
    }
    /**
     * Set AnzahlNachrichten value
     * @param string $anzahlNachrichten
     * @return \THAG\XKfz\StructType\BriefkastenAntwort
     */
    public function setAnzahlNachrichten(?string $anzahlNachrichten = null): self
    {
        $this->AnzahlNachrichten = $anzahlNachrichten;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\BriefkastenAntwort
     */
    public function setAnzahlNachrichtenId(?string $anzahlNachrichtenId = null): self
    {
        $this->AnzahlNachrichtenId = $anzahlNachrichtenId;
        
        return $this;
    }
    /**
     * Get NaechsteDatensatzId value
     * @return string|null
     */
    public function getNaechsteDatensatzId(): ?string
    {
        return $this->NaechsteDatensatzId;
    }
    /**
     * Set NaechsteDatensatzId value
     * @param string $naechsteDatensatzId
     * @return \THAG\XKfz\StructType\BriefkastenAntwort
     */
    public function setNaechsteDatensatzId(?string $naechsteDatensatzId = null): self
    {
        $this->NaechsteDatensatzId = $naechsteDatensatzId;
        
        return $this;
    }
    /**
     * Get ListeNachrichtenId value
     * @return \THAG\XKfz\StructType\ListeNachrichtenId|null
     */
    public function getListeNachrichtenId(): ?\THAG\XKfz\StructType\ListeNachrichtenId
    {
        return $this->ListeNachrichtenId;
    }
    /**
     * Set ListeNachrichtenId value
     * @param \THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId
     * @return \THAG\XKfz\StructType\BriefkastenAntwort
     */
    public function setListeNachrichtenId(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null): self
    {
        $this->ListeNachrichtenId = $listeNachrichtenId;
        
        return $this;
    }
    /**
     * Get ListeNachrichtenUebersicht value
     * @return \THAG\XKfz\StructType\ListeNachrichtenUebersicht|null
     */
    public function getListeNachrichtenUebersicht(): ?\THAG\XKfz\StructType\ListeNachrichtenUebersicht
    {
        return $this->ListeNachrichtenUebersicht;
    }
    /**
     * Set ListeNachrichtenUebersicht value
     * @param \THAG\XKfz\StructType\ListeNachrichtenUebersicht $listeNachrichtenUebersicht
     * @return \THAG\XKfz\StructType\BriefkastenAntwort
     */
    public function setListeNachrichtenUebersicht(?\THAG\XKfz\StructType\ListeNachrichtenUebersicht $listeNachrichtenUebersicht = null): self
    {
        $this->ListeNachrichtenUebersicht = $listeNachrichtenUebersicht;
        
        return $this;
    }
}
