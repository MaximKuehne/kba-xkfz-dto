<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeMerkmalKennzeichenart StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeMerkmalKennzeichenart extends AbstractStructBase
{
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * Constructor method for ListeMerkmalKennzeichenart
     * @uses ListeMerkmalKennzeichenart::setMerkmalKennzeichenart()
     * @param string $merkmalKennzeichenart
     */
    public function __construct(?string $merkmalKennzeichenart = null)
    {
        $this
            ->setMerkmalKennzeichenart($merkmalKennzeichenart);
    }
    /**
     * Get MerkmalKennzeichenart value
     * @return string|null
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }
    /**
     * Set MerkmalKennzeichenart value
     * @param string $merkmalKennzeichenart
     * @return \THAG\XKfz\StructType\ListeMerkmalKennzeichenart
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
        return $this;
    }
}
