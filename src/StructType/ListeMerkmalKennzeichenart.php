<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeMerkmalKennzeichenart StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeMerkmalKennzeichenart extends AbstractStructBase
{
    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * Constructor method for ListeMerkmalKennzeichenart
     *
     * @uses ListeMerkmalKennzeichenart::setMerkmalKennzeichenart()
     */
    public function __construct(?string $merkmalKennzeichenart = null)
    {
        $this
            ->setMerkmalKennzeichenart($merkmalKennzeichenart);
    }

    /**
     * Get MerkmalKennzeichenart value
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }

    /**
     * Set MerkmalKennzeichenart value
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;

        return $this;
    }
}
