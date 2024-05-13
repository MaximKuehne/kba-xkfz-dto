<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.AnfrageTechnischeUntersuchungZFZR.0312 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_AnfrageTechnischeUntersuchungZFZR_0312 extends AbstractStructBase
{
    /**
     * The anfrageUntersuchungZFZR
     */
    public ?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR = null;

    /**
     * Constructor method for
     * Type.Hauptuntersuchung.AnfrageTechnischeUntersuchungZFZR.0312
     *
     * @uses Type_Hauptuntersuchung_AnfrageTechnischeUntersuchungZFZR_0312::setAnfrageUntersuchungZFZR()
     */
    public function __construct(?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR = null)
    {
        $this
            ->setAnfrageUntersuchungZFZR($anfrageUntersuchungZFZR);
    }

    /**
     * Get anfrageUntersuchungZFZR value
     */
    public function getAnfrageUntersuchungZFZR(): ?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR
    {
        return $this->anfrageUntersuchungZFZR;
    }

    /**
     * Set anfrageUntersuchungZFZR value
     */
    public function setAnfrageUntersuchungZFZR(?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR = null): self
    {
        $this->anfrageUntersuchungZFZR = $anfrageUntersuchungZFZR;

        return $this;
    }
}
