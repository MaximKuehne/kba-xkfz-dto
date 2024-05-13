<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.StornierungTechnischeUntersuchungZS.0311 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_StornierungTechnischeUntersuchungZS_0311 extends AbstractStructBase
{
    /**
     * The stornierungUntersuchungZS
     */
    public ?\THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS = null;

    /**
     * Constructor method for
     * Type.Hauptuntersuchung.StornierungTechnischeUntersuchungZS.0311
     *
     * @uses Type_Hauptuntersuchung_StornierungTechnischeUntersuchungZS_0311::setStornierungUntersuchungZS()
     */
    public function __construct(?\THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS = null)
    {
        $this
            ->setStornierungUntersuchungZS($stornierungUntersuchungZS);
    }

    /**
     * Get stornierungUntersuchungZS value
     */
    public function getStornierungUntersuchungZS(): ?\THAG\XKfz\StructType\StornierungUntersuchungZS
    {
        return $this->stornierungUntersuchungZS;
    }

    /**
     * Set stornierungUntersuchungZS value
     */
    public function setStornierungUntersuchungZS(?\THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS = null): self
    {
        $this->stornierungUntersuchungZS = $stornierungUntersuchungZS;

        return $this;
    }
}
