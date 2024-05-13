<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuchvermerkeZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SuchvermerkeZWTyp extends AbstractStructBase
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
     * The ZustaendigeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;
    /**
     * The ZustaendigeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;
    /**
     * The KennzeichenfuehrendeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $KennzeichenfuehrendeBehoerdeKreisschluessel = null;
    /**
     * The KennzeichenfuehrendeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $KennzeichenfuehrendeBehoerdeZusatzziffer = null;
    /**
     * The MeldendeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $MeldendeBehoerdeKreisschluessel = null;
    /**
     * The MeldendeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $MeldendeBehoerdeZusatzziffer = null;
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The Sperrgrund
     * @var string|null
     */
    public ?string $Sperrgrund = null;
    /**
     * The DatumVeroeffentlichung
     * @var string|null
     */
    public ?string $DatumVeroeffentlichung = null;
    /**
     * The CodeMangelRueckruf
     * @var string|null
     */
    public ?string $CodeMangelRueckruf = null;
    /**
     * The TextMangelRueckruf
     * @var string|null
     */
    public ?string $TextMangelRueckruf = null;
    /**
     * Constructor method for SuchvermerkeZWTyp
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
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @param string $kennzeichenfuehrendeBehoerdeKreisschluessel
     * @param string $kennzeichenfuehrendeBehoerdeZusatzziffer
     * @param string $meldendeBehoerdeKreisschluessel
     * @param string $meldendeBehoerdeZusatzziffer
     * @param string $zeitpunktAenderung
     * @param string $sperrgrund
     * @param string $datumVeroeffentlichung
     * @param string $codeMangelRueckruf
     * @param string $textMangelRueckruf
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
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setTextSuchvermerk(?string $textSuchvermerk = null): self
    {
        $this->TextSuchvermerk = $textSuchvermerk;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get KennzeichenfuehrendeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getKennzeichenfuehrendeBehoerdeKreisschluessel(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeKreisschluessel;
    }
    /**
     * Set KennzeichenfuehrendeBehoerdeKreisschluessel value
     * @param string $kennzeichenfuehrendeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setKennzeichenfuehrendeBehoerdeKreisschluessel(?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeKreisschluessel = $kennzeichenfuehrendeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get KennzeichenfuehrendeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getKennzeichenfuehrendeBehoerdeZusatzziffer(): ?string
    {
        return $this->KennzeichenfuehrendeBehoerdeZusatzziffer;
    }
    /**
     * Set KennzeichenfuehrendeBehoerdeZusatzziffer value
     * @param string $kennzeichenfuehrendeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setKennzeichenfuehrendeBehoerdeZusatzziffer(?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeZusatzziffer = $kennzeichenfuehrendeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get MeldendeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getMeldendeBehoerdeKreisschluessel(): ?string
    {
        return $this->MeldendeBehoerdeKreisschluessel;
    }
    /**
     * Set MeldendeBehoerdeKreisschluessel value
     * @param string $meldendeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setMeldendeBehoerdeKreisschluessel(?string $meldendeBehoerdeKreisschluessel = null): self
    {
        $this->MeldendeBehoerdeKreisschluessel = $meldendeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get MeldendeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getMeldendeBehoerdeZusatzziffer(): ?string
    {
        return $this->MeldendeBehoerdeZusatzziffer;
    }
    /**
     * Set MeldendeBehoerdeZusatzziffer value
     * @param string $meldendeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setMeldendeBehoerdeZusatzziffer(?string $meldendeBehoerdeZusatzziffer = null): self
    {
        $this->MeldendeBehoerdeZusatzziffer = $meldendeBehoerdeZusatzziffer;
        
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
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get Sperrgrund value
     * @return string|null
     */
    public function getSperrgrund(): ?string
    {
        return $this->Sperrgrund;
    }
    /**
     * Set Sperrgrund value
     * @param string $sperrgrund
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setSperrgrund(?string $sperrgrund = null): self
    {
        $this->Sperrgrund = $sperrgrund;
        
        return $this;
    }
    /**
     * Get DatumVeroeffentlichung value
     * @return string|null
     */
    public function getDatumVeroeffentlichung(): ?string
    {
        return $this->DatumVeroeffentlichung;
    }
    /**
     * Set DatumVeroeffentlichung value
     * @param string $datumVeroeffentlichung
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setDatumVeroeffentlichung(?string $datumVeroeffentlichung = null): self
    {
        $this->DatumVeroeffentlichung = $datumVeroeffentlichung;
        
        return $this;
    }
    /**
     * Get CodeMangelRueckruf value
     * @return string|null
     */
    public function getCodeMangelRueckruf(): ?string
    {
        return $this->CodeMangelRueckruf;
    }
    /**
     * Set CodeMangelRueckruf value
     * @param string $codeMangelRueckruf
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setCodeMangelRueckruf(?string $codeMangelRueckruf = null): self
    {
        $this->CodeMangelRueckruf = $codeMangelRueckruf;
        
        return $this;
    }
    /**
     * Get TextMangelRueckruf value
     * @return string|null
     */
    public function getTextMangelRueckruf(): ?string
    {
        return $this->TextMangelRueckruf;
    }
    /**
     * Set TextMangelRueckruf value
     * @param string $textMangelRueckruf
     * @return \THAG\XKfz\StructType\SuchvermerkeZWTyp
     */
    public function setTextMangelRueckruf(?string $textMangelRueckruf = null): self
    {
        $this->TextMangelRueckruf = $textMangelRueckruf;
        
        return $this;
    }
}
