<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for naechstesFreiesKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NaechstesFreiesKennzeichen extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The wechselkennzeichen
     * @var \THAG\XKfz\StructType\Type_Wechselkennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null;
    /**
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
    /**
     * Constructor method for naechstesFreiesKennzeichen
     * @uses NaechstesFreiesKennzeichen::setKennzeichen()
     * @uses NaechstesFreiesKennzeichen::setWechselkennzeichen()
     * @uses NaechstesFreiesKennzeichen::setPin()
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param \THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen
     * @param string $pin
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
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\NaechstesFreiesKennzeichen
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get wechselkennzeichen value
     * @return \THAG\XKfz\StructType\Type_Wechselkennzeichen|null
     */
    public function getWechselkennzeichen(): ?\THAG\XKfz\StructType\Type_Wechselkennzeichen
    {
        return $this->wechselkennzeichen;
    }
    /**
     * Set wechselkennzeichen value
     * @param \THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen
     * @return \THAG\XKfz\StructType\NaechstesFreiesKennzeichen
     */
    public function setWechselkennzeichen(?\THAG\XKfz\StructType\Type_Wechselkennzeichen $wechselkennzeichen = null): self
    {
        $this->wechselkennzeichen = $wechselkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\NaechstesFreiesKennzeichen
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
        return $this;
    }
}
