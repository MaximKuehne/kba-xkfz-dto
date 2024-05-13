<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.MitteilungTechnischeUntersuchung.0303 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_MitteilungTechnischeUntersuchung_0303 extends AbstractStructBase
{
    /**
     * The mitteilungUntersuchungZFZR
     */
    public ?\THAG\XKfz\StructType\MitteilungUntersuchungZFZR $mitteilungUntersuchungZFZR = null;

    /**
     * Constructor method for
     * Type.Hauptuntersuchung.MitteilungTechnischeUntersuchung.0303
     *
     * @uses Type_Hauptuntersuchung_MitteilungTechnischeUntersuchung_0303::setMitteilungUntersuchungZFZR()
     */
    public function __construct(?\THAG\XKfz\StructType\MitteilungUntersuchungZFZR $mitteilungUntersuchungZFZR = null)
    {
        $this
            ->setMitteilungUntersuchungZFZR($mitteilungUntersuchungZFZR);
    }

    /**
     * Get mitteilungUntersuchungZFZR value
     */
    public function getMitteilungUntersuchungZFZR(): ?\THAG\XKfz\StructType\MitteilungUntersuchungZFZR
    {
        return $this->mitteilungUntersuchungZFZR;
    }

    /**
     * Set mitteilungUntersuchungZFZR value
     */
    public function setMitteilungUntersuchungZFZR(?\THAG\XKfz\StructType\MitteilungUntersuchungZFZR $mitteilungUntersuchungZFZR = null): self
    {
        $this->mitteilungUntersuchungZFZR = $mitteilungUntersuchungZFZR;

        return $this;
    }
}
