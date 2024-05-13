<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.AuskunftTechnischeUntersuchungZFZR.0313 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_AuskunftTechnischeUntersuchungZFZR_0313 extends AbstractStructBase
{
    /**
     * The auskunftUntersuchungZFZR
     */
    public ?\THAG\XKfz\StructType\AuskunftUntersuchungZFZR $auskunftUntersuchungZFZR = null;

    /**
     * Constructor method for
     * Type.Hauptuntersuchung.AuskunftTechnischeUntersuchungZFZR.0313
     *
     * @uses Type_Hauptuntersuchung_AuskunftTechnischeUntersuchungZFZR_0313::setAuskunftUntersuchungZFZR()
     */
    public function __construct(?\THAG\XKfz\StructType\AuskunftUntersuchungZFZR $auskunftUntersuchungZFZR = null)
    {
        $this
            ->setAuskunftUntersuchungZFZR($auskunftUntersuchungZFZR);
    }

    /**
     * Get auskunftUntersuchungZFZR value
     */
    public function getAuskunftUntersuchungZFZR(): ?\THAG\XKfz\StructType\AuskunftUntersuchungZFZR
    {
        return $this->auskunftUntersuchungZFZR;
    }

    /**
     * Set auskunftUntersuchungZFZR value
     */
    public function setAuskunftUntersuchungZFZR(?\THAG\XKfz\StructType\AuskunftUntersuchungZFZR $auskunftUntersuchungZFZR = null): self
    {
        $this->auskunftUntersuchungZFZR = $auskunftUntersuchungZFZR;

        return $this;
    }
}
