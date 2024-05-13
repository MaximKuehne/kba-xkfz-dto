<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehren.UebermittlungGebuehrenbescheid.0103
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehren_UebermittlungGebuehrenbescheid_0103 extends AbstractStructBase
{
    /**
     * The gebuehrenbescheid
     */
    public ?\THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid = null;

    /**
     * Constructor method for Type.Gebuehren.UebermittlungGebuehrenbescheid.0103
     *
     * @uses Type_Gebuehren_UebermittlungGebuehrenbescheid_0103::setGebuehrenbescheid()
     */
    public function __construct(?\THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid = null)
    {
        $this
            ->setGebuehrenbescheid($gebuehrenbescheid);
    }

    /**
     * Get gebuehrenbescheid value
     */
    public function getGebuehrenbescheid(): ?\THAG\XKfz\StructType\Gebuehrenbescheid
    {
        return $this->gebuehrenbescheid;
    }

    /**
     * Set gebuehrenbescheid value
     */
    public function setGebuehrenbescheid(?\THAG\XKfz\StructType\Gebuehrenbescheid $gebuehrenbescheid = null): self
    {
        $this->gebuehrenbescheid = $gebuehrenbescheid;

        return $this;
    }
}
