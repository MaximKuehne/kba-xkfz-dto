<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BasisReferenzdatensatz StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BasisReferenzdatensatz extends AbstractStructBase
{
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
     * The vordrucknummer
     * @var string|null
     */
    public ?string $vordrucknummer = null;
    /**
     * The verpackung
     * @var \THAG\XKfz\StructType\Type_VerpackungID|null
     */
    public ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null;
    /**
     * The listeReferenz
     * @var \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null;
    /**
     * Constructor method for Type.BasisReferenzdatensatz
     * @uses Type_BasisReferenzdatensatz::setDruckstuecknummer()
     * @uses Type_BasisReferenzdatensatz::setSicherheitscode()
     * @uses Type_BasisReferenzdatensatz::setVordrucknummer()
     * @uses Type_BasisReferenzdatensatz::setVerpackung()
     * @uses Type_BasisReferenzdatensatz::setListeReferenz()
     * @param string $druckstuecknummer
     * @param string $sicherheitscode
     * @param string $vordrucknummer
     * @param \THAG\XKfz\StructType\Type_VerpackungID $verpackung
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz
     */
    public function __construct(?string $druckstuecknummer = null, ?string $sicherheitscode = null, ?string $vordrucknummer = null, ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null, ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null)
    {
        $this
            ->setDruckstuecknummer($druckstuecknummer)
            ->setSicherheitscode($sicherheitscode)
            ->setVordrucknummer($vordrucknummer)
            ->setVerpackung($verpackung)
            ->setListeReferenz($listeReferenz);
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
     * @return \THAG\XKfz\StructType\Type_BasisReferenzdatensatz
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
     * @return \THAG\XKfz\StructType\Type_BasisReferenzdatensatz
     */
    public function setSicherheitscode(?string $sicherheitscode = null): self
    {
        $this->sicherheitscode = $sicherheitscode;
        
        return $this;
    }
    /**
     * Get vordrucknummer value
     * @return string|null
     */
    public function getVordrucknummer(): ?string
    {
        return $this->vordrucknummer;
    }
    /**
     * Set vordrucknummer value
     * @param string $vordrucknummer
     * @return \THAG\XKfz\StructType\Type_BasisReferenzdatensatz
     */
    public function setVordrucknummer(?string $vordrucknummer = null): self
    {
        $this->vordrucknummer = $vordrucknummer;
        
        return $this;
    }
    /**
     * Get verpackung value
     * @return \THAG\XKfz\StructType\Type_VerpackungID|null
     */
    public function getVerpackung(): ?\THAG\XKfz\StructType\Type_VerpackungID
    {
        return $this->verpackung;
    }
    /**
     * Set verpackung value
     * @param \THAG\XKfz\StructType\Type_VerpackungID $verpackung
     * @return \THAG\XKfz\StructType\Type_BasisReferenzdatensatz
     */
    public function setVerpackung(?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null): self
    {
        $this->verpackung = $verpackung;
        
        return $this;
    }
    /**
     * Get listeReferenz value
     * @return \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public function getListeReferenz(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenz;
    }
    /**
     * Set listeReferenz value
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz
     * @return \THAG\XKfz\StructType\Type_BasisReferenzdatensatz
     */
    public function setListeReferenz(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null): self
    {
        $this->listeReferenz = $listeReferenz;
        
        return $this;
    }
}
