<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.FahrzeugdatenZulBeschTeil2 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_FahrzeugdatenZulBeschTeil2 extends AbstractStructBase
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
     * The ArtGenehmigung
     */
    public ?string $ArtGenehmigung = null;

    /**
     * The SchluesselFahrzeugklasse
     */
    public ?string $SchluesselFahrzeugklasse = null;

    /**
     * The SchluesselAufbau
     */
    public ?string $SchluesselAufbau = null;

    /**
     * The SchluesselKraftstoff
     */
    public ?string $SchluesselKraftstoff = null;

    /**
     * The NennleistungKW
     */
    public ?int $NennleistungKW = null;

    /**
     * The NennleistungUmdrehung
     */
    public ?int $NennleistungUmdrehung = null;

    /**
     * The Hubraum
     */
    public ?int $Hubraum = null;

    /**
     * The TextFahrzeugklasse
     */
    public ?string $TextFahrzeugklasse = null;

    /**
     * The TextKraftstoff
     */
    public ?string $TextKraftstoff = null;

    /**
     * The TextAufbau
     */
    public ?string $TextAufbau = null;

    /**
     * The textFarben
     */
    public ?string $textFarben = null;

    /**
     * Constructor method for Type.FahrzeugdatenZulBeschTeil2
     *
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

    /**
     * Get ArtGenehmigung value
     */
    public function getArtGenehmigung(): ?string
    {
        return $this->ArtGenehmigung;
    }

    /**
     * Set ArtGenehmigung value
     */
    public function setArtGenehmigung(?string $artGenehmigung = null): self
    {
        $this->ArtGenehmigung = $artGenehmigung;

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
     * Get SchluesselKraftstoff value
     */
    public function getSchluesselKraftstoff(): ?string
    {
        return $this->SchluesselKraftstoff;
    }

    /**
     * Set SchluesselKraftstoff value
     */
    public function setSchluesselKraftstoff(?string $schluesselKraftstoff = null): self
    {
        $this->SchluesselKraftstoff = $schluesselKraftstoff;

        return $this;
    }

    /**
     * Get NennleistungKW value
     */
    public function getNennleistungKW(): ?int
    {
        return $this->NennleistungKW;
    }

    /**
     * Set NennleistungKW value
     */
    public function setNennleistungKW(?int $nennleistungKW = null): self
    {
        $this->NennleistungKW = $nennleistungKW;

        return $this;
    }

    /**
     * Get NennleistungUmdrehung value
     */
    public function getNennleistungUmdrehung(): ?int
    {
        return $this->NennleistungUmdrehung;
    }

    /**
     * Set NennleistungUmdrehung value
     */
    public function setNennleistungUmdrehung(?int $nennleistungUmdrehung = null): self
    {
        $this->NennleistungUmdrehung = $nennleistungUmdrehung;

        return $this;
    }

    /**
     * Get Hubraum value
     */
    public function getHubraum(): ?int
    {
        return $this->Hubraum;
    }

    /**
     * Set Hubraum value
     */
    public function setHubraum(?int $hubraum = null): self
    {
        $this->Hubraum = $hubraum;

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
     * Get TextKraftstoff value
     */
    public function getTextKraftstoff(): ?string
    {
        return $this->TextKraftstoff;
    }

    /**
     * Set TextKraftstoff value
     */
    public function setTextKraftstoff(?string $textKraftstoff = null): self
    {
        $this->TextKraftstoff = $textKraftstoff;

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
     * Get textFarben value
     */
    public function getTextFarben(): ?string
    {
        return $this->textFarben;
    }

    /**
     * Set textFarben value
     */
    public function setTextFarben(?string $textFarben = null): self
    {
        $this->textFarben = $textFarben;

        return $this;
    }
}
