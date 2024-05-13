<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FahrzeugidentifizierungZATyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FahrzeugidentifizierungZATyp extends AbstractStructBase
{
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The PruefzifferFahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $PruefzifferFahrzeugidentifizierungsnummer = null;
    /**
     * The SchluesselTyp
     * @var string|null
     */
    public ?string $SchluesselTyp = null;
    /**
     * The SchluesselVarianteVersion
     * @var string|null
     */
    public ?string $SchluesselVarianteVersion = null;
    /**
     * The PruefzifferTypVarianteVersion
     * @var string|null
     */
    public ?string $PruefzifferTypVarianteVersion = null;
    /**
     * The Genehmigungsnummer
     * @var string|null
     */
    public ?string $Genehmigungsnummer = null;
    /**
     * The DatumGenehmigung
     * @var string|null
     */
    public ?string $DatumGenehmigung = null;
    /**
     * The TextHersteller
     * @var string|null
     */
    public ?string $TextHersteller = null;
    /**
     * The TextMarke
     * @var string|null
     */
    public ?string $TextMarke = null;
    /**
     * The TextHandelsbezeichnung
     * @var string|null
     */
    public ?string $TextHandelsbezeichnung = null;
    /**
     * The TextTyp
     * @var string|null
     */
    public ?string $TextTyp = null;
    /**
     * The TextVariante
     * @var string|null
     */
    public ?string $TextVariante = null;
    /**
     * The TextVersion
     * @var string|null
     */
    public ?string $TextVersion = null;
    /**
     * The SchluesselGrundfarbe
     * @var string|null
     */
    public ?string $SchluesselGrundfarbe = null;
    /**
     * The SchluesselZweitfarbe
     * @var string|null
     */
    public ?string $SchluesselZweitfarbe = null;
    /**
     * Constructor method for FahrzeugidentifizierungZATyp
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
     * @param string $schluesselHersteller
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $pruefzifferFahrzeugidentifizierungsnummer
     * @param string $schluesselTyp
     * @param string $schluesselVarianteVersion
     * @param string $pruefzifferTypVarianteVersion
     * @param string $genehmigungsnummer
     * @param string $datumGenehmigung
     * @param string $textHersteller
     * @param string $textMarke
     * @param string $textHandelsbezeichnung
     * @param string $textTyp
     * @param string $textVariante
     * @param string $textVersion
     * @param string $schluesselGrundfarbe
     * @param string $schluesselZweitfarbe
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
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get PruefzifferFahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getPruefzifferFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->PruefzifferFahrzeugidentifizierungsnummer;
    }
    /**
     * Set PruefzifferFahrzeugidentifizierungsnummer value
     * @param string $pruefzifferFahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setPruefzifferFahrzeugidentifizierungsnummer(?string $pruefzifferFahrzeugidentifizierungsnummer = null): self
    {
        $this->PruefzifferFahrzeugidentifizierungsnummer = $pruefzifferFahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get SchluesselTyp value
     * @return string|null
     */
    public function getSchluesselTyp(): ?string
    {
        return $this->SchluesselTyp;
    }
    /**
     * Set SchluesselTyp value
     * @param string $schluesselTyp
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setSchluesselTyp(?string $schluesselTyp = null): self
    {
        $this->SchluesselTyp = $schluesselTyp;
        
        return $this;
    }
    /**
     * Get SchluesselVarianteVersion value
     * @return string|null
     */
    public function getSchluesselVarianteVersion(): ?string
    {
        return $this->SchluesselVarianteVersion;
    }
    /**
     * Set SchluesselVarianteVersion value
     * @param string $schluesselVarianteVersion
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setSchluesselVarianteVersion(?string $schluesselVarianteVersion = null): self
    {
        $this->SchluesselVarianteVersion = $schluesselVarianteVersion;
        
        return $this;
    }
    /**
     * Get PruefzifferTypVarianteVersion value
     * @return string|null
     */
    public function getPruefzifferTypVarianteVersion(): ?string
    {
        return $this->PruefzifferTypVarianteVersion;
    }
    /**
     * Set PruefzifferTypVarianteVersion value
     * @param string $pruefzifferTypVarianteVersion
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setPruefzifferTypVarianteVersion(?string $pruefzifferTypVarianteVersion = null): self
    {
        $this->PruefzifferTypVarianteVersion = $pruefzifferTypVarianteVersion;
        
        return $this;
    }
    /**
     * Get Genehmigungsnummer value
     * @return string|null
     */
    public function getGenehmigungsnummer(): ?string
    {
        return $this->Genehmigungsnummer;
    }
    /**
     * Set Genehmigungsnummer value
     * @param string $genehmigungsnummer
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setGenehmigungsnummer(?string $genehmigungsnummer = null): self
    {
        $this->Genehmigungsnummer = $genehmigungsnummer;
        
        return $this;
    }
    /**
     * Get DatumGenehmigung value
     * @return string|null
     */
    public function getDatumGenehmigung(): ?string
    {
        return $this->DatumGenehmigung;
    }
    /**
     * Set DatumGenehmigung value
     * @param string $datumGenehmigung
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setDatumGenehmigung(?string $datumGenehmigung = null): self
    {
        $this->DatumGenehmigung = $datumGenehmigung;
        
        return $this;
    }
    /**
     * Get TextHersteller value
     * @return string|null
     */
    public function getTextHersteller(): ?string
    {
        return $this->TextHersteller;
    }
    /**
     * Set TextHersteller value
     * @param string $textHersteller
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setTextHersteller(?string $textHersteller = null): self
    {
        $this->TextHersteller = $textHersteller;
        
        return $this;
    }
    /**
     * Get TextMarke value
     * @return string|null
     */
    public function getTextMarke(): ?string
    {
        return $this->TextMarke;
    }
    /**
     * Set TextMarke value
     * @param string $textMarke
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setTextMarke(?string $textMarke = null): self
    {
        $this->TextMarke = $textMarke;
        
        return $this;
    }
    /**
     * Get TextHandelsbezeichnung value
     * @return string|null
     */
    public function getTextHandelsbezeichnung(): ?string
    {
        return $this->TextHandelsbezeichnung;
    }
    /**
     * Set TextHandelsbezeichnung value
     * @param string $textHandelsbezeichnung
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setTextHandelsbezeichnung(?string $textHandelsbezeichnung = null): self
    {
        $this->TextHandelsbezeichnung = $textHandelsbezeichnung;
        
        return $this;
    }
    /**
     * Get TextTyp value
     * @return string|null
     */
    public function getTextTyp(): ?string
    {
        return $this->TextTyp;
    }
    /**
     * Set TextTyp value
     * @param string $textTyp
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setTextTyp(?string $textTyp = null): self
    {
        $this->TextTyp = $textTyp;
        
        return $this;
    }
    /**
     * Get TextVariante value
     * @return string|null
     */
    public function getTextVariante(): ?string
    {
        return $this->TextVariante;
    }
    /**
     * Set TextVariante value
     * @param string $textVariante
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setTextVariante(?string $textVariante = null): self
    {
        $this->TextVariante = $textVariante;
        
        return $this;
    }
    /**
     * Get TextVersion value
     * @return string|null
     */
    public function getTextVersion(): ?string
    {
        return $this->TextVersion;
    }
    /**
     * Set TextVersion value
     * @param string $textVersion
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setTextVersion(?string $textVersion = null): self
    {
        $this->TextVersion = $textVersion;
        
        return $this;
    }
    /**
     * Get SchluesselGrundfarbe value
     * @return string|null
     */
    public function getSchluesselGrundfarbe(): ?string
    {
        return $this->SchluesselGrundfarbe;
    }
    /**
     * Set SchluesselGrundfarbe value
     * @param string $schluesselGrundfarbe
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setSchluesselGrundfarbe(?string $schluesselGrundfarbe = null): self
    {
        $this->SchluesselGrundfarbe = $schluesselGrundfarbe;
        
        return $this;
    }
    /**
     * Get SchluesselZweitfarbe value
     * @return string|null
     */
    public function getSchluesselZweitfarbe(): ?string
    {
        return $this->SchluesselZweitfarbe;
    }
    /**
     * Set SchluesselZweitfarbe value
     * @param string $schluesselZweitfarbe
     * @return \THAG\XKfz\StructType\FahrzeugidentifizierungZATyp
     */
    public function setSchluesselZweitfarbe(?string $schluesselZweitfarbe = null): self
    {
        $this->SchluesselZweitfarbe = $schluesselZweitfarbe;
        
        return $this;
    }
}
