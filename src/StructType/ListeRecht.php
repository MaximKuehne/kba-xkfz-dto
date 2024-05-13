<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeRecht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeRecht extends AbstractStructBase
{
    /**
     * The Recht
     * @var \THAG\XKfz\StructType\Recht|null
     */
    public ?\THAG\XKfz\StructType\Recht $Recht = null;
    /**
     * Constructor method for ListeRecht
     * @uses ListeRecht::setRecht()
     * @param \THAG\XKfz\StructType\Recht $recht
     */
    public function __construct(?\THAG\XKfz\StructType\Recht $recht = null)
    {
        $this
            ->setRecht($recht);
    }
    /**
     * Get Recht value
     * @return \THAG\XKfz\StructType\Recht|null
     */
    public function getRecht(): ?\THAG\XKfz\StructType\Recht
    {
        return $this->Recht;
    }
    /**
     * Set Recht value
     * @param \THAG\XKfz\StructType\Recht $recht
     * @return \THAG\XKfz\StructType\ListeRecht
     */
    public function setRecht(?\THAG\XKfz\StructType\Recht $recht = null): self
    {
        $this->Recht = $recht;
        
        return $this;
    }
}
