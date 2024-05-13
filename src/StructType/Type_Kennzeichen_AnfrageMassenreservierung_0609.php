<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichen.AnfrageMassenreservierung.0609 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichen_AnfrageMassenreservierung_0609 extends AbstractStructBase
{
    /**
     * The massenreservierungKennzeichen
     */
    public ?\THAG\XKfz\StructType\MassenreservierungKennzeichen $massenreservierungKennzeichen = null;

    /**
     * Constructor method for Type.Kennzeichen.AnfrageMassenreservierung.0609
     *
     * @uses Type_Kennzeichen_AnfrageMassenreservierung_0609::setMassenreservierungKennzeichen()
     */
    public function __construct(?\THAG\XKfz\StructType\MassenreservierungKennzeichen $massenreservierungKennzeichen = null)
    {
        $this
            ->setMassenreservierungKennzeichen($massenreservierungKennzeichen);
    }

    /**
     * Get massenreservierungKennzeichen value
     */
    public function getMassenreservierungKennzeichen(): ?\THAG\XKfz\StructType\MassenreservierungKennzeichen
    {
        return $this->massenreservierungKennzeichen;
    }

    /**
     * Set massenreservierungKennzeichen value
     */
    public function setMassenreservierungKennzeichen(?\THAG\XKfz\StructType\MassenreservierungKennzeichen $massenreservierungKennzeichen = null): self
    {
        $this->massenreservierungKennzeichen = $massenreservierungKennzeichen;

        return $this;
    }
}
