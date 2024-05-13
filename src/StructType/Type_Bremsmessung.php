<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bremsmessung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bremsmessung extends AbstractStructBase
{
    /**
     * The bremsachse
     */
    public ?\THAG\XKfz\StructType\Type_Bremsachse $bremsachse = null;

    /**
     * Constructor method for Type.Bremsmessung
     *
     * @uses Type_Bremsmessung::setBremsachse()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Bremsachse $bremsachse = null)
    {
        $this
            ->setBremsachse($bremsachse);
    }

    /**
     * Get bremsachse value
     */
    public function getBremsachse(): ?\THAG\XKfz\StructType\Type_Bremsachse
    {
        return $this->bremsachse;
    }

    /**
     * Set bremsachse value
     */
    public function setBremsachse(?\THAG\XKfz\StructType\Type_Bremsachse $bremsachse = null): self
    {
        $this->bremsachse = $bremsachse;

        return $this;
    }
}
