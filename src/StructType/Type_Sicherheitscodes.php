<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Sicherheitscodes StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Sicherheitscodes extends AbstractStructBase
{
    /**
     * The druckstuecknummerKennzeichen
     * @var string|null
     */
    public ?string $druckstuecknummerKennzeichen = null;
    /**
     * The sicherheitscodeKennzeichen
     * @var string|null
     */
    public ?string $sicherheitscodeKennzeichen = null;
    /**
     * The druckstuecknummerWkFahrzeugbezogenerTeil
     * @var string|null
     */
    public ?string $druckstuecknummerWkFahrzeugbezogenerTeil = null;
    /**
     * The sicherheitscodeWkFahrzeugbezogenerTeil
     * @var string|null
     */
    public ?string $sicherheitscodeWkFahrzeugbezogenerTeil = null;
    /**
     * The druckstuecknummerZulBeschTeil1
     * @var string|null
     */
    public ?string $druckstuecknummerZulBeschTeil1 = null;
    /**
     * The sicherheitscodeZulBeschTeil1
     * @var string|null
     */
    public ?string $sicherheitscodeZulBeschTeil1 = null;
    /**
     * Constructor method for Type.Sicherheitscodes
     * @uses Type_Sicherheitscodes::setDruckstuecknummerKennzeichen()
     * @uses Type_Sicherheitscodes::setSicherheitscodeKennzeichen()
     * @uses Type_Sicherheitscodes::setDruckstuecknummerWkFahrzeugbezogenerTeil()
     * @uses Type_Sicherheitscodes::setSicherheitscodeWkFahrzeugbezogenerTeil()
     * @uses Type_Sicherheitscodes::setDruckstuecknummerZulBeschTeil1()
     * @uses Type_Sicherheitscodes::setSicherheitscodeZulBeschTeil1()
     * @param string $druckstuecknummerKennzeichen
     * @param string $sicherheitscodeKennzeichen
     * @param string $druckstuecknummerWkFahrzeugbezogenerTeil
     * @param string $sicherheitscodeWkFahrzeugbezogenerTeil
     * @param string $druckstuecknummerZulBeschTeil1
     * @param string $sicherheitscodeZulBeschTeil1
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
     * @return string|null
     */
    public function getDruckstuecknummerKennzeichen(): ?string
    {
        return $this->druckstuecknummerKennzeichen;
    }
    /**
     * Set druckstuecknummerKennzeichen value
     * @param string $druckstuecknummerKennzeichen
     * @return \THAG\XKfz\StructType\Type_Sicherheitscodes
     */
    public function setDruckstuecknummerKennzeichen(?string $druckstuecknummerKennzeichen = null): self
    {
        $this->druckstuecknummerKennzeichen = $druckstuecknummerKennzeichen;
        
        return $this;
    }
    /**
     * Get sicherheitscodeKennzeichen value
     * @return string|null
     */
    public function getSicherheitscodeKennzeichen(): ?string
    {
        return $this->sicherheitscodeKennzeichen;
    }
    /**
     * Set sicherheitscodeKennzeichen value
     * @param string $sicherheitscodeKennzeichen
     * @return \THAG\XKfz\StructType\Type_Sicherheitscodes
     */
    public function setSicherheitscodeKennzeichen(?string $sicherheitscodeKennzeichen = null): self
    {
        $this->sicherheitscodeKennzeichen = $sicherheitscodeKennzeichen;
        
        return $this;
    }
    /**
     * Get druckstuecknummerWkFahrzeugbezogenerTeil value
     * @return string|null
     */
    public function getDruckstuecknummerWkFahrzeugbezogenerTeil(): ?string
    {
        return $this->druckstuecknummerWkFahrzeugbezogenerTeil;
    }
    /**
     * Set druckstuecknummerWkFahrzeugbezogenerTeil value
     * @param string $druckstuecknummerWkFahrzeugbezogenerTeil
     * @return \THAG\XKfz\StructType\Type_Sicherheitscodes
     */
    public function setDruckstuecknummerWkFahrzeugbezogenerTeil(?string $druckstuecknummerWkFahrzeugbezogenerTeil = null): self
    {
        $this->druckstuecknummerWkFahrzeugbezogenerTeil = $druckstuecknummerWkFahrzeugbezogenerTeil;
        
        return $this;
    }
    /**
     * Get sicherheitscodeWkFahrzeugbezogenerTeil value
     * @return string|null
     */
    public function getSicherheitscodeWkFahrzeugbezogenerTeil(): ?string
    {
        return $this->sicherheitscodeWkFahrzeugbezogenerTeil;
    }
    /**
     * Set sicherheitscodeWkFahrzeugbezogenerTeil value
     * @param string $sicherheitscodeWkFahrzeugbezogenerTeil
     * @return \THAG\XKfz\StructType\Type_Sicherheitscodes
     */
    public function setSicherheitscodeWkFahrzeugbezogenerTeil(?string $sicherheitscodeWkFahrzeugbezogenerTeil = null): self
    {
        $this->sicherheitscodeWkFahrzeugbezogenerTeil = $sicherheitscodeWkFahrzeugbezogenerTeil;
        
        return $this;
    }
    /**
     * Get druckstuecknummerZulBeschTeil1 value
     * @return string|null
     */
    public function getDruckstuecknummerZulBeschTeil1(): ?string
    {
        return $this->druckstuecknummerZulBeschTeil1;
    }
    /**
     * Set druckstuecknummerZulBeschTeil1 value
     * @param string $druckstuecknummerZulBeschTeil1
     * @return \THAG\XKfz\StructType\Type_Sicherheitscodes
     */
    public function setDruckstuecknummerZulBeschTeil1(?string $druckstuecknummerZulBeschTeil1 = null): self
    {
        $this->druckstuecknummerZulBeschTeil1 = $druckstuecknummerZulBeschTeil1;
        
        return $this;
    }
    /**
     * Get sicherheitscodeZulBeschTeil1 value
     * @return string|null
     */
    public function getSicherheitscodeZulBeschTeil1(): ?string
    {
        return $this->sicherheitscodeZulBeschTeil1;
    }
    /**
     * Set sicherheitscodeZulBeschTeil1 value
     * @param string $sicherheitscodeZulBeschTeil1
     * @return \THAG\XKfz\StructType\Type_Sicherheitscodes
     */
    public function setSicherheitscodeZulBeschTeil1(?string $sicherheitscodeZulBeschTeil1 = null): self
    {
        $this->sicherheitscodeZulBeschTeil1 = $sicherheitscodeZulBeschTeil1;
        
        return $this;
    }
}
