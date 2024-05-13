<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageGutachtenFreigeben.0205 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageGutachtenFreigeben_0205 extends AbstractStructBase
{
    /**
     * The gutachtenFreigeben
     * @var \THAG\XKfz\StructType\GutachtenFreigeben|null
     */
    public ?\THAG\XKfz\StructType\GutachtenFreigeben $gutachtenFreigeben = null;
    /**
     * Constructor method for Type.Gutachten.AnfrageGutachtenFreigeben.0205
     * @uses Type_Gutachten_AnfrageGutachtenFreigeben_0205::setGutachtenFreigeben()
     * @param \THAG\XKfz\StructType\GutachtenFreigeben $gutachtenFreigeben
     */
    public function __construct(?\THAG\XKfz\StructType\GutachtenFreigeben $gutachtenFreigeben = null)
    {
        $this
            ->setGutachtenFreigeben($gutachtenFreigeben);
    }
    /**
     * Get gutachtenFreigeben value
     * @return \THAG\XKfz\StructType\GutachtenFreigeben|null
     */
    public function getGutachtenFreigeben(): ?\THAG\XKfz\StructType\GutachtenFreigeben
    {
        return $this->gutachtenFreigeben;
    }
    /**
     * Set gutachtenFreigeben value
     * @param \THAG\XKfz\StructType\GutachtenFreigeben $gutachtenFreigeben
     * @return \THAG\XKfz\StructType\Type_Gutachten_AnfrageGutachtenFreigeben_0205
     */
    public function setGutachtenFreigeben(?\THAG\XKfz\StructType\GutachtenFreigeben $gutachtenFreigeben = null): self
    {
        $this->gutachtenFreigeben = $gutachtenFreigeben;
        
        return $this;
    }
}
