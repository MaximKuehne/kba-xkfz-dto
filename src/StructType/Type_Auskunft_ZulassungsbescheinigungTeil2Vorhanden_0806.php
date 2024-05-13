<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.ZulassungsbescheinigungTeil2Vorhanden.0806
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_ZulassungsbescheinigungTeil2Vorhanden_0806 extends AbstractStructBase
{
    /**
     * The zulassungsbescheinigungTeil2Vorhanden
     * @var \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden|null
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden = null;
    /**
     * Constructor method for Type.Auskunft.ZulassungsbescheinigungTeil2Vorhanden.0806
     * @uses Type_Auskunft_ZulassungsbescheinigungTeil2Vorhanden_0806::setZulassungsbescheinigungTeil2Vorhanden()
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden
     */
    public function __construct(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden = null)
    {
        $this
            ->setZulassungsbescheinigungTeil2Vorhanden($zulassungsbescheinigungTeil2Vorhanden);
    }
    /**
     * Get zulassungsbescheinigungTeil2Vorhanden value
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden|null
     */
    public function getZulassungsbescheinigungTeil2Vorhanden(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden
    {
        return $this->zulassungsbescheinigungTeil2Vorhanden;
    }
    /**
     * Set zulassungsbescheinigungTeil2Vorhanden value
     * @param \THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden
     * @return \THAG\XKfz\StructType\Type_Auskunft_ZulassungsbescheinigungTeil2Vorhanden_0806
     */
    public function setZulassungsbescheinigungTeil2Vorhanden(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden = null): self
    {
        $this->zulassungsbescheinigungTeil2Vorhanden = $zulassungsbescheinigungTeil2Vorhanden;
        
        return $this;
    }
}
