<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorsystem.AntragAusserbetriebsetzungGrosskunde.0708
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorsystem_AntragAusserbetriebsetzungGrosskunde_0708 extends AbstractStructBase
{
    /**
     * The ausserbetriebsetzungGrosskunde
     */
    public ?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde = null;

    /**
     * Constructor method for Type.Vorsystem.AntragAusserbetriebsetzungGrosskunde.0708
     *
     * @uses Type_Vorsystem_AntragAusserbetriebsetzungGrosskunde_0708::setAusserbetriebsetzungGrosskunde()
     */
    public function __construct(?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde = null)
    {
        $this
            ->setAusserbetriebsetzungGrosskunde($ausserbetriebsetzungGrosskunde);
    }

    /**
     * Get ausserbetriebsetzungGrosskunde value
     */
    public function getAusserbetriebsetzungGrosskunde(): ?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde
    {
        return $this->ausserbetriebsetzungGrosskunde;
    }

    /**
     * Set ausserbetriebsetzungGrosskunde value
     */
    public function setAusserbetriebsetzungGrosskunde(?\THAG\XKfz\StructType\AusserbetriebsetzungGrosskunde $ausserbetriebsetzungGrosskunde = null): self
    {
        $this->ausserbetriebsetzungGrosskunde = $ausserbetriebsetzungGrosskunde;

        return $this;
    }
}
