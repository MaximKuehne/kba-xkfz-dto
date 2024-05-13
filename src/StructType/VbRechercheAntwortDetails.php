<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAntwortDetails StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAntwortDetails extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The VbStatus
     * @var string|null
     */
    public ?string $VbStatus = null;
    /**
     * The VbArt
     * @var string|null
     */
    public ?string $VbArt = null;
    /**
     * The VbAbrufbarBis
     * @var string|null
     */
    public ?string $VbAbrufbarBis = null;
    /**
     * The Zulassungsfahrten
     * @var string|null
     */
    public ?string $Zulassungsfahrten = null;
    /**
     * The Versicherung
     * @var \THAG\XKfz\StructType\Versicherung|null
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;
    /**
     * The Versicherungsnehmer
     * @var \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\Halter|null
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;
    /**
     * The Fahrzeug
     * @var \THAG\XKfz\StructType\Fahrzeug|null
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The WeitereDatensaetzeVorhanden
     * @var string|null
     */
    public ?string $WeitereDatensaetzeVorhanden = null;
    /**
     * The ListeVbVerarbeitungshistorie
     * @var \THAG\XKfz\StructType\ListeVbVerarbeitungshistorie|null
     */
    public ?\THAG\XKfz\StructType\ListeVbVerarbeitungshistorie $ListeVbVerarbeitungshistorie = null;
    /**
     * The UngebundenerVermittler
     * @var \THAG\XKfz\StructType\UngebundenerVermittler|null
     */
    public ?\THAG\XKfz\StructType\UngebundenerVermittler $UngebundenerVermittler = null;
    /**
     * The Nutzerkennung
     * @var string|null
     */
    public ?string $Nutzerkennung = null;
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
    /**
     * The VUInterneVermittlernummer
     * @var string|null
     */
    public ?string $VUInterneVermittlernummer = null;
    /**
     * The VbEinstelldatum
     * @var string|null
     */
    public ?string $VbEinstelldatum = null;
    /**
     * The Vorgangsnummer
     * @var string|null
     */
    public ?string $Vorgangsnummer = null;
    /**
     * Constructor method for VbRechercheAntwortDetails
     * @uses VbRechercheAntwortDetails::setVersicherungsbestaetigungsnummer()
     * @uses VbRechercheAntwortDetails::setVbStatus()
     * @uses VbRechercheAntwortDetails::setVbArt()
     * @uses VbRechercheAntwortDetails::setVbAbrufbarBis()
     * @uses VbRechercheAntwortDetails::setZulassungsfahrten()
     * @uses VbRechercheAntwortDetails::setVersicherung()
     * @uses VbRechercheAntwortDetails::setVersicherungsnehmer()
     * @uses VbRechercheAntwortDetails::setHalter()
     * @uses VbRechercheAntwortDetails::setFahrzeug()
     * @uses VbRechercheAntwortDetails::setKennzeichen()
     * @uses VbRechercheAntwortDetails::setWeitereDatensaetzeVorhanden()
     * @uses VbRechercheAntwortDetails::setListeVbVerarbeitungshistorie()
     * @uses VbRechercheAntwortDetails::setUngebundenerVermittler()
     * @uses VbRechercheAntwortDetails::setNutzerkennung()
     * @uses VbRechercheAntwortDetails::setGDVVermittlernummer()
     * @uses VbRechercheAntwortDetails::setVUInterneVermittlernummer()
     * @uses VbRechercheAntwortDetails::setVbEinstelldatum()
     * @uses VbRechercheAntwortDetails::setVorgangsnummer()
     * @param string $versicherungsbestaetigungsnummer
     * @param string $vbStatus
     * @param string $vbArt
     * @param string $vbAbrufbarBis
     * @param string $zulassungsfahrten
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @param \THAG\XKfz\StructType\Halter $halter
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param string $weitereDatensaetzeVorhanden
     * @param \THAG\XKfz\StructType\ListeVbVerarbeitungshistorie $listeVbVerarbeitungshistorie
     * @param \THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler
     * @param string $nutzerkennung
     * @param string $gDVVermittlernummer
     * @param string $vUInterneVermittlernummer
     * @param string $vbEinstelldatum
     * @param string $vorgangsnummer
     */
    public function __construct(?string $versicherungsbestaetigungsnummer = null, ?string $vbStatus = null, ?string $vbArt = null, ?string $vbAbrufbarBis = null, ?string $zulassungsfahrten = null, ?\THAG\XKfz\StructType\Versicherung $versicherung = null, ?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null, ?\THAG\XKfz\StructType\Halter $halter = null, ?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?string $weitereDatensaetzeVorhanden = null, ?\THAG\XKfz\StructType\ListeVbVerarbeitungshistorie $listeVbVerarbeitungshistorie = null, ?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null, ?string $nutzerkennung = null, ?string $gDVVermittlernummer = null, ?string $vUInterneVermittlernummer = null, ?string $vbEinstelldatum = null, ?string $vorgangsnummer = null)
    {
        $this
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbStatus($vbStatus)
            ->setVbArt($vbArt)
            ->setVbAbrufbarBis($vbAbrufbarBis)
            ->setZulassungsfahrten($zulassungsfahrten)
            ->setVersicherung($versicherung)
            ->setVersicherungsnehmer($versicherungsnehmer)
            ->setHalter($halter)
            ->setFahrzeug($fahrzeug)
            ->setKennzeichen($kennzeichen)
            ->setWeitereDatensaetzeVorhanden($weitereDatensaetzeVorhanden)
            ->setListeVbVerarbeitungshistorie($listeVbVerarbeitungshistorie)
            ->setUngebundenerVermittler($ungebundenerVermittler)
            ->setNutzerkennung($nutzerkennung)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setVUInterneVermittlernummer($vUInterneVermittlernummer)
            ->setVbEinstelldatum($vbEinstelldatum)
            ->setVorgangsnummer($vorgangsnummer);
    }
    /**
     * Get Versicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }
    /**
     * Set Versicherungsbestaetigungsnummer value
     * @param string $versicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get VbStatus value
     * @return string|null
     */
    public function getVbStatus(): ?string
    {
        return $this->VbStatus;
    }
    /**
     * Set VbStatus value
     * @param string $vbStatus
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVbStatus(?string $vbStatus = null): self
    {
        $this->VbStatus = $vbStatus;
        
        return $this;
    }
    /**
     * Get VbArt value
     * @return string|null
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }
    /**
     * Set VbArt value
     * @param string $vbArt
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;
        
        return $this;
    }
    /**
     * Get VbAbrufbarBis value
     * @return string|null
     */
    public function getVbAbrufbarBis(): ?string
    {
        return $this->VbAbrufbarBis;
    }
    /**
     * Set VbAbrufbarBis value
     * @param string $vbAbrufbarBis
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVbAbrufbarBis(?string $vbAbrufbarBis = null): self
    {
        $this->VbAbrufbarBis = $vbAbrufbarBis;
        
        return $this;
    }
    /**
     * Get Zulassungsfahrten value
     * @return string|null
     */
    public function getZulassungsfahrten(): ?string
    {
        return $this->Zulassungsfahrten;
    }
    /**
     * Set Zulassungsfahrten value
     * @param string $zulassungsfahrten
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setZulassungsfahrten(?string $zulassungsfahrten = null): self
    {
        $this->Zulassungsfahrten = $zulassungsfahrten;
        
        return $this;
    }
    /**
     * Get Versicherung value
     * @return \THAG\XKfz\StructType\Versicherung|null
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }
    /**
     * Set Versicherung value
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;
        
        return $this;
    }
    /**
     * Get Versicherungsnehmer value
     * @return \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }
    /**
     * Set Versicherungsnehmer value
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;
        
        return $this;
    }
    /**
     * Get Halter value
     * @return \THAG\XKfz\StructType\Halter|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }
    /**
     * Set Halter value
     * @param \THAG\XKfz\StructType\Halter $halter
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get Fahrzeug value
     * @return \THAG\XKfz\StructType\Fahrzeug|null
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }
    /**
     * Set Fahrzeug value
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get WeitereDatensaetzeVorhanden value
     * @return string|null
     */
    public function getWeitereDatensaetzeVorhanden(): ?string
    {
        return $this->WeitereDatensaetzeVorhanden;
    }
    /**
     * Set WeitereDatensaetzeVorhanden value
     * @param string $weitereDatensaetzeVorhanden
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setWeitereDatensaetzeVorhanden(?string $weitereDatensaetzeVorhanden = null): self
    {
        $this->WeitereDatensaetzeVorhanden = $weitereDatensaetzeVorhanden;
        
        return $this;
    }
    /**
     * Get ListeVbVerarbeitungshistorie value
     * @return \THAG\XKfz\StructType\ListeVbVerarbeitungshistorie|null
     */
    public function getListeVbVerarbeitungshistorie(): ?\THAG\XKfz\StructType\ListeVbVerarbeitungshistorie
    {
        return $this->ListeVbVerarbeitungshistorie;
    }
    /**
     * Set ListeVbVerarbeitungshistorie value
     * @param \THAG\XKfz\StructType\ListeVbVerarbeitungshistorie $listeVbVerarbeitungshistorie
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setListeVbVerarbeitungshistorie(?\THAG\XKfz\StructType\ListeVbVerarbeitungshistorie $listeVbVerarbeitungshistorie = null): self
    {
        $this->ListeVbVerarbeitungshistorie = $listeVbVerarbeitungshistorie;
        
        return $this;
    }
    /**
     * Get UngebundenerVermittler value
     * @return \THAG\XKfz\StructType\UngebundenerVermittler|null
     */
    public function getUngebundenerVermittler(): ?\THAG\XKfz\StructType\UngebundenerVermittler
    {
        return $this->UngebundenerVermittler;
    }
    /**
     * Set UngebundenerVermittler value
     * @param \THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setUngebundenerVermittler(?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null): self
    {
        $this->UngebundenerVermittler = $ungebundenerVermittler;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;
        
        return $this;
    }
    /**
     * Get GDVVermittlernummer value
     * @return string|null
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }
    /**
     * Set GDVVermittlernummer value
     * @param string $gDVVermittlernummer
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
        return $this;
    }
    /**
     * Get VUInterneVermittlernummer value
     * @return string|null
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }
    /**
     * Set VUInterneVermittlernummer value
     * @param string $vUInterneVermittlernummer
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;
        
        return $this;
    }
    /**
     * Get VbEinstelldatum value
     * @return string|null
     */
    public function getVbEinstelldatum(): ?string
    {
        return $this->VbEinstelldatum;
    }
    /**
     * Set VbEinstelldatum value
     * @param string $vbEinstelldatum
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVbEinstelldatum(?string $vbEinstelldatum = null): self
    {
        $this->VbEinstelldatum = $vbEinstelldatum;
        
        return $this;
    }
    /**
     * Get Vorgangsnummer value
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }
    /**
     * Set Vorgangsnummer value
     * @param string $vorgangsnummer
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;
        
        return $this;
    }
}
