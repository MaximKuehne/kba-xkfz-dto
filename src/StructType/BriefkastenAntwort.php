<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenAntwort extends AbstractStructBase
{
    /**
     * The AnzahlNachrichten
     */
    public ?string $AnzahlNachrichten = null;

    /**
     * The AnzahlNachrichtenId
     */
    public ?string $AnzahlNachrichtenId = null;

    /**
     * The NaechsteDatensatzId
     */
    public ?string $NaechsteDatensatzId = null;

    /**
     * The ListeNachrichtenId
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenId $ListeNachrichtenId = null;

    /**
     * The ListeNachrichtenUebersicht
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenUebersicht $ListeNachrichtenUebersicht = null;

    /**
     * Constructor method for BriefkastenAntwort
     *
     * @uses BriefkastenAntwort::setAnzahlNachrichten()
     * @uses BriefkastenAntwort::setAnzahlNachrichtenId()
     * @uses BriefkastenAntwort::setNaechsteDatensatzId()
     * @uses BriefkastenAntwort::setListeNachrichtenId()
     * @uses BriefkastenAntwort::setListeNachrichtenUebersicht()
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
     */
    public function getAnzahlNachrichten(): ?string
    {
        return $this->AnzahlNachrichten;
    }

    /**
     * Set AnzahlNachrichten value
     */
    public function setAnzahlNachrichten(?string $anzahlNachrichten = null): self
    {
        $this->AnzahlNachrichten = $anzahlNachrichten;

        return $this;
    }

    /**
     * Get AnzahlNachrichtenId value
     */
    public function getAnzahlNachrichtenId(): ?string
    {
        return $this->AnzahlNachrichtenId;
    }

    /**
     * Set AnzahlNachrichtenId value
     */
    public function setAnzahlNachrichtenId(?string $anzahlNachrichtenId = null): self
    {
        $this->AnzahlNachrichtenId = $anzahlNachrichtenId;

        return $this;
    }

    /**
     * Get NaechsteDatensatzId value
     */
    public function getNaechsteDatensatzId(): ?string
    {
        return $this->NaechsteDatensatzId;
    }

    /**
     * Set NaechsteDatensatzId value
     */
    public function setNaechsteDatensatzId(?string $naechsteDatensatzId = null): self
    {
        $this->NaechsteDatensatzId = $naechsteDatensatzId;

        return $this;
    }

    /**
     * Get ListeNachrichtenId value
     */
    public function getListeNachrichtenId(): ?\THAG\XKfz\StructType\ListeNachrichtenId
    {
        return $this->ListeNachrichtenId;
    }

    /**
     * Set ListeNachrichtenId value
     */
    public function setListeNachrichtenId(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null): self
    {
        $this->ListeNachrichtenId = $listeNachrichtenId;

        return $this;
    }

    /**
     * Get ListeNachrichtenUebersicht value
     */
    public function getListeNachrichtenUebersicht(): ?\THAG\XKfz\StructType\ListeNachrichtenUebersicht
    {
        return $this->ListeNachrichtenUebersicht;
    }

    /**
     * Set ListeNachrichtenUebersicht value
     */
    public function setListeNachrichtenUebersicht(?\THAG\XKfz\StructType\ListeNachrichtenUebersicht $listeNachrichtenUebersicht = null): self
    {
        $this->ListeNachrichtenUebersicht = $listeNachrichtenUebersicht;

        return $this;
    }
}
