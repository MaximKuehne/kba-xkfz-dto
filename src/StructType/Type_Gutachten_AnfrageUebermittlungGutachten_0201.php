<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageUebermittlungGutachten.0201
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageUebermittlungGutachten_0201 extends AbstractStructBase
{
    /**
     * The uebermittlungGutachtenAnfragen
     */
    public ?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen = null;

    /**
     * Constructor method for Type.Gutachten.AnfrageUebermittlungGutachten.0201
     *
     * @uses Type_Gutachten_AnfrageUebermittlungGutachten_0201::setUebermittlungGutachtenAnfragen()
     */
    public function __construct(?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen = null)
    {
        $this
            ->setUebermittlungGutachtenAnfragen($uebermittlungGutachtenAnfragen);
    }

    /**
     * Get uebermittlungGutachtenAnfragen value
     */
    public function getUebermittlungGutachtenAnfragen(): ?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen
    {
        return $this->uebermittlungGutachtenAnfragen;
    }

    /**
     * Set uebermittlungGutachtenAnfragen value
     */
    public function setUebermittlungGutachtenAnfragen(?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen = null): self
    {
        $this->uebermittlungGutachtenAnfragen = $uebermittlungGutachtenAnfragen;

        return $this;
    }
}
