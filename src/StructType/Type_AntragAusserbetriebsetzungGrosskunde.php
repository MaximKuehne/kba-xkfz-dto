<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AntragAusserbetriebsetzungGrosskunde StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AntragAusserbetriebsetzungGrosskunde extends AbstractStructBase
{
    /**
     * The kopfElektronischerAntrag
     * @var \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag|null
     */
    public ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopfElektronischerAntrag = null;
    /**
     * The AnzahlDerKennzeichen
     * @var int|null
     */
    public ?int $AnzahlDerKennzeichen = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The SicherheitscodeZB1
     * @var string|null
     */
    public ?string $SicherheitscodeZB1 = null;
    /**
     * The MerkmalReservierungKennzeichen
     * @var string|null
     */
    public ?string $MerkmalReservierungKennzeichen = null;
    /**
     * The MerkmalVerwertungsnachweis
     * @var string|null
     */
    public ?string $MerkmalVerwertungsnachweis = null;
    /**
     * The DatumVerwertungsnachweis
     * @var string|null
     */
    public ?string $DatumVerwertungsnachweis = null;
    /**
     * The BetriebsnummerDemontagebetrieb
     * @var string|null
     */
    public ?string $BetriebsnummerDemontagebetrieb = null;
    /**
     * The merkmalSammelrechnung
     * @var bool|null
     */
    public ?bool $merkmalSammelrechnung = null;
    /**
     * The merkmalAntragstellerHalter
     * @var bool|null
     */
    public ?bool $merkmalAntragstellerHalter = null;
    /**
     * The DeMailAdresse
     * @var string|null
     */
    public ?string $DeMailAdresse = null;
    /**
     * The EMailAdresse
     * @var string|null
     */
    public ?string $EMailAdresse = null;
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
     * Constructor method for Type.AntragAusserbetriebsetzungGrosskunde
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setKopfElektronischerAntrag()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setAnzahlDerKennzeichen()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setKennzeichen()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setSicherheitscodeZB1()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setMerkmalReservierungKennzeichen()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setMerkmalVerwertungsnachweis()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setDatumVerwertungsnachweis()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setBetriebsnummerDemontagebetrieb()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setMerkmalSammelrechnung()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setMerkmalAntragstellerHalter()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setDeMailAdresse()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setEMailAdresse()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setSicherheitscodesKennzeichen()
     * @uses Type_AntragAusserbetriebsetzungGrosskunde::setSicherheitscodesWechselkennzeichen()
     * @param \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopfElektronischerAntrag
     * @param int $anzahlDerKennzeichen
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $sicherheitscodeZB1
     * @param string $merkmalReservierungKennzeichen
     * @param string $merkmalVerwertungsnachweis
     * @param string $datumVerwertungsnachweis
     * @param string $betriebsnummerDemontagebetrieb
     * @param bool $merkmalSammelrechnung
     * @param bool $merkmalAntragstellerHalter
     * @param string $deMailAdresse
     * @param string $eMailAdresse
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen
     */
    public function __construct(?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopfElektronischerAntrag = null, ?int $anzahlDerKennzeichen = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $sicherheitscodeZB1 = null, ?string $merkmalReservierungKennzeichen = null, ?string $merkmalVerwertungsnachweis = null, ?string $datumVerwertungsnachweis = null, ?string $betriebsnummerDemontagebetrieb = null, ?bool $merkmalSammelrechnung = null, ?bool $merkmalAntragstellerHalter = null, ?string $deMailAdresse = null, ?string $eMailAdresse = null, ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null, ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null)
    {
        $this
            ->setKopfElektronischerAntrag($kopfElektronischerAntrag)
            ->setAnzahlDerKennzeichen($anzahlDerKennzeichen)
            ->setKennzeichen($kennzeichen)
            ->setSicherheitscodeZB1($sicherheitscodeZB1)
            ->setMerkmalReservierungKennzeichen($merkmalReservierungKennzeichen)
            ->setMerkmalVerwertungsnachweis($merkmalVerwertungsnachweis)
            ->setDatumVerwertungsnachweis($datumVerwertungsnachweis)
            ->setBetriebsnummerDemontagebetrieb($betriebsnummerDemontagebetrieb)
            ->setMerkmalSammelrechnung($merkmalSammelrechnung)
            ->setMerkmalAntragstellerHalter($merkmalAntragstellerHalter)
            ->setDeMailAdresse($deMailAdresse)
            ->setEMailAdresse($eMailAdresse)
            ->setSicherheitscodesKennzeichen($sicherheitscodesKennzeichen)
            ->setSicherheitscodesWechselkennzeichen($sicherheitscodesWechselkennzeichen);
    }
    /**
     * Get kopfElektronischerAntrag value
     * @return \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag|null
     */
    public function getKopfElektronischerAntrag(): ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
    {
        return $this->kopfElektronischerAntrag;
    }
    /**
     * Set kopfElektronischerAntrag value
     * @param \THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopfElektronischerAntrag
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setKopfElektronischerAntrag(?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopfElektronischerAntrag = null): self
    {
        $this->kopfElektronischerAntrag = $kopfElektronischerAntrag;
        
        return $this;
    }
    /**
     * Get AnzahlDerKennzeichen value
     * @return int|null
     */
    public function getAnzahlDerKennzeichen(): ?int
    {
        return $this->AnzahlDerKennzeichen;
    }
    /**
     * Set AnzahlDerKennzeichen value
     * @param int $anzahlDerKennzeichen
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setAnzahlDerKennzeichen(?int $anzahlDerKennzeichen = null): self
    {
        $this->AnzahlDerKennzeichen = $anzahlDerKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setSicherheitscodeZB1(?string $sicherheitscodeZB1 = null): self
    {
        $this->SicherheitscodeZB1 = $sicherheitscodeZB1;
        
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
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setMerkmalReservierungKennzeichen(?string $merkmalReservierungKennzeichen = null): self
    {
        $this->MerkmalReservierungKennzeichen = $merkmalReservierungKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setMerkmalVerwertungsnachweis(?string $merkmalVerwertungsnachweis = null): self
    {
        $this->MerkmalVerwertungsnachweis = $merkmalVerwertungsnachweis;
        
        return $this;
    }
    /**
     * Get DatumVerwertungsnachweis value
     * @return string|null
     */
    public function getDatumVerwertungsnachweis(): ?string
    {
        return $this->DatumVerwertungsnachweis;
    }
    /**
     * Set DatumVerwertungsnachweis value
     * @param string $datumVerwertungsnachweis
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setDatumVerwertungsnachweis(?string $datumVerwertungsnachweis = null): self
    {
        $this->DatumVerwertungsnachweis = $datumVerwertungsnachweis;
        
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
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setBetriebsnummerDemontagebetrieb(?string $betriebsnummerDemontagebetrieb = null): self
    {
        $this->BetriebsnummerDemontagebetrieb = $betriebsnummerDemontagebetrieb;
        
        return $this;
    }
    /**
     * Get merkmalSammelrechnung value
     * @return bool|null
     */
    public function getMerkmalSammelrechnung(): ?bool
    {
        return $this->merkmalSammelrechnung;
    }
    /**
     * Set merkmalSammelrechnung value
     * @param bool $merkmalSammelrechnung
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setMerkmalSammelrechnung(?bool $merkmalSammelrechnung = null): self
    {
        $this->merkmalSammelrechnung = $merkmalSammelrechnung;
        
        return $this;
    }
    /**
     * Get merkmalAntragstellerHalter value
     * @return bool|null
     */
    public function getMerkmalAntragstellerHalter(): ?bool
    {
        return $this->merkmalAntragstellerHalter;
    }
    /**
     * Set merkmalAntragstellerHalter value
     * @param bool $merkmalAntragstellerHalter
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setMerkmalAntragstellerHalter(?bool $merkmalAntragstellerHalter = null): self
    {
        $this->merkmalAntragstellerHalter = $merkmalAntragstellerHalter;
        
        return $this;
    }
    /**
     * Get DeMailAdresse value
     * @return string|null
     */
    public function getDeMailAdresse(): ?string
    {
        return $this->DeMailAdresse;
    }
    /**
     * Set DeMailAdresse value
     * @param string $deMailAdresse
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setDeMailAdresse(?string $deMailAdresse = null): self
    {
        $this->DeMailAdresse = $deMailAdresse;
        
        return $this;
    }
    /**
     * Get EMailAdresse value
     * @return string|null
     */
    public function getEMailAdresse(): ?string
    {
        return $this->EMailAdresse;
    }
    /**
     * Set EMailAdresse value
     * @param string $eMailAdresse
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setEMailAdresse(?string $eMailAdresse = null): self
    {
        $this->EMailAdresse = $eMailAdresse;
        
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
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
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
     * @return \THAG\XKfz\StructType\Type_AntragAusserbetriebsetzungGrosskunde
     */
    public function setSicherheitscodesWechselkennzeichen(?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null): self
    {
        $this->sicherheitscodesWechselkennzeichen = $sicherheitscodesWechselkennzeichen;
        
        return $this;
    }
}
