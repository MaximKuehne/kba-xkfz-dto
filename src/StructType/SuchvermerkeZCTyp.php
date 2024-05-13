<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuchvermerkeZCTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SuchvermerkeZCTyp extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The NummerZulBeschTeil1
     * @var string|null
     */
    public ?string $NummerZulBeschTeil1 = null;
    /**
     * The VordrucknummerZB1
     * @var string|null
     */
    public ?string $VordrucknummerZB1 = null;
    /**
     * The NummerZulBeschTeil2
     * @var string|null
     */
    public ?string $NummerZulBeschTeil2 = null;
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The Verkehrsjahr
     * @var string|null
     */
    public ?string $Verkehrsjahr = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The Vorgangsart
     * @var string|null
     */
    public ?string $Vorgangsart = null;
    /**
     * The Vorgangsnummer
     * @var string|null
     */
    public ?string $Vorgangsnummer = null;
    /**
     * The Vorgangsjahr
     * @var string|null
     */
    public ?string $Vorgangsjahr = null;
    /**
     * The DatumTat
     * @var string|null
     */
    public ?string $DatumTat = null;
    /**
     * The TextSuchvermerk
     * @var string|null
     */
    public ?string $TextSuchvermerk = null;
    /**
     * The AktenzeichenAusschreibendeDienststelle
     * @var string|null
     */
    public ?string $AktenzeichenAusschreibendeDienststelle = null;
    /**
     * The AusschreibendeDienststelle
     * @var string|null
     */
    public ?string $AusschreibendeDienststelle = null;
    /**
     * The Gegenstandsart
     * @var string|null
     */
    public ?string $Gegenstandsart = null;
    /**
     * The AnlassDerAusschreibung
     * @var string|null
     */
    public ?string $AnlassDerAusschreibung = null;
    /**
     * The ZweckDerAusschreibung
     * @var string|null
     */
    public ?string $ZweckDerAusschreibung = null;
    /**
     * Constructor method for SuchvermerkeZCTyp
     * @uses SuchvermerkeZCTyp::setFahrzeugidentifizierungsnummer()
     * @uses SuchvermerkeZCTyp::setSchluesselHersteller()
     * @uses SuchvermerkeZCTyp::setNummerZulBeschTeil1()
     * @uses SuchvermerkeZCTyp::setVordrucknummerZB1()
     * @uses SuchvermerkeZCTyp::setNummerZulBeschTeil2()
     * @uses SuchvermerkeZCTyp::setKennzeichen()
     * @uses SuchvermerkeZCTyp::setVerkehrsjahr()
     * @uses SuchvermerkeZCTyp::setTextHersteller()
     * @uses SuchvermerkeZCTyp::setVorgangsart()
     * @uses SuchvermerkeZCTyp::setVorgangsnummer()
     * @uses SuchvermerkeZCTyp::setVorgangsjahr()
     * @uses SuchvermerkeZCTyp::setDatumTat()
     * @uses SuchvermerkeZCTyp::setTextSuchvermerk()
     * @uses SuchvermerkeZCTyp::setAktenzeichenAusschreibendeDienststelle()
     * @uses SuchvermerkeZCTyp::setAusschreibendeDienststelle()
     * @uses SuchvermerkeZCTyp::setGegenstandsart()
     * @uses SuchvermerkeZCTyp::setAnlassDerAusschreibung()
     * @uses SuchvermerkeZCTyp::setZweckDerAusschreibung()
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $schluesselHersteller
     * @param string $nummerZulBeschTeil1
     * @param string $vordrucknummerZB1
     * @param string $nummerZulBeschTeil2
     * @param string $kennzeichen
     * @param string $verkehrsjahr
     * @param string $textHersteller
     * @param string $vorgangsart
     * @param string $vorgangsnummer
     * @param string $vorgangsjahr
     * @param string $datumTat
     * @param string $textSuchvermerk
     * @param string $aktenzeichenAusschreibendeDienststelle
     * @param string $ausschreibendeDienststelle
     * @param string $gegenstandsart
     * @param string $anlassDerAusschreibung
     * @param string $zweckDerAusschreibung
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $schluesselHersteller = null, ?string $nummerZulBeschTeil1 = null, ?string $vordrucknummerZB1 = null, ?string $nummerZulBeschTeil2 = null, ?string $kennzeichen = null, ?string $verkehrsjahr = null, ?string $textHersteller = null, ?string $vorgangsart = null, ?string $vorgangsnummer = null, ?string $vorgangsjahr = null, ?string $datumTat = null, ?string $textSuchvermerk = null, ?string $aktenzeichenAusschreibendeDienststelle = null, ?string $ausschreibendeDienststelle = null, ?string $gegenstandsart = null, ?string $anlassDerAusschreibung = null, ?string $zweckDerAusschreibung = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setNummerZulBeschTeil1($nummerZulBeschTeil1)
            ->setVordrucknummerZB1($vordrucknummerZB1)
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setKennzeichen($kennzeichen)
            ->setVerkehrsjahr($verkehrsjahr)
            ->setTextHersteller($textHersteller)
            ->setVorgangsart($vorgangsart)
            ->setVorgangsnummer($vorgangsnummer)
            ->setVorgangsjahr($vorgangsjahr)
            ->setDatumTat($datumTat)
            ->setTextSuchvermerk($textSuchvermerk)
            ->setAktenzeichenAusschreibendeDienststelle($aktenzeichenAusschreibendeDienststelle)
            ->setAusschreibendeDienststelle($ausschreibendeDienststelle)
            ->setGegenstandsart($gegenstandsart)
            ->setAnlassDerAusschreibung($anlassDerAusschreibung)
            ->setZweckDerAusschreibung($zweckDerAusschreibung);
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get SchluesselHersteller value
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get NummerZulBeschTeil1 value
     * @return string|null
     */
    public function getNummerZulBeschTeil1(): ?string
    {
        return $this->NummerZulBeschTeil1;
    }
    /**
     * Set NummerZulBeschTeil1 value
     * @param string $nummerZulBeschTeil1
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;
        
        return $this;
    }
    /**
     * Get VordrucknummerZB1 value
     * @return string|null
     */
    public function getVordrucknummerZB1(): ?string
    {
        return $this->VordrucknummerZB1;
    }
    /**
     * Set VordrucknummerZB1 value
     * @param string $vordrucknummerZB1
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setVordrucknummerZB1(?string $vordrucknummerZB1 = null): self
    {
        $this->VordrucknummerZB1 = $vordrucknummerZB1;
        
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return string|null
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param string $kennzeichen
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Verkehrsjahr value
     * @return string|null
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }
    /**
     * Set Verkehrsjahr value
     * @param string $verkehrsjahr
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;
        
        return $this;
    }
    /**
     * Get TextHersteller value
     * @return string|null
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }
    /**
     * Set TextHersteller value
     * @param string $textHersteller
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get Vorgangsart value
     * @return string|null
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }
    /**
     * Set Vorgangsart value
     * @param string $vorgangsart
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;
        
        return $this;
    }
    /**
     * Get Vorgangsnummer value
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }
    /**
     * Set Vorgangsnummer value
     * @param string $vorgangsnummer
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;
        
        return $this;
    }
    /**
     * Get Vorgangsjahr value
     * @return string|null
     */
    public function getVorgangsjahr(): ?string
    {
        return $this->Vorgangsjahr;
    }
    /**
     * Set Vorgangsjahr value
     * @param string $vorgangsjahr
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setVorgangsjahr(?string $vorgangsjahr = null): self
    {
        $this->Vorgangsjahr = $vorgangsjahr;
        
        return $this;
    }
    /**
     * Get DatumTat value
     * @return string|null
     */
    public function getDatumTat(): ?string
    {
        return $this->DatumTat;
    }
    /**
     * Set DatumTat value
     * @param string $datumTat
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setDatumTat(?string $datumTat = null): self
    {
        $this->DatumTat = $datumTat;
        
        return $this;
    }
    /**
     * Get TextSuchvermerk value
     * @return string|null
     */
    public function getTextSuchvermerk(): ?string
    {
        return $this->TextSuchvermerk;
    }
    /**
     * Set TextSuchvermerk value
     * @param string $textSuchvermerk
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setTextSuchvermerk(?string $textSuchvermerk = null): self
    {
        $this->TextSuchvermerk = $textSuchvermerk;
        
        return $this;
    }
    /**
     * Get AktenzeichenAusschreibendeDienststelle value
     * @return string|null
     */
    public function getAktenzeichenAusschreibendeDienststelle(): ?string
    {
        return $this->AktenzeichenAusschreibendeDienststelle;
    }
    /**
     * Set AktenzeichenAusschreibendeDienststelle value
     * @param string $aktenzeichenAusschreibendeDienststelle
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setAktenzeichenAusschreibendeDienststelle(?string $aktenzeichenAusschreibendeDienststelle = null): self
    {
        $this->AktenzeichenAusschreibendeDienststelle = $aktenzeichenAusschreibendeDienststelle;
        
        return $this;
    }
    /**
     * Get AusschreibendeDienststelle value
     * @return string|null
     */
    public function getAusschreibendeDienststelle(): ?string
    {
        return $this->AusschreibendeDienststelle;
    }
    /**
     * Set AusschreibendeDienststelle value
     * @param string $ausschreibendeDienststelle
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setAusschreibendeDienststelle(?string $ausschreibendeDienststelle = null): self
    {
        $this->AusschreibendeDienststelle = $ausschreibendeDienststelle;
        
        return $this;
    }
    /**
     * Get Gegenstandsart value
     * @return string|null
     */
    public function getGegenstandsart(): ?string
    {
        return $this->Gegenstandsart;
    }
    /**
     * Set Gegenstandsart value
     * @param string $gegenstandsart
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setGegenstandsart(?string $gegenstandsart = null): self
    {
        $this->Gegenstandsart = $gegenstandsart;
        
        return $this;
    }
    /**
     * Get AnlassDerAusschreibung value
     * @return string|null
     */
    public function getAnlassDerAusschreibung(): ?string
    {
        return $this->AnlassDerAusschreibung;
    }
    /**
     * Set AnlassDerAusschreibung value
     * @param string $anlassDerAusschreibung
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setAnlassDerAusschreibung(?string $anlassDerAusschreibung = null): self
    {
        $this->AnlassDerAusschreibung = $anlassDerAusschreibung;
        
        return $this;
    }
    /**
     * Get ZweckDerAusschreibung value
     * @return string|null
     */
    public function getZweckDerAusschreibung(): ?string
    {
        return $this->ZweckDerAusschreibung;
    }
    /**
     * Set ZweckDerAusschreibung value
     * @param string $zweckDerAusschreibung
     * @return \THAG\XKfz\StructType\SuchvermerkeZCTyp
     */
    public function setZweckDerAusschreibung(?string $zweckDerAusschreibung = null): self
    {
        $this->ZweckDerAusschreibung = $zweckDerAusschreibung;
        
        return $this;
    }
}
