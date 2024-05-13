<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Datentyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Datentyp extends AbstractStructBase
{
    /**
     * The DatentypName
     */
    public ?string $DatentypName = null;

    /**
     * The Datenpflegeart
     */
    public ?string $Datenpflegeart = null;

    /**
     * The DatentypBool
     */
    public ?\THAG\XKfz\StructType\DatentypBool $DatentypBool = null;

    /**
     * The DatentypCode
     */
    public ?\THAG\XKfz\StructType\DatentypCode $DatentypCode = null;

    /**
     * The DatentypZahl
     */
    public ?\THAG\XKfz\StructType\DatentypZahl $DatentypZahl = null;

    /**
     * The DatentypZeichenkette
     */
    public ?\THAG\XKfz\StructType\DatentypZeichenkette $DatentypZeichenkette = null;

    /**
     * The DatentypUhrzeit
     */
    public ?\THAG\XKfz\StructType\DatentypUhrzeit $DatentypUhrzeit = null;

    /**
     * The DatentypXml
     */
    public ?\THAG\XKfz\StructType\DatentypXml $DatentypXml = null;

    /**
     * The DatentypFeldIndividualisierung
     */
    public ?\THAG\XKfz\StructType\DatentypFeldindividualisierung $DatentypFeldIndividualisierung = null;

    /**
     * The DatentypStruktur
     */
    public ?\THAG\XKfz\StructType\DatentypStruktur $DatentypStruktur = null;

    /**
     * The DatentypIndizierteListe
     */
    public ?\THAG\XKfz\StructType\DatentypIndizierteListe $DatentypIndizierteListe = null;

    /**
     * The DatentypCodeRelationListe
     */
    public ?\THAG\XKfz\StructType\DatentypCodeRelationListe $DatentypCodeRelationListe = null;

    /**
     * Constructor method for Datentyp
     *
     * @uses Datentyp::setDatentypName()
     * @uses Datentyp::setDatenpflegeart()
     * @uses Datentyp::setDatentypBool()
     * @uses Datentyp::setDatentypCode()
     * @uses Datentyp::setDatentypZahl()
     * @uses Datentyp::setDatentypZeichenkette()
     * @uses Datentyp::setDatentypUhrzeit()
     * @uses Datentyp::setDatentypXml()
     * @uses Datentyp::setDatentypFeldIndividualisierung()
     * @uses Datentyp::setDatentypStruktur()
     * @uses Datentyp::setDatentypIndizierteListe()
     * @uses Datentyp::setDatentypCodeRelationListe()
     */
    public function __construct(?string $datentypName = null, ?string $datenpflegeart = null, ?\THAG\XKfz\StructType\DatentypBool $datentypBool = null, ?\THAG\XKfz\StructType\DatentypCode $datentypCode = null, ?\THAG\XKfz\StructType\DatentypZahl $datentypZahl = null, ?\THAG\XKfz\StructType\DatentypZeichenkette $datentypZeichenkette = null, ?\THAG\XKfz\StructType\DatentypUhrzeit $datentypUhrzeit = null, ?\THAG\XKfz\StructType\DatentypXml $datentypXml = null, ?\THAG\XKfz\StructType\DatentypFeldindividualisierung $datentypFeldIndividualisierung = null, ?\THAG\XKfz\StructType\DatentypStruktur $datentypStruktur = null, ?\THAG\XKfz\StructType\DatentypIndizierteListe $datentypIndizierteListe = null, ?\THAG\XKfz\StructType\DatentypCodeRelationListe $datentypCodeRelationListe = null)
    {
        $this
            ->setDatentypName($datentypName)
            ->setDatenpflegeart($datenpflegeart)
            ->setDatentypBool($datentypBool)
            ->setDatentypCode($datentypCode)
            ->setDatentypZahl($datentypZahl)
            ->setDatentypZeichenkette($datentypZeichenkette)
            ->setDatentypUhrzeit($datentypUhrzeit)
            ->setDatentypXml($datentypXml)
            ->setDatentypFeldIndividualisierung($datentypFeldIndividualisierung)
            ->setDatentypStruktur($datentypStruktur)
            ->setDatentypIndizierteListe($datentypIndizierteListe)
            ->setDatentypCodeRelationListe($datentypCodeRelationListe);
    }

    /**
     * Get DatentypName value
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }

    /**
     * Set DatentypName value
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;

        return $this;
    }

    /**
     * Get Datenpflegeart value
     */
    public function getDatenpflegeart(): ?string
    {
        return $this->Datenpflegeart;
    }

    /**
     * Set Datenpflegeart value
     */
    public function setDatenpflegeart(?string $datenpflegeart = null): self
    {
        $this->Datenpflegeart = $datenpflegeart;

        return $this;
    }

    /**
     * Get DatentypBool value
     */
    public function getDatentypBool(): ?\THAG\XKfz\StructType\DatentypBool
    {
        return $this->DatentypBool;
    }

    /**
     * Set DatentypBool value
     */
    public function setDatentypBool(?\THAG\XKfz\StructType\DatentypBool $datentypBool = null): self
    {
        $this->DatentypBool = $datentypBool;

        return $this;
    }

    /**
     * Get DatentypCode value
     */
    public function getDatentypCode(): ?\THAG\XKfz\StructType\DatentypCode
    {
        return $this->DatentypCode;
    }

    /**
     * Set DatentypCode value
     */
    public function setDatentypCode(?\THAG\XKfz\StructType\DatentypCode $datentypCode = null): self
    {
        $this->DatentypCode = $datentypCode;

        return $this;
    }

    /**
     * Get DatentypZahl value
     */
    public function getDatentypZahl(): ?\THAG\XKfz\StructType\DatentypZahl
    {
        return $this->DatentypZahl;
    }

    /**
     * Set DatentypZahl value
     */
    public function setDatentypZahl(?\THAG\XKfz\StructType\DatentypZahl $datentypZahl = null): self
    {
        $this->DatentypZahl = $datentypZahl;

        return $this;
    }

    /**
     * Get DatentypZeichenkette value
     */
    public function getDatentypZeichenkette(): ?\THAG\XKfz\StructType\DatentypZeichenkette
    {
        return $this->DatentypZeichenkette;
    }

    /**
     * Set DatentypZeichenkette value
     */
    public function setDatentypZeichenkette(?\THAG\XKfz\StructType\DatentypZeichenkette $datentypZeichenkette = null): self
    {
        $this->DatentypZeichenkette = $datentypZeichenkette;

        return $this;
    }

    /**
     * Get DatentypUhrzeit value
     */
    public function getDatentypUhrzeit(): ?\THAG\XKfz\StructType\DatentypUhrzeit
    {
        return $this->DatentypUhrzeit;
    }

    /**
     * Set DatentypUhrzeit value
     */
    public function setDatentypUhrzeit(?\THAG\XKfz\StructType\DatentypUhrzeit $datentypUhrzeit = null): self
    {
        $this->DatentypUhrzeit = $datentypUhrzeit;

        return $this;
    }

    /**
     * Get DatentypXml value
     */
    public function getDatentypXml(): ?\THAG\XKfz\StructType\DatentypXml
    {
        return $this->DatentypXml;
    }

    /**
     * Set DatentypXml value
     */
    public function setDatentypXml(?\THAG\XKfz\StructType\DatentypXml $datentypXml = null): self
    {
        $this->DatentypXml = $datentypXml;

        return $this;
    }

    /**
     * Get DatentypFeldIndividualisierung value
     */
    public function getDatentypFeldIndividualisierung(): ?\THAG\XKfz\StructType\DatentypFeldindividualisierung
    {
        return $this->DatentypFeldIndividualisierung;
    }

    /**
     * Set DatentypFeldIndividualisierung value
     */
    public function setDatentypFeldIndividualisierung(?\THAG\XKfz\StructType\DatentypFeldindividualisierung $datentypFeldIndividualisierung = null): self
    {
        $this->DatentypFeldIndividualisierung = $datentypFeldIndividualisierung;

        return $this;
    }

    /**
     * Get DatentypStruktur value
     */
    public function getDatentypStruktur(): ?\THAG\XKfz\StructType\DatentypStruktur
    {
        return $this->DatentypStruktur;
    }

    /**
     * Set DatentypStruktur value
     */
    public function setDatentypStruktur(?\THAG\XKfz\StructType\DatentypStruktur $datentypStruktur = null): self
    {
        $this->DatentypStruktur = $datentypStruktur;

        return $this;
    }

    /**
     * Get DatentypIndizierteListe value
     */
    public function getDatentypIndizierteListe(): ?\THAG\XKfz\StructType\DatentypIndizierteListe
    {
        return $this->DatentypIndizierteListe;
    }

    /**
     * Set DatentypIndizierteListe value
     */
    public function setDatentypIndizierteListe(?\THAG\XKfz\StructType\DatentypIndizierteListe $datentypIndizierteListe = null): self
    {
        $this->DatentypIndizierteListe = $datentypIndizierteListe;

        return $this;
    }

    /**
     * Get DatentypCodeRelationListe value
     */
    public function getDatentypCodeRelationListe(): ?\THAG\XKfz\StructType\DatentypCodeRelationListe
    {
        return $this->DatentypCodeRelationListe;
    }

    /**
     * Set DatentypCodeRelationListe value
     */
    public function setDatentypCodeRelationListe(?\THAG\XKfz\StructType\DatentypCodeRelationListe $datentypCodeRelationListe = null): self
    {
        $this->DatentypCodeRelationListe = $datentypCodeRelationListe;

        return $this;
    }
}
