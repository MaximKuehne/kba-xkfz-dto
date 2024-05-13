<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Versandadresse StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Versandadresse extends AbstractStructBase
{
    /**
     * The Vorname
     */
    public ?string $Vorname = null;

    /**
     * The NameBezeichnung
     */
    public ?string $NameBezeichnung = null;

    /**
     * The Strasse
     */
    public ?string $Strasse = null;

    /**
     * The Hausnummer
     */
    public ?string $Hausnummer = null;

    /**
     * The Adressierungszusaetze
     */
    public ?string $Adressierungszusaetze = null;

    /**
     * The Postleitzahl
     */
    public ?string $Postleitzahl = null;

    /**
     * The Ort
     */
    public ?string $Ort = null;

    /**
     * Constructor method for Type.Versandadresse
     *
     * @uses Type_Versandadresse::setVorname()
     * @uses Type_Versandadresse::setNameBezeichnung()
     * @uses Type_Versandadresse::setStrasse()
     * @uses Type_Versandadresse::setHausnummer()
     * @uses Type_Versandadresse::setAdressierungszusaetze()
     * @uses Type_Versandadresse::setPostleitzahl()
     * @uses Type_Versandadresse::setOrt()
     */
    public function __construct(?string $vorname = null, ?string $nameBezeichnung = null, ?string $strasse = null, ?string $hausnummer = null, ?string $adressierungszusaetze = null, ?string $postleitzahl = null, ?string $ort = null)
    {
        $this
            ->setVorname($vorname)
            ->setNameBezeichnung($nameBezeichnung)
            ->setStrasse($strasse)
            ->setHausnummer($hausnummer)
            ->setAdressierungszusaetze($adressierungszusaetze)
            ->setPostleitzahl($postleitzahl)
            ->setOrt($ort);
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
     * Get NameBezeichnung value
     */
    public function getNameBezeichnung(): ?string
    {
        return $this->NameBezeichnung;
    }

    /**
     * Set NameBezeichnung value
     */
    public function setNameBezeichnung(?string $nameBezeichnung = null): self
    {
        $this->NameBezeichnung = $nameBezeichnung;

        return $this;
    }

    /**
     * Get Strasse value
     */
    public function getStrasse(): ?string
    {
        return $this->Strasse;
    }

    /**
     * Set Strasse value
     */
    public function setStrasse(?string $strasse = null): self
    {
        $this->Strasse = $strasse;

        return $this;
    }

    /**
     * Get Hausnummer value
     */
    public function getHausnummer(): ?string
    {
        return $this->Hausnummer;
    }

    /**
     * Set Hausnummer value
     */
    public function setHausnummer(?string $hausnummer = null): self
    {
        $this->Hausnummer = $hausnummer;

        return $this;
    }

    /**
     * Get Adressierungszusaetze value
     */
    public function getAdressierungszusaetze(): ?string
    {
        return $this->Adressierungszusaetze;
    }

    /**
     * Set Adressierungszusaetze value
     */
    public function setAdressierungszusaetze(?string $adressierungszusaetze = null): self
    {
        $this->Adressierungszusaetze = $adressierungszusaetze;

        return $this;
    }

    /**
     * Get Postleitzahl value
     */
    public function getPostleitzahl(): ?string
    {
        return $this->Postleitzahl;
    }

    /**
     * Set Postleitzahl value
     */
    public function setPostleitzahl(?string $postleitzahl = null): self
    {
        $this->Postleitzahl = $postleitzahl;

        return $this;
    }

    /**
     * Get Ort value
     */
    public function getOrt(): ?string
    {
        return $this->Ort;
    }

    /**
     * Set Ort value
     */
    public function setOrt(?string $ort = null): self
    {
        $this->Ort = $ort;

        return $this;
    }
}
