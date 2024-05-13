<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kennzeichenFreigeben StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class KennzeichenFreigeben extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The artDerFreigabe
     * @var \THAG\XKfz\StructType\Code_ArtDerFreigabe|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerFreigabe $artDerFreigabe = null;
    /**
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
    /**
     * Constructor method for kennzeichenFreigeben
     * @uses KennzeichenFreigeben::setKennzeichen()
     * @uses KennzeichenFreigeben::setArtDerFreigabe()
     * @uses KennzeichenFreigeben::setPin()
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param \THAG\XKfz\StructType\Code_ArtDerFreigabe $artDerFreigabe
     * @param string $pin
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Code_ArtDerFreigabe $artDerFreigabe = null, ?string $pin = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setArtDerFreigabe($artDerFreigabe)
            ->setPin($pin);
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\KennzeichenFreigeben
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get artDerFreigabe value
     * @return \THAG\XKfz\StructType\Code_ArtDerFreigabe|null
     */
    public function getArtDerFreigabe(): ?\THAG\XKfz\StructType\Code_ArtDerFreigabe
    {
        return $this->artDerFreigabe;
    }
    /**
     * Set artDerFreigabe value
     * @param \THAG\XKfz\StructType\Code_ArtDerFreigabe $artDerFreigabe
     * @return \THAG\XKfz\StructType\KennzeichenFreigeben
     */
    public function setArtDerFreigabe(?\THAG\XKfz\StructType\Code_ArtDerFreigabe $artDerFreigabe = null): self
    {
        $this->artDerFreigabe = $artDerFreigabe;
        
        return $this;
    }
    /**
     * Get pin value
     * @return string|null
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }
    /**
     * Set pin value
     * @param string $pin
     * @return \THAG\XKfz\StructType\KennzeichenFreigeben
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
        return $this;
    }
}
