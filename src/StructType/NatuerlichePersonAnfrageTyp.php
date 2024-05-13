<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NatuerlichePersonAnfrageTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NatuerlichePersonAnfrageTyp extends AbstractStructBase
{
    /**
     * The FamiliennameNachname
     */
    public ?string $FamiliennameNachname = null;

    /**
     * The FamiliennameNamensbestandteil
     */
    public ?string $FamiliennameNamensbestandteil = null;

    /**
     * The GeburtsnameNachname
     */
    public ?string $GeburtsnameNachname = null;

    /**
     * The GeburtsnameNamensbestandteil
     */
    public ?string $GeburtsnameNamensbestandteil = null;

    /**
     * The Vorname
     */
    public ?string $Vorname = null;

    /**
     * The Ordensname
     */
    public ?string $Ordensname = null;

    /**
     * The Kuenstlername
     */
    public ?string $Kuenstlername = null;

    /**
     * The TagDerGeburt
     */
    public ?string $TagDerGeburt = null;

    /**
     * The Geburtsort
     */
    public ?string $Geburtsort = null;

    /**
     * The PhonetischeSuche
     */
    public ?bool $PhonetischeSuche = null;

    /**
     * Constructor method for NatuerlichePersonAnfrageTyp
     *
     * @uses NatuerlichePersonAnfrageTyp::setFamiliennameNachname()
     * @uses NatuerlichePersonAnfrageTyp::setFamiliennameNamensbestandteil()
     * @uses NatuerlichePersonAnfrageTyp::setGeburtsnameNachname()
     * @uses NatuerlichePersonAnfrageTyp::setGeburtsnameNamensbestandteil()
     * @uses NatuerlichePersonAnfrageTyp::setVorname()
     * @uses NatuerlichePersonAnfrageTyp::setOrdensname()
     * @uses NatuerlichePersonAnfrageTyp::setKuenstlername()
     * @uses NatuerlichePersonAnfrageTyp::setTagDerGeburt()
     * @uses NatuerlichePersonAnfrageTyp::setGeburtsort()
     * @uses NatuerlichePersonAnfrageTyp::setPhonetischeSuche()
     */
    public function __construct(?string $familiennameNachname = null, ?string $familiennameNamensbestandteil = null, ?string $geburtsnameNachname = null, ?string $geburtsnameNamensbestandteil = null, ?string $vorname = null, ?string $ordensname = null, ?string $kuenstlername = null, ?string $tagDerGeburt = null, ?string $geburtsort = null, ?bool $phonetischeSuche = null)
    {
        $this
            ->setFamiliennameNachname($familiennameNachname)
            ->setFamiliennameNamensbestandteil($familiennameNamensbestandteil)
            ->setGeburtsnameNachname($geburtsnameNachname)
            ->setGeburtsnameNamensbestandteil($geburtsnameNamensbestandteil)
            ->setVorname($vorname)
            ->setOrdensname($ordensname)
            ->setKuenstlername($kuenstlername)
            ->setTagDerGeburt($tagDerGeburt)
            ->setGeburtsort($geburtsort)
            ->setPhonetischeSuche($phonetischeSuche);
    }

    /**
     * Get FamiliennameNachname value
     */
    public function getFamiliennameNachname(): ?string
    {
        return $this->FamiliennameNachname;
    }

    /**
     * Set FamiliennameNachname value
     */
    public function setFamiliennameNachname(?string $familiennameNachname = null): self
    {
        $this->FamiliennameNachname = $familiennameNachname;

        return $this;
    }

    /**
     * Get FamiliennameNamensbestandteil value
     */
    public function getFamiliennameNamensbestandteil(): ?string
    {
        return $this->FamiliennameNamensbestandteil;
    }

    /**
     * Set FamiliennameNamensbestandteil value
     */
    public function setFamiliennameNamensbestandteil(?string $familiennameNamensbestandteil = null): self
    {
        $this->FamiliennameNamensbestandteil = $familiennameNamensbestandteil;

        return $this;
    }

    /**
     * Get GeburtsnameNachname value
     */
    public function getGeburtsnameNachname(): ?string
    {
        return $this->GeburtsnameNachname;
    }

    /**
     * Set GeburtsnameNachname value
     */
    public function setGeburtsnameNachname(?string $geburtsnameNachname = null): self
    {
        $this->GeburtsnameNachname = $geburtsnameNachname;

        return $this;
    }

    /**
     * Get GeburtsnameNamensbestandteil value
     */
    public function getGeburtsnameNamensbestandteil(): ?string
    {
        return $this->GeburtsnameNamensbestandteil;
    }

    /**
     * Set GeburtsnameNamensbestandteil value
     */
    public function setGeburtsnameNamensbestandteil(?string $geburtsnameNamensbestandteil = null): self
    {
        $this->GeburtsnameNamensbestandteil = $geburtsnameNamensbestandteil;

        return $this;
    }

    /**
     * Get Vorname value
     */
    public function getVorname(): ?string
    {
        return $this->Vorname;
    }

    /**
     * Set Vorname value
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;

        return $this;
    }

    /**
     * Get Ordensname value
     */
    public function getOrdensname(): ?string
    {
        return $this->Ordensname;
    }

    /**
     * Set Ordensname value
     */
    public function setOrdensname(?string $ordensname = null): self
    {
        $this->Ordensname = $ordensname;

        return $this;
    }

    /**
     * Get Kuenstlername value
     */
    public function getKuenstlername(): ?string
    {
        return $this->Kuenstlername;
    }

    /**
     * Set Kuenstlername value
     */
    public function setKuenstlername(?string $kuenstlername = null): self
    {
        $this->Kuenstlername = $kuenstlername;

        return $this;
    }

    /**
     * Get TagDerGeburt value
     */
    public function getTagDerGeburt(): ?string
    {
        return $this->TagDerGeburt;
    }

    /**
     * Set TagDerGeburt value
     */
    public function setTagDerGeburt(?string $tagDerGeburt = null): self
    {
        $this->TagDerGeburt = $tagDerGeburt;

        return $this;
    }

    /**
     * Get Geburtsort value
     */
    public function getGeburtsort(): ?string
    {
        return $this->Geburtsort;
    }

    /**
     * Set Geburtsort value
     */
    public function setGeburtsort(?string $geburtsort = null): self
    {
        $this->Geburtsort = $geburtsort;

        return $this;
    }

    /**
     * Get PhonetischeSuche value
     */
    public function getPhonetischeSuche(): ?bool
    {
        return $this->PhonetischeSuche;
    }

    /**
     * Set PhonetischeSuche value
     */
    public function setPhonetischeSuche(?bool $phonetischeSuche = null): self
    {
        $this->PhonetischeSuche = $phonetischeSuche;

        return $this;
    }
}
