<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichensuche StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichensuche extends AbstractStructBase
{
    /**
     * The kennzeichen
     * @var \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichen = null;
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
     * The sucheinschraenkung
     * @var \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null;
    /**
     * The anzahlTreffer
     * @var int|null
     */
    public ?int $anzahlTreffer = null;
    /**
     * The kennzeichenBis
     * @var \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichenBis = null;
    /**
     * The strukturKennzeichenInhalt
     * @var \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt|null
     */
    public ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null;
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
     * Constructor method for Type.Kennzeichensuche
     * @uses Type_Kennzeichensuche::setKennzeichen()
     * @uses Type_Kennzeichensuche::setMerkmalKennzeichenart()
     * @uses Type_Kennzeichensuche::setMerkmalWechselkennzeichen()
     * @uses Type_Kennzeichensuche::setLaengeMinimal()
     * @uses Type_Kennzeichensuche::setLaengeMaximal()
     * @uses Type_Kennzeichensuche::setSucheinschraenkung()
     * @uses Type_Kennzeichensuche::setAnzahlTreffer()
     * @uses Type_Kennzeichensuche::setKennzeichenBis()
     * @uses Type_Kennzeichensuche::setStrukturKennzeichenInhalt()
     * @uses Type_Kennzeichensuche::setKundennummer()
     * @uses Type_Kennzeichensuche::setSortierung()
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichen
     * @param string $merkmalKennzeichenart
     * @param bool $merkmalWechselkennzeichen
     * @param int $laengeMinimal
     * @param int $laengeMaximal
     * @param \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung
     * @param int $anzahlTreffer
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichenBis
     * @param \THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt
     * @param string $kundennummer
     * @param \THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichen = null, ?string $merkmalKennzeichenart = null, ?bool $merkmalWechselkennzeichen = null, ?int $laengeMinimal = null, ?int $laengeMaximal = null, ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null, ?int $anzahlTreffer = null, ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichenBis = null, ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null, ?string $kundennummer = null, ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setMerkmalKennzeichenart($merkmalKennzeichenart)
            ->setMerkmalWechselkennzeichen($merkmalWechselkennzeichen)
            ->setLaengeMinimal($laengeMinimal)
            ->setLaengeMaximal($laengeMaximal)
            ->setSucheinschraenkung($sucheinschraenkung)
            ->setAnzahlTreffer($anzahlTreffer)
            ->setKennzeichenBis($kennzeichenBis)
            ->setStrukturKennzeichenInhalt($strukturKennzeichenInhalt)
            ->setKundennummer($kundennummer)
            ->setSortierung($sortierung);
    }
    /**
     * Get kennzeichen value
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen
    {
        return $this->kennzeichen;
    }
    /**
     * Set kennzeichen value
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
     */
    public function setLaengeMaximal(?int $laengeMaximal = null): self
    {
        $this->laengeMaximal = $laengeMaximal;
        
        return $this;
    }
    /**
     * Get sucheinschraenkung value
     * @return \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen|null
     */
    public function getSucheinschraenkung(): ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen
    {
        return $this->sucheinschraenkung;
    }
    /**
     * Set sucheinschraenkung value
     * @param \THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
     */
    public function setSucheinschraenkung(?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null): self
    {
        $this->sucheinschraenkung = $sucheinschraenkung;
        
        return $this;
    }
    /**
     * Get anzahlTreffer value
     * @return int|null
     */
    public function getAnzahlTreffer(): ?int
    {
        return $this->anzahlTreffer;
    }
    /**
     * Set anzahlTreffer value
     * @param int $anzahlTreffer
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
     */
    public function setAnzahlTreffer(?int $anzahlTreffer = null): self
    {
        $this->anzahlTreffer = $anzahlTreffer;
        
        return $this;
    }
    /**
     * Get kennzeichenBis value
     * @return \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen|null
     */
    public function getKennzeichenBis(): ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen
    {
        return $this->kennzeichenBis;
    }
    /**
     * Set kennzeichenBis value
     * @param \THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichenBis
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
     */
    public function setKennzeichenBis(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichenBis = null): self
    {
        $this->kennzeichenBis = $kennzeichenBis;
        
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
     */
    public function setStrukturKennzeichenInhalt(?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null): self
    {
        $this->strukturKennzeichenInhalt = $strukturKennzeichenInhalt;
        
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche
     */
    public function setSortierung(?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null): self
    {
        $this->sortierung = $sortierung;
        
        return $this;
    }
}
