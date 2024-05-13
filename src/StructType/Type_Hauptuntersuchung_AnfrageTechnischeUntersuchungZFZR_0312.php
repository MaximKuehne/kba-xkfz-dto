<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.AnfrageTechnischeUntersuchungZFZR.0312 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_AnfrageTechnischeUntersuchungZFZR_0312 extends AbstractStructBase
{
    /**
     * The anfrageUntersuchungZFZR
     * @var \THAG\XKfz\StructType\AnfrageUntersuchungZFZR|null
     */
    public ?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR = null;
    /**
     * Constructor method for
     * Type.Hauptuntersuchung.AnfrageTechnischeUntersuchungZFZR.0312
     * @uses Type_Hauptuntersuchung_AnfrageTechnischeUntersuchungZFZR_0312::setAnfrageUntersuchungZFZR()
     * @param \THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR
     */
    public function __construct(?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR = null)
    {
        $this
            ->setAnfrageUntersuchungZFZR($anfrageUntersuchungZFZR);
    }
    /**
     * Get anfrageUntersuchungZFZR value
     * @return \THAG\XKfz\StructType\AnfrageUntersuchungZFZR|null
     */
    public function getAnfrageUntersuchungZFZR(): ?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR
    {
        return $this->anfrageUntersuchungZFZR;
    }
    /**
     * Set anfrageUntersuchungZFZR value
     * @param \THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR
     * @return \THAG\XKfz\StructType\Type_Hauptuntersuchung_AnfrageTechnischeUntersuchungZFZR_0312
     */
    public function setAnfrageUntersuchungZFZR(?\THAG\XKfz\StructType\AnfrageUntersuchungZFZR $anfrageUntersuchungZFZR = null): self
    {
        $this->anfrageUntersuchungZFZR = $anfrageUntersuchungZFZR;
        
        return $this;
    }
}
