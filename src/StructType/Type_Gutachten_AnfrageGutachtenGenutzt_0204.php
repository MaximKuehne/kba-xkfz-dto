<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageGutachtenGenutzt.0204 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageGutachtenGenutzt_0204 extends AbstractStructBase
{
    /**
     * The gutachtenVerwenden
     */
    public ?\THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden = null;

    /**
     * Constructor method for Type.Gutachten.AnfrageGutachtenGenutzt.0204
     *
     * @uses Type_Gutachten_AnfrageGutachtenGenutzt_0204::setGutachtenVerwenden()
     */
    public function __construct(?\THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden = null)
    {
        $this
            ->setGutachtenVerwenden($gutachtenVerwenden);
    }

    /**
     * Get gutachtenVerwenden value
     */
    public function getGutachtenVerwenden(): ?\THAG\XKfz\StructType\GutachtenVerwenden
    {
        return $this->gutachtenVerwenden;
    }

    /**
     * Set gutachtenVerwenden value
     */
    public function setGutachtenVerwenden(?\THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden = null): self
    {
        $this->gutachtenVerwenden = $gutachtenVerwenden;

        return $this;
    }
}
