<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VorlageDetail StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VorlageDetail extends AbstractStructBase
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
     * The VorlageInhalt
     */
    public ?string $VorlageInhalt = null;

    /**
     * Constructor method for VorlageDetail
     *
     * @uses VorlageDetail::setVorlageNummer()
     * @uses VorlageDetail::setVorlageName()
     * @uses VorlageDetail::setVorgangsart()
     * @uses VorlageDetail::setVorlageInhalt()
     */
    public function __construct(?string $vorlageNummer = null, ?string $vorlageName = null, ?string $vorgangsart = null, ?string $vorlageInhalt = null)
    {
        $this
            ->setVorlageNummer($vorlageNummer)
            ->setVorlageName($vorlageName)
            ->setVorgangsart($vorgangsart)
            ->setVorlageInhalt($vorlageInhalt);
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

    /**
     * Get VorlageInhalt value
     */
    public function getVorlageInhalt(): ?string
    {
        return $this->VorlageInhalt;
    }

    /**
     * Set VorlageInhalt value
     */
    public function setVorlageInhalt(?string $vorlageInhalt = null): self
    {
        $this->VorlageInhalt = $vorlageInhalt;

        return $this;
    }
}
