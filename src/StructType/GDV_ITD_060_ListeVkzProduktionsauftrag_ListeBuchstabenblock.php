<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GDV_ITD_060.ListeVkzProduktionsauftrag.ListeBuchstabenblock StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock extends AbstractStructBase
{
    /**
     * The Buchstabenblock
     */
    public ?string $Buchstabenblock = null;

    /**
     * Constructor method for
     * GDV_ITD_060.ListeVkzProduktionsauftrag.ListeBuchstabenblock
     *
     * @uses GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock::setBuchstabenblock()
     */
    public function __construct(?string $buchstabenblock = null)
    {
        $this
            ->setBuchstabenblock($buchstabenblock);
    }

    /**
     * Get Buchstabenblock value
     */
    public function getBuchstabenblock(): ?string
    {
        return $this->Buchstabenblock;
    }

    /**
     * Set Buchstabenblock value
     */
    public function setBuchstabenblock(?string $buchstabenblock = null): self
    {
        $this->Buchstabenblock = $buchstabenblock;

        return $this;
    }
}
