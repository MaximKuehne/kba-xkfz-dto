<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.ErgebnisGutachtenstatus.0208 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_ErgebnisGutachtenstatus_0208 extends AbstractStructBase
{
    /**
     * The statusGutachten
     * @var \THAG\XKfz\StructType\StatusGutachten|null
     */
    public ?\THAG\XKfz\StructType\StatusGutachten $statusGutachten = null;
    /**
     * Constructor method for Type.Gutachten.ErgebnisGutachtenstatus.0208
     * @uses Type_Gutachten_ErgebnisGutachtenstatus_0208::setStatusGutachten()
     * @param \THAG\XKfz\StructType\StatusGutachten $statusGutachten
     */
    public function __construct(?\THAG\XKfz\StructType\StatusGutachten $statusGutachten = null)
    {
        $this
            ->setStatusGutachten($statusGutachten);
    }
    /**
     * Get statusGutachten value
     * @return \THAG\XKfz\StructType\StatusGutachten|null
     */
    public function getStatusGutachten(): ?\THAG\XKfz\StructType\StatusGutachten
    {
        return $this->statusGutachten;
    }
    /**
     * Set statusGutachten value
     * @param \THAG\XKfz\StructType\StatusGutachten $statusGutachten
     * @return \THAG\XKfz\StructType\Type_Gutachten_ErgebnisGutachtenstatus_0208
     */
    public function setStatusGutachten(?\THAG\XKfz\StructType\StatusGutachten $statusGutachten = null): self
    {
        $this->statusGutachten = $statusGutachten;
        
        return $this;
    }
}
