<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Feinstaub.ErgebnisFeinstaubplakette.1002 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Feinstaub_ErgebnisFeinstaubplakette_1002 extends AbstractStructBase
{
    /**
     * The ergebnisFeinstaubplakette
     */
    public ?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette = null;

    /**
     * Constructor method for Type.Feinstaub.ErgebnisFeinstaubplakette.1002
     *
     * @uses Type_Feinstaub_ErgebnisFeinstaubplakette_1002::setErgebnisFeinstaubplakette()
     */
    public function __construct(?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette = null)
    {
        $this
            ->setErgebnisFeinstaubplakette($ergebnisFeinstaubplakette);
    }

    /**
     * Get ergebnisFeinstaubplakette value
     */
    public function getErgebnisFeinstaubplakette(): ?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette
    {
        return $this->ergebnisFeinstaubplakette;
    }

    /**
     * Set ergebnisFeinstaubplakette value
     */
    public function setErgebnisFeinstaubplakette(?\THAG\XKfz\StructType\ErgebnisFeinstaubplakette $ergebnisFeinstaubplakette = null): self
    {
        $this->ergebnisFeinstaubplakette = $ergebnisFeinstaubplakette;

        return $this;
    }
}
