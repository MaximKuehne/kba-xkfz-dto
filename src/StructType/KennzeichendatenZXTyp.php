<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KennzeichendatenZXTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class KennzeichendatenZXTyp extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;
    /**
     * The ZustaendigeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;
    /**
     * The KennzeichenfuehrendeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $KennzeichenfuehrendeBehoerdeKreisschluessel = null;
    /**
     * The KennzeichenfuehrendeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $KennzeichenfuehrendeBehoerdeZusatzziffer = null;
    /**
     * Constructor method for KennzeichendatenZXTyp
     * @uses KennzeichendatenZXTyp::setKennzeichen()
     * @uses KennzeichendatenZXTyp::setZustaendigeBehoerdeKreisschluessel()
     * @uses KennzeichendatenZXTyp::setZustaendigeBehoerdeZusatzziffer()
     * @uses KennzeichendatenZXTyp::setKennzeichenfuehrendeBehoerdeKreisschluessel()
     * @uses KennzeichendatenZXTyp::setKennzeichenfuehrendeBehoerdeZusatzziffer()
     * @param string $kennzeichen
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @param string $kennzeichenfuehrendeBehoerdeKreisschluessel
     * @param string $kennzeichenfuehrendeBehoerdeZusatzziffer
     */
    public function __construct(?string $kennzeichen = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null, ?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer)
            ->setKennzeichenfuehrendeBehoerdeKreisschluessel($kennzeichenfuehrendeBehoerdeKreisschluessel)
            ->setKennzeichenfuehrendeBehoerdeZusatzziffer($kennzeichenfuehrendeBehoerdeZusatzziffer);
    }
    /**
     * Get Kennzeichen value
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZXTyp
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\KennzeichendatenZXTyp
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\KennzeichendatenZXTyp
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get KennzeichenfuehrendeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getKennzeichenfuehrendeBehoerdeKreisschluessel(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeKreisschluessel;
    }
    /**
     * Set KennzeichenfuehrendeBehoerdeKreisschluessel value
     * @param string $kennzeichenfuehrendeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\KennzeichendatenZXTyp
     */
    public function setKennzeichenfuehrendeBehoerdeKreisschluessel(?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeKreisschluessel = $kennzeichenfuehrendeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get KennzeichenfuehrendeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getKennzeichenfuehrendeBehoerdeZusatzziffer(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeZusatzziffer;
    }
    /**
     * Set KennzeichenfuehrendeBehoerdeZusatzziffer value
     * @param string $kennzeichenfuehrendeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\KennzeichendatenZXTyp
     */
    public function setKennzeichenfuehrendeBehoerdeZusatzziffer(?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeZusatzziffer = $kennzeichenfuehrendeBehoerdeZusatzziffer;
        
        return $this;
    }
}
