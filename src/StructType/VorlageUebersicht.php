<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VorlageUebersicht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VorlageUebersicht extends AbstractStructBase
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
     * Constructor method for VorlageUebersicht
     * @uses VorlageUebersicht::setVorlageNummer()
     * @uses VorlageUebersicht::setVorlageName()
     * @uses VorlageUebersicht::setVorgangsart()
     * @param string $vorlageNummer
     * @param string $vorlageName
     * @param string $vorgangsart
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
     * @return string|null
     */
    public function getVorlageNummer(): ?string
    {
        return $this->VorlageNummer;
    }
    /**
     * Set VorlageNummer value
     * @param string $vorlageNummer
     * @return \THAG\XKfz\StructType\VorlageUebersicht
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
     * @return \THAG\XKfz\StructType\VorlageUebersicht
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
     * @return \THAG\XKfz\StructType\VorlageUebersicht
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;
        
        return $this;
    }
}
