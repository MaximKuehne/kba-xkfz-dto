<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftUntersuchungZFZR StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftUntersuchungZFZR extends AbstractStructBase
{
    /**
     * The auskunftDetails
     */
    public ?\THAG\XKfz\StructType\Type_AuskunftDetails $auskunftDetails = null;

    /**
     * The untersuchungsabschnitt
     */
    public ?\THAG\XKfz\StructType\Type_Untersuchungsabschnitt $untersuchungsabschnitt = null;

    /**
     * Constructor method for Type.AuskunftUntersuchungZFZR
     *
     * @uses Type_AuskunftUntersuchungZFZR::setAuskunftDetails()
     * @uses Type_AuskunftUntersuchungZFZR::setUntersuchungsabschnitt()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_AuskunftDetails $auskunftDetails = null, ?\THAG\XKfz\StructType\Type_Untersuchungsabschnitt $untersuchungsabschnitt = null)
    {
        $this
            ->setAuskunftDetails($auskunftDetails)
            ->setUntersuchungsabschnitt($untersuchungsabschnitt);
    }

    /**
     * Get auskunftDetails value
     */
    public function getAuskunftDetails(): ?\THAG\XKfz\StructType\Type_AuskunftDetails
    {
        return $this->auskunftDetails;
    }

    /**
     * Set auskunftDetails value
     */
    public function setAuskunftDetails(?\THAG\XKfz\StructType\Type_AuskunftDetails $auskunftDetails = null): self
    {
        $this->auskunftDetails = $auskunftDetails;

        return $this;
    }

    /**
     * Get untersuchungsabschnitt value
     */
    public function getUntersuchungsabschnitt(): ?\THAG\XKfz\StructType\Type_Untersuchungsabschnitt
    {
        return $this->untersuchungsabschnitt;
    }

    /**
     * Set untersuchungsabschnitt value
     */
    public function setUntersuchungsabschnitt(?\THAG\XKfz\StructType\Type_Untersuchungsabschnitt $untersuchungsabschnitt = null): self
    {
        $this->untersuchungsabschnitt = $untersuchungsabschnitt;

        return $this;
    }
}
