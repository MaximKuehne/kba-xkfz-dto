<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.StornierungTechnischeUntersuchung.0304 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_StornierungTechnischeUntersuchung_0304 extends AbstractStructBase
{
    /**
     * The stornierungUntersuchungZFZR
     */
    public ?\THAG\XKfz\StructType\StornierungUntersuchungZFZR $stornierungUntersuchungZFZR = null;

    /**
     * Constructor method for
     * Type.Hauptuntersuchung.StornierungTechnischeUntersuchung.0304
     *
     * @uses Type_Hauptuntersuchung_StornierungTechnischeUntersuchung_0304::setStornierungUntersuchungZFZR()
     */
    public function __construct(?\THAG\XKfz\StructType\StornierungUntersuchungZFZR $stornierungUntersuchungZFZR = null)
    {
        $this
            ->setStornierungUntersuchungZFZR($stornierungUntersuchungZFZR);
    }

    /**
     * Get stornierungUntersuchungZFZR value
     */
    public function getStornierungUntersuchungZFZR(): ?\THAG\XKfz\StructType\StornierungUntersuchungZFZR
    {
        return $this->stornierungUntersuchungZFZR;
    }

    /**
     * Set stornierungUntersuchungZFZR value
     */
    public function setStornierungUntersuchungZFZR(?\THAG\XKfz\StructType\StornierungUntersuchungZFZR $stornierungUntersuchungZFZR = null): self
    {
        $this->stornierungUntersuchungZFZR = $stornierungUntersuchungZFZR;

        return $this;
    }
}
