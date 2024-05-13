<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Maengel StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Maengel extends AbstractStructBase
{
    /**
     * The SchluesselMangel
     */
    public ?string $SchluesselMangel = null;

    /**
     * The VersionsnummerMangelbaum
     */
    public ?string $VersionsnummerMangelbaum = null;

    /**
     * The TextMangel
     */
    public ?string $TextMangel = null;

    /**
     * Constructor method for Maengel
     *
     * @uses Maengel::setSchluesselMangel()
     * @uses Maengel::setVersionsnummerMangelbaum()
     * @uses Maengel::setTextMangel()
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
     */
    public function getSchluesselMangel(): ?string
    {
        return $this->SchluesselMangel;
    }

    /**
     * Set SchluesselMangel value
     */
    public function setSchluesselMangel(?string $schluesselMangel = null): self
    {
        $this->SchluesselMangel = $schluesselMangel;

        return $this;
    }

    /**
     * Get VersionsnummerMangelbaum value
     */
    public function getVersionsnummerMangelbaum(): ?string
    {
        return $this->VersionsnummerMangelbaum;
    }

    /**
     * Set VersionsnummerMangelbaum value
     */
    public function setVersionsnummerMangelbaum(?string $versionsnummerMangelbaum = null): self
    {
        $this->VersionsnummerMangelbaum = $versionsnummerMangelbaum;

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
