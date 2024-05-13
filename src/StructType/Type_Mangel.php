<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Mangel StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Mangel extends AbstractStructBase
{
    /**
     * The mangelcode
     */
    public ?string $mangelcode = null;

    /**
     * The TextMangel
     */
    public ?string $TextMangel = null;

    /**
     * Constructor method for Type.Mangel
     *
     * @uses Type_Mangel::setMangelcode()
     * @uses Type_Mangel::setTextMangel()
     */
    public function __construct(?string $mangelcode = null, ?string $textMangel = null)
    {
        $this
            ->setMangelcode($mangelcode)
            ->setTextMangel($textMangel);
    }

    /**
     * Get mangelcode value
     */
    public function getMangelcode(): ?string
    {
        return $this->mangelcode;
    }

    /**
     * Set mangelcode value
     */
    public function setMangelcode(?string $mangelcode = null): self
    {
        $this->mangelcode = $mangelcode;

        return $this;
    }

    /**
     * Get TextMangel value
     */
    public function getTextMangel(): ?string
    {
        return $this->TextMangel;
    }

    /**
     * Set TextMangel value
     */
    public function setTextMangel(?string $textMangel = null): self
    {
        $this->TextMangel = $textMangel;

        return $this;
    }
}
