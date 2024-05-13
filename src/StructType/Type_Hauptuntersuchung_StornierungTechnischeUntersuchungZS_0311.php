<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.StornierungTechnischeUntersuchungZS.0311 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_StornierungTechnischeUntersuchungZS_0311 extends AbstractStructBase
{
    /**
     * The stornierungUntersuchungZS
     * @var \THAG\XKfz\StructType\StornierungUntersuchungZS|null
     */
    public ?\THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS = null;
    /**
     * Constructor method for
     * Type.Hauptuntersuchung.StornierungTechnischeUntersuchungZS.0311
     * @uses Type_Hauptuntersuchung_StornierungTechnischeUntersuchungZS_0311::setStornierungUntersuchungZS()
     * @param \THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS
     */
    public function __construct(?\THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS = null)
    {
        $this
            ->setStornierungUntersuchungZS($stornierungUntersuchungZS);
    }
    /**
     * Get stornierungUntersuchungZS value
     * @return \THAG\XKfz\StructType\StornierungUntersuchungZS|null
     */
    public function getStornierungUntersuchungZS(): ?\THAG\XKfz\StructType\StornierungUntersuchungZS
    {
        return $this->stornierungUntersuchungZS;
    }
    /**
     * Set stornierungUntersuchungZS value
     * @param \THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS
     * @return \THAG\XKfz\StructType\Type_Hauptuntersuchung_StornierungTechnischeUntersuchungZS_0311
     */
    public function setStornierungUntersuchungZS(?\THAG\XKfz\StructType\StornierungUntersuchungZS $stornierungUntersuchungZS = null): self
    {
        $this->stornierungUntersuchungZS = $stornierungUntersuchungZS;
        
        return $this;
    }
}
