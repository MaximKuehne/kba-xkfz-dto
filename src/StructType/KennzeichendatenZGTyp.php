<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KennzeichendatenZGTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class KennzeichendatenZGTyp extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The MerkmalOldtimerkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;
    /**
     * The MerkmalElektrokennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalElektrokennzeichen = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalWechselkennzeichen = null;
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The BetriebszeitraumVon
     * @var int|null
     */
    public ?int $BetriebszeitraumVon = null;
    /**
     * The BetriebszeitraumBis
     * @var int|null
     */
    public ?int $BetriebszeitraumBis = null;
    /**
     * The MerkmalGruenesKennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalGruenesKennzeichen = null;
    /**
     * The ZeitpunktZuteilungGruenesKennzeichen
     * @var string|null
     */
    public ?string $ZeitpunktZuteilungGruenesKennzeichen = null;
    /**
     * The DatumEntstempelungKennzeichen
     * @var string|null
     */
    public ?string $DatumEntstempelungKennzeichen = null;
    /**
     * The DatumKennzeichenGueltigBis
     * @var string|null
     */
    public ?string $DatumKennzeichenGueltigBis = null;
    /**
     * The ZeitpunktZuteilungKennzeichen
     * @var string|null
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;
    /**
     * The RueckgabegrundRotesKennzeichen
     * @var string|null
     */
    public ?string $RueckgabegrundRotesKennzeichen = null;
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
     * The ZeitpunktAusstellungIntZulSchein
     * @var string|null
     */
    public ?string $ZeitpunktAusstellungIntZulSchein = null;
    /**
     * The StaatREGINA
     * @var string|null
     */
    public ?string $StaatREGINA = null;
    /**
     * The DatumEntstempelungWechselkennzeichen
     * @var string|null
     */
    public ?string $DatumEntstempelungWechselkennzeichen = null;
    /**
     * The DatumAblaufKennzeichenreservierung
     * @var string|null
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;
    /**
     * Constructor method for KennzeichendatenZGTyp
     * @uses KennzeichendatenZGTyp::setKennzeichen()
     * @uses KennzeichendatenZGTyp::setMerkmalOldtimerkennzeichen()
     * @uses KennzeichendatenZGTyp::setMerkmalElektrokennzeichen()
     * @uses KennzeichendatenZGTyp::setMerkmalWechselkennzeichen()
     * @uses KennzeichendatenZGTyp::setMerkmalKennzeichenart()
     * @uses KennzeichendatenZGTyp::setBetriebszeitraumVon()
     * @uses KennzeichendatenZGTyp::setBetriebszeitraumBis()
     * @uses KennzeichendatenZGTyp::setMerkmalGruenesKennzeichen()
     * @uses KennzeichendatenZGTyp::setZeitpunktZuteilungGruenesKennzeichen()
     * @uses KennzeichendatenZGTyp::setDatumEntstempelungKennzeichen()
     * @uses KennzeichendatenZGTyp::setDatumKennzeichenGueltigBis()
     * @uses KennzeichendatenZGTyp::setZeitpunktZuteilungKennzeichen()
     * @uses KennzeichendatenZGTyp::setRueckgabegrundRotesKennzeichen()
     * @uses KennzeichendatenZGTyp::setZustaendigeBehoerdeKreisschluessel()
     * @uses KennzeichendatenZGTyp::setZustaendigeBehoerdeZusatzziffer()
     * @uses KennzeichendatenZGTyp::setKennzeichenfuehrendeBehoerdeKreisschluessel()
     * @uses KennzeichendatenZGTyp::setKennzeichenfuehrendeBehoerdeZusatzziffer()
     * @uses KennzeichendatenZGTyp::setZeitpunktAusstellungIntZulSchein()
     * @uses KennzeichendatenZGTyp::setStaatREGINA()
     * @uses KennzeichendatenZGTyp::setDatumEntstempelungWechselkennzeichen()
     * @uses KennzeichendatenZGTyp::setDatumAblaufKennzeichenreservierung()
     * @param string $kennzeichen
     * @param bool $merkmalOldtimerkennzeichen
     * @param bool $merkmalElektrokennzeichen
     * @param bool $merkmalWechselkennzeichen
     * @param string $merkmalKennzeichenart
     * @param int $betriebszeitraumVon
     * @param int $betriebszeitraumBis
     * @param bool $merkmalGruenesKennzeichen
     * @param string $zeitpunktZuteilungGruenesKennzeichen
     * @param string $datumEntstempelungKennzeichen
     * @param string $datumKennzeichenGueltigBis
     * @param string $zeitpunktZuteilungKennzeichen
     * @param string $rueckgabegrundRotesKennzeichen
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @param string $kennzeichenfuehrendeBehoerdeKreisschluessel
     * @param string $kennzeichenfuehrendeBehoerdeZusatzziffer
     * @param string $zeitpunktAusstellungIntZulSchein
     * @param string $staatREGINA
     * @param string $datumEntstempelungWechselkennzeichen
     * @param string $datumAblaufKennzeichenreservierung
     */
    public function __construct(?string $kennzeichen = null, ?bool $merkmalOldtimerkennzeichen = null, ?bool $merkmalElektrokennzeichen = null, ?bool $merkmalWechselkennzeichen = null, ?string $merkmalKennzeichenart = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?bool $merkmalGruenesKennzeichen = null, ?string $zeitpunktZuteilungGruenesKennzeichen = null, ?string $datumEntstempelungKennzeichen = null, ?string $datumKennzeichenGueltigBis = null, ?string $zeitpunktZuteilungKennzeichen = null, ?string $rueckgabegrundRotesKennzeichen = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null, ?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null, ?string $zeitpunktAusstellungIntZulSchein = null, ?string $staatREGINA = null, ?string $datumEntstempelungWechselkennzeichen = null, ?string $datumAblaufKennzeichenreservierung = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setMerkmalOldtimerkennzeichen($merkmalOldtimerkennzeichen)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setMerkmalGruenesKennzeichen($merkmalGruenesKennzeichen)
            ->setZeitpunktZuteilungGruenesKennzeichen($zeitpunktZuteilungGruenesKennzeichen)
            ->setDatumEntstempelungKennzeichen($datumEntstempelungKennzeichen)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis)
            ->setZeitpunktZuteilungKennzeichen($zeitpunktZuteilungKennzeichen)
            ->setRueckgabegrundRotesKennzeichen($rueckgabegrundRotesKennzeichen)
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer)
            ->setKennzeichenfuehrendeBehoerdeKreisschluessel($kennzeichenfuehrendeBehoerdeKreisschluessel)
            ->setKennzeichenfuehrendeBehoerdeZusatzziffer($kennzeichenfuehrendeBehoerdeZusatzziffer)
            ->setZeitpunktAusstellungIntZulSchein($zeitpunktAusstellungIntZulSchein)
            ->setStaatREGINA($staatREGINA)
            ->setDatumEntstempelungWechselkennzeichen($datumEntstempelungWechselkennzeichen)
            ->setDatumAblaufKennzeichenreservierung($datumAblaufKennzeichenreservierung);
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalOldtimerkennzeichen value
     * @return bool|null
     */
    public function getMerkmalOldtimerkennzeichen(): ?bool
    {
        return $this->MerkmalOldtimerkennzeichen;
    }
    /**
     * Set MerkmalOldtimerkennzeichen value
     * @param bool $merkmalOldtimerkennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalElektrokennzeichen value
     * @return bool|null
     */
    public function getMerkmalElektrokennzeichen(): ?bool
    {
        return $this->MerkmalElektrokennzeichen;
    }
    /**
     * Set MerkmalElektrokennzeichen value
     * @param bool $merkmalElektrokennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setMerkmalElektrokennzeichen(?bool $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalWechselkennzeichen value
     * @return bool|null
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }
    /**
     * Set MerkmalWechselkennzeichen value
     * @param bool $merkmalWechselkennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get MerkmalKennzeichenart value
     * @return string|null
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }
    /**
     * Set MerkmalKennzeichenart value
     * @param string $merkmalKennzeichenart
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
        return $this;
    }
    /**
     * Get BetriebszeitraumVon value
     * @return int|null
     */
    public function getBetriebszeitraumVon(): ?int
    {
        return $this->BetriebszeitraumVon;
    }
    /**
     * Set BetriebszeitraumVon value
     * @param int $betriebszeitraumVon
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setBetriebszeitraumVon(?int $betriebszeitraumVon = null): self
    {
        $this->BetriebszeitraumVon = $betriebszeitraumVon;
        
        return $this;
    }
    /**
     * Get BetriebszeitraumBis value
     * @return int|null
     */
    public function getBetriebszeitraumBis(): ?int
    {
        return $this->BetriebszeitraumBis;
    }
    /**
     * Set BetriebszeitraumBis value
     * @param int $betriebszeitraumBis
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setBetriebszeitraumBis(?int $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;
        
        return $this;
    }
    /**
     * Get MerkmalGruenesKennzeichen value
     * @return bool|null
     */
    public function getMerkmalGruenesKennzeichen(): ?bool
    {
        return $this->MerkmalGruenesKennzeichen;
    }
    /**
     * Set MerkmalGruenesKennzeichen value
     * @param bool $merkmalGruenesKennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setMerkmalGruenesKennzeichen(?bool $merkmalGruenesKennzeichen = null): self
    {
        $this->MerkmalGruenesKennzeichen = $merkmalGruenesKennzeichen;
        
        return $this;
    }
    /**
     * Get ZeitpunktZuteilungGruenesKennzeichen value
     * @return string|null
     */
    public function getZeitpunktZuteilungGruenesKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungGruenesKennzeichen;
    }
    /**
     * Set ZeitpunktZuteilungGruenesKennzeichen value
     * @param string $zeitpunktZuteilungGruenesKennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setZeitpunktZuteilungGruenesKennzeichen(?string $zeitpunktZuteilungGruenesKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungGruenesKennzeichen = $zeitpunktZuteilungGruenesKennzeichen;
        
        return $this;
    }
    /**
     * Get DatumEntstempelungKennzeichen value
     * @return string|null
     */
    public function getDatumEntstempelungKennzeichen(): ?string
    {
        return $this->DatumEntstempelungKennzeichen;
    }
    /**
     * Set DatumEntstempelungKennzeichen value
     * @param string $datumEntstempelungKennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setDatumEntstempelungKennzeichen(?string $datumEntstempelungKennzeichen = null): self
    {
        $this->DatumEntstempelungKennzeichen = $datumEntstempelungKennzeichen;
        
        return $this;
    }
    /**
     * Get DatumKennzeichenGueltigBis value
     * @return string|null
     */
    public function getDatumKennzeichenGueltigBis(): ?string
    {
        return $this->DatumKennzeichenGueltigBis;
    }
    /**
     * Set DatumKennzeichenGueltigBis value
     * @param string $datumKennzeichenGueltigBis
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
        return $this;
    }
    /**
     * Get ZeitpunktZuteilungKennzeichen value
     * @return string|null
     */
    public function getZeitpunktZuteilungKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungKennzeichen;
    }
    /**
     * Set ZeitpunktZuteilungKennzeichen value
     * @param string $zeitpunktZuteilungKennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;
        
        return $this;
    }
    /**
     * Get RueckgabegrundRotesKennzeichen value
     * @return string|null
     */
    public function getRueckgabegrundRotesKennzeichen(): ?string
    {
        return $this->RueckgabegrundRotesKennzeichen;
    }
    /**
     * Set RueckgabegrundRotesKennzeichen value
     * @param string $rueckgabegrundRotesKennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setRueckgabegrundRotesKennzeichen(?string $rueckgabegrundRotesKennzeichen = null): self
    {
        $this->RueckgabegrundRotesKennzeichen = $rueckgabegrundRotesKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setKennzeichenfuehrendeBehoerdeZusatzziffer(?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null): self
    {
        $this->KennzeichenfuehrendeBehoerdeZusatzziffer = $kennzeichenfuehrendeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get ZeitpunktAusstellungIntZulSchein value
     * @return string|null
     */
    public function getZeitpunktAusstellungIntZulSchein(): ?string
    {
        return $this->ZeitpunktAusstellungIntZulSchein;
    }
    /**
     * Set ZeitpunktAusstellungIntZulSchein value
     * @param string $zeitpunktAusstellungIntZulSchein
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setZeitpunktAusstellungIntZulSchein(?string $zeitpunktAusstellungIntZulSchein = null): self
    {
        $this->ZeitpunktAusstellungIntZulSchein = $zeitpunktAusstellungIntZulSchein;
        
        return $this;
    }
    /**
     * Get StaatREGINA value
     * @return string|null
     */
    public function getStaatREGINA(): ?string
    {
        return $this->StaatREGINA;
    }
    /**
     * Set StaatREGINA value
     * @param string $staatREGINA
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setStaatREGINA(?string $staatREGINA = null): self
    {
        $this->StaatREGINA = $staatREGINA;
        
        return $this;
    }
    /**
     * Get DatumEntstempelungWechselkennzeichen value
     * @return string|null
     */
    public function getDatumEntstempelungWechselkennzeichen(): ?string
    {
        return $this->DatumEntstempelungWechselkennzeichen;
    }
    /**
     * Set DatumEntstempelungWechselkennzeichen value
     * @param string $datumEntstempelungWechselkennzeichen
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setDatumEntstempelungWechselkennzeichen(?string $datumEntstempelungWechselkennzeichen = null): self
    {
        $this->DatumEntstempelungWechselkennzeichen = $datumEntstempelungWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get DatumAblaufKennzeichenreservierung value
     * @return string|null
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }
    /**
     * Set DatumAblaufKennzeichenreservierung value
     * @param string $datumAblaufKennzeichenreservierung
     * @return \THAG\XKfz\StructType\KennzeichendatenZGTyp
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;
        
        return $this;
    }
}
