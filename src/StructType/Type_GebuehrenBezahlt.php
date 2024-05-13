<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.GebuehrenBezahlt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_GebuehrenBezahlt extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * The bezahlteGebuehren
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null;

    /**
     * Constructor method for Type.GebuehrenBezahlt
     *
     * @uses Type_GebuehrenBezahlt::setKennzeichen()
     * @uses Type_GebuehrenBezahlt::setPin()
     * @uses Type_GebuehrenBezahlt::setBezahlteGebuehren()
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

    /**
     * Get bezahlteGebuehren value
     */
    public function getBezahlteGebuehren(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->bezahlteGebuehren;
    }

    /**
     * Set bezahlteGebuehren value
     */
    public function setBezahlteGebuehren(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null): self
    {
        $this->bezahlteGebuehren = $bezahlteGebuehren;

        return $this;
    }
}
