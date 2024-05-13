<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVbStatusPruefauftrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVbStatusPruefauftrag extends AbstractStructBase
{
    /**
     * The VbStatusPruefauftrag
     * @var \THAG\XKfz\StructType\VbStatusPruefauftrag|null
     */
    public ?\THAG\XKfz\StructType\VbStatusPruefauftrag $VbStatusPruefauftrag = null;
    /**
     * Constructor method for ListeVbStatusPruefauftrag
     * @uses ListeVbStatusPruefauftrag::setVbStatusPruefauftrag()
     * @param \THAG\XKfz\StructType\VbStatusPruefauftrag $vbStatusPruefauftrag
     */
    public function __construct(?\THAG\XKfz\StructType\VbStatusPruefauftrag $vbStatusPruefauftrag = null)
    {
        $this
            ->setVbStatusPruefauftrag($vbStatusPruefauftrag);
    }
    /**
     * Get VbStatusPruefauftrag value
     * @return \THAG\XKfz\StructType\VbStatusPruefauftrag|null
     */
    public function getVbStatusPruefauftrag(): ?\THAG\XKfz\StructType\VbStatusPruefauftrag
    {
        return $this->VbStatusPruefauftrag;
    }
    /**
     * Set VbStatusPruefauftrag value
     * @param \THAG\XKfz\StructType\VbStatusPruefauftrag $vbStatusPruefauftrag
     * @return \THAG\XKfz\StructType\ListeVbStatusPruefauftrag
     */
    public function setVbStatusPruefauftrag(?\THAG\XKfz\StructType\VbStatusPruefauftrag $vbStatusPruefauftrag = null): self
    {
        $this->VbStatusPruefauftrag = $vbStatusPruefauftrag;
        
        return $this;
    }
}
