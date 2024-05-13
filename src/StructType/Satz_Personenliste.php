<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Satz-Personenliste StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Satz_Personenliste extends AbstractStructBase
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
     * The NameJuristischePerson
     * @var string|null
     */
    public ?string $NameJuristischePerson = null;
    /**
     * The NameVereinigung
     * @var string|null
     */
    public ?string $NameVereinigung = null;
    /**
     * The Wohnort
     * @var string|null
     */
    public ?string $Wohnort = null;
    /**
     * Constructor method for Satz-Personenliste
     * @uses Satz_Personenliste::setFamiliennameNachname()
     * @uses Satz_Personenliste::setFamiliennameNamensbestandteil()
     * @uses Satz_Personenliste::setGeburtsnameNachname()
     * @uses Satz_Personenliste::setGeburtsnameNamensbestandteil()
     * @uses Satz_Personenliste::setVorname()
     * @uses Satz_Personenliste::setOrdensname()
     * @uses Satz_Personenliste::setKuenstlername()
     * @uses Satz_Personenliste::setTagDerGeburt()
     * @uses Satz_Personenliste::setGeburtsort()
     * @uses Satz_Personenliste::setNameJuristischePerson()
     * @uses Satz_Personenliste::setNameVereinigung()
     * @uses Satz_Personenliste::setWohnort()
     * @param string $familiennameNachname
     * @param string $familiennameNamensbestandteil
     * @param string $geburtsnameNachname
     * @param string $geburtsnameNamensbestandteil
     * @param string $vorname
     * @param string $ordensname
     * @param string $kuenstlername
     * @param string $tagDerGeburt
     * @param string $geburtsort
     * @param string $nameJuristischePerson
     * @param string $nameVereinigung
     * @param string $wohnort
     */
    public function __construct(?string $familiennameNachname = null, ?string $familiennameNamensbestandteil = null, ?string $geburtsnameNachname = null, ?string $geburtsnameNamensbestandteil = null, ?string $vorname = null, ?string $ordensname = null, ?string $kuenstlername = null, ?string $tagDerGeburt = null, ?string $geburtsort = null, ?string $nameJuristischePerson = null, ?string $nameVereinigung = null, ?string $wohnort = null)
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
            ->setNameJuristischePerson($nameJuristischePerson)
            ->setNameVereinigung($nameVereinigung)
            ->setWohnort($wohnort);
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
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
     * @return \THAG\XKfz\StructType\Satz_Personenliste
     */
    public function setGeburtsort(?string $geburtsort = null): self
    {
        $this->Geburtsort = $geburtsort;
        
        return $this;
    }
    /**
     * Get NameJuristischePerson value
     * @return string|null
     */
    public function getNameJuristischePerson(): ?string
    {
        return $this->NameJuristischePerson;
    }
    /**
     * Set NameJuristischePerson value
     * @param string $nameJuristischePerson
     * @return \THAG\XKfz\StructType\Satz_Personenliste
     */
    public function setNameJuristischePerson(?string $nameJuristischePerson = null): self
    {
        $this->NameJuristischePerson = $nameJuristischePerson;
        
        return $this;
    }
    /**
     * Get NameVereinigung value
     * @return string|null
     */
    public function getNameVereinigung(): ?string
    {
        return $this->NameVereinigung;
    }
    /**
     * Set NameVereinigung value
     * @param string $nameVereinigung
     * @return \THAG\XKfz\StructType\Satz_Personenliste
     */
    public function setNameVereinigung(?string $nameVereinigung = null): self
    {
        $this->NameVereinigung = $nameVereinigung;
        
        return $this;
    }
    /**
     * Get Wohnort value
     * @return string|null
     */
    public function getWohnort(): ?string
    {
        return $this->Wohnort;
    }
    /**
     * Set Wohnort value
     * @param string $wohnort
     * @return \THAG\XKfz\StructType\Satz_Personenliste
     */
    public function setWohnort(?string $wohnort = null): self
    {
        $this->Wohnort = $wohnort;
        
        return $this;
    }
}
