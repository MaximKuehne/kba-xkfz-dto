<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NatuerlichePerson StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NatuerlichePerson extends AbstractStructBase
{
    /**
     * The Nachname
     * @var string|null
     */
    public ?string $Nachname = null;
    /**
     * The Namensbestandteil
     * @var string|null
     */
    public ?string $Namensbestandteil = null;
    /**
     * The Vorname
     * @var string|null
     */
    public ?string $Vorname = null;
    /**
     * The VornameZuRechtNichtVorhanden
     * @var string|null
     */
    public ?string $VornameZuRechtNichtVorhanden = null;
    /**
     * The TagDerGeburt
     * @var string|null
     */
    public ?string $TagDerGeburt = null;
    /**
     * The Geschlecht
     * @var string|null
     */
    public ?string $Geschlecht = null;
    /**
     * The Doktorgrad
     * @var string|null
     */
    public ?string $Doktorgrad = null;
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
     * The Geburtsort
     * @var string|null
     */
    public ?string $Geburtsort = null;
    /**
     * Constructor method for NatuerlichePerson
     * @uses NatuerlichePerson::setNachname()
     * @uses NatuerlichePerson::setNamensbestandteil()
     * @uses NatuerlichePerson::setVorname()
     * @uses NatuerlichePerson::setVornameZuRechtNichtVorhanden()
     * @uses NatuerlichePerson::setTagDerGeburt()
     * @uses NatuerlichePerson::setGeschlecht()
     * @uses NatuerlichePerson::setDoktorgrad()
     * @uses NatuerlichePerson::setOrdensname()
     * @uses NatuerlichePerson::setKuenstlername()
     * @uses NatuerlichePerson::setFamiliennameNachname()
     * @uses NatuerlichePerson::setFamiliennameNamensbestandteil()
     * @uses NatuerlichePerson::setGeburtsnameNachname()
     * @uses NatuerlichePerson::setGeburtsnameNamensbestandteil()
     * @uses NatuerlichePerson::setGeburtsort()
     * @param string $nachname
     * @param string $namensbestandteil
     * @param string $vorname
     * @param string $vornameZuRechtNichtVorhanden
     * @param string $tagDerGeburt
     * @param string $geschlecht
     * @param string $doktorgrad
     * @param string $ordensname
     * @param string $kuenstlername
     * @param string $familiennameNachname
     * @param string $familiennameNamensbestandteil
     * @param string $geburtsnameNachname
     * @param string $geburtsnameNamensbestandteil
     * @param string $geburtsort
     */
    public function __construct(?string $nachname = null, ?string $namensbestandteil = null, ?string $vorname = null, ?string $vornameZuRechtNichtVorhanden = null, ?string $tagDerGeburt = null, ?string $geschlecht = null, ?string $doktorgrad = null, ?string $ordensname = null, ?string $kuenstlername = null, ?string $familiennameNachname = null, ?string $familiennameNamensbestandteil = null, ?string $geburtsnameNachname = null, ?string $geburtsnameNamensbestandteil = null, ?string $geburtsort = null)
    {
        $this
            ->setNachname($nachname)
            ->setNamensbestandteil($namensbestandteil)
            ->setVorname($vorname)
            ->setVornameZuRechtNichtVorhanden($vornameZuRechtNichtVorhanden)
            ->setTagDerGeburt($tagDerGeburt)
            ->setGeschlecht($geschlecht)
            ->setDoktorgrad($doktorgrad)
            ->setOrdensname($ordensname)
            ->setKuenstlername($kuenstlername)
            ->setFamiliennameNachname($familiennameNachname)
            ->setFamiliennameNamensbestandteil($familiennameNamensbestandteil)
            ->setGeburtsnameNachname($geburtsnameNachname)
            ->setGeburtsnameNamensbestandteil($geburtsnameNamensbestandteil)
            ->setGeburtsort($geburtsort);
    }
    /**
     * Get Nachname value
     * @return string|null
     */
    public function getNachname(): ?string
    {
        return $this->Nachname;
    }
    /**
     * Set Nachname value
     * @param string $nachname
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setNachname(?string $nachname = null): self
    {
        $this->Nachname = $nachname;
        
        return $this;
    }
    /**
     * Get Namensbestandteil value
     * @return string|null
     */
    public function getNamensbestandteil(): ?string
    {
        return $this->Namensbestandteil;
    }
    /**
     * Set Namensbestandteil value
     * @param string $namensbestandteil
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setNamensbestandteil(?string $namensbestandteil = null): self
    {
        $this->Namensbestandteil = $namensbestandteil;
        
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;
        
        return $this;
    }
    /**
     * Get VornameZuRechtNichtVorhanden value
     * @return string|null
     */
    public function getVornameZuRechtNichtVorhanden(): ?string
    {
        return $this->VornameZuRechtNichtVorhanden;
    }
    /**
     * Set VornameZuRechtNichtVorhanden value
     * @param string $vornameZuRechtNichtVorhanden
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setVornameZuRechtNichtVorhanden(?string $vornameZuRechtNichtVorhanden = null): self
    {
        $this->VornameZuRechtNichtVorhanden = $vornameZuRechtNichtVorhanden;
        
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setTagDerGeburt(?string $tagDerGeburt = null): self
    {
        $this->TagDerGeburt = $tagDerGeburt;
        
        return $this;
    }
    /**
     * Get Geschlecht value
     * @return string|null
     */
    public function getGeschlecht(): ?string
    {
        return $this->Geschlecht;
    }
    /**
     * Set Geschlecht value
     * @param string $geschlecht
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setGeschlecht(?string $geschlecht = null): self
    {
        $this->Geschlecht = $geschlecht;
        
        return $this;
    }
    /**
     * Get Doktorgrad value
     * @return string|null
     */
    public function getDoktorgrad(): ?string
    {
        return $this->Doktorgrad;
    }
    /**
     * Set Doktorgrad value
     * @param string $doktorgrad
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setDoktorgrad(?string $doktorgrad = null): self
    {
        $this->Doktorgrad = $doktorgrad;
        
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setKuenstlername(?string $kuenstlername = null): self
    {
        $this->Kuenstlername = $kuenstlername;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setGeburtsnameNamensbestandteil(?string $geburtsnameNamensbestandteil = null): self
    {
        $this->GeburtsnameNamensbestandteil = $geburtsnameNamensbestandteil;
        
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson
     */
    public function setGeburtsort(?string $geburtsort = null): self
    {
        $this->Geburtsort = $geburtsort;
        
        return $this;
    }
}
