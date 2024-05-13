<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFeldvorgaben StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFeldvorgaben extends AbstractStructBase
{
    /**
     * The Feldvorgaben
     * @var \THAG\XKfz\StructType\Feldvorgaben|null
     */
    public ?\THAG\XKfz\StructType\Feldvorgaben $Feldvorgaben = null;
    /**
     * Constructor method for ListeFeldvorgaben
     * @uses ListeFeldvorgaben::setFeldvorgaben()
     * @param \THAG\XKfz\StructType\Feldvorgaben $feldvorgaben
     */
    public function __construct(?\THAG\XKfz\StructType\Feldvorgaben $feldvorgaben = null)
    {
        $this
            ->setFeldvorgaben($feldvorgaben);
    }
    /**
     * Get Feldvorgaben value
     * @return \THAG\XKfz\StructType\Feldvorgaben|null
     */
    public function getFeldvorgaben(): ?\THAG\XKfz\StructType\Feldvorgaben
    {
        return $this->Feldvorgaben;
    }
    /**
     * Set Feldvorgaben value
     * @param \THAG\XKfz\StructType\Feldvorgaben $feldvorgaben
     * @return \THAG\XKfz\StructType\ListeFeldvorgaben
     */
    public function setFeldvorgaben(?\THAG\XKfz\StructType\Feldvorgaben $feldvorgaben = null): self
    {
        $this->Feldvorgaben = $feldvorgaben;
        
        return $this;
    }
}
