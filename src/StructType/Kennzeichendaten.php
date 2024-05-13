<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Kennzeichendaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Kennzeichendaten extends AbstractStructBase
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
     * The DruckstuecknummerKennz1
     */
    public ?string $DruckstuecknummerKennz1 = null;

    /**
     * The DruckstuecknummerKennz2
     */
    public ?string $DruckstuecknummerKennz2 = null;

    /**
     * The DruckstuecknummerKennzWK
     */
    public ?string $DruckstuecknummerKennzWK = null;

    /**
     * Constructor method for Kennzeichendaten
     *
     * @uses Kennzeichendaten::setKennzeichen()
     * @uses Kennzeichendaten::setMerkmalOldtimerkennzeichen()
     * @uses Kennzeichendaten::setMerkmalElektrokennzeichen()
     * @uses Kennzeichendaten::setMerkmalWechselkennzeichen()
     * @uses Kennzeichendaten::setMerkmalKennzeichenart()
     * @uses Kennzeichendaten::setBetriebszeitraumVon()
     * @uses Kennzeichendaten::setBetriebszeitraumBis()
     * @uses Kennzeichendaten::setMerkmalGruenesKennzeichen()
     * @uses Kennzeichendaten::setZeitpunktZuteilungGruenesKennzeichen()
     * @uses Kennzeichendaten::setDatumEntstempelungKennzeichen()
     * @uses Kennzeichendaten::setDatumKennzeichenGueltigBis()
     * @uses Kennzeichendaten::setZeitpunktZuteilungKennzeichen()
     * @uses Kennzeichendaten::setRueckgabegrundRotesKennzeichen()
     * @uses Kennzeichendaten::setZustaendigeBehoerdeKreisschluessel()
     * @uses Kennzeichendaten::setZustaendigeBehoerdeZusatzziffer()
     * @uses Kennzeichendaten::setKennzeichenfuehrendeBehoerdeKreisschluessel()
     * @uses Kennzeichendaten::setKennzeichenfuehrendeBehoerdeZusatzziffer()
     * @uses Kennzeichendaten::setZeitpunktAusstellungIntZulSchein()
     * @uses Kennzeichendaten::setStaatREGINA()
     * @uses Kennzeichendaten::setDatumEntstempelungWechselkennzeichen()
     * @uses Kennzeichendaten::setDatumAblaufKennzeichenreservierung()
     * @uses Kennzeichendaten::setDruckstuecknummerKennz1()
     * @uses Kennzeichendaten::setDruckstuecknummerKennz2()
     * @uses Kennzeichendaten::setDruckstuecknummerKennzWK()
     */
    public function __construct(?string $kennzeichen = null, ?bool $merkmalOldtimerkennzeichen = null, ?bool $merkmalElektrokennzeichen = null, ?bool $merkmalWechselkennzeichen = null, ?string $merkmalKennzeichenart = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?bool $merkmalGruenesKennzeichen = null, ?string $zeitpunktZuteilungGruenesKennzeichen = null, ?string $datumEntstempelungKennzeichen = null, ?string $datumKennzeichenGueltigBis = null, ?string $zeitpunktZuteilungKennzeichen = null, ?string $rueckgabegrundRotesKennzeichen = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $kennzeichenfuehrendeBehoerdeKreisschluessel = null, ?string $kennzeichenfuehrendeBehoerdeZusatzziffer = null, ?string $zeitpunktAusstellungIntZulSchein = null, ?string $staatREGINA = null, ?string $datumEntstempelungWechselkennzeichen = null, ?string $datumAblaufKennzeichenreservierung = null, ?string $druckstuecknummerKennz1 = null, ?string $druckstuecknummerKennz2 = null, ?string $druckstuecknummerKennzWK = null)
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
            ->setDatumAblaufKennzeichenreservierung($datumAblaufKennzeichenreservierung)
            ->setDruckstuecknummerKennz1($druckstuecknummerKennz1)
            ->setDruckstuecknummerKennz2($druckstuecknummerKennz2)
            ->setDruckstuecknummerKennzWK($druckstuecknummerKennzWK);
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

    /**
     * Get DruckstuecknummerKennz1 value
     */
    public function getDruckstuecknummerKennz1(): ?string
    {
        return $this->DruckstuecknummerKennz1;
    }

    /**
     * Set DruckstuecknummerKennz1 value
     */
    public function setDruckstuecknummerKennz1(?string $druckstuecknummerKennz1 = null): self
    {
        $this->DruckstuecknummerKennz1 = $druckstuecknummerKennz1;

        return $this;
    }

    /**
     * Get DruckstuecknummerKennz2 value
     */
    public function getDruckstuecknummerKennz2(): ?string
    {
        return $this->DruckstuecknummerKennz2;
    }

    /**
     * Set DruckstuecknummerKennz2 value
     */
    public function setDruckstuecknummerKennz2(?string $druckstuecknummerKennz2 = null): self
    {
        $this->DruckstuecknummerKennz2 = $druckstuecknummerKennz2;

        return $this;
    }

    /**
     * Get DruckstuecknummerKennzWK value
     */
    public function getDruckstuecknummerKennzWK(): ?string
    {
        return $this->DruckstuecknummerKennzWK;
    }

    /**
     * Set DruckstuecknummerKennzWK value
     */
    public function setDruckstuecknummerKennzWK(?string $druckstuecknummerKennzWK = null): self
    {
        $this->DruckstuecknummerKennzWK = $druckstuecknummerKennzWK;

        return $this;
    }
}
