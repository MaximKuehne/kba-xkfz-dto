<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeughinweiseZSTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeughinweiseZSTyp extends AbstractStructBase
{
    /**
     * The MerkmalVerstossGegenKraftfahrzeugsteuer
     */
    public ?bool $MerkmalVerstossGegenKraftfahrzeugsteuer = null;

    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * Constructor method for FahrzeughinweiseZSTyp
     *
     * @uses FahrzeughinweiseZSTyp::setMerkmalVerstossGegenKraftfahrzeugsteuer()
     * @uses FahrzeughinweiseZSTyp::setVerwendungFahrzeug()
     */
    public function __construct(?bool $merkmalVerstossGegenKraftfahrzeugsteuer = null, ?string $verwendungFahrzeug = null)
    {
        $this
            ->setMerkmalVerstossGegenKraftfahrzeugsteuer($merkmalVerstossGegenKraftfahrzeugsteuer)
            ->setVerwendungFahrzeug($verwendungFahrzeug);
    }

    /**
     * Get MerkmalVerstossGegenKraftfahrzeugsteuer value
     */
    public function getMerkmalVerstossGegenKraftfahrzeugsteuer(): ?bool
    {
        return $this->MerkmalVerstossGegenKraftfahrzeugsteuer;
    }

    /**
     * Set MerkmalVerstossGegenKraftfahrzeugsteuer value
     */
    public function setMerkmalVerstossGegenKraftfahrzeugsteuer(?bool $merkmalVerstossGegenKraftfahrzeugsteuer = null): self
    {
        $this->MerkmalVerstossGegenKraftfahrzeugsteuer = $merkmalVerstossGegenKraftfahrzeugsteuer;

        return $this;
    }

    /**
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

        return $this;
    }
}
