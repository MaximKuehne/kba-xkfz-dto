<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gutachten.ErgebnisGutachtenstatus.0208 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gutachten_ErgebnisGutachtenstatus_0208 extends AbstractStructBase
{
    /**
     * The statusGutachten
     */
    public ?\THAG\XKfz\StructType\StatusGutachten $statusGutachten = null;

    /**
     * Constructor method for Type.Gutachten.ErgebnisGutachtenstatus.0208
     *
     * @uses Type_Gutachten_ErgebnisGutachtenstatus_0208::setStatusGutachten()
     */
    public function __construct(?\THAG\XKfz\StructType\StatusGutachten $statusGutachten = null)
    {
        $this
            ->setStatusGutachten($statusGutachten);
    }

    /**
     * Get statusGutachten value
     */
    public function getStatusGutachten(): ?\THAG\XKfz\StructType\StatusGutachten
    {
        return $this->statusGutachten;
    }

    /**
     * Set statusGutachten value
     */
    public function setStatusGutachten(?\THAG\XKfz\StructType\StatusGutachten $statusGutachten = null): self
    {
        $this->statusGutachten = $statusGutachten;

        return $this;
    }
}
