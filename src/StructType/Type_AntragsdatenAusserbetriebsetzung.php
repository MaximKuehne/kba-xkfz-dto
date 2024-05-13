<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AntragsdatenAusserbetriebsetzung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AntragsdatenAusserbetriebsetzung extends AbstractStructBase
{
    /**
     * The SicherheitscodeZB1
     */
    public ?string $SicherheitscodeZB1 = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The sicherheitscodesKennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null;

    /**
     * The sicherheitscodesWechselkennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null;

    /**
     * The MerkmalReservierungKennzeichen
     */
    public ?string $MerkmalReservierungKennzeichen = null;

    /**
     * The kennzeichenReservierungsnummerPIN
     */
    public ?string $kennzeichenReservierungsnummerPIN = null;

    /**
     * The artDerReservierung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null;

    /**
     * The MerkmalVerwertungsnachweis
     */
    public ?string $MerkmalVerwertungsnachweis = null;

    /**
     * The DatumAusstellung
     */
    public ?string $DatumAusstellung = null;

    /**
     * The BetriebsnummerDemontagebetrieb
     */
    public ?string $BetriebsnummerDemontagebetrieb = null;

    /**
     * Constructor method for Type.AntragsdatenAusserbetriebsetzung
     *
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
     * Get kennzeichenReservierungsnummerPIN value
     */
    public function getKennzeichenReservierungsnummerPIN(): ?string
    {
        return $this->kennzeichenReservierungsnummerPIN;
    }

    /**
     * Set kennzeichenReservierungsnummerPIN value
     */
    public function setKennzeichenReservierungsnummerPIN(?string $kennzeichenReservierungsnummerPIN = null): self
    {
        $this->kennzeichenReservierungsnummerPIN = $kennzeichenReservierungsnummerPIN;

        return $this;
    }

    /**
     * Get artDerReservierung value
     */
    public function getArtDerReservierung(): ?\THAG\XKfz\StructType\Code_ArtDerReservierung
    {
        return $this->artDerReservierung;
    }

    /**
     * Set artDerReservierung value
     */
    public function setArtDerReservierung(?\THAG\XKfz\StructType\Code_ArtDerReservierung $artDerReservierung = null): self
    {
        $this->artDerReservierung = $artDerReservierung;

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
     * Get DatumAusstellung value
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->DatumAusstellung;
    }

    /**
     * Set DatumAusstellung value
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->DatumAusstellung = $datumAusstellung;

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
}
