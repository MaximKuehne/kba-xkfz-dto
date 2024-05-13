<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ZulassungsmitteilungVerbleibKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ZulassungsmitteilungVerbleibKennzeichen extends AbstractStructBase
{
    /**
     * The merkmalReservierungKennzeichen
     * @var bool|null
     */
    public ?bool $merkmalReservierungKennzeichen = null;
    /**
     * The datumReservierungGueltigBis
     * @var string|null
     */
    public ?string $datumReservierungGueltigBis = null;
    /**
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
    /**
     * Constructor method for Type.ZulassungsmitteilungVerbleibKennzeichen
     * @uses Type_ZulassungsmitteilungVerbleibKennzeichen::setMerkmalReservierungKennzeichen()
     * @uses Type_ZulassungsmitteilungVerbleibKennzeichen::setDatumReservierungGueltigBis()
     * @uses Type_ZulassungsmitteilungVerbleibKennzeichen::setPin()
     * @param bool $merkmalReservierungKennzeichen
     * @param string $datumReservierungGueltigBis
     * @param string $pin
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
     * @return bool|null
     */
    public function getMerkmalReservierungKennzeichen(): ?bool
    {
        return $this->merkmalReservierungKennzeichen;
    }
    /**
     * Set merkmalReservierungKennzeichen value
     * @param bool $merkmalReservierungKennzeichen
     * @return \THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen
     */
    public function setMerkmalReservierungKennzeichen(?bool $merkmalReservierungKennzeichen = null): self
    {
        $this->merkmalReservierungKennzeichen = $merkmalReservierungKennzeichen;
        
        return $this;
    }
    /**
     * Get datumReservierungGueltigBis value
     * @return string|null
     */
    public function getDatumReservierungGueltigBis(): ?string
    {
        return $this->datumReservierungGueltigBis;
    }
    /**
     * Set datumReservierungGueltigBis value
     * @param string $datumReservierungGueltigBis
     * @return \THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen
     */
    public function setDatumReservierungGueltigBis(?string $datumReservierungGueltigBis = null): self
    {
        $this->datumReservierungGueltigBis = $datumReservierungGueltigBis;
        
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
     * @return \THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
        return $this;
    }
}
