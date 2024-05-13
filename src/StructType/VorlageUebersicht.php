<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VorlageUebersicht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VorlageUebersicht extends AbstractStructBase
{
    /**
     * The VorlageNummer
     */
    public ?string $VorlageNummer = null;

    /**
     * The VorlageName
     */
    public ?string $VorlageName = null;

    /**
     * The Vorgangsart
     */
    public ?string $Vorgangsart = null;

    /**
     * Constructor method for VorlageUebersicht
     *
     * @uses VorlageUebersicht::setVorlageNummer()
     * @uses VorlageUebersicht::setVorlageName()
     * @uses VorlageUebersicht::setVorgangsart()
     */
    public function __construct(?string $vorlageNummer = null, ?string $vorlageName = null, ?string $vorgangsart = null)
    {
        $this
            ->setVorlageNummer($vorlageNummer)
            ->setVorlageName($vorlageName)
            ->setVorgangsart($vorgangsart);
    }

    /**
     * Get VorlageNummer value
     */
    public function getVorlageNummer(): ?string
    {
        return $this->VorlageNummer;
    }

    /**
     * Set VorlageNummer value
     */
    public function setVorlageNummer(?string $vorlageNummer = null): self
    {
        $this->VorlageNummer = $vorlageNummer;

        return $this;
    }

    /**
     * Get VorlageName value
     */
    public function getVorlageName(): ?string
    {
        return $this->VorlageName;
    }

    /**
     * Set VorlageName value
     */
    public function setVorlageName(?string $vorlageName = null): self
    {
        $this->VorlageName = $vorlageName;

        return $this;
    }

    /**
     * Get Vorgangsart value
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }

    /**
     * Set Vorgangsart value
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;

        return $this;
    }
}
