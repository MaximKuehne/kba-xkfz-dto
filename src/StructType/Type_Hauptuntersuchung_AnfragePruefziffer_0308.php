<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Hauptuntersuchung.AnfragePruefziffer.0308 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_AnfragePruefziffer_0308 extends AbstractStructBase
{
    /**
     * The datenPruefziffer
     * @var \THAG\XKfz\StructType\DatenPruefziffer|null
     */
    public ?\THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer = null;
    /**
     * Constructor method for Type.Hauptuntersuchung.AnfragePruefziffer.0308
     * @uses Type_Hauptuntersuchung_AnfragePruefziffer_0308::setDatenPruefziffer()
     * @param \THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer
     */
    public function __construct(?\THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer = null)
    {
        $this
            ->setDatenPruefziffer($datenPruefziffer);
    }
    /**
     * Get datenPruefziffer value
     * @return \THAG\XKfz\StructType\DatenPruefziffer|null
     */
    public function getDatenPruefziffer(): ?\THAG\XKfz\StructType\DatenPruefziffer
    {
        return $this->datenPruefziffer;
    }
    /**
     * Set datenPruefziffer value
     * @param \THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer
     * @return \THAG\XKfz\StructType\Type_Hauptuntersuchung_AnfragePruefziffer_0308
     */
    public function setDatenPruefziffer(?\THAG\XKfz\StructType\DatenPruefziffer $datenPruefziffer = null): self
    {
        $this->datenPruefziffer = $datenPruefziffer;
        
        return $this;
    }
}
