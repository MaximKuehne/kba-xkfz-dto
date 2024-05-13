<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Datentyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Datentyp extends AbstractStructBase
{
    /**
     * The DatentypName
     * @var string|null
     */
    public ?string $DatentypName = null;
    /**
     * The Datenpflegeart
     * @var string|null
     */
    public ?string $Datenpflegeart = null;
    /**
     * The DatentypBool
     * @var \THAG\XKfz\StructType\DatentypBool|null
     */
    public ?\THAG\XKfz\StructType\DatentypBool $DatentypBool = null;
    /**
     * The DatentypCode
     * @var \THAG\XKfz\StructType\DatentypCode|null
     */
    public ?\THAG\XKfz\StructType\DatentypCode $DatentypCode = null;
    /**
     * The DatentypZahl
     * @var \THAG\XKfz\StructType\DatentypZahl|null
     */
    public ?\THAG\XKfz\StructType\DatentypZahl $DatentypZahl = null;
    /**
     * The DatentypZeichenkette
     * @var \THAG\XKfz\StructType\DatentypZeichenkette|null
     */
    public ?\THAG\XKfz\StructType\DatentypZeichenkette $DatentypZeichenkette = null;
    /**
     * The DatentypUhrzeit
     * @var \THAG\XKfz\StructType\DatentypUhrzeit|null
     */
    public ?\THAG\XKfz\StructType\DatentypUhrzeit $DatentypUhrzeit = null;
    /**
     * The DatentypXml
     * @var \THAG\XKfz\StructType\DatentypXml|null
     */
    public ?\THAG\XKfz\StructType\DatentypXml $DatentypXml = null;
    /**
     * The DatentypFeldIndividualisierung
     * @var \THAG\XKfz\StructType\DatentypFeldindividualisierung|null
     */
    public ?\THAG\XKfz\StructType\DatentypFeldindividualisierung $DatentypFeldIndividualisierung = null;
    /**
     * The DatentypStruktur
     * @var \THAG\XKfz\StructType\DatentypStruktur|null
     */
    public ?\THAG\XKfz\StructType\DatentypStruktur $DatentypStruktur = null;
    /**
     * The DatentypIndizierteListe
     * @var \THAG\XKfz\StructType\DatentypIndizierteListe|null
     */
    public ?\THAG\XKfz\StructType\DatentypIndizierteListe $DatentypIndizierteListe = null;
    /**
     * The DatentypCodeRelationListe
     * @var \THAG\XKfz\StructType\DatentypCodeRelationListe|null
     */
    public ?\THAG\XKfz\StructType\DatentypCodeRelationListe $DatentypCodeRelationListe = null;
    /**
     * Constructor method for Datentyp
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
     * @param string $datentypName
     * @param string $datenpflegeart
     * @param \THAG\XKfz\StructType\DatentypBool $datentypBool
     * @param \THAG\XKfz\StructType\DatentypCode $datentypCode
     * @param \THAG\XKfz\StructType\DatentypZahl $datentypZahl
     * @param \THAG\XKfz\StructType\DatentypZeichenkette $datentypZeichenkette
     * @param \THAG\XKfz\StructType\DatentypUhrzeit $datentypUhrzeit
     * @param \THAG\XKfz\StructType\DatentypXml $datentypXml
     * @param \THAG\XKfz\StructType\DatentypFeldindividualisierung $datentypFeldIndividualisierung
     * @param \THAG\XKfz\StructType\DatentypStruktur $datentypStruktur
     * @param \THAG\XKfz\StructType\DatentypIndizierteListe $datentypIndizierteListe
     * @param \THAG\XKfz\StructType\DatentypCodeRelationListe $datentypCodeRelationListe
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
     * @return string|null
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }
    /**
     * Set DatentypName value
     * @param string $datentypName
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;
        
        return $this;
    }
    /**
     * Get Datenpflegeart value
     * @return string|null
     */
    public function getDatenpflegeart(): ?string
    {
        return $this->Datenpflegeart;
    }
    /**
     * Set Datenpflegeart value
     * @param string $datenpflegeart
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatenpflegeart(?string $datenpflegeart = null): self
    {
        $this->Datenpflegeart = $datenpflegeart;
        
        return $this;
    }
    /**
     * Get DatentypBool value
     * @return \THAG\XKfz\StructType\DatentypBool|null
     */
    public function getDatentypBool(): ?\THAG\XKfz\StructType\DatentypBool
    {
        return $this->DatentypBool;
    }
    /**
     * Set DatentypBool value
     * @param \THAG\XKfz\StructType\DatentypBool $datentypBool
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypBool(?\THAG\XKfz\StructType\DatentypBool $datentypBool = null): self
    {
        $this->DatentypBool = $datentypBool;
        
        return $this;
    }
    /**
     * Get DatentypCode value
     * @return \THAG\XKfz\StructType\DatentypCode|null
     */
    public function getDatentypCode(): ?\THAG\XKfz\StructType\DatentypCode
    {
        return $this->DatentypCode;
    }
    /**
     * Set DatentypCode value
     * @param \THAG\XKfz\StructType\DatentypCode $datentypCode
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypCode(?\THAG\XKfz\StructType\DatentypCode $datentypCode = null): self
    {
        $this->DatentypCode = $datentypCode;
        
        return $this;
    }
    /**
     * Get DatentypZahl value
     * @return \THAG\XKfz\StructType\DatentypZahl|null
     */
    public function getDatentypZahl(): ?\THAG\XKfz\StructType\DatentypZahl
    {
        return $this->DatentypZahl;
    }
    /**
     * Set DatentypZahl value
     * @param \THAG\XKfz\StructType\DatentypZahl $datentypZahl
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypZahl(?\THAG\XKfz\StructType\DatentypZahl $datentypZahl = null): self
    {
        $this->DatentypZahl = $datentypZahl;
        
        return $this;
    }
    /**
     * Get DatentypZeichenkette value
     * @return \THAG\XKfz\StructType\DatentypZeichenkette|null
     */
    public function getDatentypZeichenkette(): ?\THAG\XKfz\StructType\DatentypZeichenkette
    {
        return $this->DatentypZeichenkette;
    }
    /**
     * Set DatentypZeichenkette value
     * @param \THAG\XKfz\StructType\DatentypZeichenkette $datentypZeichenkette
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypZeichenkette(?\THAG\XKfz\StructType\DatentypZeichenkette $datentypZeichenkette = null): self
    {
        $this->DatentypZeichenkette = $datentypZeichenkette;
        
        return $this;
    }
    /**
     * Get DatentypUhrzeit value
     * @return \THAG\XKfz\StructType\DatentypUhrzeit|null
     */
    public function getDatentypUhrzeit(): ?\THAG\XKfz\StructType\DatentypUhrzeit
    {
        return $this->DatentypUhrzeit;
    }
    /**
     * Set DatentypUhrzeit value
     * @param \THAG\XKfz\StructType\DatentypUhrzeit $datentypUhrzeit
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypUhrzeit(?\THAG\XKfz\StructType\DatentypUhrzeit $datentypUhrzeit = null): self
    {
        $this->DatentypUhrzeit = $datentypUhrzeit;
        
        return $this;
    }
    /**
     * Get DatentypXml value
     * @return \THAG\XKfz\StructType\DatentypXml|null
     */
    public function getDatentypXml(): ?\THAG\XKfz\StructType\DatentypXml
    {
        return $this->DatentypXml;
    }
    /**
     * Set DatentypXml value
     * @param \THAG\XKfz\StructType\DatentypXml $datentypXml
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypXml(?\THAG\XKfz\StructType\DatentypXml $datentypXml = null): self
    {
        $this->DatentypXml = $datentypXml;
        
        return $this;
    }
    /**
     * Get DatentypFeldIndividualisierung value
     * @return \THAG\XKfz\StructType\DatentypFeldindividualisierung|null
     */
    public function getDatentypFeldIndividualisierung(): ?\THAG\XKfz\StructType\DatentypFeldindividualisierung
    {
        return $this->DatentypFeldIndividualisierung;
    }
    /**
     * Set DatentypFeldIndividualisierung value
     * @param \THAG\XKfz\StructType\DatentypFeldindividualisierung $datentypFeldIndividualisierung
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypFeldIndividualisierung(?\THAG\XKfz\StructType\DatentypFeldindividualisierung $datentypFeldIndividualisierung = null): self
    {
        $this->DatentypFeldIndividualisierung = $datentypFeldIndividualisierung;
        
        return $this;
    }
    /**
     * Get DatentypStruktur value
     * @return \THAG\XKfz\StructType\DatentypStruktur|null
     */
    public function getDatentypStruktur(): ?\THAG\XKfz\StructType\DatentypStruktur
    {
        return $this->DatentypStruktur;
    }
    /**
     * Set DatentypStruktur value
     * @param \THAG\XKfz\StructType\DatentypStruktur $datentypStruktur
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypStruktur(?\THAG\XKfz\StructType\DatentypStruktur $datentypStruktur = null): self
    {
        $this->DatentypStruktur = $datentypStruktur;
        
        return $this;
    }
    /**
     * Get DatentypIndizierteListe value
     * @return \THAG\XKfz\StructType\DatentypIndizierteListe|null
     */
    public function getDatentypIndizierteListe(): ?\THAG\XKfz\StructType\DatentypIndizierteListe
    {
        return $this->DatentypIndizierteListe;
    }
    /**
     * Set DatentypIndizierteListe value
     * @param \THAG\XKfz\StructType\DatentypIndizierteListe $datentypIndizierteListe
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypIndizierteListe(?\THAG\XKfz\StructType\DatentypIndizierteListe $datentypIndizierteListe = null): self
    {
        $this->DatentypIndizierteListe = $datentypIndizierteListe;
        
        return $this;
    }
    /**
     * Get DatentypCodeRelationListe value
     * @return \THAG\XKfz\StructType\DatentypCodeRelationListe|null
     */
    public function getDatentypCodeRelationListe(): ?\THAG\XKfz\StructType\DatentypCodeRelationListe
    {
        return $this->DatentypCodeRelationListe;
    }
    /**
     * Set DatentypCodeRelationListe value
     * @param \THAG\XKfz\StructType\DatentypCodeRelationListe $datentypCodeRelationListe
     * @return \THAG\XKfz\StructType\Datentyp
     */
    public function setDatentypCodeRelationListe(?\THAG\XKfz\StructType\DatentypCodeRelationListe $datentypCodeRelationListe = null): self
    {
        $this->DatentypCodeRelationListe = $datentypCodeRelationListe;
        
        return $this;
    }
}
