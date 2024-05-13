<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Auskunft.AnfrageZulassungsbescheinigungTeil2Vorhanden.0805 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Auskunft_AnfrageZulassungsbescheinigungTeil2Vorhanden_0805 extends AbstractStructBase
{
    /**
     * The zulassungsbescheinigungTeil2VorhandenAnfragen
     */
    public ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2VorhandenAnfragen $zulassungsbescheinigungTeil2VorhandenAnfragen = null;

    /**
     * Constructor method for
     * Type.Auskunft.AnfrageZulassungsbescheinigungTeil2Vorhanden.0805
     *
     * @uses Type_Auskunft_AnfrageZulassungsbescheinigungTeil2Vorhanden_0805::setZulassungsbescheinigungTeil2VorhandenAnfragen()
     */
    public function __construct(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2VorhandenAnfragen $zulassungsbescheinigungTeil2VorhandenAnfragen = null)
    {
        $this
            ->setZulassungsbescheinigungTeil2VorhandenAnfragen($zulassungsbescheinigungTeil2VorhandenAnfragen);
    }

    /**
     * Get zulassungsbescheinigungTeil2VorhandenAnfragen value
     */
    public function getZulassungsbescheinigungTeil2VorhandenAnfragen(): ?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2VorhandenAnfragen
    {
        return $this->zulassungsbescheinigungTeil2VorhandenAnfragen;
    }

    /**
     * Set zulassungsbescheinigungTeil2VorhandenAnfragen value
     */
    public function setZulassungsbescheinigungTeil2VorhandenAnfragen(?\THAG\XKfz\StructType\ZulassungsbescheinigungTeil2VorhandenAnfragen $zulassungsbescheinigungTeil2VorhandenAnfragen = null): self
    {
        $this->zulassungsbescheinigungTeil2VorhandenAnfragen = $zulassungsbescheinigungTeil2VorhandenAnfragen;

        return $this;
    }
}
