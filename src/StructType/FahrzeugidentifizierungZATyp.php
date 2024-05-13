<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugidentifizierungZATyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugidentifizierungZATyp extends AbstractStructBase
{
    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The PruefzifferFahrzeugidentifizierungsnummer
     */
    public ?string $PruefzifferFahrzeugidentifizierungsnummer = null;

    /**
     * The SchluesselTyp
     */
    public ?string $SchluesselTyp = null;

    /**
     * The SchluesselVarianteVersion
     */
    public ?string $SchluesselVarianteVersion = null;

    /**
     * The PruefzifferTypVarianteVersion
     */
    public ?string $PruefzifferTypVarianteVersion = null;

    /**
     * The Genehmigungsnummer
     */
    public ?string $Genehmigungsnummer = null;

    /**
     * The DatumGenehmigung
     */
    public ?string $DatumGenehmigung = null;

    /**
     * The TextHersteller
     */
    public ?string $TextHersteller = null;

    /**
     * The TextMarke
     */
    public ?string $TextMarke = null;

    /**
     * The TextHandelsbezeichnung
     */
    public ?string $TextHandelsbezeichnung = null;

    /**
     * The TextTyp
     */
    public ?string $TextTyp = null;

    /**
     * The TextVariante
     */
    public ?string $TextVariante = null;

    /**
     * The TextVersion
     */
    public ?string $TextVersion = null;

    /**
     * The SchluesselGrundfarbe
     */
    public ?string $SchluesselGrundfarbe = null;

    /**
     * The SchluesselZweitfarbe
     */
    public ?string $SchluesselZweitfarbe = null;

    /**
     * Constructor method for FahrzeugidentifizierungZATyp
     *
     * @uses FahrzeugidentifizierungZATyp::setSchluesselHersteller()
     * @uses FahrzeugidentifizierungZATyp::setFahrzeugidentifizierungsnummer()
     * @uses FahrzeugidentifizierungZATyp::setPruefzifferFahrzeugidentifizierungsnummer()
     * @uses FahrzeugidentifizierungZATyp::setSchluesselTyp()
     * @uses FahrzeugidentifizierungZATyp::setSchluesselVarianteVersion()
     * @uses FahrzeugidentifizierungZATyp::setPruefzifferTypVarianteVersion()
     * @uses FahrzeugidentifizierungZATyp::setGenehmigungsnummer()
     * @uses FahrzeugidentifizierungZATyp::setDatumGenehmigung()
     * @uses FahrzeugidentifizierungZATyp::setTextHersteller()
     * @uses FahrzeugidentifizierungZATyp::setTextMarke()
     * @uses FahrzeugidentifizierungZATyp::setTextHandelsbezeichnung()
     * @uses FahrzeugidentifizierungZATyp::setTextTyp()
     * @uses FahrzeugidentifizierungZATyp::setTextVariante()
     * @uses FahrzeugidentifizierungZATyp::setTextVersion()
     * @uses FahrzeugidentifizierungZATyp::setSchluesselGrundfarbe()
     * @uses FahrzeugidentifizierungZATyp::setSchluesselZweitfarbe()
     */
    public function __construct(?string $schluesselHersteller = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $pruefzifferFahrzeugidentifizierungsnummer = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $pruefzifferTypVarianteVersion = null, ?string $genehmigungsnummer = null, ?string $datumGenehmigung = null, ?string $textHersteller = null, ?string $textMarke = null, ?string $textHandelsbezeichnung = null, ?string $textTyp = null, ?string $textVariante = null, ?string $textVersion = null, ?string $schluesselGrundfarbe = null, ?string $schluesselZweitfarbe = null)
    {
        $this
            ->setSchluesselHersteller($schluesselHersteller)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setPruefzifferFahrzeugidentifizierungsnummer($pruefzifferFahrzeugidentifizierungsnummer)
            ->setSchluesselTyp($schluesselTyp)
            ->setSchluesselVarianteVersion($schluesselVarianteVersion)
            ->setPruefzifferTypVarianteVersion($pruefzifferTypVarianteVersion)
            ->setGenehmigungsnummer($genehmigungsnummer)
            ->setDatumGenehmigung($datumGenehmigung)
            ->setTextHersteller($textHersteller)
            ->setTextMarke($textMarke)
            ->setTextHandelsbezeichnung($textHandelsbezeichnung)
            ->setTextTyp($textTyp)
            ->setTextVariante($textVariante)
            ->setTextVersion($textVersion)
            ->setSchluesselGrundfarbe($schluesselGrundfarbe)
            ->setSchluesselZweitfarbe($schluesselZweitfarbe);
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
     * Get PruefzifferFahrzeugidentifizierungsnummer value
     */
    public function getPruefzifferFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->PruefzifferFahrzeugidentifizierungsnummer;
    }

    /**
     * Set PruefzifferFahrzeugidentifizierungsnummer value
     */
    public function setPruefzifferFahrzeugidentifizierungsnummer(?string $pruefzifferFahrzeugidentifizierungsnummer = null): self
    {
        $this->PruefzifferFahrzeugidentifizierungsnummer = $pruefzifferFahrzeugidentifizierungsnummer;

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
     * Get PruefzifferTypVarianteVersion value
     */
    public function getPruefzifferTypVarianteVersion(): ?string
    {
        return $this->PruefzifferTypVarianteVersion;
    }

    /**
     * Set PruefzifferTypVarianteVersion value
     */
    public function setPruefzifferTypVarianteVersion(?string $pruefzifferTypVarianteVersion = null): self
    {
        $this->PruefzifferTypVarianteVersion = $pruefzifferTypVarianteVersion;

        return $this;
    }

    /**
     * Get Genehmigungsnummer value
     */
    public function getGenehmigungsnummer(): ?string
    {
        return $this->Genehmigungsnummer;
    }

    /**
     * Set Genehmigungsnummer value
     */
    public function setGenehmigungsnummer(?string $genehmigungsnummer = null): self
    {
        $this->Genehmigungsnummer = $genehmigungsnummer;

        return $this;
    }

    /**
     * Get DatumGenehmigung value
     */
    public function getDatumGenehmigung(): ?string
    {
        return $this->DatumGenehmigung;
    }

    /**
     * Set DatumGenehmigung value
     */
    public function setDatumGenehmigung(?string $datumGenehmigung = null): self
    {
        $this->DatumGenehmigung = $datumGenehmigung;

        return $this;
    }

    /**
     * Get TextHersteller value
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }

    /**
     * Set TextHersteller value
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;

        return $this;
    }

    /**
     * Get TextMarke value
     */
    public function getTextMarke(): ?string
    {
        return $this->TextMarke;
    }

    /**
     * Set TextMarke value
     */
    public function setTextMarke(?string $textMarke = null): self
    {
        $this->TextMarke = $textMarke;

        return $this;
    }

    /**
     * Get TextHandelsbezeichnung value
     */
    public function getTextHandelsbezeichnung(): ?string
    {
        return $this->TextHandelsbezeichnung;
    }

    /**
     * Set TextHandelsbezeichnung value
     */
    public function setTextHandelsbezeichnung(?string $textHandelsbezeichnung = null): self
    {
        $this->TextHandelsbezeichnung = $textHandelsbezeichnung;

        return $this;
    }

    /**
     * Get TextTyp value
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }

    /**
     * Set TextTyp value
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;

        return $this;
    }

    /**
     * Get TextVariante value
     */
    public function getTextVariante(): ?string
    {
        return $this->TextVariante;
    }

    /**
     * Set TextVariante value
     */
    public function setTextVariante(?string $textVariante = null): self
    {
        $this->TextVariante = $textVariante;

        return $this;
    }

    /**
     * Get TextVersion value
     */
    public function getTextVersion(): ?string
    {
        return $this->TextVersion;
    }

    /**
     * Set TextVersion value
     */
    public function setTextVersion(?string $textVersion = null): self
    {
        $this->TextVersion = $textVersion;

        return $this;
    }

    /**
     * Get SchluesselGrundfarbe value
     */
    public function getSchluesselGrundfarbe(): ?string
    {
        return $this->SchluesselGrundfarbe;
    }

    /**
     * Set SchluesselGrundfarbe value
     */
    public function setSchluesselGrundfarbe(?string $schluesselGrundfarbe = null): self
    {
        $this->SchluesselGrundfarbe = $schluesselGrundfarbe;

        return $this;
    }

    /**
     * Get SchluesselZweitfarbe value
     */
    public function getSchluesselZweitfarbe(): ?string
    {
        return $this->SchluesselZweitfarbe;
    }

    /**
     * Set SchluesselZweitfarbe value
     */
    public function setSchluesselZweitfarbe(?string $schluesselZweitfarbe = null): self
    {
        $this->SchluesselZweitfarbe = $schluesselZweitfarbe;

        return $this;
    }
}
