<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AntragAusserbetriebsetzungGrosskunde StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AntragAusserbetriebsetzungGrosskunde extends AbstractStructBase
{
    /**
     * The kopfElektronischerAntrag
     */
    public ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopfElektronischerAntrag = null;

    /**
     * The AnzahlDerKennzeichen
     */
    public ?int $AnzahlDerKennzeichen = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The SicherheitscodeZB1
     */
    public ?string $SicherheitscodeZB1 = null;

    /**
     * The MerkmalReservierungKennzeichen
     */
    public ?string $MerkmalReservierungKennzeichen = null;

    /**
     * The MerkmalVerwertungsnachweis
     */
    public ?string $MerkmalVerwertungsnachweis = null;

    /**
     * The DatumVerwertungsnachweis
     */
    public ?string $DatumVerwertungsnachweis = null;

    /**
     * The BetriebsnummerDemontagebetrieb
     */
    public ?string $BetriebsnummerDemontagebetrieb = null;

    /**
     * The merkmalSammelrechnung
     */
    public ?bool $merkmalSammelrechnung = null;

    /**
     * The merkmalAntragstellerHalter
     */
    public ?bool $merkmalAntragstellerHalter = null;

    /**
     * The DeMailAdresse
     */
    public ?string $DeMailAdresse = null;

    /**
     * The EMailAdresse
     */
    public ?string $EMailAdresse = null;

    /**
     * The sicherheitscodesKennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null;

    /**
     * The sicherheitscodesWechselkennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null;

    /**
     * Constructor method for Type.AntragAusserbetriebsetzungGrosskunde
     *
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
     */
    public function getKopfElektronischerAntrag(): ?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag
    {
        return $this->kopfElektronischerAntrag;
    }

    /**
     * Set kopfElektronischerAntrag value
     */
    public function setKopfElektronischerAntrag(?\THAG\XKfz\StructType\Type_KopfdatenElektronischerAntrag $kopfElektronischerAntrag = null): self
    {
        $this->kopfElektronischerAntrag = $kopfElektronischerAntrag;

        return $this;
    }

    /**
     * Get AnzahlDerKennzeichen value
     */
    public function getAnzahlDerKennzeichen(): ?int
    {
        return $this->AnzahlDerKennzeichen;
    }

    /**
     * Set AnzahlDerKennzeichen value
     */
    public function setAnzahlDerKennzeichen(?int $anzahlDerKennzeichen = null): self
    {
        $this->AnzahlDerKennzeichen = $anzahlDerKennzeichen;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get SicherheitscodeZB1 value
     */
    public function getSicherheitscodeZB1(): ?string
    {
        return $this->SicherheitscodeZB1;
    }

    /**
     * Set SicherheitscodeZB1 value
     */
    public function setSicherheitscodeZB1(?string $sicherheitscodeZB1 = null): self
    {
        $this->SicherheitscodeZB1 = $sicherheitscodeZB1;

        return $this;
    }

    /**
     * Get MerkmalReservierungKennzeichen value
     */
    public function getMerkmalReservierungKennzeichen(): ?string
    {
        return $this->MerkmalReservierungKennzeichen;
    }

    /**
     * Set MerkmalReservierungKennzeichen value
     */
    public function setMerkmalReservierungKennzeichen(?string $merkmalReservierungKennzeichen = null): self
    {
        $this->MerkmalReservierungKennzeichen = $merkmalReservierungKennzeichen;

        return $this;
    }

    /**
     * Get MerkmalVerwertungsnachweis value
     */
    public function getMerkmalVerwertungsnachweis(): ?string
    {
        return $this->MerkmalVerwertungsnachweis;
    }

    /**
     * Set MerkmalVerwertungsnachweis value
     */
    public function setMerkmalVerwertungsnachweis(?string $merkmalVerwertungsnachweis = null): self
    {
        $this->MerkmalVerwertungsnachweis = $merkmalVerwertungsnachweis;

        return $this;
    }

    /**
     * Get DatumVerwertungsnachweis value
     */
    public function getDatumVerwertungsnachweis(): ?string
    {
        return $this->DatumVerwertungsnachweis;
    }

    /**
     * Set DatumVerwertungsnachweis value
     */
    public function setDatumVerwertungsnachweis(?string $datumVerwertungsnachweis = null): self
    {
        $this->DatumVerwertungsnachweis = $datumVerwertungsnachweis;

        return $this;
    }

    /**
     * Get BetriebsnummerDemontagebetrieb value
     */
    public function getBetriebsnummerDemontagebetrieb(): ?string
    {
        return $this->BetriebsnummerDemontagebetrieb;
    }

    /**
     * Set BetriebsnummerDemontagebetrieb value
     */
    public function setBetriebsnummerDemontagebetrieb(?string $betriebsnummerDemontagebetrieb = null): self
    {
        $this->BetriebsnummerDemontagebetrieb = $betriebsnummerDemontagebetrieb;

        return $this;
    }

    /**
     * Get merkmalSammelrechnung value
     */
    public function getMerkmalSammelrechnung(): ?bool
    {
        return $this->merkmalSammelrechnung;
    }

    /**
     * Set merkmalSammelrechnung value
     */
    public function setMerkmalSammelrechnung(?bool $merkmalSammelrechnung = null): self
    {
        $this->merkmalSammelrechnung = $merkmalSammelrechnung;

        return $this;
    }

    /**
     * Get merkmalAntragstellerHalter value
     */
    public function getMerkmalAntragstellerHalter(): ?bool
    {
        return $this->merkmalAntragstellerHalter;
    }

    /**
     * Set merkmalAntragstellerHalter value
     */
    public function setMerkmalAntragstellerHalter(?bool $merkmalAntragstellerHalter = null): self
    {
        $this->merkmalAntragstellerHalter = $merkmalAntragstellerHalter;

        return $this;
    }

    /**
     * Get DeMailAdresse value
     */
    public function getDeMailAdresse(): ?string
    {
        return $this->DeMailAdresse;
    }

    /**
     * Set DeMailAdresse value
     */
    public function setDeMailAdresse(?string $deMailAdresse = null): self
    {
        $this->DeMailAdresse = $deMailAdresse;

        return $this;
    }

    /**
     * Get EMailAdresse value
     */
    public function getEMailAdresse(): ?string
    {
        return $this->EMailAdresse;
    }

    /**
     * Set EMailAdresse value
     */
    public function setEMailAdresse(?string $eMailAdresse = null): self
    {
        $this->EMailAdresse = $eMailAdresse;

        return $this;
    }

    /**
     * Get sicherheitscodesKennzeichen value
     */
    public function getSicherheitscodesKennzeichen(): ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen
    {
        return $this->sicherheitscodesKennzeichen;
    }

    /**
     * Set sicherheitscodesKennzeichen value
     */
    public function setSicherheitscodesKennzeichen(?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null): self
    {
        $this->sicherheitscodesKennzeichen = $sicherheitscodesKennzeichen;

        return $this;
    }

    /**
     * Get sicherheitscodesWechselkennzeichen value
     */
    public function getSicherheitscodesWechselkennzeichen(): ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen
    {
        return $this->sicherheitscodesWechselkennzeichen;
    }

    /**
     * Set sicherheitscodesWechselkennzeichen value
     */
    public function setSicherheitscodesWechselkennzeichen(?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null): self
    {
        $this->sicherheitscodesWechselkennzeichen = $sicherheitscodesWechselkennzeichen;

        return $this;
    }
}
