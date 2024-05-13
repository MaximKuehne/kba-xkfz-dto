<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Hauptuntersuchung.AnfrageSchluesselPruefziffer.0305
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Hauptuntersuchung_AnfrageSchluesselPruefziffer_0305 extends AbstractStructBase
{
    /**
     * The schluesselPruefziffer
     */
    public ?\THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer = null;

    /**
     * Constructor method for Type.Hauptuntersuchung.AnfrageSchluesselPruefziffer.0305
     *
     * @uses Type_Hauptuntersuchung_AnfrageSchluesselPruefziffer_0305::setSchluesselPruefziffer()
     */
    public function __construct(?\THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer = null)
    {
        $this
            ->setSchluesselPruefziffer($schluesselPruefziffer);
    }

    /**
     * Get schluesselPruefziffer value
     */
    public function getSchluesselPruefziffer(): ?\THAG\XKfz\StructType\SchluesselPruefziffer
    {
        return $this->schluesselPruefziffer;
    }

    /**
     * Set schluesselPruefziffer value
     */
    public function setSchluesselPruefziffer(?\THAG\XKfz\StructType\SchluesselPruefziffer $schluesselPruefziffer = null): self
    {
        $this->schluesselPruefziffer = $schluesselPruefziffer;

        return $this;
    }
}
