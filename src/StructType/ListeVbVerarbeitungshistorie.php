<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeVbVerarbeitungshistorie StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeVbVerarbeitungshistorie extends AbstractStructBase
{
    /**
     * The VbVerarbeitungshistorie
     */
    public ?\THAG\XKfz\StructType\VbVerarbeitungshistorie $VbVerarbeitungshistorie = null;

    /**
     * Constructor method for ListeVbVerarbeitungshistorie
     *
     * @uses ListeVbVerarbeitungshistorie::setVbVerarbeitungshistorie()
     */
    public function __construct(?\THAG\XKfz\StructType\VbVerarbeitungshistorie $vbVerarbeitungshistorie = null)
    {
        $this
            ->setVbVerarbeitungshistorie($vbVerarbeitungshistorie);
    }

    /**
     * Get VbVerarbeitungshistorie value
     */
    public function getVbVerarbeitungshistorie(): ?\THAG\XKfz\StructType\VbVerarbeitungshistorie
    {
        return $this->VbVerarbeitungshistorie;
    }

    /**
     * Set VbVerarbeitungshistorie value
     */
    public function setVbVerarbeitungshistorie(?\THAG\XKfz\StructType\VbVerarbeitungshistorie $vbVerarbeitungshistorie = null): self
    {
        $this->VbVerarbeitungshistorie = $vbVerarbeitungshistorie;

        return $this;
    }
}
