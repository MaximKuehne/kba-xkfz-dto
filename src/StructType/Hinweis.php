<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Hinweis StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Hinweis extends AbstractStructBase
{
    /**
     * The Returncode
     * @var string|null
     */
    public ?string $Returncode = null;
    /**
     * The Returntext
     * @var string|null
     */
    public ?string $Returntext = null;
    /**
     * Constructor method for Hinweis
     * @uses Hinweis::setReturncode()
     * @uses Hinweis::setReturntext()
     * @param string $returncode
     * @param string $returntext
     */
    public function __construct(?string $returncode = null, ?string $returntext = null)
    {
        $this
            ->setReturncode($returncode)
            ->setReturntext($returntext);
    }
    /**
     * Get Returncode value
     * @return string|null
     */
    public function getReturncode(): ?string
    {
        return $this->Returncode;
    }
    /**
     * Set Returncode value
     * @param string $returncode
     * @return \THAG\XKfz\StructType\Hinweis
     */
    public function setReturncode(?string $returncode = null): self
    {
        $this->Returncode = $returncode;
        
        return $this;
    }
    /**
     * Get Returntext value
     * @return string|null
     */
    public function getReturntext(): ?string
    {
        return $this->Returntext;
    }
    /**
     * Set Returntext value
     * @param string $returntext
     * @return \THAG\XKfz\StructType\Hinweis
     */
    public function setReturntext(?string $returntext = null): self
    {
        $this->Returntext = $returntext;
        
        return $this;
    }
}
