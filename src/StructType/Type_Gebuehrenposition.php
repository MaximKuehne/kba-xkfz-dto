<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenposition StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenposition extends AbstractStructBase
{
    /**
     * The positionsNummer
     */
    public ?int $positionsNummer = null;

    /**
     * The art
     */
    public ?\THAG\XKfz\StructType\Type_ArtDerGebuehr $art = null;

    /**
     * The betrag
     */
    public ?float $betrag = null;

    /**
     * The waehrung
     */
    public ?\THAG\XKfz\StructType\Code_Waehrung $waehrung = null;

    /**
     * The bemerkung
     */
    public ?string $bemerkung = null;

    /**
     * The mehrwehrtsteuerSatz
     */
    public ?string $mehrwehrtsteuerSatz = null;

    /**
     * The mehrwertsteuerBetrag
     */
    public ?float $mehrwertsteuerBetrag = null;

    /**
     * The betragNetto
     */
    public ?float $betragNetto = null;

    /**
     * Constructor method for Type.Gebuehrenposition
     *
     * @uses Type_Gebuehrenposition::setPositionsNummer()
     * @uses Type_Gebuehrenposition::setArt()
     * @uses Type_Gebuehrenposition::setBetrag()
     * @uses Type_Gebuehrenposition::setWaehrung()
     * @uses Type_Gebuehrenposition::setBemerkung()
     * @uses Type_Gebuehrenposition::setMehrwehrtsteuerSatz()
     * @uses Type_Gebuehrenposition::setMehrwertsteuerBetrag()
     * @uses Type_Gebuehrenposition::setBetragNetto()
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
     */
    public function getPositionsNummer(): ?int
    {
        return $this->positionsNummer;
    }

    /**
     * Set positionsNummer value
     */
    public function setPositionsNummer(?int $positionsNummer = null): self
    {
        $this->positionsNummer = $positionsNummer;

        return $this;
    }

    /**
     * Get art value
     */
    public function getArt(): ?\THAG\XKfz\StructType\Type_ArtDerGebuehr
    {
        return $this->art;
    }

    /**
     * Set art value
     */
    public function setArt(?\THAG\XKfz\StructType\Type_ArtDerGebuehr $art = null): self
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get betrag value
     */
    public function getBetrag(): ?float
    {
        return $this->betrag;
    }

    /**
     * Set betrag value
     */
    public function setBetrag(?float $betrag = null): self
    {
        $this->betrag = $betrag;

        return $this;
    }

    /**
     * Get waehrung value
     */
    public function getWaehrung(): ?\THAG\XKfz\StructType\Code_Waehrung
    {
        return $this->waehrung;
    }

    /**
     * Set waehrung value
     */
    public function setWaehrung(?\THAG\XKfz\StructType\Code_Waehrung $waehrung = null): self
    {
        $this->waehrung = $waehrung;

        return $this;
    }

    /**
     * Get bemerkung value
     */
    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    /**
     * Set bemerkung value
     */
    public function setBemerkung(?string $bemerkung = null): self
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }

    /**
     * Get mehrwehrtsteuerSatz value
     */
    public function getMehrwehrtsteuerSatz(): ?string
    {
        return $this->mehrwehrtsteuerSatz;
    }

    /**
     * Set mehrwehrtsteuerSatz value
     */
    public function setMehrwehrtsteuerSatz(?string $mehrwehrtsteuerSatz = null): self
    {
        $this->mehrwehrtsteuerSatz = $mehrwehrtsteuerSatz;

        return $this;
    }

    /**
     * Get mehrwertsteuerBetrag value
     */
    public function getMehrwertsteuerBetrag(): ?float
    {
        return $this->mehrwertsteuerBetrag;
    }

    /**
     * Set mehrwertsteuerBetrag value
     */
    public function setMehrwertsteuerBetrag(?float $mehrwertsteuerBetrag = null): self
    {
        $this->mehrwertsteuerBetrag = $mehrwertsteuerBetrag;

        return $this;
    }

    /**
     * Get betragNetto value
     */
    public function getBetragNetto(): ?float
    {
        return $this->betragNetto;
    }

    /**
     * Set betragNetto value
     */
    public function setBetragNetto(?float $betragNetto = null): self
    {
        $this->betragNetto = $betragNetto;

        return $this;
    }
}
