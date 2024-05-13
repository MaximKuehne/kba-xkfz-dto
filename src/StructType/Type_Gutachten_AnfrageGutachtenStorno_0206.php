<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageGutachtenStorno.0206 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageGutachtenStorno_0206 extends AbstractStructBase
{
    /**
     * The gutachtenStornieren
     */
    public ?\THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren = null;

    /**
     * Constructor method for Type.Gutachten.AnfrageGutachtenStorno.0206
     *
     * @uses Type_Gutachten_AnfrageGutachtenStorno_0206::setGutachtenStornieren()
     */
    public function __construct(?\THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren = null)
    {
        $this
            ->setGutachtenStornieren($gutachtenStornieren);
    }

    /**
     * Get gutachtenStornieren value
     */
    public function getGutachtenStornieren(): ?\THAG\XKfz\StructType\GutachtenStornieren
    {
        return $this->gutachtenStornieren;
    }

    /**
     * Set gutachtenStornieren value
     */
    public function setGutachtenStornieren(?\THAG\XKfz\StructType\GutachtenStornieren $gutachtenStornieren = null): self
    {
        $this->gutachtenStornieren = $gutachtenStornieren;

        return $this;
    }
}
