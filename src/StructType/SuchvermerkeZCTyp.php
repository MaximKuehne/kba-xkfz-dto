<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuchvermerkeZCTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SuchvermerkeZCTyp extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The NummerZulBeschTeil1
     */
    public ?string $NummerZulBeschTeil1 = null;

    /**
     * The VordrucknummerZB1
     */
    public ?string $VordrucknummerZB1 = null;

    /**
     * The NummerZulBeschTeil2
     */
    public ?string $NummerZulBeschTeil2 = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The Verkehrsjahr
     */
    public ?string $Verkehrsjahr = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The Vorgangsart
     */
    public ?string $Vorgangsart = null;

    /**
     * The Vorgangsnummer
     */
    public ?string $Vorgangsnummer = null;

    /**
     * The Vorgangsjahr
     */
    public ?string $Vorgangsjahr = null;

    /**
     * The DatumTat
     */
    public ?string $DatumTat = null;

    /**
     * The TextSuchvermerk
     */
    public ?string $TextSuchvermerk = null;

    /**
     * The AktenzeichenAusschreibendeDienststelle
     */
    public ?string $AktenzeichenAusschreibendeDienststelle = null;

    /**
     * The AusschreibendeDienststelle
     */
    public ?string $AusschreibendeDienststelle = null;

    /**
     * The Gegenstandsart
     */
    public ?string $Gegenstandsart = null;

    /**
     * The AnlassDerAusschreibung
     */
    public ?string $AnlassDerAusschreibung = null;

    /**
     * The ZweckDerAusschreibung
     */
    public ?string $ZweckDerAusschreibung = null;

    /**
     * Constructor method for SuchvermerkeZCTyp
     *
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
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get NummerZulBeschTeil1 value
     */
    public function getNummerZulBeschTeil1(): ?string
    {
        return $this->NummerZulBeschTeil1;
    }

    /**
     * Set NummerZulBeschTeil1 value
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;

        return $this;
    }

    /**
     * Get VordrucknummerZB1 value
     */
    public function getVordrucknummerZB1(): ?string
    {
        return $this->VordrucknummerZB1;
    }

    /**
     * Set VordrucknummerZB1 value
     */
    public function setVordrucknummerZB1(?string $vordrucknummerZB1 = null): self
    {
        $this->VordrucknummerZB1 = $vordrucknummerZB1;

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
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?string
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get Verkehrsjahr value
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }

    /**
     * Set Verkehrsjahr value
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;

        return $this;
    }

    /**
     * Get TextHersteller value
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }

    /**
     * Set TextHersteller value
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;

        return $this;
    }

    /**
     * Get Vorgangsart value
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }

    /**
     * Set Vorgangsart value
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;

        return $this;
    }

    /**
     * Get Vorgangsnummer value
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * Set Vorgangsnummer value
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;

        return $this;
    }

    /**
     * Get Vorgangsjahr value
     */
    public function getVorgangsjahr(): ?string
    {
        return $this->Vorgangsjahr;
    }

    /**
     * Set Vorgangsjahr value
     */
    public function setVorgangsjahr(?string $vorgangsjahr = null): self
    {
        $this->Vorgangsjahr = $vorgangsjahr;

        return $this;
    }

    /**
     * Get DatumTat value
     */
    public function getDatumTat(): ?string
    {
        return $this->DatumTat;
    }

    /**
     * Set DatumTat value
     */
    public function setDatumTat(?string $datumTat = null): self
    {
        $this->DatumTat = $datumTat;

        return $this;
    }

    /**
     * Get TextSuchvermerk value
     */
    public function getTextSuchvermerk(): ?string
    {
        return $this->TextSuchvermerk;
    }

    /**
     * Set TextSuchvermerk value
     */
    public function setTextSuchvermerk(?string $textSuchvermerk = null): self
    {
        $this->TextSuchvermerk = $textSuchvermerk;

        return $this;
    }

    /**
     * Get AktenzeichenAusschreibendeDienststelle value
     */
    public function getAktenzeichenAusschreibendeDienststelle(): ?string
    {
        return $this->AktenzeichenAusschreibendeDienststelle;
    }

    /**
     * Set AktenzeichenAusschreibendeDienststelle value
     */
    public function setAktenzeichenAusschreibendeDienststelle(?string $aktenzeichenAusschreibendeDienststelle = null): self
    {
        $this->AktenzeichenAusschreibendeDienststelle = $aktenzeichenAusschreibendeDienststelle;

        return $this;
    }

    /**
     * Get AusschreibendeDienststelle value
     */
    public function getAusschreibendeDienststelle(): ?string
    {
        return $this->AusschreibendeDienststelle;
    }

    /**
     * Set AusschreibendeDienststelle value
     */
    public function setAusschreibendeDienststelle(?string $ausschreibendeDienststelle = null): self
    {
        $this->AusschreibendeDienststelle = $ausschreibendeDienststelle;

        return $this;
    }

    /**
     * Get Gegenstandsart value
     */
    public function getGegenstandsart(): ?string
    {
        return $this->Gegenstandsart;
    }

    /**
     * Set Gegenstandsart value
     */
    public function setGegenstandsart(?string $gegenstandsart = null): self
    {
        $this->Gegenstandsart = $gegenstandsart;

        return $this;
    }

    /**
     * Get AnlassDerAusschreibung value
     */
    public function getAnlassDerAusschreibung(): ?string
    {
        return $this->AnlassDerAusschreibung;
    }

    /**
     * Set AnlassDerAusschreibung value
     */
    public function setAnlassDerAusschreibung(?string $anlassDerAusschreibung = null): self
    {
        $this->AnlassDerAusschreibung = $anlassDerAusschreibung;

        return $this;
    }

    /**
     * Get ZweckDerAusschreibung value
     */
    public function getZweckDerAusschreibung(): ?string
    {
        return $this->ZweckDerAusschreibung;
    }

    /**
     * Set ZweckDerAusschreibung value
     */
    public function setZweckDerAusschreibung(?string $zweckDerAusschreibung = null): self
    {
        $this->ZweckDerAusschreibung = $zweckDerAusschreibung;

        return $this;
    }
}
