<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Uebermittlungssperre StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Uebermittlungssperre extends AbstractStructBase
{
    /**
     * The DatumVerfuegung
     */
    public ?string $DatumVerfuegung = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The ZeitpunktVerarbeitungZFZR
     */
    public ?string $ZeitpunktVerarbeitungZFZR = null;

    /**
     * The AktenzeichenSperrendeStelle
     */
    public ?string $AktenzeichenSperrendeStelle = null;

    /**
     * The SchluesselBearbeitendeStelle
     */
    public ?string $SchluesselBearbeitendeStelle = null;

    /**
     * The SchluesselSperrendeStelle
     */
    public ?string $SchluesselSperrendeStelle = null;

    /**
     * The MerkmalAuskunftssperre
     */
    public ?string $MerkmalAuskunftssperre = null;

    /**
     * The InhaberKennzeichen30Abs6FZV
     */
    public ?string $InhaberKennzeichen30Abs6FZV = null;

    /**
     * Constructor method for Uebermittlungssperre
     *
     * @uses Uebermittlungssperre::setDatumVerfuegung()
     * @uses Uebermittlungssperre::setZeitpunktAenderung()
     * @uses Uebermittlungssperre::setZeitpunktVerarbeitungZFZR()
     * @uses Uebermittlungssperre::setAktenzeichenSperrendeStelle()
     * @uses Uebermittlungssperre::setSchluesselBearbeitendeStelle()
     * @uses Uebermittlungssperre::setSchluesselSperrendeStelle()
     * @uses Uebermittlungssperre::setMerkmalAuskunftssperre()
     * @uses Uebermittlungssperre::setInhaberKennzeichen30Abs6FZV()
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
     */
    public function getDatumVerfuegung(): ?string
    {
        return $this->DatumVerfuegung;
    }

    /**
     * Set DatumVerfuegung value
     */
    public function setDatumVerfuegung(?string $datumVerfuegung = null): self
    {
        $this->DatumVerfuegung = $datumVerfuegung;

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
     * Get ZeitpunktVerarbeitungZFZR value
     */
    public function getZeitpunktVerarbeitungZFZR(): ?string
    {
        return $this->ZeitpunktVerarbeitungZFZR;
    }

    /**
     * Set ZeitpunktVerarbeitungZFZR value
     */
    public function setZeitpunktVerarbeitungZFZR(?string $zeitpunktVerarbeitungZFZR = null): self
    {
        $this->ZeitpunktVerarbeitungZFZR = $zeitpunktVerarbeitungZFZR;

        return $this;
    }

    /**
     * Get AktenzeichenSperrendeStelle value
     */
    public function getAktenzeichenSperrendeStelle(): ?string
    {
        return $this->AktenzeichenSperrendeStelle;
    }

    /**
     * Set AktenzeichenSperrendeStelle value
     */
    public function setAktenzeichenSperrendeStelle(?string $aktenzeichenSperrendeStelle = null): self
    {
        $this->AktenzeichenSperrendeStelle = $aktenzeichenSperrendeStelle;

        return $this;
    }

    /**
     * Get SchluesselBearbeitendeStelle value
     */
    public function getSchluesselBearbeitendeStelle(): ?string
    {
        return $this->SchluesselBearbeitendeStelle;
    }

    /**
     * Set SchluesselBearbeitendeStelle value
     */
    public function setSchluesselBearbeitendeStelle(?string $schluesselBearbeitendeStelle = null): self
    {
        $this->SchluesselBearbeitendeStelle = $schluesselBearbeitendeStelle;

        return $this;
    }

    /**
     * Get SchluesselSperrendeStelle value
     */
    public function getSchluesselSperrendeStelle(): ?string
    {
        return $this->SchluesselSperrendeStelle;
    }

    /**
     * Set SchluesselSperrendeStelle value
     */
    public function setSchluesselSperrendeStelle(?string $schluesselSperrendeStelle = null): self
    {
        $this->SchluesselSperrendeStelle = $schluesselSperrendeStelle;

        return $this;
    }

    /**
     * Get MerkmalAuskunftssperre value
     */
    public function getMerkmalAuskunftssperre(): ?string
    {
        return $this->MerkmalAuskunftssperre;
    }

    /**
     * Set MerkmalAuskunftssperre value
     */
    public function setMerkmalAuskunftssperre(?string $merkmalAuskunftssperre = null): self
    {
        $this->MerkmalAuskunftssperre = $merkmalAuskunftssperre;

        return $this;
    }

    /**
     * Get InhaberKennzeichen30Abs6FZV value
     */
    public function getInhaberKennzeichen30Abs6FZV(): ?string
    {
        return $this->InhaberKennzeichen30Abs6FZV;
    }

    /**
     * Set InhaberKennzeichen30Abs6FZV value
     */
    public function setInhaberKennzeichen30Abs6FZV(?string $inhaberKennzeichen30Abs6FZV = null): self
    {
        $this->InhaberKennzeichen30Abs6FZV = $inhaberKennzeichen30Abs6FZV;

        return $this;
    }
}
