<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bremsmessung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bremsmessung extends AbstractStructBase
{
    /**
     * The bremsachse
     * @var \THAG\XKfz\StructType\Type_Bremsachse|null
     */
    public ?\THAG\XKfz\StructType\Type_Bremsachse $bremsachse = null;
    /**
     * Constructor method for Type.Bremsmessung
     * @uses Type_Bremsmessung::setBremsachse()
     * @param \THAG\XKfz\StructType\Type_Bremsachse $bremsachse
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Bremsachse $bremsachse = null)
    {
        $this
            ->setBremsachse($bremsachse);
    }
    /**
     * Get bremsachse value
     * @return \THAG\XKfz\StructType\Type_Bremsachse|null
     */
    public function getBremsachse(): ?\THAG\XKfz\StructType\Type_Bremsachse
    {
        return $this->bremsachse;
    }
    /**
     * Set bremsachse value
     * @param \THAG\XKfz\StructType\Type_Bremsachse $bremsachse
     * @return \THAG\XKfz\StructType\Type_Bremsmessung
     */
    public function setBremsachse(?\THAG\XKfz\StructType\Type_Bremsachse $bremsachse = null): self
    {
        $this->bremsachse = $bremsachse;
        
        return $this;
    }
}
