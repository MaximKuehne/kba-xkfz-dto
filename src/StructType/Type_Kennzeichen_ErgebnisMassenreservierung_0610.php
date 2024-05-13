<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.ErgebnisMassenreservierung.0610
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_ErgebnisMassenreservierung_0610 extends AbstractStructBase
{
    /**
     * The listeReservierterKennzeichen
     */
    public ?\THAG\XKfz\StructType\ListeReservierterKennzeichen $listeReservierterKennzeichen = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * Constructor method for Type.Kennzeichen.ErgebnisMassenreservierung.0610
     *
     * @uses Type_Kennzeichen_ErgebnisMassenreservierung_0610::setListeReservierterKennzeichen()
     * @uses Type_Kennzeichen_ErgebnisMassenreservierung_0610::setPin()
     */
    public function __construct(?\THAG\XKfz\StructType\ListeReservierterKennzeichen $listeReservierterKennzeichen = null, ?string $pin = null)
    {
        $this
            ->setListeReservierterKennzeichen($listeReservierterKennzeichen)
            ->setPin($pin);
    }

    /**
     * Get listeReservierterKennzeichen value
     */
    public function getListeReservierterKennzeichen(): ?\THAG\XKfz\StructType\ListeReservierterKennzeichen
    {
        return $this->listeReservierterKennzeichen;
    }

    /**
     * Set listeReservierterKennzeichen value
     */
    public function setListeReservierterKennzeichen(?\THAG\XKfz\StructType\ListeReservierterKennzeichen $listeReservierterKennzeichen = null): self
    {
        $this->listeReservierterKennzeichen = $listeReservierterKennzeichen;

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
