<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichensuche StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichensuche extends AbstractStructBase
{
    /**
     * The kennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichen = null;

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
     * The sucheinschraenkung
     */
    public ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null;

    /**
     * The anzahlTreffer
     */
    public ?int $anzahlTreffer = null;

    /**
     * The kennzeichenBis
     */
    public ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichenBis = null;

    /**
     * The strukturKennzeichenInhalt
     */
    public ?\THAG\XKfz\StructType\Type_StrukturKennzeichenInhalt $strukturKennzeichenInhalt = null;

    /**
     * The kundennummer
     */
    public ?string $kundennummer = null;

    /**
     * The sortierung
     */
    public ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null;

    /**
     * Constructor method for Type.Kennzeichensuche
     *
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
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen
    {
        return $this->kennzeichen;
    }

    /**
     * Set kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;

        return $this;
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
     * Get sucheinschraenkung value
     */
    public function getSucheinschraenkung(): ?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen
    {
        return $this->sucheinschraenkung;
    }

    /**
     * Set sucheinschraenkung value
     */
    public function setSucheinschraenkung(?\THAG\XKfz\StructType\Code_SucheinschraenkungKennzeichen $sucheinschraenkung = null): self
    {
        $this->sucheinschraenkung = $sucheinschraenkung;

        return $this;
    }

    /**
     * Get anzahlTreffer value
     */
    public function getAnzahlTreffer(): ?int
    {
        return $this->anzahlTreffer;
    }

    /**
     * Set anzahlTreffer value
     */
    public function setAnzahlTreffer(?int $anzahlTreffer = null): self
    {
        $this->anzahlTreffer = $anzahlTreffer;

        return $this;
    }

    /**
     * Get kennzeichenBis value
     */
    public function getKennzeichenBis(): ?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen
    {
        return $this->kennzeichenBis;
    }

    /**
     * Set kennzeichenBis value
     */
    public function setKennzeichenBis(?\THAG\XKfz\StructType\Type_KennzeichensucheKennzeichen $kennzeichenBis = null): self
    {
        $this->kennzeichenBis = $kennzeichenBis;

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
