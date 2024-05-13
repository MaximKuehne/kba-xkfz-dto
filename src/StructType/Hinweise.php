<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Hinweise StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Hinweise extends AbstractStructBase
{
    /**
     * The Hinweis
     */
    public ?string $Hinweis = null;

    /**
     * Constructor method for Hinweise
     *
     * @uses Hinweise::setHinweis()
     */
    public function __construct(?string $hinweis = null)
    {
        $this
            ->setHinweis($hinweis);
    }

    /**
     * Get Hinweis value
     */
    public function getHinweis(): ?string
    {
        return $this->Hinweis;
    }

    /**
     * Set Hinweis value
     */
    public function setHinweis(?string $hinweis = null): self
    {
        $this->Hinweis = $hinweis;

        return $this;
    }
}
