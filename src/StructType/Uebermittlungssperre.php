<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Uebermittlungssperre StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Uebermittlungssperre extends AbstractStructBase
{
    /**
     * The DatumVerfuegung
     * @var string|null
     */
    public ?string $DatumVerfuegung = null;
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The ZeitpunktVerarbeitungZFZR
     * @var string|null
     */
    public ?string $ZeitpunktVerarbeitungZFZR = null;
    /**
     * The AktenzeichenSperrendeStelle
     * @var string|null
     */
    public ?string $AktenzeichenSperrendeStelle = null;
    /**
     * The SchluesselBearbeitendeStelle
     * @var string|null
     */
    public ?string $SchluesselBearbeitendeStelle = null;
    /**
     * The SchluesselSperrendeStelle
     * @var string|null
     */
    public ?string $SchluesselSperrendeStelle = null;
    /**
     * The MerkmalAuskunftssperre
     * @var string|null
     */
    public ?string $MerkmalAuskunftssperre = null;
    /**
     * The InhaberKennzeichen30Abs6FZV
     * @var string|null
     */
    public ?string $InhaberKennzeichen30Abs6FZV = null;
    /**
     * Constructor method for Uebermittlungssperre
     * @uses Uebermittlungssperre::setDatumVerfuegung()
     * @uses Uebermittlungssperre::setZeitpunktAenderung()
     * @uses Uebermittlungssperre::setZeitpunktVerarbeitungZFZR()
     * @uses Uebermittlungssperre::setAktenzeichenSperrendeStelle()
     * @uses Uebermittlungssperre::setSchluesselBearbeitendeStelle()
     * @uses Uebermittlungssperre::setSchluesselSperrendeStelle()
     * @uses Uebermittlungssperre::setMerkmalAuskunftssperre()
     * @uses Uebermittlungssperre::setInhaberKennzeichen30Abs6FZV()
     * @param string $datumVerfuegung
     * @param string $zeitpunktAenderung
     * @param string $zeitpunktVerarbeitungZFZR
     * @param string $aktenzeichenSperrendeStelle
     * @param string $schluesselBearbeitendeStelle
     * @param string $schluesselSperrendeStelle
     * @param string $merkmalAuskunftssperre
     * @param string $inhaberKennzeichen30Abs6FZV
     */
    public function __construct(?string $datumVerfuegung = null, ?string $zeitpunktAenderung = null, ?string $zeitpunktVerarbeitungZFZR = null, ?string $aktenzeichenSperrendeStelle = null, ?string $schluesselBearbeitendeStelle = null, ?string $schluesselSperrendeStelle = null, ?string $merkmalAuskunftssperre = null, ?string $inhaberKennzeichen30Abs6FZV = null)
    {
        $this
            ->setDatumVerfuegung($datumVerfuegung)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setZeitpunktVerarbeitungZFZR($zeitpunktVerarbeitungZFZR)
            ->setAktenzeichenSperrendeStelle($aktenzeichenSperrendeStelle)
            ->setSchluesselBearbeitendeStelle($schluesselBearbeitendeStelle)
            ->setSchluesselSperrendeStelle($schluesselSperrendeStelle)
            ->setMerkmalAuskunftssperre($merkmalAuskunftssperre)
            ->setInhaberKennzeichen30Abs6FZV($inhaberKennzeichen30Abs6FZV);
    }
    /**
     * Get DatumVerfuegung value
     * @return string|null
     */
    public function getDatumVerfuegung(): ?string
    {
        return $this->DatumVerfuegung;
    }
    /**
     * Set DatumVerfuegung value
     * @param string $datumVerfuegung
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setDatumVerfuegung(?string $datumVerfuegung = null): self
    {
        $this->DatumVerfuegung = $datumVerfuegung;
        
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
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get ZeitpunktVerarbeitungZFZR value
     * @return string|null
     */
    public function getZeitpunktVerarbeitungZFZR(): ?string
    {
        return $this->ZeitpunktVerarbeitungZFZR;
    }
    /**
     * Set ZeitpunktVerarbeitungZFZR value
     * @param string $zeitpunktVerarbeitungZFZR
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setZeitpunktVerarbeitungZFZR(?string $zeitpunktVerarbeitungZFZR = null): self
    {
        $this->ZeitpunktVerarbeitungZFZR = $zeitpunktVerarbeitungZFZR;
        
        return $this;
    }
    /**
     * Get AktenzeichenSperrendeStelle value
     * @return string|null
     */
    public function getAktenzeichenSperrendeStelle(): ?string
    {
        return $this->AktenzeichenSperrendeStelle;
    }
    /**
     * Set AktenzeichenSperrendeStelle value
     * @param string $aktenzeichenSperrendeStelle
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setAktenzeichenSperrendeStelle(?string $aktenzeichenSperrendeStelle = null): self
    {
        $this->AktenzeichenSperrendeStelle = $aktenzeichenSperrendeStelle;
        
        return $this;
    }
    /**
     * Get SchluesselBearbeitendeStelle value
     * @return string|null
     */
    public function getSchluesselBearbeitendeStelle(): ?string
    {
        return $this->SchluesselBearbeitendeStelle;
    }
    /**
     * Set SchluesselBearbeitendeStelle value
     * @param string $schluesselBearbeitendeStelle
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setSchluesselBearbeitendeStelle(?string $schluesselBearbeitendeStelle = null): self
    {
        $this->SchluesselBearbeitendeStelle = $schluesselBearbeitendeStelle;
        
        return $this;
    }
    /**
     * Get SchluesselSperrendeStelle value
     * @return string|null
     */
    public function getSchluesselSperrendeStelle(): ?string
    {
        return $this->SchluesselSperrendeStelle;
    }
    /**
     * Set SchluesselSperrendeStelle value
     * @param string $schluesselSperrendeStelle
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setSchluesselSperrendeStelle(?string $schluesselSperrendeStelle = null): self
    {
        $this->SchluesselSperrendeStelle = $schluesselSperrendeStelle;
        
        return $this;
    }
    /**
     * Get MerkmalAuskunftssperre value
     * @return string|null
     */
    public function getMerkmalAuskunftssperre(): ?string
    {
        return $this->MerkmalAuskunftssperre;
    }
    /**
     * Set MerkmalAuskunftssperre value
     * @param string $merkmalAuskunftssperre
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setMerkmalAuskunftssperre(?string $merkmalAuskunftssperre = null): self
    {
        $this->MerkmalAuskunftssperre = $merkmalAuskunftssperre;
        
        return $this;
    }
    /**
     * Get InhaberKennzeichen30Abs6FZV value
     * @return string|null
     */
    public function getInhaberKennzeichen30Abs6FZV(): ?string
    {
        return $this->InhaberKennzeichen30Abs6FZV;
    }
    /**
     * Set InhaberKennzeichen30Abs6FZV value
     * @param string $inhaberKennzeichen30Abs6FZV
     * @return \THAG\XKfz\StructType\Uebermittlungssperre
     */
    public function setInhaberKennzeichen30Abs6FZV(?string $inhaberKennzeichen30Abs6FZV = null): self
    {
        $this->InhaberKennzeichen30Abs6FZV = $inhaberKennzeichen30Abs6FZV;
        
        return $this;
    }
}
