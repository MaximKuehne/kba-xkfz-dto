<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Hauptuntersuchung.ErgebnisPruefziffer.0309 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_ErgebnisPruefziffer_0309 extends AbstractStructBase
{
    /**
     * The datenPruefziffer
     */
    public ?\THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer = null;

    /**
     * Constructor method for Type.Hauptuntersuchung.ErgebnisPruefziffer.0309
     *
     * @uses Type_Hauptuntersuchung_ErgebnisPruefziffer_0309::setDatenPruefziffer()
     */
    public function __construct(?\THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer = null)
    {
        $this
            ->setDatenPruefziffer($datenPruefziffer);
    }

    /**
     * Get datenPruefziffer value
     */
    public function getDatenPruefziffer(): ?\THAG\XKfz\StructType\DatenPruefziffer
    {
        return $this->datenPruefziffer;
    }

    /**
     * Set datenPruefziffer value
     */
    public function setDatenPruefziffer(?\THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer = null): self
    {
        $this->datenPruefziffer = $datenPruefziffer;

        return $this;
    }
}
