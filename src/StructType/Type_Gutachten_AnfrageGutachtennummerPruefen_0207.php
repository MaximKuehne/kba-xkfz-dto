<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.AnfrageGutachtennummerPruefen.0207
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_AnfrageGutachtennummerPruefen_0207 extends AbstractStructBase
{
    /**
     * The gutachtennummerPruefen
     * @var \THAG\XKfz\StructType\GutachtennummerPruefen|null
     */
    public ?\THAG\XKfz\StructType\GutachtennummerPruefen $gutachtennummerPruefen = null;
    /**
     * Constructor method for Type.Gutachten.AnfrageGutachtennummerPruefen.0207
     * @uses Type_Gutachten_AnfrageGutachtennummerPruefen_0207::setGutachtennummerPruefen()
     * @param \THAG\XKfz\StructType\GutachtennummerPruefen $gutachtennummerPruefen
     */
    public function __construct(?\THAG\XKfz\StructType\GutachtennummerPruefen $gutachtennummerPruefen = null)
    {
        $this
            ->setGutachtennummerPruefen($gutachtennummerPruefen);
    }
    /**
     * Get gutachtennummerPruefen value
     * @return \THAG\XKfz\StructType\GutachtennummerPruefen|null
     */
    public function getGutachtennummerPruefen(): ?\THAG\XKfz\StructType\GutachtennummerPruefen
    {
        return $this->gutachtennummerPruefen;
    }
    /**
     * Set gutachtennummerPruefen value
     * @param \THAG\XKfz\StructType\GutachtennummerPruefen $gutachtennummerPruefen
     * @return \THAG\XKfz\StructType\Type_Gutachten_AnfrageGutachtennummerPruefen_0207
     */
    public function setGutachtennummerPruefen(?\THAG\XKfz\StructType\GutachtennummerPruefen $gutachtennummerPruefen = null): self
    {
        $this->gutachtennummerPruefen = $gutachtennummerPruefen;
        
        return $this;
    }
}
