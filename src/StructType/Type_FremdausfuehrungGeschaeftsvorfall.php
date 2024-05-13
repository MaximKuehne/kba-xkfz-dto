<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.FremdausfuehrungGeschaeftsvorfall StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_FremdausfuehrungGeschaeftsvorfall extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The NummerZulBeschTeil2
     * @var string|null
     */
    public ?string $NummerZulBeschTeil2 = null;
    /**
     * The kbaArbeitsgang
     * @var \THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung|null
     */
    public ?\THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung $kbaArbeitsgang = null;
    /**
     * The geaenderteDatenRegistersatz
     * @var \THAG\XKfz\StructType\Code_DatengruppenRegistersatz|null
     */
    public ?\THAG\XKfz\StructType\Code_DatengruppenRegistersatz $geaenderteDatenRegistersatz = null;
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The steuerzahlweise
     * @var \THAG\XKfz\StructType\Code_Steuerzahlweise|null
     */
    public ?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null;
    /**
     * The verbleibKennzeichen
     * @var \THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen $verbleibKennzeichen = null;
    /**
     * The sicherheitscodes
     * @var \THAG\XKfz\StructType\Type_Sicherheitscodes|null
     */
    public ?\THAG\XKfz\StructType\Type_Sicherheitscodes $sicherheitscodes = null;
    /**
     * Constructor method for Type.FremdausfuehrungGeschaeftsvorfall
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setKennzeichen()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setFahrzeugidentifizierungsnummer()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setNummerZulBeschTeil2()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setKbaArbeitsgang()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setGeaenderteDatenRegistersatz()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setZeitpunktAenderung()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setSteuerzahlweise()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setVerbleibKennzeichen()
     * @uses Type_FremdausfuehrungGeschaeftsvorfall::setSicherheitscodes()
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $nummerZulBeschTeil2
     * @param \THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung $kbaArbeitsgang
     * @param \THAG\XKfz\StructType\Code_DatengruppenRegistersatz $geaenderteDatenRegistersatz
     * @param string $zeitpunktAenderung
     * @param \THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise
     * @param \THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen $verbleibKennzeichen
     * @param \THAG\XKfz\StructType\Type_Sicherheitscodes $sicherheitscodes
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
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get NummerZulBeschTeil2 value
     * @return string|null
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }
    /**
     * Set NummerZulBeschTeil2 value
     * @param string $nummerZulBeschTeil2
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;
        
        return $this;
    }
    /**
     * Get kbaArbeitsgang value
     * @return \THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung|null
     */
    public function getKbaArbeitsgang(): ?\THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung
    {
        return $this->kbaArbeitsgang;
    }
    /**
     * Set kbaArbeitsgang value
     * @param \THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung $kbaArbeitsgang
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setKbaArbeitsgang(?\THAG\XKfz\StructType\Code_KBAArbeitsgangZulassungsmitteilung $kbaArbeitsgang = null): self
    {
        $this->kbaArbeitsgang = $kbaArbeitsgang;
        
        return $this;
    }
    /**
     * Get geaenderteDatenRegistersatz value
     * @return \THAG\XKfz\StructType\Code_DatengruppenRegistersatz|null
     */
    public function getGeaenderteDatenRegistersatz(): ?\THAG\XKfz\StructType\Code_DatengruppenRegistersatz
    {
        return $this->geaenderteDatenRegistersatz;
    }
    /**
     * Set geaenderteDatenRegistersatz value
     * @param \THAG\XKfz\StructType\Code_DatengruppenRegistersatz $geaenderteDatenRegistersatz
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setGeaenderteDatenRegistersatz(?\THAG\XKfz\StructType\Code_DatengruppenRegistersatz $geaenderteDatenRegistersatz = null): self
    {
        $this->geaenderteDatenRegistersatz = $geaenderteDatenRegistersatz;
        
        return $this;
    }
    /**
     * Get ZeitpunktAenderung value
     * @return string|null
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }
    /**
     * Set ZeitpunktAenderung value
     * @param string $zeitpunktAenderung
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get steuerzahlweise value
     * @return \THAG\XKfz\StructType\Code_Steuerzahlweise|null
     */
    public function getSteuerzahlweise(): ?\THAG\XKfz\StructType\Code_Steuerzahlweise
    {
        return $this->steuerzahlweise;
    }
    /**
     * Set steuerzahlweise value
     * @param \THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setSteuerzahlweise(?\THAG\XKfz\StructType\Code_Steuerzahlweise $steuerzahlweise = null): self
    {
        $this->steuerzahlweise = $steuerzahlweise;
        
        return $this;
    }
    /**
     * Get verbleibKennzeichen value
     * @return \THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen|null
     */
    public function getVerbleibKennzeichen(): ?\THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen
    {
        return $this->verbleibKennzeichen;
    }
    /**
     * Set verbleibKennzeichen value
     * @param \THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen $verbleibKennzeichen
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setVerbleibKennzeichen(?\THAG\XKfz\StructType\Type_ZulassungsmitteilungVerbleibKennzeichen $verbleibKennzeichen = null): self
    {
        $this->verbleibKennzeichen = $verbleibKennzeichen;
        
        return $this;
    }
    /**
     * Get sicherheitscodes value
     * @return \THAG\XKfz\StructType\Type_Sicherheitscodes|null
     */
    public function getSicherheitscodes(): ?\THAG\XKfz\StructType\Type_Sicherheitscodes
    {
        return $this->sicherheitscodes;
    }
    /**
     * Set sicherheitscodes value
     * @param \THAG\XKfz\StructType\Type_Sicherheitscodes $sicherheitscodes
     * @return \THAG\XKfz\StructType\Type_FremdausfuehrungGeschaeftsvorfall
     */
    public function setSicherheitscodes(?\THAG\XKfz\StructType\Type_Sicherheitscodes $sicherheitscodes = null): self
    {
        $this->sicherheitscodes = $sicherheitscodes;
        
        return $this;
    }
}
