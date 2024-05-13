<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteVerwertungsnachweis StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteVerwertungsnachweis extends AbstractStructBase
{
    /**
     * The Verwertungsnachweis
     * @var \THAG\XKfz\StructType\Verwertungsnachweis|null
     */
    public ?\THAG\XKfz\StructType\Verwertungsnachweis $Verwertungsnachweis = null;
    /**
     * Constructor method for Type.VorgangskomponenteVerwertungsnachweis
     * @uses Type_VorgangskomponenteVerwertungsnachweis::setVerwertungsnachweis()
     * @param \THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis
     */
    public function __construct(?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null)
    {
        $this
            ->setVerwertungsnachweis($verwertungsnachweis);
    }
    /**
     * Get Verwertungsnachweis value
     * @return \THAG\XKfz\StructType\Verwertungsnachweis|null
     */
    public function getVerwertungsnachweis(): ?\THAG\XKfz\StructType\Verwertungsnachweis
    {
        return $this->Verwertungsnachweis;
    }
    /**
     * Set Verwertungsnachweis value
     * @param \THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis
     */
    public function setVerwertungsnachweis(?\THAG\XKfz\StructType\Verwertungsnachweis $verwertungsnachweis = null): self
    {
        $this->Verwertungsnachweis = $verwertungsnachweis;
        
        return $this;
    }
}
