<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VorlageDetail StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VorlageDetail extends AbstractStructBase
{
    /**
     * The VorlageNummer
     * @var string|null
     */
    public ?string $VorlageNummer = null;
    /**
     * The VorlageName
     * @var string|null
     */
    public ?string $VorlageName = null;
    /**
     * The Vorgangsart
     * @var string|null
     */
    public ?string $Vorgangsart = null;
    /**
     * The VorlageInhalt
     * @var string|null
     */
    public ?string $VorlageInhalt = null;
    /**
     * Constructor method for VorlageDetail
     * @uses VorlageDetail::setVorlageNummer()
     * @uses VorlageDetail::setVorlageName()
     * @uses VorlageDetail::setVorgangsart()
     * @uses VorlageDetail::setVorlageInhalt()
     * @param string $vorlageNummer
     * @param string $vorlageName
     * @param string $vorgangsart
     * @param string $vorlageInhalt
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
     * @return string|null
     */
    public function getVorlageNummer(): ?string
    {
        return $this->VorlageNummer;
    }
    /**
     * Set VorlageNummer value
     * @param string $vorlageNummer
     * @return \THAG\XKfz\StructType\VorlageDetail
     */
    public function setVorlageNummer(?string $vorlageNummer = null): self
    {
        $this->VorlageNummer = $vorlageNummer;
        
        return $this;
    }
    /**
     * Get VorlageName value
     * @return string|null
     */
    public function getVorlageName(): ?string
    {
        return $this->VorlageName;
    }
    /**
     * Set VorlageName value
     * @param string $vorlageName
     * @return \THAG\XKfz\StructType\VorlageDetail
     */
    public function setVorlageName(?string $vorlageName = null): self
    {
        $this->VorlageName = $vorlageName;
        
        return $this;
    }
    /**
     * Get Vorgangsart value
     * @return string|null
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }
    /**
     * Set Vorgangsart value
     * @param string $vorgangsart
     * @return \THAG\XKfz\StructType\VorlageDetail
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;
        
        return $this;
    }
    /**
     * Get VorlageInhalt value
     * @return string|null
     */
    public function getVorlageInhalt(): ?string
    {
        return $this->VorlageInhalt;
    }
    /**
     * Set VorlageInhalt value
     * @param string $vorlageInhalt
     * @return \THAG\XKfz\StructType\VorlageDetail
     */
    public function setVorlageInhalt(?string $vorlageInhalt = null): self
    {
        $this->VorlageInhalt = $vorlageInhalt;
        
        return $this;
    }
}
