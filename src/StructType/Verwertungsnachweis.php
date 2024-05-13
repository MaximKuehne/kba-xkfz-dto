<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verwertungsnachweis StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verwertungsnachweis extends AbstractStructBase
{
    /**
     * The BetriebsnummerDemontagebetrieb
     */
    public ?string $BetriebsnummerDemontagebetrieb = null;

    /**
     * The DatumAusstellung
     */
    public ?string $DatumAusstellung = null;

    /**
     * The MerkmalVerwertungsnachweis
     */
    public ?string $MerkmalVerwertungsnachweis = null;

    /**
     * The StaatVerwertung
     */
    public ?string $StaatVerwertung = null;

    /**
     * Constructor method for Verwertungsnachweis
     *
     * @uses Verwertungsnachweis::setBetriebsnummerDemontagebetrieb()
     * @uses Verwertungsnachweis::setDatumAusstellung()
     * @uses Verwertungsnachweis::setMerkmalVerwertungsnachweis()
     * @uses Verwertungsnachweis::setStaatVerwertung()
     */
    public function __construct(?string $betriebsnummerDemontagebetrieb = null, ?string $datumAusstellung = null, ?string $merkmalVerwertungsnachweis = null, ?string $staatVerwertung = null)
    {
        $this
            ->setBetriebsnummerDemontagebetrieb($betriebsnummerDemontagebetrieb)
            ->setDatumAusstellung($datumAusstellung)
            ->setMerkmalVerwertungsnachweis($merkmalVerwertungsnachweis)
            ->setStaatVerwertung($staatVerwertung);
    }

    /**
     * Get BetriebsnummerDemontagebetrieb value
     */
    public function getBetriebsnummerDemontagebetrieb(): ?string
    {
        return $this->BetriebsnummerDemontagebetrieb;
    }

    /**
     * Set BetriebsnummerDemontagebetrieb value
     */
    public function setBetriebsnummerDemontagebetrieb(?string $betriebsnummerDemontagebetrieb = null): self
    {
        $this->BetriebsnummerDemontagebetrieb = $betriebsnummerDemontagebetrieb;

        return $this;
    }

    /**
     * Get DatumAusstellung value
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->DatumAusstellung;
    }

    /**
     * Set DatumAusstellung value
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->DatumAusstellung = $datumAusstellung;

        return $this;
    }

    /**
     * Get MerkmalVerwertungsnachweis value
     */
    public function getMerkmalVerwertungsnachweis(): ?string
    {
        return $this->MerkmalVerwertungsnachweis;
    }

    /**
     * Set MerkmalVerwertungsnachweis value
     */
    public function setMerkmalVerwertungsnachweis(?string $merkmalVerwertungsnachweis = null): self
    {
        $this->MerkmalVerwertungsnachweis = $merkmalVerwertungsnachweis;

        return $this;
    }

    /**
     * Get StaatVerwertung value
     */
    public function getStaatVerwertung(): ?string
    {
        return $this->StaatVerwertung;
    }

    /**
     * Set StaatVerwertung value
     */
    public function setStaatVerwertung(?string $staatVerwertung = null): self
    {
        $this->StaatVerwertung = $staatVerwertung;

        return $this;
    }
}
