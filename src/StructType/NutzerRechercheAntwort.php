<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NutzerRechercheAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NutzerRechercheAntwort extends AbstractStructBase
{
    /**
     * The Nutzerkennung
     */
    public ?string $Nutzerkennung = null;

    /**
     * The Nachname
     */
    public ?string $Nachname = null;

    /**
     * The Vorname
     */
    public ?string $Vorname = null;

    /**
     * The Namensbestandteil
     */
    public ?string $Namensbestandteil = null;

    /**
     * The Zugangsberechtigung
     */
    public ?string $Zugangsberechtigung = null;

    /**
     * The Telefonnummer
     */
    public ?string $Telefonnummer = null;

    /**
     * The IHKRegistrierungsnummer
     */
    public ?string $IHKRegistrierungsnummer = null;

    /**
     * The VUNutzerId
     */
    public ?string $VUNutzerId = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * Constructor method for NutzerRechercheAntwort
     *
     * @uses NutzerRechercheAntwort::setNutzerkennung()
     * @uses NutzerRechercheAntwort::setNachname()
     * @uses NutzerRechercheAntwort::setVorname()
     * @uses NutzerRechercheAntwort::setNamensbestandteil()
     * @uses NutzerRechercheAntwort::setZugangsberechtigung()
     * @uses NutzerRechercheAntwort::setTelefonnummer()
     * @uses NutzerRechercheAntwort::setIHKRegistrierungsnummer()
     * @uses NutzerRechercheAntwort::setVUNutzerId()
     * @uses NutzerRechercheAntwort::setAnschrift()
     */
    public function __construct(?string $nutzerkennung = null, ?string $nachname = null, ?string $vorname = null, ?string $namensbestandteil = null, ?string $zugangsberechtigung = null, ?string $telefonnummer = null, ?string $iHKRegistrierungsnummer = null, ?string $vUNutzerId = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setNutzerkennung($nutzerkennung)
            ->setNachname($nachname)
            ->setVorname($vorname)
            ->setNamensbestandteil($namensbestandteil)
            ->setZugangsberechtigung($zugangsberechtigung)
            ->setTelefonnummer($telefonnummer)
            ->setIHKRegistrierungsnummer($iHKRegistrierungsnummer)
            ->setVUNutzerId($vUNutzerId)
            ->setAnschrift($anschrift);
    }

    /**
     * Get Nutzerkennung value
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }

    /**
     * Set Nutzerkennung value
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;

        return $this;
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
     * Get Zugangsberechtigung value
     */
    public function getZugangsberechtigung(): ?string
    {
        return $this->Zugangsberechtigung;
    }

    /**
     * Set Zugangsberechtigung value
     */
    public function setZugangsberechtigung(?string $zugangsberechtigung = null): self
    {
        $this->Zugangsberechtigung = $zugangsberechtigung;

        return $this;
    }

    /**
     * Get Telefonnummer value
     */
    public function getTelefonnummer(): ?string
    {
        return $this->Telefonnummer;
    }

    /**
     * Set Telefonnummer value
     */
    public function setTelefonnummer(?string $telefonnummer = null): self
    {
        $this->Telefonnummer = $telefonnummer;

        return $this;
    }

    /**
     * Get IHKRegistrierungsnummer value
     */
    public function getIHKRegistrierungsnummer(): ?string
    {
        return $this->IHKRegistrierungsnummer;
    }

    /**
     * Set IHKRegistrierungsnummer value
     */
    public function setIHKRegistrierungsnummer(?string $iHKRegistrierungsnummer = null): self
    {
        $this->IHKRegistrierungsnummer = $iHKRegistrierungsnummer;

        return $this;
    }

    /**
     * Get VUNutzerId value
     */
    public function getVUNutzerId(): ?string
    {
        return $this->VUNutzerId;
    }

    /**
     * Set VUNutzerId value
     */
    public function setVUNutzerId(?string $vUNutzerId = null): self
    {
        $this->VUNutzerId = $vUNutzerId;

        return $this;
    }

    /**
     * Get Anschrift value
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }

    /**
     * Set Anschrift value
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;

        return $this;
    }
}
