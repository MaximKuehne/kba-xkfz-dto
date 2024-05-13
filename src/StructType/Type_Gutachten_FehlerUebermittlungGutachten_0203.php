<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.FehlerUebermittlungGutachten.0203
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_FehlerUebermittlungGutachten_0203 extends AbstractStructBase
{
    /**
     * The nutzungsinformationGutachten
     * @var \THAG\XKfz\StructType\NutzungsinformationGutachten|null
     */
    public ?\THAG\XKfz\StructType\NutzungsinformationGutachten $nutzungsinformationGutachten = null;
    /**
     * Constructor method for Type.Gutachten.FehlerUebermittlungGutachten.0203
     * @uses Type_Gutachten_FehlerUebermittlungGutachten_0203::setNutzungsinformationGutachten()
     * @param \THAG\XKfz\StructType\NutzungsinformationGutachten $nutzungsinformationGutachten
     */
    public function __construct(?\THAG\XKfz\StructType\NutzungsinformationGutachten $nutzungsinformationGutachten = null)
    {
        $this
            ->setNutzungsinformationGutachten($nutzungsinformationGutachten);
    }
    /**
     * Get nutzungsinformationGutachten value
     * @return \THAG\XKfz\StructType\NutzungsinformationGutachten|null
     */
    public function getNutzungsinformationGutachten(): ?\THAG\XKfz\StructType\NutzungsinformationGutachten
    {
        return $this->nutzungsinformationGutachten;
    }
    /**
     * Set nutzungsinformationGutachten value
     * @param \THAG\XKfz\StructType\NutzungsinformationGutachten $nutzungsinformationGutachten
     * @return \THAG\XKfz\StructType\Type_Gutachten_FehlerUebermittlungGutachten_0203
     */
    public function setNutzungsinformationGutachten(?\THAG\XKfz\StructType\NutzungsinformationGutachten $nutzungsinformationGutachten = null): self
    {
        $this->nutzungsinformationGutachten = $nutzungsinformationGutachten;
        
        return $this;
    }
}
