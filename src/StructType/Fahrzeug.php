<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fahrzeug StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Fahrzeug extends AbstractStructBase
{
    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The Hersteller
     */
    public ?string $Hersteller = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The SchluesselVarianteVersion
     */
    public ?string $SchluesselVarianteVersion = null;

    /**
     * The Fahrzeugart
     */
    public ?string $Fahrzeugart = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The SchluesselAufbau
     */
    public ?string $SchluesselAufbau = null;

    /**
     * The TextFahrzeugklasse
     */
    public ?string $TextFahrzeugklasse = null;

    /**
     * The TextAufbau
     */
    public ?string $TextAufbau = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The Hubraum
     */
    public ?string $Hubraum = null;

    /**
     * The NennleistungKw
     */
    public ?string $NennleistungKw = null;

    /**
     * The MerkmalOldtimer
     */
    public ?string $MerkmalOldtimer = null;

    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * The ListeVerwendungFahrzeug
     */
    public ?\THAG\XKfz\StructType\ListeVerwendungFahrzeug $ListeVerwendungFahrzeug = null;

    /**
     * Constructor method for Fahrzeug
     *
     * @uses Fahrzeug::setSchluesselHersteller()
     * @uses Fahrzeug::setHersteller()
     * @uses Fahrzeug::setSchluesselTyp()
     * @uses Fahrzeug::setSchluesselVarianteVersion()
     * @uses Fahrzeug::setFahrzeugart()
     * @uses Fahrzeug::setSchluesselFahrzeugklasse()
     * @uses Fahrzeug::setSchluesselAufbau()
     * @uses Fahrzeug::setTextFahrzeugklasse()
     * @uses Fahrzeug::setTextAufbau()
     * @uses Fahrzeug::setFahrzeugidentifizierungsnummer()
     * @uses Fahrzeug::setHubraum()
     * @uses Fahrzeug::setNennleistungKw()
     * @uses Fahrzeug::setMerkmalOldtimer()
     * @uses Fahrzeug::setVerwendungFahrzeug()
     * @uses Fahrzeug::setListeVerwendungFahrzeug()
     */
    public function __construct(?string $schluesselHersteller = null, ?string $hersteller = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $fahrzeugart = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselAufbau = null, ?string $textFahrzeugklasse = null, ?string $textAufbau = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $hubraum = null, ?string $nennleistungKw = null, ?string $merkmalOldtimer = null, ?string $verwendungFahrzeug = null, ?\THAG\XKfz\StructType\ListeVerwendungFahrzeug $listeVerwendungFahrzeug = null)
    {
        $this
            ->setSchluesselHersteller($schluesselHersteller)
            ->setHersteller($hersteller)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setFahrzeugart($fahrzeugart)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setTextAufbau($textAufbau)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setHubraum($hubraum)
            ->setNennleistungKw($nennleistungKw)
            ->setMerkmalOldtimer($merkmalOldtimer)
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setListeVerwendungFahrzeug($listeVerwendungFahrzeug);
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get Hersteller value
     */
    public function getHersteller(): ?string
    {
        return $this->Hersteller;
    }

    /**
     * Set Hersteller value
     */
    public function setHersteller(?string $hersteller = null): self
    {
        $this->Hersteller = $hersteller;

        return $this;
    }

    /**
     * Get SchluesselTyp value
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }

    /**
     * Set SchluesselTyp value
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;

        return $this;
    }

    /**
     * Get SchluesselVarianteVersion value
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }

    /**
     * Set SchluesselVarianteVersion value
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;

        return $this;
    }

    /**
     * Get Fahrzeugart value
     */
    public function getFahrzeugart(): ?string
    {
        return $this->Fahrzeugart;
    }

    /**
     * Set Fahrzeugart value
     */
    public function setFahrzeugart(?string $fahrzeugart = null): self
    {
        $this->Fahrzeugart = $fahrzeugart;

        return $this;
    }

    /**
     * Get SchluesselFahrzeugklasse value
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }

    /**
     * Set SchluesselFahrzeugklasse value
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;

        return $this;
    }

    /**
     * Get SchluesselAufbau value
     */
    public function getSchluesselAufbau(): ?string
    {
        return $this->SchluesselAufbau;
    }

    /**
     * Set SchluesselAufbau value
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;

        return $this;
    }

    /**
     * Get TextFahrzeugklasse value
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }

    /**
     * Set TextFahrzeugklasse value
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;

        return $this;
    }

    /**
     * Get TextAufbau value
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }

    /**
     * Set TextAufbau value
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;

        return $this;
    }

    /**
     * Get Fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }

    /**
     * Set Fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get Hubraum value
     */
    public function getHubraum(): ?string
    {
        return $this->Hubraum;
    }

    /**
     * Set Hubraum value
     */
    public function setHubraum(?string $hubraum = null): self
    {
        $this->Hubraum = $hubraum;

        return $this;
    }

    /**
     * Get NennleistungKw value
     */
    public function getNennleistungKw(): ?string
    {
        return $this->NennleistungKw;
    }

    /**
     * Set NennleistungKw value
     */
    public function setNennleistungKw(?string $nennleistungKw = null): self
    {
        $this->NennleistungKw = $nennleistungKw;

        return $this;
    }

    /**
     * Get MerkmalOldtimer value
     */
    public function getMerkmalOldtimer(): ?string
    {
        return $this->MerkmalOldtimer;
    }

    /**
     * Set MerkmalOldtimer value
     */
    public function setMerkmalOldtimer(?string $merkmalOldtimer = null): self
    {
        $this->MerkmalOldtimer = $merkmalOldtimer;

        return $this;
    }

    /**
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

        return $this;
    }

    /**
     * Get ListeVerwendungFahrzeug value
     */
    public function getListeVerwendungFahrzeug(): ?\THAG\XKfz\StructType\ListeVerwendungFahrzeug
    {
        return $this->ListeVerwendungFahrzeug;
    }

    /**
     * Set ListeVerwendungFahrzeug value
     */
    public function setListeVerwendungFahrzeug(?\THAG\XKfz\StructType\ListeVerwendungFahrzeug $listeVerwendungFahrzeug = null): self
    {
        $this->ListeVerwendungFahrzeug = $listeVerwendungFahrzeug;

        return $this;
    }
}
