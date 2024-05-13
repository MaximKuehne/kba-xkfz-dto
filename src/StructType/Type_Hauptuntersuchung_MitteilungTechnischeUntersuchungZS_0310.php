<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.MitteilungTechnischeUntersuchungZS.0310 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_MitteilungTechnischeUntersuchungZS_0310 extends AbstractStructBase
{
    /**
     * The mitteilungUntersuchungZS
     * @var \THAG\XKfz\StructType\MitteilungUntersuchungZS|null
     */
    public ?\THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS = null;
    /**
     * Constructor method for
     * Type.Hauptuntersuchung.MitteilungTechnischeUntersuchungZS.0310
     * @uses Type_Hauptuntersuchung_MitteilungTechnischeUntersuchungZS_0310::setMitteilungUntersuchungZS()
     * @param \THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS
     */
    public function __construct(?\THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS = null)
    {
        $this
            ->setMitteilungUntersuchungZS($mitteilungUntersuchungZS);
    }
    /**
     * Get mitteilungUntersuchungZS value
     * @return \THAG\XKfz\StructType\MitteilungUntersuchungZS|null
     */
    public function getMitteilungUntersuchungZS(): ?\THAG\XKfz\StructType\MitteilungUntersuchungZS
    {
        return $this->mitteilungUntersuchungZS;
    }
    /**
     * Set mitteilungUntersuchungZS value
     * @param \THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS
     * @return \THAG\XKfz\StructType\Type_Hauptuntersuchung_MitteilungTechnischeUntersuchungZS_0310
     */
    public function setMitteilungUntersuchungZS(?\THAG\XKfz\StructType\MitteilungUntersuchungZS $mitteilungUntersuchungZS = null): self
    {
        $this->mitteilungUntersuchungZS = $mitteilungUntersuchungZS;
        
        return $this;
    }
}
