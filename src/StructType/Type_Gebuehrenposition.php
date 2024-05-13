<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenposition StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenposition extends AbstractStructBase
{
    /**
     * The positionsNummer
     * @var int|null
     */
    public ?int $positionsNummer = null;
    /**
     * The art
     * @var \THAG\XKfz\StructType\Type_ArtDerGebuehr|null
     */
    public ?\THAG\XKfz\StructType\Type_ArtDerGebuehr $art = null;
    /**
     * The betrag
     * @var float|null
     */
    public ?float $betrag = null;
    /**
     * The waehrung
     * @var \THAG\XKfz\StructType\Code_Waehrung|null
     */
    public ?\THAG\XKfz\StructType\Code_Waehrung $waehrung = null;
    /**
     * The bemerkung
     * @var string|null
     */
    public ?string $bemerkung = null;
    /**
     * The mehrwehrtsteuerSatz
     * @var string|null
     */
    public ?string $mehrwehrtsteuerSatz = null;
    /**
     * The mehrwertsteuerBetrag
     * @var float|null
     */
    public ?float $mehrwertsteuerBetrag = null;
    /**
     * The betragNetto
     * @var float|null
     */
    public ?float $betragNetto = null;
    /**
     * Constructor method for Type.Gebuehrenposition
     * @uses Type_Gebuehrenposition::setPositionsNummer()
     * @uses Type_Gebuehrenposition::setArt()
     * @uses Type_Gebuehrenposition::setBetrag()
     * @uses Type_Gebuehrenposition::setWaehrung()
     * @uses Type_Gebuehrenposition::setBemerkung()
     * @uses Type_Gebuehrenposition::setMehrwehrtsteuerSatz()
     * @uses Type_Gebuehrenposition::setMehrwertsteuerBetrag()
     * @uses Type_Gebuehrenposition::setBetragNetto()
     * @param int $positionsNummer
     * @param \THAG\XKfz\StructType\Type_ArtDerGebuehr $art
     * @param float $betrag
     * @param \THAG\XKfz\StructType\Code_Waehrung $waehrung
     * @param string $bemerkung
     * @param string $mehrwehrtsteuerSatz
     * @param float $mehrwertsteuerBetrag
     * @param float $betragNetto
     */
    public function __construct(?int $positionsNummer = null, ?\THAG\XKfz\StructType\Type_ArtDerGebuehr $art = null, ?float $betrag = null, ?\THAG\XKfz\StructType\Code_Waehrung $waehrung = null, ?string $bemerkung = null, ?string $mehrwehrtsteuerSatz = null, ?float $mehrwertsteuerBetrag = null, ?float $betragNetto = null)
    {
        $this
            ->setPositionsNummer($positionsNummer)
            ->setArt($art)
            ->setBetrag($betrag)
            ->setWaehrung($waehrung)
            ->setBemerkung($bemerkung)
            ->setMehrwehrtsteuerSatz($mehrwehrtsteuerSatz)
            ->setMehrwertsteuerBetrag($mehrwertsteuerBetrag)
            ->setBetragNetto($betragNetto);
    }
    /**
     * Get positionsNummer value
     * @return int|null
     */
    public function getPositionsNummer(): ?int
    {
        return $this->positionsNummer;
    }
    /**
     * Set positionsNummer value
     * @param int $positionsNummer
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setPositionsNummer(?int $positionsNummer = null): self
    {
        $this->positionsNummer = $positionsNummer;
        
        return $this;
    }
    /**
     * Get art value
     * @return \THAG\XKfz\StructType\Type_ArtDerGebuehr|null
     */
    public function getArt(): ?\THAG\XKfz\StructType\Type_ArtDerGebuehr
    {
        return $this->art;
    }
    /**
     * Set art value
     * @param \THAG\XKfz\StructType\Type_ArtDerGebuehr $art
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setArt(?\THAG\XKfz\StructType\Type_ArtDerGebuehr $art = null): self
    {
        $this->art = $art;
        
        return $this;
    }
    /**
     * Get betrag value
     * @return float|null
     */
    public function getBetrag(): ?float
    {
        return $this->betrag;
    }
    /**
     * Set betrag value
     * @param float $betrag
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setBetrag(?float $betrag = null): self
    {
        $this->betrag = $betrag;
        
        return $this;
    }
    /**
     * Get waehrung value
     * @return \THAG\XKfz\StructType\Code_Waehrung|null
     */
    public function getWaehrung(): ?\THAG\XKfz\StructType\Code_Waehrung
    {
        return $this->waehrung;
    }
    /**
     * Set waehrung value
     * @param \THAG\XKfz\StructType\Code_Waehrung $waehrung
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setWaehrung(?\THAG\XKfz\StructType\Code_Waehrung $waehrung = null): self
    {
        $this->waehrung = $waehrung;
        
        return $this;
    }
    /**
     * Get bemerkung value
     * @return string|null
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }
    /**
     * Set bemerkung value
     * @param string $bemerkung
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;
        
        return $this;
    }
    /**
     * Get mehrwehrtsteuerSatz value
     * @return string|null
     */
    public function getMehrwehrtsteuerSatz(): ?string
    {
        return $this->mehrwehrtsteuerSatz;
    }
    /**
     * Set mehrwehrtsteuerSatz value
     * @param string $mehrwehrtsteuerSatz
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setMehrwehrtsteuerSatz(?string $mehrwehrtsteuerSatz = null): self
    {
        $this->mehrwehrtsteuerSatz = $mehrwehrtsteuerSatz;
        
        return $this;
    }
    /**
     * Get mehrwertsteuerBetrag value
     * @return float|null
     */
    public function getMehrwertsteuerBetrag(): ?float
    {
        return $this->mehrwertsteuerBetrag;
    }
    /**
     * Set mehrwertsteuerBetrag value
     * @param float $mehrwertsteuerBetrag
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setMehrwertsteuerBetrag(?float $mehrwertsteuerBetrag = null): self
    {
        $this->mehrwertsteuerBetrag = $mehrwertsteuerBetrag;
        
        return $this;
    }
    /**
     * Get betragNetto value
     * @return float|null
     */
    public function getBetragNetto(): ?float
    {
        return $this->betragNetto;
    }
    /**
     * Set betragNetto value
     * @param float $betragNetto
     * @return \THAG\XKfz\StructType\Type_Gebuehrenposition
     */
    public function setBetragNetto(?float $betragNetto = null): self
    {
        $this->betragNetto = $betragNetto;
        
        return $this;
    }
}
