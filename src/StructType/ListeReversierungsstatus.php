<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeReversierungsstatus StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeReversierungsstatus extends AbstractStructBase
{
    /**
     * The Reversierungsstatus
     * @var string|null
     */
    public ?string $Reversierungsstatus = null;
    /**
     * Constructor method for ListeReversierungsstatus
     * @uses ListeReversierungsstatus::setReversierungsstatus()
     * @param string $reversierungsstatus
     */
    public function __construct(?string $reversierungsstatus = null)
    {
        $this
            ->setReversierungsstatus($reversierungsstatus);
    }
    /**
     * Get Reversierungsstatus value
     * @return string|null
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }
    /**
     * Set Reversierungsstatus value
     * @param string $reversierungsstatus
     * @return \THAG\XKfz\StructType\ListeReversierungsstatus
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;
        
        return $this;
    }
}
