<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Maengel StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Maengel extends AbstractStructBase
{
    /**
     * The SchluesselMangel
     * @var string|null
     */
    public ?string $SchluesselMangel = null;
    /**
     * The VersionsnummerMangelbaum
     * @var string|null
     */
    public ?string $VersionsnummerMangelbaum = null;
    /**
     * The TextMangel
     * @var string|null
     */
    public ?string $TextMangel = null;
    /**
     * Constructor method for Maengel
     * @uses Maengel::setSchluesselMangel()
     * @uses Maengel::setVersionsnummerMangelbaum()
     * @uses Maengel::setTextMangel()
     * @param string $schluesselMangel
     * @param string $versionsnummerMangelbaum
     * @param string $textMangel
     */
    public function __construct(?string $schluesselMangel = null, ?string $versionsnummerMangelbaum = null, ?string $textMangel = null)
    {
        $this
            ->setSchluesselMangel($schluesselMangel)
            ->setVersionsnummerMangelbaum($versionsnummerMangelbaum)
            ->setTextMangel($textMangel);
    }
    /**
     * Get SchluesselMangel value
     * @return string|null
     */
    public function getSchluesselMangel(): ?string
    {
        return $this->SchluesselMangel;
    }
    /**
     * Set SchluesselMangel value
     * @param string $schluesselMangel
     * @return \THAG\XKfz\StructType\Maengel
     */
    public function setSchluesselMangel(?string $schluesselMangel = null): self
    {
        $this->SchluesselMangel = $schluesselMangel;
        
        return $this;
    }
    /**
     * Get VersionsnummerMangelbaum value
     * @return string|null
     */
    public function getVersionsnummerMangelbaum(): ?string
    {
        return $this->VersionsnummerMangelbaum;
    }
    /**
     * Set VersionsnummerMangelbaum value
     * @param string $versionsnummerMangelbaum
     * @return \THAG\XKfz\StructType\Maengel
     */
    public function setVersionsnummerMangelbaum(?string $versionsnummerMangelbaum = null): self
    {
        $this->VersionsnummerMangelbaum = $versionsnummerMangelbaum;
        
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
     * @return \THAG\XKfz\StructType\Maengel
     */
    public function setTextMangel(?string $textMangel = null): self
    {
        $this->TextMangel = $textMangel;
        
        return $this;
    }
}
