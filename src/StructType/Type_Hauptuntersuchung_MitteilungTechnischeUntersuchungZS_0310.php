<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.MitteilungTechnischeUntersuchungZS.0310 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_MitteilungTechnischeUntersuchungZS_0310 extends AbstractStructBase
{
    /**
     * The mitteilungUntersuchungZS
     */
    public ?\THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS = null;

    /**
     * Constructor method for
     * Type.Hauptuntersuchung.MitteilungTechnischeUntersuchungZS.0310
     *
     * @uses Type_Hauptuntersuchung_MitteilungTechnischeUntersuchungZS_0310::setMitteilungUntersuchungZS()
     */
    public function __construct(?\THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS = null)
    {
        $this
            ->setMitteilungUntersuchungZS($mitteilungUntersuchungZS);
    }

    /**
     * Get mitteilungUntersuchungZS value
     */
    public function getMitteilungUntersuchungZS(): ?\THAG\XKfz\StructType\MitteilungUntersuchungZS
    {
        return $this->mitteilungUntersuchungZS;
    }

    /**
     * Set mitteilungUntersuchungZS value
     */
    public function setMitteilungUntersuchungZS(?\THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS = null): self
    {
        $this->mitteilungUntersuchungZS = $mitteilungUntersuchungZS;

        return $this;
    }
}
