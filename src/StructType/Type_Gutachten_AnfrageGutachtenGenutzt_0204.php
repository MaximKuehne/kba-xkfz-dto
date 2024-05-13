<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageGutachtenGenutzt.0204 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageGutachtenGenutzt_0204 extends AbstractStructBase
{
    /**
     * The gutachtenVerwenden
     * @var \THAG\XKfz\StructType\GutachtenVerwenden|null
     */
    public ?\THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden = null;
    /**
     * Constructor method for Type.Gutachten.AnfrageGutachtenGenutzt.0204
     * @uses Type_Gutachten_AnfrageGutachtenGenutzt_0204::setGutachtenVerwenden()
     * @param \THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden
     */
    public function __construct(?\THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden = null)
    {
        $this
            ->setGutachtenVerwenden($gutachtenVerwenden);
    }
    /**
     * Get gutachtenVerwenden value
     * @return \THAG\XKfz\StructType\GutachtenVerwenden|null
     */
    public function getGutachtenVerwenden(): ?\THAG\XKfz\StructType\GutachtenVerwenden
    {
        return $this->gutachtenVerwenden;
    }
    /**
     * Set gutachtenVerwenden value
     * @param \THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden
     * @return \THAG\XKfz\StructType\Type_Gutachten_AnfrageGutachtenGenutzt_0204
     */
    public function setGutachtenVerwenden(?\THAG\XKfz\StructType\GutachtenVerwenden $gutachtenVerwenden = null): self
    {
        $this->gutachtenVerwenden = $gutachtenVerwenden;
        
        return $this;
    }
}
