<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kennzeichenFreigeben StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class KennzeichenFreigeben extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The artDerFreigabe
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerFreigabe $artDerFreigabe = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * Constructor method for kennzeichenFreigeben
     *
     * @uses KennzeichenFreigeben::setKennzeichen()
     * @uses KennzeichenFreigeben::setArtDerFreigabe()
     * @uses KennzeichenFreigeben::setPin()
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
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get artDerFreigabe value
     */
    public function getArtDerFreigabe(): ?\THAG\XKfz\StructType\Code_ArtDerFreigabe
    {
        return $this->artDerFreigabe;
    }

    /**
     * Set artDerFreigabe value
     */
    public function setArtDerFreigabe(?\THAG\XKfz\StructType\Code_ArtDerFreigabe $artDerFreigabe = null): self
    {
        $this->artDerFreigabe = $artDerFreigabe;

        return $this;
    }

    /**
     * Get pin value
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }

    /**
     * Set pin value
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;

        return $this;
    }
}
