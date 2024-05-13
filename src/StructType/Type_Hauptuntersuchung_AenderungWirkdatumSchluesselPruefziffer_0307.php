<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Type.Hauptuntersuchung.AenderungWirkdatumSchluesselPruefziffer.0307 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_AenderungWirkdatumSchluesselPruefziffer_0307 extends AbstractStructBase
{
    /**
     * The schluesselPruefziffer
     * @var \THAG\XKfz\StructType\SchluesselPruefziffer|null
     */
    public ?\THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer = null;
    /**
     * Constructor method for
     * Type.Hauptuntersuchung.AenderungWirkdatumSchluesselPruefziffer.0307
     * @uses Type_Hauptuntersuchung_AenderungWirkdatumSchluesselPruefziffer_0307::setSchluesselPruefziffer()
     * @param \THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer
     */
    public function __construct(?\THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer = null)
    {
        $this
            ->setSchluesselPruefziffer($schluesselPruefziffer);
    }
    /**
     * Get schluesselPruefziffer value
     * @return \THAG\XKfz\StructType\SchluesselPruefziffer|null
     */
    public function getSchluesselPruefziffer(): ?\THAG\XKfz\StructType\SchluesselPruefziffer
    {
        return $this->schluesselPruefziffer;
    }
    /**
     * Set schluesselPruefziffer value
     * @param \THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer
     * @return \THAG\XKfz\StructType\Type_Hauptuntersuchung_AenderungWirkdatumSchluesselPruefziffer_0307
     */
    public function setSchluesselPruefziffer(?\THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer = null): self
    {
        $this->schluesselPruefziffer = $schluesselPruefziffer;
        
        return $this;
    }
}
