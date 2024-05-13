<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ListeMaengel StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ListeMaengel extends AbstractStructBase
{
    /**
     * The versionMangelbaum
     * @var string|null
     */
    public ?string $versionMangelbaum = null;
    /**
     * The mangel
     * @var \THAG\XKfz\StructType\Type_Mangel|null
     */
    public ?\THAG\XKfz\StructType\Type_Mangel $mangel = null;
    /**
     * Constructor method for Type.ListeMaengel
     * @uses Type_ListeMaengel::setVersionMangelbaum()
     * @uses Type_ListeMaengel::setMangel()
     * @param string $versionMangelbaum
     * @param \THAG\XKfz\StructType\Type_Mangel $mangel
     */
    public function __construct(?string $versionMangelbaum = null, ?\THAG\XKfz\StructType\Type_Mangel $mangel = null)
    {
        $this
            ->setVersionMangelbaum($versionMangelbaum)
            ->setMangel($mangel);
    }
    /**
     * Get versionMangelbaum value
     * @return string|null
     */
    public function getVersionMangelbaum(): ?string
    {
        return $this->versionMangelbaum;
    }
    /**
     * Set versionMangelbaum value
     * @param string $versionMangelbaum
     * @return \THAG\XKfz\StructType\Type_ListeMaengel
     */
    public function setVersionMangelbaum(?string $versionMangelbaum = null): self
    {
        $this->versionMangelbaum = $versionMangelbaum;
        
        return $this;
    }
    /**
     * Get mangel value
     * @return \THAG\XKfz\StructType\Type_Mangel|null
     */
    public function getMangel(): ?\THAG\XKfz\StructType\Type_Mangel
    {
        return $this->mangel;
    }
    /**
     * Set mangel value
     * @param \THAG\XKfz\StructType\Type_Mangel $mangel
     * @return \THAG\XKfz\StructType\Type_ListeMaengel
     */
    public function setMangel(?\THAG\XKfz\StructType\Type_Mangel $mangel = null): self
    {
        $this->mangel = $mangel;
        
        return $this;
    }
}
