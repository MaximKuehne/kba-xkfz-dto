<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Anschrift StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Anschrift extends AbstractStructBase
{
    /**
     * The Postleitzahl
     */
    public ?string $Postleitzahl = null;

    /**
     * The Postfach
     */
    public ?string $Postfach = null;

    /**
     * The PostleitzahlPostfach
     */
    public ?string $PostleitzahlPostfach = null;

    /**
     * The Wohnort
     */
    public ?string $Wohnort = null;

    /**
     * The Staat
     */
    public ?string $Staat = null;

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
     * The Gemeindeschluessel
     */
    public ?string $Gemeindeschluessel = null;

    /**
     * The Strassenschluessel
     */
    public ?string $Strassenschluessel = null;

    /**
     * Constructor method for Anschrift
     *
     * @uses Anschrift::setPostleitzahl()
     * @uses Anschrift::setPostfach()
     * @uses Anschrift::setPostleitzahlPostfach()
     * @uses Anschrift::setWohnort()
     * @uses Anschrift::setStaat()
     * @uses Anschrift::setStrasse()
     * @uses Anschrift::setHausnummer()
     * @uses Anschrift::setAdressierungszusaetze()
     * @uses Anschrift::setGemeindeschluessel()
     * @uses Anschrift::setStrassenschluessel()
     */
    public function __construct(?string $postleitzahl = null, ?string $postfach = null, ?string $postleitzahlPostfach = null, ?string $wohnort = null, ?string $staat = null, ?string $strasse = null, ?string $hausnummer = null, ?string $adressierungszusaetze = null, ?string $gemeindeschluessel = null, ?string $strassenschluessel = null)
    {
        $this
            ->setPostleitzahl($postleitzahl)
            ->setPostfach($postfach)
            ->setPostleitzahlPostfach($postleitzahlPostfach)
            ->setWohnort($wohnort)
            ->setStaat($staat)
            ->setStrasse($strasse)
            ->setHausnummer($hausnummer)
            ->setAdressierungszusaetze($adressierungszusaetze)
            ->setGemeindeschluessel($gemeindeschluessel)
            ->setStrassenschluessel($strassenschluessel);
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
     * Get Postfach value
     */
    public function getPostfach(): ?string
    {
        return $this->Postfach;
    }

    /**
     * Set Postfach value
     */
    public function setPostfach(?string $postfach = null): self
    {
        $this->Postfach = $postfach;

        return $this;
    }

    /**
     * Get PostleitzahlPostfach value
     */
    public function getPostleitzahlPostfach(): ?string
    {
        return $this->PostleitzahlPostfach;
    }

    /**
     * Set PostleitzahlPostfach value
     */
    public function setPostleitzahlPostfach(?string $postleitzahlPostfach = null): self
    {
        $this->PostleitzahlPostfach = $postleitzahlPostfach;

        return $this;
    }

    /**
     * Get Wohnort value
     */
    public function getWohnort(): ?string
    {
        return $this->Wohnort;
    }

    /**
     * Set Wohnort value
     */
    public function setWohnort(?string $wohnort = null): self
    {
        $this->Wohnort = $wohnort;

        return $this;
    }

    /**
     * Get Staat value
     */
    public function getStaat(): ?string
    {
        return $this->Staat;
    }

    /**
     * Set Staat value
     */
    public function setStaat(?string $staat = null): self
    {
        $this->Staat = $staat;

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
     * Get Gemeindeschluessel value
     */
    public function getGemeindeschluessel(): ?string
    {
        return $this->Gemeindeschluessel;
    }

    /**
     * Set Gemeindeschluessel value
     */
    public function setGemeindeschluessel(?string $gemeindeschluessel = null): self
    {
        $this->Gemeindeschluessel = $gemeindeschluessel;

        return $this;
    }

    /**
     * Get Strassenschluessel value
     */
    public function getStrassenschluessel(): ?string
    {
        return $this->Strassenschluessel;
    }

    /**
     * Set Strassenschluessel value
     */
    public function setStrassenschluessel(?string $strassenschluessel = null): self
    {
        $this->Strassenschluessel = $strassenschluessel;

        return $this;
    }
}
