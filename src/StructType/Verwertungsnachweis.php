<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verwertungsnachweis StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verwertungsnachweis extends AbstractStructBase
{
    /**
     * The BetriebsnummerDemontagebetrieb
     * @var string|null
     */
    public ?string $BetriebsnummerDemontagebetrieb = null;
    /**
     * The DatumAusstellung
     * @var string|null
     */
    public ?string $DatumAusstellung = null;
    /**
     * The MerkmalVerwertungsnachweis
     * @var string|null
     */
    public ?string $MerkmalVerwertungsnachweis = null;
    /**
     * The StaatVerwertung
     * @var string|null
     */
    public ?string $StaatVerwertung = null;
    /**
     * Constructor method for Verwertungsnachweis
     * @uses Verwertungsnachweis::setBetriebsnummerDemontagebetrieb()
     * @uses Verwertungsnachweis::setDatumAusstellung()
     * @uses Verwertungsnachweis::setMerkmalVerwertungsnachweis()
     * @uses Verwertungsnachweis::setStaatVerwertung()
     * @param string $betriebsnummerDemontagebetrieb
     * @param string $datumAusstellung
     * @param string $merkmalVerwertungsnachweis
     * @param string $staatVerwertung
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
     * @return string|null
     */
    public function getBetriebsnummerDemontagebetrieb(): ?string
    {
        return $this->BetriebsnummerDemontagebetrieb;
    }
    /**
     * Set BetriebsnummerDemontagebetrieb value
     * @param string $betriebsnummerDemontagebetrieb
     * @return \THAG\XKfz\StructType\Verwertungsnachweis
     */
    public function setBetriebsnummerDemontagebetrieb(?string $betriebsnummerDemontagebetrieb = null): self
    {
        $this->BetriebsnummerDemontagebetrieb = $betriebsnummerDemontagebetrieb;
        
        return $this;
    }
    /**
     * Get DatumAusstellung value
     * @return string|null
     */
    public function getDatumAusstellung(): ?string
    {
        return $this->DatumAusstellung;
    }
    /**
     * Set DatumAusstellung value
     * @param string $datumAusstellung
     * @return \THAG\XKfz\StructType\Verwertungsnachweis
     */
    public function setDatumAusstellung(?string $datumAusstellung = null): self
    {
        $this->DatumAusstellung = $datumAusstellung;
        
        return $this;
    }
    /**
     * Get MerkmalVerwertungsnachweis value
     * @return string|null
     */
    public function getMerkmalVerwertungsnachweis(): ?string
    {
        return $this->MerkmalVerwertungsnachweis;
    }
    /**
     * Set MerkmalVerwertungsnachweis value
     * @param string $merkmalVerwertungsnachweis
     * @return \THAG\XKfz\StructType\Verwertungsnachweis
     */
    public function setMerkmalVerwertungsnachweis(?string $merkmalVerwertungsnachweis = null): self
    {
        $this->MerkmalVerwertungsnachweis = $merkmalVerwertungsnachweis;
        
        return $this;
    }
    /**
     * Get StaatVerwertung value
     * @return string|null
     */
    public function getStaatVerwertung(): ?string
    {
        return $this->StaatVerwertung;
    }
    /**
     * Set StaatVerwertung value
     * @param string $staatVerwertung
     * @return \THAG\XKfz\StructType\Verwertungsnachweis
     */
    public function setStaatVerwertung(?string $staatVerwertung = null): self
    {
        $this->StaatVerwertung = $staatVerwertung;
        
        return $this;
    }
}
