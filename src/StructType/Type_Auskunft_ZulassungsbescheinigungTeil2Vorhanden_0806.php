<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Auskunft.ZulassungsbescheinigungTeil2Vorhanden.0806
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_ZulassungsbescheinigungTeil2Vorhanden_0806 extends AbstractStructBase
{
    /**
     * The zulassungsbescheinigungTeil2Vorhanden
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden = null;

    /**
     * Constructor method for Type.Auskunft.ZulassungsbescheinigungTeil2Vorhanden.0806
     *
     * @uses Type_Auskunft_ZulassungsbescheinigungTeil2Vorhanden_0806::setZulassungsbescheinigungTeil2Vorhanden()
     */
    public function __construct(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden = null)
    {
        $this
            ->setZulassungsbescheinigungTeil2Vorhanden($zulassungsbescheinigungTeil2Vorhanden);
    }

    /**
     * Get zulassungsbescheinigungTeil2Vorhanden value
     */
    public function getZulassungsbescheinigungTeil2Vorhanden(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden
    {
        return $this->zulassungsbescheinigungTeil2Vorhanden;
    }

    /**
     * Set zulassungsbescheinigungTeil2Vorhanden value
     */
    public function setZulassungsbescheinigungTeil2Vorhanden(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2Vorhanden $zulassungsbescheinigungTeil2Vorhanden = null): self
    {
        $this->zulassungsbescheinigungTeil2Vorhanden = $zulassungsbescheinigungTeil2Vorhanden;

        return $this;
    }
}
