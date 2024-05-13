<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SiegelUndPlakettenKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SiegelUndPlakettenKennzeichen extends AbstractStructBase
{
    /**
     * The merkmalUngestempelt
     */
    public ?bool $merkmalUngestempelt = null;

    /**
     * The druckstuecknummer
     */
    public ?string $druckstuecknummer = null;

    /**
     * The sicherheitscode
     */
    public ?string $sicherheitscode = null;

    /**
     * The druckstuecknummerWkFahrzeugbezogenerTeil
     */
    public ?string $druckstuecknummerWkFahrzeugbezogenerTeil = null;

    /**
     * The sicherheitscodeWkFahrzeugbezogenerTeil
     */
    public ?string $sicherheitscodeWkFahrzeugbezogenerTeil = null;

    /**
     * Constructor method for Type.SiegelUndPlakettenKennzeichen
     *
     * @uses Type_SiegelUndPlakettenKennzeichen::setMerkmalUngestempelt()
     * @uses Type_SiegelUndPlakettenKennzeichen::setDruckstuecknummer()
     * @uses Type_SiegelUndPlakettenKennzeichen::setSicherheitscode()
     * @uses Type_SiegelUndPlakettenKennzeichen::setDruckstuecknummerWkFahrzeugbezogenerTeil()
     * @uses Type_SiegelUndPlakettenKennzeichen::setSicherheitscodeWkFahrzeugbezogenerTeil()
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
     */
    public function getMerkmalUngestempelt(): ?bool
    {
        return $this->merkmalUngestempelt;
    }

    /**
     * Set merkmalUngestempelt value
     */
    public function setMerkmalUngestempelt(?bool $merkmalUngestempelt = null): self
    {
        $this->merkmalUngestempelt = $merkmalUngestempelt;

        return $this;
    }

    /**
     * Get druckstuecknummer value
     */
    public function getDruckstuecknummer(): ?string
    {
        return $this->druckstuecknummer;
    }

    /**
     * Set druckstuecknummer value
     */
    public function setDruckstuecknummer(?string $druckstuecknummer = null): self
    {
        $this->druckstuecknummer = $druckstuecknummer;

        return $this;
    }

    /**
     * Get sicherheitscode value
     */
    public function getSicherheitscode(): ?string
    {
        return $this->sicherheitscode;
    }

    /**
     * Set sicherheitscode value
     */
    public function setSicherheitscode(?string $sicherheitscode = null): self
    {
        $this->sicherheitscode = $sicherheitscode;

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
}
