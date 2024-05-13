<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.FremdausfuehrungGeschaeftsvorfall StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_FremdausfuehrungGeschaeftsvorfall extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The NummerZulBeschTeil2
     */
    public ?string $NummerZulBeschTeil2 = null;

    /**
     * The kbaArbeitsgang
     */
    public ?\THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung $kbaArbeitsgang = null;

    /**
     * The geaenderteDatenRegistersatz
     */
    public ?\THAG\XKfz\StructType\Code_DatengruppenRegistersatz $geaenderteDatenRegistersatz = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The steuerzahlweise
     */
    public ?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null;

    /**
     * The verbleibKennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen $verbleibKennzeichen = null;

    /**
     * The sicherheitscodes
     */
    public ?\THAG\XKfz\StructType\Type_Sicherheitscodes $sicherheitscodes = null;

    /**
     * Constructor method for Type.FremdausfuehrungGeschaeftsvorfall
     *
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setKennzeichen()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setFahrzeugidentifizierungsnummer()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setNummerZulBeschTeil2()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setKbaArbeitsgang()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setGeaenderteDatenRegistersatz()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setZeitpunktAenderung()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setSteuerzahlweise()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setVerbleibKennzeichen()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setSicherheitscodes()
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $nummerZulBeschTeil2 = null, ?\THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung $kbaArbeitsgang = null, ?\THAG\XKfz\StructType\Code_DatengruppenRegistersatz $geaenderteDatenRegistersatz = null, ?string $zeitpunktAenderung = null, ?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null, ?\THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen $verbleibKennzeichen = null, ?\THAG\XKfz\StructType\Type_Sicherheitscodes $sicherheitscodes = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setKbaArbeitsgang($kbaArbeitsgang)
            ->setGeaenderteDatenRegistersatz($geaenderteDatenRegistersatz)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setSteuerzahlweise($steuerzahlweise)
            ->setVerbleibKennzeichen($verbleibKennzeichen)
            ->setSicherheitscodes($sicherheitscodes);
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
     * Get Fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }

    /**
     * Set Fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get NummerZulBeschTeil2 value
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }

    /**
     * Set NummerZulBeschTeil2 value
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;

        return $this;
    }

    /**
     * Get kbaArbeitsgang value
     */
    public function getKbaArbeitsgang(): ?\THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung
    {
        return $this->kbaArbeitsgang;
    }

    /**
     * Set kbaArbeitsgang value
     */
    public function setKbaArbeitsgang(?\THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung $kbaArbeitsgang = null): self
    {
        $this->kbaArbeitsgang = $kbaArbeitsgang;

        return $this;
    }

    /**
     * Get geaenderteDatenRegistersatz value
     */
    public function getGeaenderteDatenRegistersatz(): ?\THAG\XKfz\StructType\Code_DatengruppenRegistersatz
    {
        return $this->geaenderteDatenRegistersatz;
    }

    /**
     * Set geaenderteDatenRegistersatz value
     */
    public function setGeaenderteDatenRegistersatz(?\THAG\XKfz\StructType\Code_DatengruppenRegistersatz $geaenderteDatenRegistersatz = null): self
    {
        $this->geaenderteDatenRegistersatz = $geaenderteDatenRegistersatz;

        return $this;
    }

    /**
     * Get ZeitpunktAenderung value
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }

    /**
     * Set ZeitpunktAenderung value
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;

        return $this;
    }

    /**
     * Get steuerzahlweise value
     */
    public function getSteuerzahlweise(): ?\THAG\XKfz\StructType\Code_Steuerzahlweise
    {
        return $this->steuerzahlweise;
    }

    /**
     * Set steuerzahlweise value
     */
    public function setSteuerzahlweise(?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null): self
    {
        $this->steuerzahlweise = $steuerzahlweise;

        return $this;
    }

    /**
     * Get verbleibKennzeichen value
     */
    public function getVerbleibKennzeichen(): ?\THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen
    {
        return $this->verbleibKennzeichen;
    }

    /**
     * Set verbleibKennzeichen value
     */
    public function setVerbleibKennzeichen(?\THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen $verbleibKennzeichen = null): self
    {
        $this->verbleibKennzeichen = $verbleibKennzeichen;

        return $this;
    }

    /**
     * Get sicherheitscodes value
     */
    public function getSicherheitscodes(): ?\THAG\XKfz\StructType\Type_Sicherheitscodes
    {
        return $this->sicherheitscodes;
    }

    /**
     * Set sicherheitscodes value
     */
    public function setSicherheitscodes(?\THAG\XKfz\StructType\Type_Sicherheitscodes $sicherheitscodes = null): self
    {
        $this->sicherheitscodes = $sicherheitscodes;

        return $this;
    }
}
