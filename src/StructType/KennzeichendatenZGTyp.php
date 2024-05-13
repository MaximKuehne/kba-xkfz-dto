<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KennzeichendatenZGTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class KennzeichendatenZGTyp extends AbstractStructBase
{
    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

    /**
     * The MerkmalOldtimerkennzeichen
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?bool $MerkmalElektrokennzeichen = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?bool $MerkmalWechselkennzeichen = null;

    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The BetriebszeitraumVon
     */
    public ?int $BetriebszeitraumVon = null;

    /**
     * The BetriebszeitraumBis
     */
    public ?int $BetriebszeitraumBis = null;

    /**
     * The MerkmalGruenesKennzeichen
     */
    public ?bool $MerkmalGruenesKennzeichen = null;

    /**
     * The ZeitpunktZuteilungGruenesKennzeichen
     */
    public ?string $ZeitpunktZuteilungGruenesKennzeichen = null;

    /**
     * The DatumEntstempelungKennzeichen
     */
    public ?string $DatumEntstempelungKennzeichen = null;

    /**
     * The DatumKennzeichenGueltigBis
     */
    public ?string $DatumKennzeichenGueltigBis = null;

    /**
     * The ZeitpunktZuteilungKennzeichen
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;

    /**
     * The RueckgabegrundRotesKennzeichen
     */
    public ?string $RueckgabegrundRotesKennzeichen = null;

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
     * The ZeitpunktAusstellungIntZulSchein
     */
    public ?string $ZeitpunktAusstellungIntZulSchein = null;

    /**
     * The StaatREGINA
     */
    public ?string $StaatREGINA = null;

    /**
     * The DatumEntstempelungWechselkennzeichen
     */
    public ?string $DatumEntstempelungWechselkennzeichen = null;

    /**
     * The DatumAblaufKennzeichenreservierung
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;

    /**
     * Constructor method for KennzeichendatenZGTyp
     *
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
     * Get MerkmalOldtimerkennzeichen value
     */
    public function getMerkmalOldtimerkennzeichen(): ?bool
    {
        return $this->MerkmalOldtimerkennzeichen;
    }

    /**
     * Set MerkmalOldtimerkennzeichen value
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;

        return $this;
    }

    /**
     * Get MerkmalElektrokennzeichen value
     */
    public function getMerkmalElektrokennzeichen(): ?bool
    {
        return $this->MerkmalElektrokennzeichen;
    }

    /**
     * Set MerkmalElektrokennzeichen value
     */
    public function setMerkmalElektrokennzeichen(?bool $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;

        return $this;
    }

    /**
     * Get MerkmalWechselkennzeichen value
     */
    public function getMerkmalWechselkennzeichen(): ?bool
    {
        return $this->MerkmalWechselkennzeichen;
    }

    /**
     * Set MerkmalWechselkennzeichen value
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;

        return $this;
    }

    /**
     * Get MerkmalKennzeichenart value
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }

    /**
     * Set MerkmalKennzeichenart value
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;

        return $this;
    }

    /**
     * Get BetriebszeitraumVon value
     */
    public function getBetriebszeitraumVon(): ?int
    {
        return $this->BetriebszeitraumVon;
    }

    /**
     * Set BetriebszeitraumVon value
     */
    public function setBetriebszeitraumVon(?int $betriebszeitraumVon = null): self
    {
        $this->BetriebszeitraumVon = $betriebszeitraumVon;

        return $this;
    }

    /**
     * Get BetriebszeitraumBis value
     */
    public function getBetriebszeitraumBis(): ?int
    {
        return $this->BetriebszeitraumBis;
    }

    /**
     * Set BetriebszeitraumBis value
     */
    public function setBetriebszeitraumBis(?int $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;

        return $this;
    }

    /**
     * Get MerkmalGruenesKennzeichen value
     */
    public function getMerkmalGruenesKennzeichen(): ?bool
    {
        return $this->MerkmalGruenesKennzeichen;
    }

    /**
     * Set MerkmalGruenesKennzeichen value
     */
    public function setMerkmalGruenesKennzeichen(?bool $merkmalGruenesKennzeichen = null): self
    {
        $this->MerkmalGruenesKennzeichen = $merkmalGruenesKennzeichen;

        return $this;
    }

    /**
     * Get ZeitpunktZuteilungGruenesKennzeichen value
     */
    public function getZeitpunktZuteilungGruenesKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungGruenesKennzeichen;
    }

    /**
     * Set ZeitpunktZuteilungGruenesKennzeichen value
     */
    public function setZeitpunktZuteilungGruenesKennzeichen(?string $zeitpunktZuteilungGruenesKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungGruenesKennzeichen = $zeitpunktZuteilungGruenesKennzeichen;

        return $this;
    }

    /**
     * Get DatumEntstempelungKennzeichen value
     */
    public function getDatumEntstempelungKennzeichen(): ?string
    {
        return $this->DatumEntstempelungKennzeichen;
    }

    /**
     * Set DatumEntstempelungKennzeichen value
     */
    public function setDatumEntstempelungKennzeichen(?string $datumEntstempelungKennzeichen = null): self
    {
        $this->DatumEntstempelungKennzeichen = $datumEntstempelungKennzeichen;

        return $this;
    }

    /**
     * Get DatumKennzeichenGueltigBis value
     */
    public function getDatumKennzeichenGueltigBis(): ?string
    {
        return $this->DatumKennzeichenGueltigBis;
    }

    /**
     * Set DatumKennzeichenGueltigBis value
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;

        return $this;
    }

    /**
     * Get ZeitpunktZuteilungKennzeichen value
     */
    public function getZeitpunktZuteilungKennzeichen(): ?string
    {
        return $this->ZeitpunktZuteilungKennzeichen;
    }

    /**
     * Set ZeitpunktZuteilungKennzeichen value
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;

        return $this;
    }

    /**
     * Get RueckgabegrundRotesKennzeichen value
     */
    public function getRueckgabegrundRotesKennzeichen(): ?string
    {
        return $this->RueckgabegrundRotesKennzeichen;
    }

    /**
     * Set RueckgabegrundRotesKennzeichen value
     */
    public function setRueckgabegrundRotesKennzeichen(?string $rueckgabegrundRotesKennzeichen = null): self
    {
        $this->RueckgabegrundRotesKennzeichen = $rueckgabegrundRotesKennzeichen;

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
     * Get ZeitpunktAusstellungIntZulSchein value
     */
    public function getZeitpunktAusstellungIntZulSchein(): ?string
    {
        return $this->ZeitpunktAusstellungIntZulSchein;
    }

    /**
     * Set ZeitpunktAusstellungIntZulSchein value
     */
    public function setZeitpunktAusstellungIntZulSchein(?string $zeitpunktAusstellungIntZulSchein = null): self
    {
        $this->ZeitpunktAusstellungIntZulSchein = $zeitpunktAusstellungIntZulSchein;

        return $this;
    }

    /**
     * Get StaatREGINA value
     */
    public function getStaatREGINA(): ?string
    {
        return $this->StaatREGINA;
    }

    /**
     * Set StaatREGINA value
     */
    public function setStaatREGINA(?string $staatREGINA = null): self
    {
        $this->StaatREGINA = $staatREGINA;

        return $this;
    }

    /**
     * Get DatumEntstempelungWechselkennzeichen value
     */
    public function getDatumEntstempelungWechselkennzeichen(): ?string
    {
        return $this->DatumEntstempelungWechselkennzeichen;
    }

    /**
     * Set DatumEntstempelungWechselkennzeichen value
     */
    public function setDatumEntstempelungWechselkennzeichen(?string $datumEntstempelungWechselkennzeichen = null): self
    {
        $this->DatumEntstempelungWechselkennzeichen = $datumEntstempelungWechselkennzeichen;

        return $this;
    }

    /**
     * Get DatumAblaufKennzeichenreservierung value
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }

    /**
     * Set DatumAblaufKennzeichenreservierung value
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;

        return $this;
    }
}
