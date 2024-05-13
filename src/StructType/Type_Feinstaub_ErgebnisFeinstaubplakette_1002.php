<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Feinstaub.ErgebnisFeinstaubplakette.1002 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Feinstaub_ErgebnisFeinstaubplakette_1002 extends AbstractStructBase
{
    /**
     * The ergebnisFeinstaubplakette
     * @var \THAG\XKfz\StructType\ErgebnisFeinstaubplakette|null
     */
    public ?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette = null;
    /**
     * Constructor method for Type.Feinstaub.ErgebnisFeinstaubplakette.1002
     * @uses Type_Feinstaub_ErgebnisFeinstaubplakette_1002::setErgebnisFeinstaubplakette()
     * @param \THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette
     */
    public function __construct(?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette = null)
    {
        $this
            ->setErgebnisFeinstaubplakette($ergebnisFeinstaubplakette);
    }
    /**
     * Get ergebnisFeinstaubplakette value
     * @return \THAG\XKfz\StructType\ErgebnisFeinstaubplakette|null
     */
    public function getErgebnisFeinstaubplakette(): ?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette
    {
        return $this->ergebnisFeinstaubplakette;
    }
    /**
     * Set ergebnisFeinstaubplakette value
     * @param \THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette
     * @return \THAG\XKfz\StructType\Type_Feinstaub_ErgebnisFeinstaubplakette_1002
     */
    public function setErgebnisFeinstaubplakette(?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette = null): self
    {
        $this->ergebnisFeinstaubplakette = $ergebnisFeinstaubplakette;
        
        return $this;
    }
}
