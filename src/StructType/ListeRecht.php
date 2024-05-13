<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeRecht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeRecht extends AbstractStructBase
{
    /**
     * The Recht
     */
    public ?\THAG\XKfz\StructType\Recht $Recht = null;

    /**
     * Constructor method for ListeRecht
     *
     * @uses ListeRecht::setRecht()
     */
    public function __construct(?\THAG\XKfz\StructType\Recht $recht = null)
    {
        $this
            ->setRecht($recht);
    }

    /**
     * Get Recht value
     */
    public function getRecht(): ?\THAG\XKfz\StructType\Recht
    {
        return $this->Recht;
    }

    /**
     * Set Recht value
     */
    public function setRecht(?\THAG\XKfz\StructType\Recht $recht = null): self
    {
        $this->Recht = $recht;

        return $this;
    }
}
