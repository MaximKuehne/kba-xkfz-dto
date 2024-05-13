<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteVerwertungsnachweis StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteVerwertungsnachweis extends AbstractStructBase
{
    /**
     * The Verwertungsnachweis
     */
    public ?\THAG\XKfz\StructType\Verwertungsnachweis $Verwertungsnachweis = null;

    /**
     * Constructor method for Type.VorgangskomponenteVerwertungsnachweis
     *
     * @uses Type_VorgangskomponenteVerwertungsnachweis::setVerwertungsnachweis()
     */
    public function __construct(?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null)
    {
        $this
            ->setVerwertungsnachweis($verwertungsnachweis);
    }

    /**
     * Get Verwertungsnachweis value
     */
    public function getVerwertungsnachweis(): ?\THAG\XKfz\StructType\Verwertungsnachweis
    {
        return $this->Verwertungsnachweis;
    }

    /**
     * Set Verwertungsnachweis value
     */
    public function setVerwertungsnachweis(?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null): self
    {
        $this->Verwertungsnachweis = $verwertungsnachweis;

        return $this;
    }
}
