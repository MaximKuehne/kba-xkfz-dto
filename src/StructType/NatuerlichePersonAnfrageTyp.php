<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NatuerlichePersonAnfrageTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NatuerlichePersonAnfrageTyp extends AbstractStructBase
{
    /**
     * The FamiliennameNachname
     * @var string|null
     */
    public ?string $FamiliennameNachname = null;
    /**
     * The FamiliennameNamensbestandteil
     * @var string|null
     */
    public ?string $FamiliennameNamensbestandteil = null;
    /**
     * The GeburtsnameNachname
     * @var string|null
     */
    public ?string $GeburtsnameNachname = null;
    /**
     * The GeburtsnameNamensbestandteil
     * @var string|null
     */
    public ?string $GeburtsnameNamensbestandteil = null;
    /**
     * The Vorname
     * @var string|null
     */
    public ?string $Vorname = null;
    /**
     * The Ordensname
     * @var string|null
     */
    public ?string $Ordensname = null;
    /**
     * The Kuenstlername
     * @var string|null
     */
    public ?string $Kuenstlername = null;
    /**
     * The TagDerGeburt
     * @var string|null
     */
    public ?string $TagDerGeburt = null;
    /**
     * The Geburtsort
     * @var string|null
     */
    public ?string $Geburtsort = null;
    /**
     * The PhonetischeSuche
     * @var bool|null
     */
    public ?bool $PhonetischeSuche = null;
    /**
     * Constructor method for NatuerlichePersonAnfrageTyp
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
     * @param string $familiennameNachname
     * @param string $familiennameNamensbestandteil
     * @param string $geburtsnameNachname
     * @param string $geburtsnameNamensbestandteil
     * @param string $vorname
     * @param string $ordensname
     * @param string $kuenstlername
     * @param string $tagDerGeburt
     * @param string $geburtsort
     * @param bool $phonetischeSuche
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
     * @return string|null
     */
    public function getFamiliennameNachname(): ?string
    {
        return $this->FamiliennameNachname;
    }
    /**
     * Set FamiliennameNachname value
     * @param string $familiennameNachname
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setFamiliennameNachname(?string $familiennameNachname = null): self
    {
        $this->FamiliennameNachname = $familiennameNachname;
        
        return $this;
    }
    /**
     * Get FamiliennameNamensbestandteil value
     * @return string|null
     */
    public function getFamiliennameNamensbestandteil(): ?string
    {
        return $this->FamiliennameNamensbestandteil;
    }
    /**
     * Set FamiliennameNamensbestandteil value
     * @param string $familiennameNamensbestandteil
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setFamiliennameNamensbestandteil(?string $familiennameNamensbestandteil = null): self
    {
        $this->FamiliennameNamensbestandteil = $familiennameNamensbestandteil;
        
        return $this;
    }
    /**
     * Get GeburtsnameNachname value
     * @return string|null
     */
    public function getGeburtsnameNachname(): ?string
    {
        return $this->GeburtsnameNachname;
    }
    /**
     * Set GeburtsnameNachname value
     * @param string $geburtsnameNachname
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setGeburtsnameNachname(?string $geburtsnameNachname = null): self
    {
        $this->GeburtsnameNachname = $geburtsnameNachname;
        
        return $this;
    }
    /**
     * Get GeburtsnameNamensbestandteil value
     * @return string|null
     */
    public function getGeburtsnameNamensbestandteil(): ?string
    {
        return $this->GeburtsnameNamensbestandteil;
    }
    /**
     * Set GeburtsnameNamensbestandteil value
     * @param string $geburtsnameNamensbestandteil
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setGeburtsnameNamensbestandteil(?string $geburtsnameNamensbestandteil = null): self
    {
        $this->GeburtsnameNamensbestandteil = $geburtsnameNamensbestandteil;
        
        return $this;
    }
    /**
     * Get Vorname value
     * @return string|null
     */
    public function getVorname(): ?string
    {
        return $this->Vorname;
    }
    /**
     * Set Vorname value
     * @param string $vorname
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;
        
        return $this;
    }
    /**
     * Get Ordensname value
     * @return string|null
     */
    public function getOrdensname(): ?string
    {
        return $this->Ordensname;
    }
    /**
     * Set Ordensname value
     * @param string $ordensname
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setOrdensname(?string $ordensname = null): self
    {
        $this->Ordensname = $ordensname;
        
        return $this;
    }
    /**
     * Get Kuenstlername value
     * @return string|null
     */
    public function getKuenstlername(): ?string
    {
        return $this->Kuenstlername;
    }
    /**
     * Set Kuenstlername value
     * @param string $kuenstlername
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setKuenstlername(?string $kuenstlername = null): self
    {
        $this->Kuenstlername = $kuenstlername;
        
        return $this;
    }
    /**
     * Get TagDerGeburt value
     * @return string|null
     */
    public function getTagDerGeburt(): ?string
    {
        return $this->TagDerGeburt;
    }
    /**
     * Set TagDerGeburt value
     * @param string $tagDerGeburt
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setTagDerGeburt(?string $tagDerGeburt = null): self
    {
        $this->TagDerGeburt = $tagDerGeburt;
        
        return $this;
    }
    /**
     * Get Geburtsort value
     * @return string|null
     */
    public function getGeburtsort(): ?string
    {
        return $this->Geburtsort;
    }
    /**
     * Set Geburtsort value
     * @param string $geburtsort
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setGeburtsort(?string $geburtsort = null): self
    {
        $this->Geburtsort = $geburtsort;
        
        return $this;
    }
    /**
     * Get PhonetischeSuche value
     * @return bool|null
     */
    public function getPhonetischeSuche(): ?bool
    {
        return $this->PhonetischeSuche;
    }
    /**
     * Set PhonetischeSuche value
     * @param bool $phonetischeSuche
     * @return \THAG\XKfz\StructType\NatuerlichePersonAnfrageTyp
     */
    public function setPhonetischeSuche(?bool $phonetischeSuche = null): self
    {
        $this->PhonetischeSuche = $phonetischeSuche;
        
        return $this;
    }
}