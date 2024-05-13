<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.ErgebnisUebermittlungGutachten.0202
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_ErgebnisUebermittlungGutachten_0202 extends AbstractStructBase
{
    /**
     * The uebermittlungGutachten
     */
    public ?\THAG\XKfz\StructType\UebermittlungGutachten $uebermittlungGutachten = null;

    /**
     * Constructor method for Type.Gutachten.ErgebnisUebermittlungGutachten.0202
     *
     * @uses Type_Gutachten_ErgebnisUebermittlungGutachten_0202::setUebermittlungGutachten()
     */
    public function __construct(?\THAG\XKfz\StructType\UebermittlungGutachten $uebermittlungGutachten = null)
    {
        $this
            ->setUebermittlungGutachten($uebermittlungGutachten);
    }

    /**
     * Get uebermittlungGutachten value
     */
    public function getUebermittlungGutachten(): ?\THAG\XKfz\StructType\UebermittlungGutachten
    {
        return $this->uebermittlungGutachten;
    }

    /**
     * Set uebermittlungGutachten value
     */
    public function setUebermittlungGutachten(?\THAG\XKfz\StructType\UebermittlungGutachten $uebermittlungGutachten = null): self
    {
        $this->uebermittlungGutachten = $uebermittlungGutachten;

        return $this;
    }
}
