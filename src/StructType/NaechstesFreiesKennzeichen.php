<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for naechstesFreiesKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NaechstesFreiesKennzeichen extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The wechselkennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * Constructor method for naechstesFreiesKennzeichen
     *
     * @uses NaechstesFreiesKennzeichen::setKennzeichen()
     * @uses NaechstesFreiesKennzeichen::setWechselkennzeichen()
     * @uses NaechstesFreiesKennzeichen::setPin()
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null, ?string $pin = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setWechselkennzeichen($wechselkennzeichen)
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
     * Get wechselkennzeichen value
     */
    public function getWechselkennzeichen(): ?\THAG\XKfz\StructType\Type_Wechselkennzeichen
    {
        return $this->wechselkennzeichen;
    }

    /**
     * Set wechselkennzeichen value
     */
    public function setWechselkennzeichen(?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null): self
    {
        $this->wechselkennzeichen = $wechselkennzeichen;

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
