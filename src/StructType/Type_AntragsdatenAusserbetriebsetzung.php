<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AntragsdatenAusserbetriebsetzung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AntragsdatenAusserbetriebsetzung extends AbstractStructBase
{
    /**
     * The SicherheitscodeZB1
     * @var string|null
     */
    public ?string $SicherheitscodeZB1 = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The sicherheitscodesKennzeichen
     * @var \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null;
    /**
     * The sicherheitscodesWechselkennzeichen
     * @var \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null;
    /**
     * The MerkmalReservierungKennzeichen
     * @var string|null
     */
    public ?string $MerkmalReservierungKennzeichen = null;
    /**
     * The kennzeichenReservierungsnummerPIN
     * @var string|null
     */
    public ?string $kennzeichenReservierungsnummerPIN = null;
    /**
     * The artDerReservierung
     * @var \THAG\XKfz\StructType\Code_ArtDerReservierung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null;
    /**
     * The MerkmalVerwertungsnachweis
     * @var string|null
     */
    public ?string $MerkmalVerwertungsnachweis = null;
    /**
     * The DatumAusstellung
     * @var string|null
     */
    public ?string $DatumAusstellung = null;
    /**
     * The BetriebsnummerDemontagebetrieb
     * @var string|null
     */
    public ?string $BetriebsnummerDemontagebetrieb = null;
    /**
     * Constructor method for Type.AntragsdatenAusserbetriebsetzung
     * @uses Type_AntragsdatenAusserbetriebsetzung::setSicherheitscodeZB1()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setKennzeichen()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setSicherheitscodesKennzeichen()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setSicherheitscodesWechselkennzeichen()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setMerkmalReservierungKennzeichen()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setKennzeichenReservierungsnummerPIN()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setArtDerReservierung()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setMerkmalVerwertungsnachweis()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setDatumAusstellung()
     * @uses Type_AntragsdatenAusserbetriebsetzung::setBetriebsnummerDemontagebetrieb()
     * @param string $sicherheitscodeZB1
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen
     * @param string $merkmalReservierungKennzeichen
     * @param string $kennzeichenReservierungsnummerPIN
     * @param \THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung
     * @param string $merkmalVerwertungsnachweis
     * @param string $datumAusstellung
     * @param string $betriebsnummerDemontagebetrieb
     */
    public function __construct(?string $sicherheitscodeZB1 = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null, ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null, ?string $merkmalReservierungKennzeichen = null, ?string $kennzeichenReservierungsnummerPIN = null, ?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null, ?string $merkmalVerwertungsnachweis = null, ?string $datumAusstellung = null, ?string $betriebsnummerDemontagebetrieb = null)
    {
        $this
            ->setSicherheitscodeZB1($sicherheitscodeZB1)
            ->setKennzeichen($kennzeichen)
            ->setSicherheitscodesKennzeichen($sicherheitscodesKennzeichen)
            ->setSicherheitscodesWechselkennzeichen($sicherheitscodesWechselkennzeichen)
            ->setMerkmalReservierungKennzeichen($merkmalReservierungKennzeichen)
            ->setKennzeichenReservierungsnummerPIN($kennzeichenReservierungsnummerPIN)
            ->setArtDerReservierung($artDerReservierung)
            ->setMerkmalVerwertungsnachweis($merkmalVerwertungsnachweis)
            ->setDatumAusstellung($datumAusstellung)
            ->setBetriebsnummerDemontagebetrieb($betriebsnummerDemontagebetrieb);
    }
    /**
     * Get SicherheitscodeZB1 value
     * @return string|null
     */
    public function getSicherheitscodeZB1(): ?string
    {
        return $this->SicherheitscodeZB1;
    }
    /**
     * Set SicherheitscodeZB1 value
     * @param string $sicherheitscodeZB1
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setSicherheitscodeZB1(?string $sicherheitscodeZB1 = null): self
    {
        $this->SicherheitscodeZB1 = $sicherheitscodeZB1;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get sicherheitscodesKennzeichen value
     * @return \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen|null
     */
    public function getSicherheitscodesKennzeichen(): ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen
    {
        return $this->sicherheitscodesKennzeichen;
    }
    /**
     * Set sicherheitscodesKennzeichen value
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setSicherheitscodesKennzeichen(?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null): self
    {
        $this->sicherheitscodesKennzeichen = $sicherheitscodesKennzeichen;
        
        return $this;
    }
    /**
     * Get sicherheitscodesWechselkennzeichen value
     * @return \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen|null
     */
    public function getSicherheitscodesWechselkennzeichen(): ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen
    {
        return $this->sicherheitscodesWechselkennzeichen;
    }
    /**
     * Set sicherheitscodesWechselkennzeichen value
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setSicherheitscodesWechselkennzeichen(?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null): self
    {
        $this->sicherheitscodesWechselkennzeichen = $sicherheitscodesWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalReservierungKennzeichen value
     * @return string|null
     */
    public function getMerkmalReservierungKennzeichen(): ?string
    {
        return $this->MerkmalReservierungKennzeichen;
    }
    /**
     * Set MerkmalReservierungKennzeichen value
     * @param string $merkmalReservierungKennzeichen
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setMerkmalReservierungKennzeichen(?string $merkmalReservierungKennzeichen = null): self
    {
        $this->MerkmalReservierungKennzeichen = $merkmalReservierungKennzeichen;
        
        return $this;
    }
    /**
     * Get kennzeichenReservierungsnummerPIN value
     * @return string|null
     */
    public function getKennzeichenReservierungsnummerPIN(): ?string
    {
        return $this->kennzeichenReservierungsnummerPIN;
    }
    /**
     * Set kennzeichenReservierungsnummerPIN value
     * @param string $kennzeichenReservierungsnummerPIN
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setKennzeichenReservierungsnummerPIN(?string $kennzeichenReservierungsnummerPIN = null): self
    {
        $this->kennzeichenReservierungsnummerPIN = $kennzeichenReservierungsnummerPIN;
        
        return $this;
    }
    /**
     * Get artDerReservierung value
     * @return \THAG\XKfz\StructType\Code_ArtDerReservierung|null
     */
    public function getArtDerReservierung(): ?\THAG\XKfz\StructType\Code_ArtDerReservierung
    {
        return $this->artDerReservierung;
    }
    /**
     * Set artDerReservierung value
     * @param \THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setArtDerReservierung(?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null): self
    {
        $this->artDerReservierung = $artDerReservierung;
        
        return $this;
    }
    /**
     * Get MerkmalVerwertungsnachweis value
     * @return string|null
     */
    public function getMerkmalVerwertungsnachweis(): ?string
    {
        return $this->MerkmalVerwertungsnachweis;
    }
    /**
     * Set MerkmalVerwertungsnachweis value
     * @param string $merkmalVerwertungsnachweis
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setMerkmalVerwertungsnachweis(?string $merkmalVerwertungsnachweis = null): self
    {
        $this->MerkmalVerwertungsnachweis = $merkmalVerwertungsnachweis;
        
        return $this;
    }
    /**
     * Get DatumAusstellung value
     * @return string|null
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->DatumAusstellung;
    }
    /**
     * Set DatumAusstellung value
     * @param string $datumAusstellung
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->DatumAusstellung = $datumAusstellung;
        
        return $this;
    }
    /**
     * Get BetriebsnummerDemontagebetrieb value
     * @return string|null
     */
    public function getBetriebsnummerDemontagebetrieb(): ?string
    {
        return $this->BetriebsnummerDemontagebetrieb;
    }
    /**
     * Set BetriebsnummerDemontagebetrieb value
     * @param string $betriebsnummerDemontagebetrieb
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
     */
    public function setBetriebsnummerDemontagebetrieb(?string $betriebsnummerDemontagebetrieb = null): self
    {
        $this->BetriebsnummerDemontagebetrieb = $betriebsnummerDemontagebetrieb;
        
        return $this;
    }
}
