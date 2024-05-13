<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Feinstaub.AnfrageFeinstaubplakette.1001 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Feinstaub_AnfrageFeinstaubplakette_1001 extends AbstractStructBase
{
    /**
     * The anfrageFeinstaubplakette
     * @var \THAG\XKfz\StructType\AnfrageFeinstaubplakette|null
     */
    public ?\THAG\XKfz\StructType\AnfrageFeinstaubplakette $anfrageFeinstaubplakette = null;
    /**
     * Constructor method for Type.Feinstaub.AnfrageFeinstaubplakette.1001
     * @uses Type_Feinstaub_AnfrageFeinstaubplakette_1001::setAnfrageFeinstaubplakette()
     * @param \THAG\XKfz\StructType\AnfrageFeinstaubplakette $anfrageFeinstaubplakette
     */
    public function __construct(?\THAG\XKfz\StructType\AnfrageFeinstaubplakette $anfrageFeinstaubplakette = null)
    {
        $this
            ->setAnfrageFeinstaubplakette($anfrageFeinstaubplakette);
    }
    /**
     * Get anfrageFeinstaubplakette value
     * @return \THAG\XKfz\StructType\AnfrageFeinstaubplakette|null
     */
    public function getAnfrageFeinstaubplakette(): ?\THAG\XKfz\StructType\AnfrageFeinstaubplakette
    {
        return $this->anfrageFeinstaubplakette;
    }
    /**
     * Set anfrageFeinstaubplakette value
     * @param \THAG\XKfz\StructType\AnfrageFeinstaubplakette $anfrageFeinstaubplakette
     * @return \THAG\XKfz\StructType\Type_Feinstaub_AnfrageFeinstaubplakette_1001
     */
    public function setAnfrageFeinstaubplakette(?\THAG\XKfz\StructType\AnfrageFeinstaubplakette $anfrageFeinstaubplakette = null): self
    {
        $this->anfrageFeinstaubplakette = $anfrageFeinstaubplakette;
        
        return $this;
    }
}
