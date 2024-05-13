<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.AntragAusserbetriebsetzungGrosskunde.0708
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_AntragAusserbetriebsetzungGrosskunde_0708 extends AbstractStructBase
{
    /**
     * The ausserbetriebsetzungGrosskunde
     * @var \THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde|null
     */
    public ?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde = null;
    /**
     * Constructor method for Type.Vorsystem.AntragAusserbetriebsetzungGrosskunde.0708
     * @uses Type_Vorsystem_AntragAusserbetriebsetzungGrosskunde_0708::setAusserbetriebsetzungGrosskunde()
     * @param \THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde
     */
    public function __construct(?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde = null)
    {
        $this
            ->setAusserbetriebsetzungGrosskunde($ausserbetriebsetzungGrosskunde);
    }
    /**
     * Get ausserbetriebsetzungGrosskunde value
     * @return \THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde|null
     */
    public function getAusserbetriebsetzungGrosskunde(): ?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde
    {
        return $this->ausserbetriebsetzungGrosskunde;
    }
    /**
     * Set ausserbetriebsetzungGrosskunde value
     * @param \THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde
     * @return \THAG\XKfz\StructType\Type_Vorsystem_AntragAusserbetriebsetzungGrosskunde_0708
     */
    public function setAusserbetriebsetzungGrosskunde(?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde = null): self
    {
        $this->ausserbetriebsetzungGrosskunde = $ausserbetriebsetzungGrosskunde;
        
        return $this;
    }
}
