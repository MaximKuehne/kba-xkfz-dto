<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeMaengel StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeMaengel extends AbstractStructBase
{
    /**
     * The versionMangelbaum
     */
    public ?string $versionMangelbaum = null;

    /**
     * The mangel
     */
    public ?\THAG\XKfz\StructType\Type_Mangel $mangel = null;

    /**
     * Constructor method for Type.ListeMaengel
     *
     * @uses Type_ListeMaengel::setVersionMangelbaum()
     * @uses Type_ListeMaengel::setMangel()
     */
    public function __construct(?string $versionMangelbaum = null, ?\THAG\XKfz\StructType\Type_Mangel $mangel = null)
    {
        $this
            ->setVersionMangelbaum($versionMangelbaum)
            ->setMangel($mangel);
    }

    /**
     * Get versionMangelbaum value
     */
    public function getVersionMangelbaum(): ?string
    {
        return $this->versionMangelbaum;
    }

    /**
     * Set versionMangelbaum value
     */
    public function setVersionMangelbaum(?string $versionMangelbaum = null): self
    {
        $this->versionMangelbaum = $versionMangelbaum;

        return $this;
    }

    /**
     * Get mangel value
     */
    public function getMangel(): ?\THAG\XKfz\StructType\Type_Mangel
    {
        return $this->mangel;
    }

    /**
     * Set mangel value
     */
    public function setMangel(?\THAG\XKfz\StructType\Type_Mangel $mangel = null): self
    {
        $this->mangel = $mangel;

        return $this;
    }
}
