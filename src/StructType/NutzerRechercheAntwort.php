<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NutzerRechercheAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NutzerRechercheAntwort extends AbstractStructBase
{
    /**
     * The Nutzerkennung
     * @var string|null
     */
    public ?string $Nutzerkennung = null;
    /**
     * The Nachname
     * @var string|null
     */
    public ?string $Nachname = null;
    /**
     * The Vorname
     * @var string|null
     */
    public ?string $Vorname = null;
    /**
     * The Namensbestandteil
     * @var string|null
     */
    public ?string $Namensbestandteil = null;
    /**
     * The Zugangsberechtigung
     * @var string|null
     */
    public ?string $Zugangsberechtigung = null;
    /**
     * The Telefonnummer
     * @var string|null
     */
    public ?string $Telefonnummer = null;
    /**
     * The IHKRegistrierungsnummer
     * @var string|null
     */
    public ?string $IHKRegistrierungsnummer = null;
    /**
     * The VUNutzerId
     * @var string|null
     */
    public ?string $VUNutzerId = null;
    /**
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * Constructor method for NutzerRechercheAntwort
     * @uses NutzerRechercheAntwort::setNutzerkennung()
     * @uses NutzerRechercheAntwort::setNachname()
     * @uses NutzerRechercheAntwort::setVorname()
     * @uses NutzerRechercheAntwort::setNamensbestandteil()
     * @uses NutzerRechercheAntwort::setZugangsberechtigung()
     * @uses NutzerRechercheAntwort::setTelefonnummer()
     * @uses NutzerRechercheAntwort::setIHKRegistrierungsnummer()
     * @uses NutzerRechercheAntwort::setVUNutzerId()
     * @uses NutzerRechercheAntwort::setAnschrift()
     * @param string $nutzerkennung
     * @param string $nachname
     * @param string $vorname
     * @param string $namensbestandteil
     * @param string $zugangsberechtigung
     * @param string $telefonnummer
     * @param string $iHKRegistrierungsnummer
     * @param string $vUNutzerId
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
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
     * @return string|null
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }
    /**
     * Set Nutzerkennung value
     * @param string $nutzerkennung
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setNachname(?string $nachname = null): self
    {
        $this->Nachname = $nachname;
        
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
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;
        
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
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setNamensbestandteil(?string $namensbestandteil = null): self
    {
        $this->Namensbestandteil = $namensbestandteil;
        
        return $this;
    }
    /**
     * Get Zugangsberechtigung value
     * @return string|null
     */
    public function getZugangsberechtigung(): ?string
    {
        return $this->Zugangsberechtigung;
    }
    /**
     * Set Zugangsberechtigung value
     * @param string $zugangsberechtigung
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setZugangsberechtigung(?string $zugangsberechtigung = null): self
    {
        $this->Zugangsberechtigung = $zugangsberechtigung;
        
        return $this;
    }
    /**
     * Get Telefonnummer value
     * @return string|null
     */
    public function getTelefonnummer(): ?string
    {
        return $this->Telefonnummer;
    }
    /**
     * Set Telefonnummer value
     * @param string $telefonnummer
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setTelefonnummer(?string $telefonnummer = null): self
    {
        $this->Telefonnummer = $telefonnummer;
        
        return $this;
    }
    /**
     * Get IHKRegistrierungsnummer value
     * @return string|null
     */
    public function getIHKRegistrierungsnummer(): ?string
    {
        return $this->IHKRegistrierungsnummer;
    }
    /**
     * Set IHKRegistrierungsnummer value
     * @param string $iHKRegistrierungsnummer
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setIHKRegistrierungsnummer(?string $iHKRegistrierungsnummer = null): self
    {
        $this->IHKRegistrierungsnummer = $iHKRegistrierungsnummer;
        
        return $this;
    }
    /**
     * Get VUNutzerId value
     * @return string|null
     */
    public function getVUNutzerId(): ?string
    {
        return $this->VUNutzerId;
    }
    /**
     * Set VUNutzerId value
     * @param string $vUNutzerId
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setVUNutzerId(?string $vUNutzerId = null): self
    {
        $this->VUNutzerId = $vUNutzerId;
        
        return $this;
    }
    /**
     * Get Anschrift value
     * @return \THAG\XKfz\StructType\Anschrift|null
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }
    /**
     * Set Anschrift value
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @return \THAG\XKfz\StructType\NutzerRechercheAntwort
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
}
