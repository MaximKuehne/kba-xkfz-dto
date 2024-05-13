<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Geburt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Geburt extends AbstractStructBase
{
    /**
     * The TagDerGeburt
     * @var string|null
     */
    public ?string $TagDerGeburt = null;
    /**
     * The Geburtsort
     * @var string|null
     */
    public ?string $Geburtsort = null;
    /**
     * Constructor method for Type.Geburt
     * @uses Type_Geburt::setTagDerGeburt()
     * @uses Type_Geburt::setGeburtsort()
     * @param string $tagDerGeburt
     * @param string $geburtsort
     */
    public function __construct(?string $tagDerGeburt = null, ?string $geburtsort = null)
    {
        $this
            ->setTagDerGeburt($tagDerGeburt)
            ->setGeburtsort($geburtsort);
    }
    /**
     * Get TagDerGeburt value
     * @return string|null
     */
    public function getTagDerGeburt(): ?string
    {
        return $this->TagDerGeburt;
    }
    /**
     * Set TagDerGeburt value
     * @param string $tagDerGeburt
     * @return \THAG\XKfz\StructType\Type_Geburt
     */
    public function setTagDerGeburt(?string $tagDerGeburt = null): self
    {
        $this->TagDerGeburt = $tagDerGeburt;
        
        return $this;
    }
    /**
     * Get Geburtsort value
     * @return string|null
     */
    public function getGeburtsort(): ?string
    {
        return $this->Geburtsort;
    }
    /**
     * Set Geburtsort value
     * @param string $geburtsort
     * @return \THAG\XKfz\StructType\Type_Geburt
     */
    public function setGeburtsort(?string $geburtsort = null): self
    {
        $this->Geburtsort = $geburtsort;
        
        return $this;
    }
}
