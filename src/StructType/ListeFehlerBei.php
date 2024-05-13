<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeFehlerBei StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeFehlerBei extends AbstractStructBase
{
    /**
     * The FehlerBei
     * @var string|null
     */
    public ?string $FehlerBei = null;
    /**
     * Constructor method for ListeFehlerBei
     * @uses ListeFehlerBei::setFehlerBei()
     * @param string $fehlerBei
     */
    public function __construct(?string $fehlerBei = null)
    {
        $this
            ->setFehlerBei($fehlerBei);
    }
    /**
     * Get FehlerBei value
     * @return string|null
     */
    public function getFehlerBei(): ?string
    {
        return $this->FehlerBei;
    }
    /**
     * Set FehlerBei value
     * @param string $fehlerBei
     * @return \THAG\XKfz\StructType\ListeFehlerBei
     */
    public function setFehlerBei(?string $fehlerBei = null): self
    {
        $this->FehlerBei = $fehlerBei;
        
        return $this;
    }
}
