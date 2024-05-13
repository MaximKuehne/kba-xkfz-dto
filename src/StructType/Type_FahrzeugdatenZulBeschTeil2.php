<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.FahrzeugdatenZulBeschTeil2 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_FahrzeugdatenZulBeschTeil2 extends AbstractStructBase
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
     * The ArtGenehmigung
     * @var string|null
     */
    public ?string $ArtGenehmigung = null;
    /**
     * The SchluesselFahrzeugklasse
     * @var string|null
     */
    public ?string $SchluesselFahrzeugklasse = null;
    /**
     * The SchluesselAufbau
     * @var string|null
     */
    public ?string $SchluesselAufbau = null;
    /**
     * The SchluesselKraftstoff
     * @var string|null
     */
    public ?string $SchluesselKraftstoff = null;
    /**
     * The NennleistungKW
     * @var int|null
     */
    public ?int $NennleistungKW = null;
    /**
     * The NennleistungUmdrehung
     * @var int|null
     */
    public ?int $NennleistungUmdrehung = null;
    /**
     * The Hubraum
     * @var int|null
     */
    public ?int $Hubraum = null;
    /**
     * The TextFahrzeugklasse
     * @var string|null
     */
    public ?string $TextFahrzeugklasse = null;
    /**
     * The TextKraftstoff
     * @var string|null
     */
    public ?string $TextKraftstoff = null;
    /**
     * The TextAufbau
     * @var string|null
     */
    public ?string $TextAufbau = null;
    /**
     * The textFarben
     * @var string|null
     */
    public ?string $textFarben = null;
    /**
     * Constructor method for Type.FahrzeugdatenZulBeschTeil2
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselHersteller()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setFahrzeugidentifizierungsnummer()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setPruefzifferFahrzeugidentifizierungsnummer()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselTyp()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselVarianteVersion()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setPruefzifferTypVarianteVersion()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setGenehmigungsnummer()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setDatumGenehmigung()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextHersteller()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextMarke()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextHandelsbezeichnung()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextTyp()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextVariante()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextVersion()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselGrundfarbe()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselZweitfarbe()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setArtGenehmigung()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselFahrzeugklasse()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselAufbau()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setSchluesselKraftstoff()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setNennleistungKW()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setNennleistungUmdrehung()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setHubraum()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextFahrzeugklasse()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextKraftstoff()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextAufbau()
     * @uses Type_FahrzeugdatenZulBeschTeil2::setTextFarben()
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
     * @param string $artGenehmigung
     * @param string $schluesselFahrzeugklasse
     * @param string $schluesselAufbau
     * @param string $schluesselKraftstoff
     * @param int $nennleistungKW
     * @param int $nennleistungUmdrehung
     * @param int $hubraum
     * @param string $textFahrzeugklasse
     * @param string $textKraftstoff
     * @param string $textAufbau
     * @param string $textFarben
     */
    public function __construct(?string $schluesselHersteller = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $pruefzifferFahrzeugidentifizierungsnummer = null, ?string $schluesselTyp = null, ?string $schluesselVarianteVersion = null, ?string $pruefzifferTypVarianteVersion = null, ?string $genehmigungsnummer = null, ?string $datumGenehmigung = null, ?string $textHersteller = null, ?string $textMarke = null, ?string $textHandelsbezeichnung = null, ?string $textTyp = null, ?string $textVariante = null, ?string $textVersion = null, ?string $schluesselGrundfarbe = null, ?string $schluesselZweitfarbe = null, ?string $artGenehmigung = null, ?string $schluesselFahrzeugklasse = null, ?string $schluesselAufbau = null, ?string $schluesselKraftstoff = null, ?int $nennleistungKW = null, ?int $nennleistungUmdrehung = null, ?int $hubraum = null, ?string $textFahrzeugklasse = null, ?string $textKraftstoff = null, ?string $textAufbau = null, ?string $textFarben = null)
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
            ->setSchluesselZweitfarbe($schluesselZweitfarbe)
            ->setArtGenehmigung($artGenehmigung)
            ->setSchluesselFahrzeugklasse($schluesselFahrzeugklasse)
            ->setSchluesselAufbau($schluesselAufbau)
            ->setSchluesselKraftstoff($schluesselKraftstoff)
            ->setNennleistungKW($nennleistungKW)
            ->setNennleistungUmdrehung($nennleistungUmdrehung)
            ->setHubraum($hubraum)
            ->setTextFahrzeugklasse($textFahrzeugklasse)
            ->setTextKraftstoff($textKraftstoff)
            ->setTextAufbau($textAufbau)
            ->setTextFarben($textFarben);
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
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
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setSchluesselZweitfarbe(?string $schluesselZweitfarbe = null): self
    {
        $this->SchluesselZweitfarbe = $schluesselZweitfarbe;
        
        return $this;
    }
    /**
     * Get ArtGenehmigung value
     * @return string|null
     */
    public function getArtGenehmigung(): ?string
    {
        return $this->ArtGenehmigung;
    }
    /**
     * Set ArtGenehmigung value
     * @param string $artGenehmigung
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setArtGenehmigung(?string $artGenehmigung = null): self
    {
        $this->ArtGenehmigung = $artGenehmigung;
        
        return $this;
    }
    /**
     * Get SchluesselFahrzeugklasse value
     * @return string|null
     */
    public function getSchluesselFahrzeugklasse(): ?string
    {
        return $this->SchluesselFahrzeugklasse;
    }
    /**
     * Set SchluesselFahrzeugklasse value
     * @param string $schluesselFahrzeugklasse
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setSchluesselFahrzeugklasse(?string $schluesselFahrzeugklasse = null): self
    {
        $this->SchluesselFahrzeugklasse = $schluesselFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get SchluesselAufbau value
     * @return string|null
     */
    public function getSchluesselAufbau(): ?string
    {
        return $this->SchluesselAufbau;
    }
    /**
     * Set SchluesselAufbau value
     * @param string $schluesselAufbau
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setSchluesselAufbau(?string $schluesselAufbau = null): self
    {
        $this->SchluesselAufbau = $schluesselAufbau;
        
        return $this;
    }
    /**
     * Get SchluesselKraftstoff value
     * @return string|null
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }
    /**
     * Set SchluesselKraftstoff value
     * @param string $schluesselKraftstoff
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;
        
        return $this;
    }
    /**
     * Get NennleistungKW value
     * @return int|null
     */
    public function getNennleistungKW(): ?int
    {
        return $this->NennleistungKW;
    }
    /**
     * Set NennleistungKW value
     * @param int $nennleistungKW
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setNennleistungKW(?int $nennleistungKW = null): self
    {
        $this->NennleistungKW = $nennleistungKW;
        
        return $this;
    }
    /**
     * Get NennleistungUmdrehung value
     * @return int|null
     */
    public function getNennleistungUmdrehung(): ?int
    {
        return $this->NennleistungUmdrehung;
    }
    /**
     * Set NennleistungUmdrehung value
     * @param int $nennleistungUmdrehung
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setNennleistungUmdrehung(?int $nennleistungUmdrehung = null): self
    {
        $this->NennleistungUmdrehung = $nennleistungUmdrehung;
        
        return $this;
    }
    /**
     * Get Hubraum value
     * @return int|null
     */
    public function getHubraum(): ?int
    {
        return $this->Hubraum;
    }
    /**
     * Set Hubraum value
     * @param int $hubraum
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setHubraum(?int $hubraum = null): self
    {
        $this->Hubraum = $hubraum;
        
        return $this;
    }
    /**
     * Get TextFahrzeugklasse value
     * @return string|null
     */
    public function getTextFahrzeugklasse(): ?string
    {
        return $this->TextFahrzeugklasse;
    }
    /**
     * Set TextFahrzeugklasse value
     * @param string $textFahrzeugklasse
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setTextFahrzeugklasse(?string $textFahrzeugklasse = null): self
    {
        $this->TextFahrzeugklasse = $textFahrzeugklasse;
        
        return $this;
    }
    /**
     * Get TextKraftstoff value
     * @return string|null
     */
    public function getTextKraftstoff(): ?string
    {
        return $this->TextKraftstoff;
    }
    /**
     * Set TextKraftstoff value
     * @param string $textKraftstoff
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setTextKraftstoff(?string $textKraftstoff = null): self
    {
        $this->TextKraftstoff = $textKraftstoff;
        
        return $this;
    }
    /**
     * Get TextAufbau value
     * @return string|null
     */
    public function getTextAufbau(): ?string
    {
        return $this->TextAufbau;
    }
    /**
     * Set TextAufbau value
     * @param string $textAufbau
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setTextAufbau(?string $textAufbau = null): self
    {
        $this->TextAufbau = $textAufbau;
        
        return $this;
    }
    /**
     * Get textFarben value
     * @return string|null
     */
    public function getTextFarben(): ?string
    {
        return $this->textFarben;
    }
    /**
     * Set textFarben value
     * @param string $textFarben
     * @return \THAG\XKfz\StructType\Type_FahrzeugdatenZulBeschTeil2
     */
    public function setTextFarben(?string $textFarben = null): self
    {
        $this->textFarben = $textFarben;
        
        return $this;
    }
}
