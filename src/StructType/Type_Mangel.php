<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Mangel StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Mangel extends AbstractStructBase
{
    /**
     * The mangelcode
     * @var string|null
     */
    public ?string $mangelcode = null;
    /**
     * The TextMangel
     * @var string|null
     */
    public ?string $TextMangel = null;
    /**
     * Constructor method for Type.Mangel
     * @uses Type_Mangel::setMangelcode()
     * @uses Type_Mangel::setTextMangel()
     * @param string $mangelcode
     * @param string $textMangel
     */
    public function __construct(?string $mangelcode = null, ?string $textMangel = null)
    {
        $this
            ->setMangelcode($mangelcode)
            ->setTextMangel($textMangel);
    }
    /**
     * Get mangelcode value
     * @return string|null
     */
    public function getMangelcode(): ?string
    {
        return $this->mangelcode;
    }
    /**
     * Set mangelcode value
     * @param string $mangelcode
     * @return \THAG\XKfz\StructType\Type_Mangel
     */
    public function setMangelcode(?string $mangelcode = null): self
    {
        $this->mangelcode = $mangelcode;
        
        return $this;
    }
    /**
     * Get TextMangel value
     * @return string|null
     */
    public function getTextMangel(): ?string
    {
        return $this->TextMangel;
    }
    /**
     * Set TextMangel value
     * @param string $textMangel
     * @return \THAG\XKfz\StructType\Type_Mangel
     */
    public function setTextMangel(?string $textMangel = null): self
    {
        $this->TextMangel = $textMangel;
        
        return $this;
    }
}
