<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NatuerlichePerson StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NatuerlichePerson extends AbstractStructBase
{
    /**
     * The Nachname
     */
    public ?string $Nachname = null;

    /**
     * The Namensbestandteil
     */
    public ?string $Namensbestandteil = null;

    /**
     * The Vorname
     */
    public ?string $Vorname = null;

    /**
     * The VornameZuRechtNichtVorhanden
     */
    public ?string $VornameZuRechtNichtVorhanden = null;

    /**
     * The TagDerGeburt
     */
    public ?string $TagDerGeburt = null;

    /**
     * The Geschlecht
     */
    public ?string $Geschlecht = null;

    /**
     * The Doktorgrad
     */
    public ?string $Doktorgrad = null;

    /**
     * The Ordensname
     */
    public ?string $Ordensname = null;

    /**
     * The Kuenstlername
     */
    public ?string $Kuenstlername = null;

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
     * The Geburtsort
     */
    public ?string $Geburtsort = null;

    /**
     * Constructor method for NatuerlichePerson
     *
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
     */
    public function getNachname(): ?string
    {
        return $this->Nachname;
    }

    /**
     * Set Nachname value
     */
    public function setNachname(?string $nachname = null): self
    {
        $this->Nachname = $nachname;

        return $this;
    }

    /**
     * Get Namensbestandteil value
     */
    public function getNamensbestandteil(): ?string
    {
        return $this->Namensbestandteil;
    }

    /**
     * Set Namensbestandteil value
     */
    public function setNamensbestandteil(?string $namensbestandteil = null): self
    {
        $this->Namensbestandteil = $namensbestandteil;

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
     * Get VornameZuRechtNichtVorhanden value
     */
    public function getVornameZuRechtNichtVorhanden(): ?string
    {
        return $this->VornameZuRechtNichtVorhanden;
    }

    /**
     * Set VornameZuRechtNichtVorhanden value
     */
    public function setVornameZuRechtNichtVorhanden(?string $vornameZuRechtNichtVorhanden = null): self
    {
        $this->VornameZuRechtNichtVorhanden = $vornameZuRechtNichtVorhanden;

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
     * Get Geschlecht value
     */
    public function getGeschlecht(): ?string
    {
        return $this->Geschlecht;
    }

    /**
     * Set Geschlecht value
     */
    public function setGeschlecht(?string $geschlecht = null): self
    {
        $this->Geschlecht = $geschlecht;

        return $this;
    }

    /**
     * Get Doktorgrad value
     */
    public function getDoktorgrad(): ?string
    {
        return $this->Doktorgrad;
    }

    /**
     * Set Doktorgrad value
     */
    public function setDoktorgrad(?string $doktorgrad = null): self
    {
        $this->Doktorgrad = $doktorgrad;

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
}
