<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchKennzeichendaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchKennzeichendaten extends AbstractStructBase
{
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * The Kennzeichen
     */
    public ?string $Kennzeichen = null;

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
     * The DatumKennzeichenGueltigBis
     */
    public ?string $DatumKennzeichenGueltigBis = null;

    /**
     * The MerkmalOldtimerkennzeichen
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?bool $MerkmalWechselkennzeichen = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?bool $MerkmalElektrokennzeichen = null;

    /**
     * The MerkmalGruenesKennzeichen
     */
    public ?bool $MerkmalGruenesKennzeichen = null;

    /**
     * The ZeitpunktZuteilungKennzeichen
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;

    /**
     * The Verkehrsjahr
     */
    public ?string $Verkehrsjahr = null;

    /**
     * The DatumEndeVersicherungsschutz
     */
    public ?string $DatumEndeVersicherungsschutz = null;

    /**
     * The DatumVersicherungsbeginn
     */
    public ?string $DatumVersicherungsbeginn = null;

    /**
     * Constructor method for BatchKennzeichendaten
     *
     * @uses BatchKennzeichendaten::setZustaendigeBehoerdeKreisschluessel()
     * @uses BatchKennzeichendaten::setZustaendigeBehoerdeZusatzziffer()
     * @uses BatchKennzeichendaten::setKennzeichen()
     * @uses BatchKennzeichendaten::setMerkmalKennzeichenart()
     * @uses BatchKennzeichendaten::setBetriebszeitraumVon()
     * @uses BatchKennzeichendaten::setBetriebszeitraumBis()
     * @uses BatchKennzeichendaten::setDatumKennzeichenGueltigBis()
     * @uses BatchKennzeichendaten::setMerkmalOldtimerkennzeichen()
     * @uses BatchKennzeichendaten::setMerkmalWechselkennzeichen()
     * @uses BatchKennzeichendaten::setMerkmalElektrokennzeichen()
     * @uses BatchKennzeichendaten::setMerkmalGruenesKennzeichen()
     * @uses BatchKennzeichendaten::setZeitpunktZuteilungKennzeichen()
     * @uses BatchKennzeichendaten::setVerkehrsjahr()
     * @uses BatchKennzeichendaten::setDatumEndeVersicherungsschutz()
     * @uses BatchKennzeichendaten::setDatumVersicherungsbeginn()
     */
    public function __construct(?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $kennzeichen = null, ?string $merkmalKennzeichenart = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?string $datumKennzeichenGueltigBis = null, ?bool $merkmalOldtimerkennzeichen = null, ?bool $merkmalWechselkennzeichen = null, ?bool $merkmalElektrokennzeichen = null, ?bool $merkmalGruenesKennzeichen = null, ?string $zeitpunktZuteilungKennzeichen = null, ?string $verkehrsjahr = null, ?string $datumEndeVersicherungsschutz = null, ?string $datumVersicherungsbeginn = null)
    {
        $this
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer)
            ->setKennzeichen($kennzeichen)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis)
            ->setMerkmalOldtimerkennzeichen($merkmalOldtimerkennzeichen)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setMerkmalGruenesKennzeichen($merkmalGruenesKennzeichen)
            ->setZeitpunktZuteilungKennzeichen($zeitpunktZuteilungKennzeichen)
            ->setVerkehrsjahr($verkehrsjahr)
            ->setDatumEndeVersicherungsschutz($datumEndeVersicherungsschutz)
            ->setDatumVersicherungsbeginn($datumVersicherungsbeginn);
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
     * Get DatumEndeVersicherungsschutz value
     */
    public function getDatumEndeVersicherungsschutz(): ?string
    {
        return $this->DatumEndeVersicherungsschutz;
    }

    /**
     * Set DatumEndeVersicherungsschutz value
     */
    public function setDatumEndeVersicherungsschutz(?string $datumEndeVersicherungsschutz = null): self
    {
        $this->DatumEndeVersicherungsschutz = $datumEndeVersicherungsschutz;

        return $this;
    }

    /**
     * Get DatumVersicherungsbeginn value
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }

    /**
     * Set DatumVersicherungsbeginn value
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;

        return $this;
    }
}
