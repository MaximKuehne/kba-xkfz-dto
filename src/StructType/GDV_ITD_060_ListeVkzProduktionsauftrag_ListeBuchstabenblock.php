<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GDV_ITD_060.ListeVkzProduktionsauftrag.ListeBuchstabenblock StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock extends AbstractStructBase
{
    /**
     * The Buchstabenblock
     * @var string|null
     */
    public ?string $Buchstabenblock = null;
    /**
     * Constructor method for
     * GDV_ITD_060.ListeVkzProduktionsauftrag.ListeBuchstabenblock
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock::setBuchstabenblock()
     * @param string $buchstabenblock
     */
    public function __construct(?string $buchstabenblock = null)
    {
        $this
            ->setBuchstabenblock($buchstabenblock);
    }
    /**
     * Get Buchstabenblock value
     * @return string|null
     */
    public function getBuchstabenblock(): ?string
    {
        return $this->Buchstabenblock;
    }
    /**
     * Set Buchstabenblock value
     * @param string $buchstabenblock
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock
     */
    public function setBuchstabenblock(?string $buchstabenblock = null): self
    {
        $this->Buchstabenblock = $buchstabenblock;
        
        return $this;
    }
}
