<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KennzeichensucheNaechstesFreiesKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KennzeichensucheNaechstesFreiesKennzeichen extends AbstractStructBase
{
    /**
     * The MerkmalKennzeichenart
     */
    public ?string $MerkmalKennzeichenart = null;

    /**
     * The MerkmalWechselkennzeichen
     */
    public ?bool $MerkmalWechselkennzeichen = null;

    /**
     * The laengeMinimal
     */
    public ?int $laengeMinimal = null;

    /**
     * The laengeMaximal
     */
    public ?int $laengeMaximal = null;

    /**
     * The MerkmalOldtimerkennzeichen
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;

    /**
     * The MerkmalElektrokennzeichen
     */
    public ?bool $MerkmalElektrokennzeichen = null;

    /**
     * The MerkmalGruenesKennzeichen
     */
    public ?bool $MerkmalGruenesKennzeichen = null;

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
     * The pin
     */
    public ?string $pin = null;

    /**
     * The strukturKennzeichenInhalt
     */
    public ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null;

    /**
     * The merkmalKurzesKennzeichen
     */
    public ?bool $merkmalKurzesKennzeichen = null;

    /**
     * The unterscheidungszeichen
     */
    public ?string $unterscheidungszeichen = null;

    /**
     * The kundennummer
     */
    public ?string $kundennummer = null;

    /**
     * The sortierung
     */
    public ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null;

    /**
     * Constructor method for Type.KennzeichensucheNaechstesFreiesKennzeichen
     *
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setMerkmalKennzeichenart()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setMerkmalWechselkennzeichen()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setLaengeMinimal()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setLaengeMaximal()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setMerkmalOldtimerkennzeichen()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setMerkmalElektrokennzeichen()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setMerkmalGruenesKennzeichen()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setBetriebszeitraumVon()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setBetriebszeitraumBis()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setDatumKennzeichenGueltigBis()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setPin()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setStrukturKennzeichenInhalt()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setMerkmalKurzesKennzeichen()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setUnterscheidungszeichen()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setKundennummer()
     * @uses Type_KennzeichensucheNaechstesFreiesKennzeichen::setSortierung()
     */
    public function __construct(?string $merkmalKennzeichenart = null, ?bool $merkmalWechselkennzeichen = null, ?int $laengeMinimal = null, ?int $laengeMaximal = null, ?bool $merkmalOldtimerkennzeichen = null, ?bool $merkmalElektrokennzeichen = null, ?bool $merkmalGruenesKennzeichen = null, ?int $betriebszeitraumVon = null, ?int $betriebszeitraumBis = null, ?string $datumKennzeichenGueltigBis = null, ?string $pin = null, ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null, ?bool $merkmalKurzesKennzeichen = null, ?string $unterscheidungszeichen = null, ?string $kundennummer = null, ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null)
    {
        $this
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setLaengeMinimal($laengeMinimal)
            ->setLaengeMaximal($laengeMaximal)
            ->setMerkmalOldtimerkennzeichen($merkmalOldtimerkennzeichen)
            ->setMerkmalElektrokennzeichen($merkmalElektrokennzeichen)
            ->setMerkmalGruenesKennzeichen($merkmalGruenesKennzeichen)
            ->setBetriebszeitraumVon($betriebszeitraumVon)
            ->setBetriebszeitraumBis($betriebszeitraumBis)
            ->setDatumKennzeichenGueltigBis($datumKennzeichenGueltigBis)
            ->setPin($pin)
            ->setStrukturKennzeichenInhalt($strukturKennzeichenInhalt)
            ->setMerkmalKurzesKennzeichen($merkmalKurzesKennzeichen)
            ->setUnterscheidungszeichen($unterscheidungszeichen)
            ->setKundennummer($kundennummer)
            ->setSortierung($sortierung);
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
     * Get laengeMinimal value
     */
    public function getLaengeMinimal(): ?int
    {
        return $this->laengeMinimal;
    }

    /**
     * Set laengeMinimal value
     */
    public function setLaengeMinimal(?int $laengeMinimal = null): self
    {
        $this->laengeMinimal = $laengeMinimal;

        return $this;
    }

    /**
     * Get laengeMaximal value
     */
    public function getLaengeMaximal(): ?int
    {
        return $this->laengeMaximal;
    }

    /**
     * Set laengeMaximal value
     */
    public function setLaengeMaximal(?int $laengeMaximal = null): self
    {
        $this->laengeMaximal = $laengeMaximal;

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
     * Get pin value
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }

    /**
     * Set pin value
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get strukturKennzeichenInhalt value
     */
    public function getStrukturKennzeichenInhalt(): ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt
    {
        return $this->strukturKennzeichenInhalt;
    }

    /**
     * Set strukturKennzeichenInhalt value
     */
    public function setStrukturKennzeichenInhalt(?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null): self
    {
        $this->strukturKennzeichenInhalt = $strukturKennzeichenInhalt;

        return $this;
    }

    /**
     * Get merkmalKurzesKennzeichen value
     */
    public function getMerkmalKurzesKennzeichen(): ?bool
    {
        return $this->merkmalKurzesKennzeichen;
    }

    /**
     * Set merkmalKurzesKennzeichen value
     */
    public function setMerkmalKurzesKennzeichen(?bool $merkmalKurzesKennzeichen = null): self
    {
        $this->merkmalKurzesKennzeichen = $merkmalKurzesKennzeichen;

        return $this;
    }

    /**
     * Get unterscheidungszeichen value
     */
    public function getUnterscheidungszeichen(): ?string
    {
        return $this->unterscheidungszeichen;
    }

    /**
     * Set unterscheidungszeichen value
     */
    public function setUnterscheidungszeichen(?string $unterscheidungszeichen = null): self
    {
        $this->unterscheidungszeichen = $unterscheidungszeichen;

        return $this;
    }

    /**
     * Get kundennummer value
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }

    /**
     * Set kundennummer value
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;

        return $this;
    }

    /**
     * Get sortierung value
     */
    public function getSortierung(): ?\THAG\XKfz\StructType\Code_SortierungKennzeichen
    {
        return $this->sortierung;
    }

    /**
     * Set sortierung value
     */
    public function setSortierung(?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null): self
    {
        $this->sortierung = $sortierung;

        return $this;
    }
}
