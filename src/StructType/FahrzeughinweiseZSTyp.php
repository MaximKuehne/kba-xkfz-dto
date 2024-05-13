<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeughinweiseZSTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeughinweiseZSTyp extends AbstractStructBase
{
    /**
     * The MerkmalVerstossGegenKraftfahrzeugsteuer
     * @var bool|null
     */
    public ?bool $MerkmalVerstossGegenKraftfahrzeugsteuer = null;
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * Constructor method for FahrzeughinweiseZSTyp
     * @uses FahrzeughinweiseZSTyp::setMerkmalVerstossGegenKraftfahrzeugsteuer()
     * @uses FahrzeughinweiseZSTyp::setVerwendungFahrzeug()
     * @param bool $merkmalVerstossGegenKraftfahrzeugsteuer
     * @param string $verwendungFahrzeug
     */
    public function __construct(?bool $merkmalVerstossGegenKraftfahrzeugsteuer = null, ?string $verwendungFahrzeug = null)
    {
        $this
            ->setMerkmalVerstossGegenKraftfahrzeugsteuer($merkmalVerstossGegenKraftfahrzeugsteuer)
            ->setVerwendungFahrzeug($verwendungFahrzeug);
    }
    /**
     * Get MerkmalVerstossGegenKraftfahrzeugsteuer value
     * @return bool|null
     */
    public function getMerkmalVerstossGegenKraftfahrzeugsteuer(): ?bool
    {
        return $this->MerkmalVerstossGegenKraftfahrzeugsteuer;
    }
    /**
     * Set MerkmalVerstossGegenKraftfahrzeugsteuer value
     * @param bool $merkmalVerstossGegenKraftfahrzeugsteuer
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZSTyp
     */
    public function setMerkmalVerstossGegenKraftfahrzeugsteuer(?bool $merkmalVerstossGegenKraftfahrzeugsteuer = null): self
    {
        $this->MerkmalVerstossGegenKraftfahrzeugsteuer = $merkmalVerstossGegenKraftfahrzeugsteuer;
        
        return $this;
    }
    /**
     * Get VerwendungFahrzeug value
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\FahrzeughinweiseZSTyp
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
    }
}
