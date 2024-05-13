<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KennzeichendatenZATyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class KennzeichendatenZATyp extends AbstractStructBase
{
    /**
     * The Kennzeichen
     * @var string|null
     */
    public ?string $Kennzeichen = null;
    /**
     * The ZeitpunktZuteilungKennzeichen
     * @var string|null
     */
    public ?string $ZeitpunktZuteilungKennzeichen = null;
    /**
     * The DatumKennzeichenGueltigBis
     * @var string|null
     */
    public ?string $DatumKennzeichenGueltigBis = null;
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
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * Constructor method for KennzeichendatenZATyp
     * @uses KennzeichendatenZATyp::setKennzeichen()
     * @uses KennzeichendatenZATyp::setZeitpunktZuteilungKennzeichen()
     * @uses KennzeichendatenZATyp::setDatumKennzeichenGueltigBis()
     * @uses KennzeichendatenZATyp::setBetriebszeitraumVon()
     * @uses KennzeichendatenZATyp::setBetriebszeitraumBis()
     * @uses KennzeichendatenZATyp::setDatumErstzulassung()
     * @param string $kennzeichen
     * @param string $zeitpunktZuteilungKennzeichen
     * @param string $datumKennzeichenGueltigBis
     * @param int $betriebszeitraumVon
     * @param int $betriebszeitraumBis
     * @param string $datumErstzulassung
     */
    public function __construct(?string $kennzeichen = null, ?string $zeitpunktZuteilungKennzeichen = null, ?string $datumKennzeichenGueltigBis = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?string $datumErstzulassung = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setZeitpunktZuteilungKennzeichen($zeitpunktZuteilungKennzeichen)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setDatumErstzulassung($datumErstzulassung);
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZATyp
     */
    public function setKennzeichen(?string $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZATyp
     */
    public function setZeitpunktZuteilungKennzeichen(?string $zeitpunktZuteilungKennzeichen = null): self
    {
        $this->ZeitpunktZuteilungKennzeichen = $zeitpunktZuteilungKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZATyp
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZATyp
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
     * @return \THAG\XKfz\StructType\KennzeichendatenZATyp
     */
    public function setBetriebszeitraumBis(?int $betriebszeitraumBis = null): self
    {
        $this->BetriebszeitraumBis = $betriebszeitraumBis;
        
        return $this;
    }
    /**
     * Get DatumErstzulassung value
     * @return string|null
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }
    /**
     * Set DatumErstzulassung value
     * @param string $datumErstzulassung
     * @return \THAG\XKfz\StructType\KennzeichendatenZATyp
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
}
