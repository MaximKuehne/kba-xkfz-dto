<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchKennzeichendaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchKennzeichendaten extends AbstractStructBase
{
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
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
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
     * The DatumKennzeichenGueltigBis
     * @var string|null
     */
    public ?string $DatumKennzeichenGueltigBis = null;
    /**
     * The MerkmalOldtimerkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalWechselkennzeichen = null;
    /**
     * The MerkmalElektrokennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalElektrokennzeichen = null;
    /**
     * The MerkmalGruenesKennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalGruenesKennzeichen = null;
    /**
     * The ZeitpunktZuteilungKennzeichen
     * @var string|null
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;
    /**
     * The Verkehrsjahr
     * @var string|null
     */
    public ?string $Verkehrsjahr = null;
    /**
     * The DatumEndeVersicherungsschutz
     * @var string|null
     */
    public ?string $DatumEndeVersicherungsschutz = null;
    /**
     * The DatumVersicherungsbeginn
     * @var string|null
     */
    public ?string $DatumVersicherungsbeginn = null;
    /**
     * Constructor method for BatchKennzeichendaten
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
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @param string $kennzeichen
     * @param string $merkmalKennzeichenart
     * @param int $betriebszeitraumVon
     * @param int $betriebszeitraumBis
     * @param string $datumKennzeichenGueltigBis
     * @param bool $merkmalOldtimerkennzeichen
     * @param bool $merkmalWechselkennzeichen
     * @param bool $merkmalElektrokennzeichen
     * @param bool $merkmalGruenesKennzeichen
     * @param string $zeitpunktZuteilungKennzeichen
     * @param string $verkehrsjahr
     * @param string $datumEndeVersicherungsschutz
     * @param string $datumVersicherungsbeginn
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
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setBetriebszeitraumBis(?int $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setMerkmalElektrokennzeichen(?bool $merkmalElektrokennzeichen = null): self
    {
        $this->MerkmalElektrokennzeichen = $merkmalElektrokennzeichen;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setMerkmalGruenesKennzeichen(?bool $merkmalGruenesKennzeichen = null): self
    {
        $this->MerkmalGruenesKennzeichen = $merkmalGruenesKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;
        
        return $this;
    }
    /**
     * Get DatumEndeVersicherungsschutz value
     * @return string|null
     */
    public function getDatumEndeVersicherungsschutz(): ?string
    {
        return $this->DatumEndeVersicherungsschutz;
    }
    /**
     * Set DatumEndeVersicherungsschutz value
     * @param string $datumEndeVersicherungsschutz
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setDatumEndeVersicherungsschutz(?string $datumEndeVersicherungsschutz = null): self
    {
        $this->DatumEndeVersicherungsschutz = $datumEndeVersicherungsschutz;
        
        return $this;
    }
    /**
     * Get DatumVersicherungsbeginn value
     * @return string|null
     */
    public function getDatumVersicherungsbeginn(): ?string
    {
        return $this->DatumVersicherungsbeginn;
    }
    /**
     * Set DatumVersicherungsbeginn value
     * @param string $datumVersicherungsbeginn
     * @return \THAG\XKfz\StructType\BatchKennzeichendaten
     */
    public function setDatumVersicherungsbeginn(?string $datumVersicherungsbeginn = null): self
    {
        $this->DatumVersicherungsbeginn = $datumVersicherungsbeginn;
        
        return $this;
    }
}
