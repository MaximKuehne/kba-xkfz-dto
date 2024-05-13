<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.GebuehrenBezahlt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_GebuehrenBezahlt extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
    /**
     * The bezahlteGebuehren
     * @var \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null;
    /**
     * Constructor method for Type.GebuehrenBezahlt
     * @uses Type_GebuehrenBezahlt::setKennzeichen()
     * @uses Type_GebuehrenBezahlt::setPin()
     * @uses Type_GebuehrenBezahlt::setBezahlteGebuehren()
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $pin
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $pin = null, ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setPin($pin)
            ->setBezahlteGebuehren($bezahlteGebuehren);
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
     * @return \THAG\XKfz\StructType\Type_GebuehrenBezahlt
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_GebuehrenBezahlt
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
        return $this;
    }
    /**
     * Get bezahlteGebuehren value
     * @return \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public function getBezahlteGebuehren(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->bezahlteGebuehren;
    }
    /**
     * Set bezahlteGebuehren value
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren
     * @return \THAG\XKfz\StructType\Type_GebuehrenBezahlt
     */
    public function setBezahlteGebuehren(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null): self
    {
        $this->bezahlteGebuehren = $bezahlteGebuehren;
        
        return $this;
    }
}
