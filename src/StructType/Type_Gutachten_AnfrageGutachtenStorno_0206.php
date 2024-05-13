<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageGutachtenStorno.0206 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageGutachtenStorno_0206 extends AbstractStructBase
{
    /**
     * The gutachtenStornieren
     * @var \THAG\XKfz\StructType\GutachtenStornieren|null
     */
    public ?\THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren = null;
    /**
     * Constructor method for Type.Gutachten.AnfrageGutachtenStorno.0206
     * @uses Type_Gutachten_AnfrageGutachtenStorno_0206::setGutachtenStornieren()
     * @param \THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren
     */
    public function __construct(?\THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren = null)
    {
        $this
            ->setGutachtenStornieren($gutachtenStornieren);
    }
    /**
     * Get gutachtenStornieren value
     * @return \THAG\XKfz\StructType\GutachtenStornieren|null
     */
    public function getGutachtenStornieren(): ?\THAG\XKfz\StructType\GutachtenStornieren
    {
        return $this->gutachtenStornieren;
    }
    /**
     * Set gutachtenStornieren value
     * @param \THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren
     * @return \THAG\XKfz\StructType\Type_Gutachten_AnfrageGutachtenStorno_0206
     */
    public function setGutachtenStornieren(?\THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren = null): self
    {
        $this->gutachtenStornieren = $gutachtenStornieren;
        
        return $this;
    }
}
