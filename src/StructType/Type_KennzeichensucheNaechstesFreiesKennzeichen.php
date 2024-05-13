<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.KennzeichensucheNaechstesFreiesKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_KennzeichensucheNaechstesFreiesKennzeichen extends AbstractStructBase
{
    /**
     * The MerkmalKennzeichenart
     * @var string|null
     */
    public ?string $MerkmalKennzeichenart = null;
    /**
     * The MerkmalWechselkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalWechselkennzeichen = null;
    /**
     * The laengeMinimal
     * @var int|null
     */
    public ?int $laengeMinimal = null;
    /**
     * The laengeMaximal
     * @var int|null
     */
    public ?int $laengeMaximal = null;
    /**
     * The MerkmalOldtimerkennzeichen
     * @var bool|null
     */
    public ?bool $MerkmalOldtimerkennzeichen = null;
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
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
    /**
     * The strukturKennzeichenInhalt
     * @var \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt|null
     */
    public ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null;
    /**
     * The merkmalKurzesKennzeichen
     * @var bool|null
     */
    public ?bool $merkmalKurzesKennzeichen = null;
    /**
     * The unterscheidungszeichen
     * @var string|null
     */
    public ?string $unterscheidungszeichen = null;
    /**
     * The kundennummer
     * @var string|null
     */
    public ?string $kundennummer = null;
    /**
     * The sortierung
     * @var \THAG\XKfz\StructType\Code_SortierungKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null;
    /**
     * Constructor method for Type.KennzeichensucheNaechstesFreiesKennzeichen
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
     * @param string $merkmalKennzeichenart
     * @param bool $merkmalWechselkennzeichen
     * @param int $laengeMinimal
     * @param int $laengeMaximal
     * @param bool $merkmalOldtimerkennzeichen
     * @param bool $merkmalElektrokennzeichen
     * @param bool $merkmalGruenesKennzeichen
     * @param int $betriebszeitraumVon
     * @param int $betriebszeitraumBis
     * @param string $datumKennzeichenGueltigBis
     * @param string $pin
     * @param \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt
     * @param bool $merkmalKurzesKennzeichen
     * @param string $unterscheidungszeichen
     * @param string $kundennummer
     * @param \THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung
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
     * @return string|null
     */
    public function getMerkmalKennzeichenart(): ?string
    {
        return $this->MerkmalKennzeichenart;
    }
    /**
     * Set MerkmalKennzeichenart value
     * @param string $merkmalKennzeichenart
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setMerkmalKennzeichenart(?string $merkmalKennzeichenart = null): self
    {
        $this->MerkmalKennzeichenart = $merkmalKennzeichenart;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setMerkmalWechselkennzeichen(?bool $merkmalWechselkennzeichen = null): self
    {
        $this->MerkmalWechselkennzeichen = $merkmalWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get laengeMinimal value
     * @return int|null
     */
    public function getLaengeMinimal(): ?int
    {
        return $this->laengeMinimal;
    }
    /**
     * Set laengeMinimal value
     * @param int $laengeMinimal
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setLaengeMinimal(?int $laengeMinimal = null): self
    {
        $this->laengeMinimal = $laengeMinimal;
        
        return $this;
    }
    /**
     * Get laengeMaximal value
     * @return int|null
     */
    public function getLaengeMaximal(): ?int
    {
        return $this->laengeMaximal;
    }
    /**
     * Set laengeMaximal value
     * @param int $laengeMaximal
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setLaengeMaximal(?int $laengeMaximal = null): self
    {
        $this->laengeMaximal = $laengeMaximal;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setMerkmalOldtimerkennzeichen(?bool $merkmalOldtimerkennzeichen = null): self
    {
        $this->MerkmalOldtimerkennzeichen = $merkmalOldtimerkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setMerkmalGruenesKennzeichen(?bool $merkmalGruenesKennzeichen = null): self
    {
        $this->MerkmalGruenesKennzeichen = $merkmalGruenesKennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
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
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setDatumKennzeichenGueltigBis(?string $datumKennzeichenGueltigBis = null): self
    {
        $this->DatumKennzeichenGueltigBis = $datumKennzeichenGueltigBis;
        
        return $this;
    }
    /**
     * Get pin value
     * @return string|null
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }
    /**
     * Set pin value
     * @param string $pin
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
        return $this;
    }
    /**
     * Get strukturKennzeichenInhalt value
     * @return \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt|null
     */
    public function getStrukturKennzeichenInhalt(): ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt
    {
        return $this->strukturKennzeichenInhalt;
    }
    /**
     * Set strukturKennzeichenInhalt value
     * @param \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setStrukturKennzeichenInhalt(?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null): self
    {
        $this->strukturKennzeichenInhalt = $strukturKennzeichenInhalt;
        
        return $this;
    }
    /**
     * Get merkmalKurzesKennzeichen value
     * @return bool|null
     */
    public function getMerkmalKurzesKennzeichen(): ?bool
    {
        return $this->merkmalKurzesKennzeichen;
    }
    /**
     * Set merkmalKurzesKennzeichen value
     * @param bool $merkmalKurzesKennzeichen
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setMerkmalKurzesKennzeichen(?bool $merkmalKurzesKennzeichen = null): self
    {
        $this->merkmalKurzesKennzeichen = $merkmalKurzesKennzeichen;
        
        return $this;
    }
    /**
     * Get unterscheidungszeichen value
     * @return string|null
     */
    public function getUnterscheidungszeichen(): ?string
    {
        return $this->unterscheidungszeichen;
    }
    /**
     * Set unterscheidungszeichen value
     * @param string $unterscheidungszeichen
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setUnterscheidungszeichen(?string $unterscheidungszeichen = null): self
    {
        $this->unterscheidungszeichen = $unterscheidungszeichen;
        
        return $this;
    }
    /**
     * Get kundennummer value
     * @return string|null
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }
    /**
     * Set kundennummer value
     * @param string $kundennummer
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;
        
        return $this;
    }
    /**
     * Get sortierung value
     * @return \THAG\XKfz\StructType\Code_SortierungKennzeichen|null
     */
    public function getSortierung(): ?\THAG\XKfz\StructType\Code_SortierungKennzeichen
    {
        return $this->sortierung;
    }
    /**
     * Set sortierung value
     * @param \THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheNaechstesFreiesKennzeichen
     */
    public function setSortierung(?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null): self
    {
        $this->sortierung = $sortierung;
        
        return $this;
    }
}
