<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeReversierungsstatus StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeReversierungsstatus extends AbstractStructBase
{
    /**
     * The Reversierungsstatus
     */
    public ?string $Reversierungsstatus = null;

    /**
     * Constructor method for ListeReversierungsstatus
     *
     * @uses ListeReversierungsstatus::setReversierungsstatus()
     */
    public function __construct(?string $reversierungsstatus = null)
    {
        $this
            ->setReversierungsstatus($reversierungsstatus);
    }

    /**
     * Get Reversierungsstatus value
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }

    /**
     * Set Reversierungsstatus value
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;

        return $this;
    }
}
