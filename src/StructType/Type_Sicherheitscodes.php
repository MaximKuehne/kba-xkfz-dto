<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Sicherheitscodes StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Sicherheitscodes extends AbstractStructBase
{
    /**
     * The druckstuecknummerKennzeichen
     */
    public ?string $druckstuecknummerKennzeichen = null;

    /**
     * The sicherheitscodeKennzeichen
     */
    public ?string $sicherheitscodeKennzeichen = null;

    /**
     * The druckstuecknummerWkFahrzeugbezogenerTeil
     */
    public ?string $druckstuecknummerWkFahrzeugbezogenerTeil = null;

    /**
     * The sicherheitscodeWkFahrzeugbezogenerTeil
     */
    public ?string $sicherheitscodeWkFahrzeugbezogenerTeil = null;

    /**
     * The druckstuecknummerZulBeschTeil1
     */
    public ?string $druckstuecknummerZulBeschTeil1 = null;

    /**
     * The sicherheitscodeZulBeschTeil1
     */
    public ?string $sicherheitscodeZulBeschTeil1 = null;

    /**
     * Constructor method for Type.Sicherheitscodes
     *
     * @uses Type_Sicherheitscodes::setDruckstuecknummerKennzeichen()
     * @uses Type_Sicherheitscodes::setSicherheitscodeKennzeichen()
     * @uses Type_Sicherheitscodes::setDruckstuecknummerWkFahrzeugbezogenerTeil()
     * @uses Type_Sicherheitscodes::setSicherheitscodeWkFahrzeugbezogenerTeil()
     * @uses Type_Sicherheitscodes::setDruckstuecknummerZulBeschTeil1()
     * @uses Type_Sicherheitscodes::setSicherheitscodeZulBeschTeil1()
     */
    public function __construct(?string $druckstuecknummerKennzeichen = null, ?string $sicherheitscodeKennzeichen = null, ?string $druckstuecknummerWkFahrzeugbezogenerTeil = null, ?string $sicherheitscodeWkFahrzeugbezogenerTeil = null, ?string $druckstuecknummerZulBeschTeil1 = null, ?string $sicherheitscodeZulBeschTeil1 = null)
    {
        $this
            ->setDruckstuecknummerKennzeichen($druckstuecknummerKennzeichen)
            ->setSicherheitscodeKennzeichen($sicherheitscodeKennzeichen)
            ->setDruckstuecknummerWkFahrzeugbezogenerTeil($druckstuecknummerWkFahrzeugbezogenerTeil)
            ->setSicherheitscodeWkFahrzeugbezogenerTeil($sicherheitscodeWkFahrzeugbezogenerTeil)
            ->setDruckstuecknummerZulBeschTeil1($druckstuecknummerZulBeschTeil1)
            ->setSicherheitscodeZulBeschTeil1($sicherheitscodeZulBeschTeil1);
    }

    /**
     * Get druckstuecknummerKennzeichen value
     */
    public function getDruckstuecknummerKennzeichen(): ?string
    {
        return $this->druckstuecknummerKennzeichen;
    }

    /**
     * Set druckstuecknummerKennzeichen value
     */
    public function setDruckstuecknummerKennzeichen(?string $druckstuecknummerKennzeichen = null): self
    {
        $this->druckstuecknummerKennzeichen = $druckstuecknummerKennzeichen;

        return $this;
    }

    /**
     * Get sicherheitscodeKennzeichen value
     */
    public function getSicherheitscodeKennzeichen(): ?string
    {
        return $this->sicherheitscodeKennzeichen;
    }

    /**
     * Set sicherheitscodeKennzeichen value
     */
    public function setSicherheitscodeKennzeichen(?string $sicherheitscodeKennzeichen = null): self
    {
        $this->sicherheitscodeKennzeichen = $sicherheitscodeKennzeichen;

        return $this;
    }

    /**
     * Get druckstuecknummerWkFahrzeugbezogenerTeil value
     */
    public function getDruckstuecknummerWkFahrzeugbezogenerTeil(): ?string
    {
        return $this->druckstuecknummerWkFahrzeugbezogenerTeil;
    }

    /**
     * Set druckstuecknummerWkFahrzeugbezogenerTeil value
     */
    public function setDruckstuecknummerWkFahrzeugbezogenerTeil(?string $druckstuecknummerWkFahrzeugbezogenerTeil = null): self
    {
        $this->druckstuecknummerWkFahrzeugbezogenerTeil = $druckstuecknummerWkFahrzeugbezogenerTeil;

        return $this;
    }

    /**
     * Get sicherheitscodeWkFahrzeugbezogenerTeil value
     */
    public function getSicherheitscodeWkFahrzeugbezogenerTeil(): ?string
    {
        return $this->sicherheitscodeWkFahrzeugbezogenerTeil;
    }

    /**
     * Set sicherheitscodeWkFahrzeugbezogenerTeil value
     */
    public function setSicherheitscodeWkFahrzeugbezogenerTeil(?string $sicherheitscodeWkFahrzeugbezogenerTeil = null): self
    {
        $this->sicherheitscodeWkFahrzeugbezogenerTeil = $sicherheitscodeWkFahrzeugbezogenerTeil;

        return $this;
    }

    /**
     * Get druckstuecknummerZulBeschTeil1 value
     */
    public function getDruckstuecknummerZulBeschTeil1(): ?string
    {
        return $this->druckstuecknummerZulBeschTeil1;
    }

    /**
     * Set druckstuecknummerZulBeschTeil1 value
     */
    public function setDruckstuecknummerZulBeschTeil1(?string $druckstuecknummerZulBeschTeil1 = null): self
    {
        $this->druckstuecknummerZulBeschTeil1 = $druckstuecknummerZulBeschTeil1;

        return $this;
    }

    /**
     * Get sicherheitscodeZulBeschTeil1 value
     */
    public function getSicherheitscodeZulBeschTeil1(): ?string
    {
        return $this->sicherheitscodeZulBeschTeil1;
    }

    /**
     * Set sicherheitscodeZulBeschTeil1 value
     */
    public function setSicherheitscodeZulBeschTeil1(?string $sicherheitscodeZulBeschTeil1 = null): self
    {
        $this->sicherheitscodeZulBeschTeil1 = $sicherheitscodeZulBeschTeil1;

        return $this;
    }
}
