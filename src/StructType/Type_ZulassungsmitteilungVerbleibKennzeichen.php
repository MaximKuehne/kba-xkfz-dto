<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZulassungsmitteilungVerbleibKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZulassungsmitteilungVerbleibKennzeichen extends AbstractStructBase
{
    /**
     * The merkmalReservierungKennzeichen
     */
    public ?bool $merkmalReservierungKennzeichen = null;

    /**
     * The datumReservierungGueltigBis
     */
    public ?string $datumReservierungGueltigBis = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * Constructor method for Type.ZulassungsmitteilungVerbleibKennzeichen
     *
     * @uses Type_ZulassungsmitteilungVerbleibKennzeichen::setMerkmalReservierungKennzeichen()
     * @uses Type_ZulassungsmitteilungVerbleibKennzeichen::setDatumReservierungGueltigBis()
     * @uses Type_ZulassungsmitteilungVerbleibKennzeichen::setPin()
     */
    public function __construct(?bool $merkmalReservierungKennzeichen = null, ?string $datumReservierungGueltigBis = null, ?string $pin = null)
    {
        $this
            ->setMerkmalReservierungKennzeichen($merkmalReservierungKennzeichen)
            ->setDatumReservierungGueltigBis($datumReservierungGueltigBis)
            ->setPin($pin);
    }

    /**
     * Get merkmalReservierungKennzeichen value
     */
    public function getMerkmalReservierungKennzeichen(): ?bool
    {
        return $this->merkmalReservierungKennzeichen;
    }

    /**
     * Set merkmalReservierungKennzeichen value
     */
    public function setMerkmalReservierungKennzeichen(?bool $merkmalReservierungKennzeichen = null): self
    {
        $this->merkmalReservierungKennzeichen = $merkmalReservierungKennzeichen;

        return $this;
    }

    /**
     * Get datumReservierungGueltigBis value
     */
    public function getDatumReservierungGueltigBis(): ?string
    {
        return $this->datumReservierungGueltigBis;
    }

    /**
     * Set datumReservierungGueltigBis value
     */
    public function setDatumReservierungGueltigBis(?string $datumReservierungGueltigBis = null): self
    {
        $this->datumReservierungGueltigBis = $datumReservierungGueltigBis;

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
