<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.Antragskopie.0709 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_Antragskopie_0709 extends AbstractStructBase
{
    /**
     * The elektronischerAntrag
     * @var \THAG\XKfz\StructType\ElektronischerAntrag|null
     */
    public ?\THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag = null;
    /**
     * Constructor method for Type.Vorsystem.Antragskopie.0709
     * @uses Type_Vorsystem_Antragskopie_0709::setElektronischerAntrag()
     * @param \THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag
     */
    public function __construct(?\THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag = null)
    {
        $this
            ->setElektronischerAntrag($elektronischerAntrag);
    }
    /**
     * Get elektronischerAntrag value
     * @return \THAG\XKfz\StructType\ElektronischerAntrag|null
     */
    public function getElektronischerAntrag(): ?\THAG\XKfz\StructType\ElektronischerAntrag
    {
        return $this->elektronischerAntrag;
    }
    /**
     * Set elektronischerAntrag value
     * @param \THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag
     * @return \THAG\XKfz\StructType\Type_Vorsystem_Antragskopie_0709
     */
    public function setElektronischerAntrag(?\THAG\XKfz\StructType\ElektronischerAntrag $elektronischerAntrag = null): self
    {
        $this->elektronischerAntrag = $elektronischerAntrag;
        
        return $this;
    }
}
