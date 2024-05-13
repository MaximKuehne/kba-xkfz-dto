<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeHinweise StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeHinweise extends AbstractStructBase
{
    /**
     * The hinweis
     */
    public ?string $hinweis = null;

    /**
     * Constructor method for Type.ListeHinweise
     *
     * @uses Type_ListeHinweise::setHinweis()
     */
    public function __construct(?string $hinweis = null)
    {
        $this
            ->setHinweis($hinweis);
    }

    /**
     * Get hinweis value
     */
    public function getHinweis(): ?string
    {
        return $this->hinweis;
    }

    /**
     * Set hinweis value
     */
    public function setHinweis(?string $hinweis = null): self
    {
        $this->hinweis = $hinweis;

        return $this;
    }
}
