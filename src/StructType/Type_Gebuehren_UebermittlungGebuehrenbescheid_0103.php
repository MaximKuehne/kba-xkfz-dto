<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehren.UebermittlungGebuehrenbescheid.0103
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehren_UebermittlungGebuehrenbescheid_0103 extends AbstractStructBase
{
    /**
     * The gebuehrenbescheid
     * @var \THAG\XKfz\StructType\Gebuehrenbescheid|null
     */
    public ?\THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid = null;
    /**
     * Constructor method for Type.Gebuehren.UebermittlungGebuehrenbescheid.0103
     * @uses Type_Gebuehren_UebermittlungGebuehrenbescheid_0103::setGebuehrenbescheid()
     * @param \THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid
     */
    public function __construct(?\THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid = null)
    {
        $this
            ->setGebuehrenbescheid($gebuehrenbescheid);
    }
    /**
     * Get gebuehrenbescheid value
     * @return \THAG\XKfz\StructType\Gebuehrenbescheid|null
     */
    public function getGebuehrenbescheid(): ?\THAG\XKfz\StructType\Gebuehrenbescheid
    {
        return $this->gebuehrenbescheid;
    }
    /**
     * Set gebuehrenbescheid value
     * @param \THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid
     * @return \THAG\XKfz\StructType\Type_Gebuehren_UebermittlungGebuehrenbescheid_0103
     */
    public function setGebuehrenbescheid(?\THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid = null): self
    {
        $this->gebuehrenbescheid = $gebuehrenbescheid;
        
        return $this;
    }
}
