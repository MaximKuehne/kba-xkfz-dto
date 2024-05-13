<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuchvermerkeZWTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SuchvermerkeZWTyp extends AbstractStructBase
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
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * The KennzeichenfuehrendeBehoerdeKreisschluessel
     */
    public ?string $KennzeichenfuehrendeBehoerdeKreisschluessel = null;

    /**
     * The KennzeichenfuehrendeBehoerdeZusatzziffer
     */
    public ?string $KennzeichenfuehrendeBehoerdeZusatzziffer = null;

    /**
     * The MeldendeBehoerdeKreisschluessel
     */
    public ?string $MeldendeBehoerdeKreisschluessel = null;

    /**
     * The MeldendeBehoerdeZusatzziffer
     */
    public ?string $MeldendeBehoerdeZusatzziffer = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The Sperrgrund
     */
    public ?string $Sperrgrund = null;

    /**
     * The DatumVeroeffentlichung
     */
    public ?string $DatumVeroeffentlichung = null;

    /**
     * The CodeMangelRueckruf
     */
    public ?string $CodeMangelRueckruf = null;

    /**
     * The TextMangelRueckruf
     */
    public ?string $TextMangelRueckruf = null;

    /**
     * Constructor method for SuchvermerkeZWTyp
     *
     * @uses SuchvermerkeZWTyp::setFahrzeugidentifizierungsnummer()
     * @uses SuchvermerkeZWTyp::setSchluesselHersteller()
     * @uses SuchvermerkeZWTyp::setNummerZulBeschTeil1()
     * @uses SuchvermerkeZWTyp::setVordrucknummerZB1()
     * @uses SuchvermerkeZWTyp::setNummerZulBeschTeil2()
     * @uses SuchvermerkeZWTyp::setKennzeichen()
     * @uses SuchvermerkeZWTyp::setVerkehrsjahr()
     * @uses SuchvermerkeZWTyp::setTextHersteller()
     * @uses SuchvermerkeZWTyp::setVorgangsart()
     * @uses SuchvermerkeZWTyp::setVorgangsnummer()
     * @uses SuchvermerkeZWTyp::setVorgangsjahr()
     * @uses SuchvermerkeZWTyp::setDatumTat()
     * @uses SuchvermerkeZWTyp::setTextSuchvermerk()
     * @uses SuchvermerkeZWTyp::setZustaendigeBehoerdeKreisschluessel()
     * @uses SuchvermerkeZWTyp::setZustaendigeBehoerdeZusatzziffer()
     * @uses SuchvermerkeZWTyp::setKennzeichenfuehrendeBehoerdeKreisschluessel()
     * @uses SuchvermerkeZWTyp::setKennzeichenfuehrendeBehoerdeZusatzziffer()
     * @uses SuchvermerkeZWTyp::setMeldendeBehoerdeKreisschluessel()
     * @uses SuchvermerkeZWTyp::setMeldendeBehoerdeZusatzziffer()
     * @uses SuchvermerkeZWTyp::setZeitpunktAenderung()
     * @uses SuchvermerkeZWTyp::setSperrgrund()
     * @uses SuchvermerkeZWTyp::setDatumVeroeffentlichung()
     * @uses SuchvermerkeZWTyp::setCodeMangelRueckruf()
     * @uses SuchvermerkeZWTyp::setTextMangelRueckruf()
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $schluesselHersteller = null, ?string $nummerZulBeschTeil1 = null, ?string $vordrucknummerZB1 = null, ?string $nummerZulBeschTeil2 = null, ?string $kennzeichen = null, ?string $verkehrsjahr = null, ?string $textHersteller = null, ?string $vorgangsart = null, ?string $vorgangsnummer = null, ?string $vorgangsjahr = null, ?string $datumTat = null, ?string $textSuchvermerk = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null, ?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null, ?string $meldendeBehoerdeKreisschluessel = null, ?string $meldendeBehoerdeZusatzziffer = null, ?string $zeitpunktAenderung = null, ?string $sperrgrund = null, ?string $datumVeroeffentlichung = null, ?string $codeMangelRueckruf = null, ?string $textMangelRueckruf = null)
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
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer)
            ->setKennzeichenfuehrendeBehoerdeKreisschluessel($kennzeichenfuehrendeBehoerdeKreisschluessel)
            ->setKennzeichenfuehrendeBehoerdeZusatzziffer($kennzeichenfuehrendeBehoerdeZusatzziffer)
            ->setMeldendeBehoerdeKreisschluessel($meldendeBehoerdeKreisschluessel)
            ->setMeldendeBehoerdeZusatzziffer($meldendeBehoerdeZusatzziffer)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setSperrgrund($sperrgrund)
            ->setDatumVeroeffentlichung($datumVeroeffentlichung)
            ->setCodeMangelRueckruf($codeMangelRueckruf)
            ->setTextMangelRueckruf($textMangelRueckruf);
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
     * Get ZustaendigeBehoerdeKreisschluessel value
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }

    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }

    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;

        return $this;
    }

    /**
     * Get KennzeichenfuehrendeBehoerdeKreisschluessel value
     */
    public function getKennzeichenfuehrendeBehoerdeKreisschluessel(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeKreisschluessel;
    }

    /**
     * Set KennzeichenfuehrendeBehoerdeKreisschluessel value
     */
    public function setKennzeichenfuehrendeBehoerdeKreisschluessel(?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeKreisschluessel = $kennzeichenfuehrendeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get KennzeichenfuehrendeBehoerdeZusatzziffer value
     */
    public function getKennzeichenfuehrendeBehoerdeZusatzziffer(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeZusatzziffer;
    }

    /**
     * Set KennzeichenfuehrendeBehoerdeZusatzziffer value
     */
    public function setKennzeichenfuehrendeBehoerdeZusatzziffer(?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeZusatzziffer = $kennzeichenfuehrendeBehoerdeZusatzziffer;

        return $this;
    }

    /**
     * Get MeldendeBehoerdeKreisschluessel value
     */
    public function getMeldendeBehoerdeKreisschluessel(): ?string
    {
        return $this->MeldendeBehoerdeKreisschluessel;
    }

    /**
     * Set MeldendeBehoerdeKreisschluessel value
     */
    public function setMeldendeBehoerdeKreisschluessel(?string $meldendeBehoerdeKreisschluessel = null): self
    {
        $this->MeldendeBehoerdeKreisschluessel = $meldendeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get MeldendeBehoerdeZusatzziffer value
     */
    public function getMeldendeBehoerdeZusatzziffer(): ?string
    {
        return $this->MeldendeBehoerdeZusatzziffer;
    }

    /**
     * Set MeldendeBehoerdeZusatzziffer value
     */
    public function setMeldendeBehoerdeZusatzziffer(?string $meldendeBehoerdeZusatzziffer = null): self
    {
        $this->MeldendeBehoerdeZusatzziffer = $meldendeBehoerdeZusatzziffer;

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
     * Get Sperrgrund value
     */
    public function getSperrgrund(): ?string
    {
        return $this->Sperrgrund;
    }

    /**
     * Set Sperrgrund value
     */
    public function setSperrgrund(?string $sperrgrund = null): self
    {
        $this->Sperrgrund = $sperrgrund;

        return $this;
    }

    /**
     * Get DatumVeroeffentlichung value
     */
    public function getDatumVeroeffentlichung(): ?string
    {
        return $this->DatumVeroeffentlichung;
    }

    /**
     * Set DatumVeroeffentlichung value
     */
    public function setDatumVeroeffentlichung(?string $datumVeroeffentlichung = null): self
    {
        $this->DatumVeroeffentlichung = $datumVeroeffentlichung;

        return $this;
    }

    /**
     * Get CodeMangelRueckruf value
     */
    public function getCodeMangelRueckruf(): ?string
    {
        return $this->CodeMangelRueckruf;
    }

    /**
     * Set CodeMangelRueckruf value
     */
    public function setCodeMangelRueckruf(?string $codeMangelRueckruf = null): self
    {
        $this->CodeMangelRueckruf = $codeMangelRueckruf;

        return $this;
    }

    /**
     * Get TextMangelRueckruf value
     */
    public function getTextMangelRueckruf(): ?string
    {
        return $this->TextMangelRueckruf;
    }

    /**
     * Set TextMangelRueckruf value
     */
    public function setTextMangelRueckruf(?string $textMangelRueckruf = null): self
    {
        $this->TextMangelRueckruf = $textMangelRueckruf;

        return $this;
    }
}
