<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SiegelUndPlakettenKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SiegelUndPlakettenKennzeichen extends AbstractStructBase
{
    /**
     * The merkmalUngestempelt
     * @var bool|null
     */
    public ?bool $merkmalUngestempelt = null;
    /**
     * The druckstuecknummer
     * @var string|null
     */
    public ?string $druckstuecknummer = null;
    /**
     * The sicherheitscode
     * @var string|null
     */
    public ?string $sicherheitscode = null;
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
     * Constructor method for Type.SiegelUndPlakettenKennzeichen
     * @uses Type_SiegelUndPlakettenKennzeichen::setMerkmalUngestempelt()
     * @uses Type_SiegelUndPlakettenKennzeichen::setDruckstuecknummer()
     * @uses Type_SiegelUndPlakettenKennzeichen::setSicherheitscode()
     * @uses Type_SiegelUndPlakettenKennzeichen::setDruckstuecknummerWkFahrzeugbezogenerTeil()
     * @uses Type_SiegelUndPlakettenKennzeichen::setSicherheitscodeWkFahrzeugbezogenerTeil()
     * @param bool $merkmalUngestempelt
     * @param string $druckstuecknummer
     * @param string $sicherheitscode
     * @param string $druckstuecknummerWkFahrzeugbezogenerTeil
     * @param string $sicherheitscodeWkFahrzeugbezogenerTeil
     */
    public function __construct(?bool $merkmalUngestempelt = null, ?string $druckstuecknummer = null, ?string $sicherheitscode = null, ?string $druckstuecknummerWkFahrzeugbezogenerTeil = null, ?string $sicherheitscodeWkFahrzeugbezogenerTeil = null)
    {
        $this
            ->setMerkmalUngestempelt($merkmalUngestempelt)
            ->setDruckstuecknummer($druckstuecknummer)
            ->setSicherheitscode($sicherheitscode)
            ->setDruckstuecknummerWkFahrzeugbezogenerTeil($druckstuecknummerWkFahrzeugbezogenerTeil)
            ->setSicherheitscodeWkFahrzeugbezogenerTeil($sicherheitscodeWkFahrzeugbezogenerTeil);
    }
    /**
     * Get merkmalUngestempelt value
     * @return bool|null
     */
    public function getMerkmalUngestempelt(): ?bool
    {
        return $this->merkmalUngestempelt;
    }
    /**
     * Set merkmalUngestempelt value
     * @param bool $merkmalUngestempelt
     * @return \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen
     */
    public function setMerkmalUngestempelt(?bool $merkmalUngestempelt = null): self
    {
        $this->merkmalUngestempelt = $merkmalUngestempelt;
        
        return $this;
    }
    /**
     * Get druckstuecknummer value
     * @return string|null
     */
    public function getDruckstuecknummer(): ?string
    {
        return $this->druckstuecknummer;
    }
    /**
     * Set druckstuecknummer value
     * @param string $druckstuecknummer
     * @return \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen
     */
    public function setDruckstuecknummer(?string $druckstuecknummer = null): self
    {
        $this->druckstuecknummer = $druckstuecknummer;
        
        return $this;
    }
    /**
     * Get sicherheitscode value
     * @return string|null
     */
    public function getSicherheitscode(): ?string
    {
        return $this->sicherheitscode;
    }
    /**
     * Set sicherheitscode value
     * @param string $sicherheitscode
     * @return \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen
     */
    public function setSicherheitscode(?string $sicherheitscode = null): self
    {
        $this->sicherheitscode = $sicherheitscode;
        
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
     * @return \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen
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
     * @return \THAG\XKfz\StructType\Type_SiegelUndPlakettenKennzeichen
     */
    public function setSicherheitscodeWkFahrzeugbezogenerTeil(?string $sicherheitscodeWkFahrzeugbezogenerTeil = null): self
    {
        $this->sicherheitscodeWkFahrzeugbezogenerTeil = $sicherheitscodeWkFahrzeugbezogenerTeil;
        
        return $this;
    }
}
