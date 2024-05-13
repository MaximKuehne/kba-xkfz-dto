<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageUebermittlungGutachten.0201
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageUebermittlungGutachten_0201 extends AbstractStructBase
{
    /**
     * The uebermittlungGutachtenAnfragen
     * @var \THAG\XKfz\StructType\UebermittlungGutachtenAnfragen|null
     */
    public ?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen = null;
    /**
     * Constructor method for Type.Gutachten.AnfrageUebermittlungGutachten.0201
     * @uses Type_Gutachten_AnfrageUebermittlungGutachten_0201::setUebermittlungGutachtenAnfragen()
     * @param \THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen
     */
    public function __construct(?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen = null)
    {
        $this
            ->setUebermittlungGutachtenAnfragen($uebermittlungGutachtenAnfragen);
    }
    /**
     * Get uebermittlungGutachtenAnfragen value
     * @return \THAG\XKfz\StructType\UebermittlungGutachtenAnfragen|null
     */
    public function getUebermittlungGutachtenAnfragen(): ?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen
    {
        return $this->uebermittlungGutachtenAnfragen;
    }
    /**
     * Set uebermittlungGutachtenAnfragen value
     * @param \THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen
     * @return \THAG\XKfz\StructType\Type_Gutachten_AnfrageUebermittlungGutachten_0201
     */
    public function setUebermittlungGutachtenAnfragen(?\THAG\XKfz\StructType\UebermittlungGutachtenAnfragen $uebermittlungGutachtenAnfragen = null): self
    {
        $this->uebermittlungGutachtenAnfragen = $uebermittlungGutachtenAnfragen;
        
        return $this;
    }
}
