<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VbRechercheAntwortDetails StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class VbRechercheAntwortDetails extends AbstractStructBase
{
    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The VbStatus
     */
    public ?string $VbStatus = null;

    /**
     * The VbArt
     */
    public ?string $VbArt = null;

    /**
     * The VbAbrufbarBis
     */
    public ?string $VbAbrufbarBis = null;

    /**
     * The Zulassungsfahrten
     */
    public ?string $Zulassungsfahrten = null;

    /**
     * The Versicherung
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;

    /**
     * The Versicherungsnehmer
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;

    /**
     * The Fahrzeug
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The WeitereDatensaetzeVorhanden
     */
    public ?string $WeitereDatensaetzeVorhanden = null;

    /**
     * The ListeVbVerarbeitungshistorie
     */
    public ?\THAG\XKfz\StructType\ListeVbVerarbeitungshistorie $ListeVbVerarbeitungshistorie = null;

    /**
     * The UngebundenerVermittler
     */
    public ?\THAG\XKfz\StructType\UngebundenerVermittler $UngebundenerVermittler = null;

    /**
     * The Nutzerkennung
     */
    public ?string $Nutzerkennung = null;

    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

    /**
     * The VUInterneVermittlernummer
     */
    public ?string $VUInterneVermittlernummer = null;

    /**
     * The VbEinstelldatum
     */
    public ?string $VbEinstelldatum = null;

    /**
     * The Vorgangsnummer
     */
    public ?string $Vorgangsnummer = null;

    /**
     * Constructor method for VbRechercheAntwortDetails
     *
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
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get VbStatus value
     */
    public function getVbStatus(): ?string
    {
        return $this->VbStatus;
    }

    /**
     * Set VbStatus value
     */
    public function setVbStatus(?string $vbStatus = null): self
    {
        $this->VbStatus = $vbStatus;

        return $this;
    }

    /**
     * Get VbArt value
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }

    /**
     * Set VbArt value
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;

        return $this;
    }

    /**
     * Get VbAbrufbarBis value
     */
    public function getVbAbrufbarBis(): ?string
    {
        return $this->VbAbrufbarBis;
    }

    /**
     * Set VbAbrufbarBis value
     */
    public function setVbAbrufbarBis(?string $vbAbrufbarBis = null): self
    {
        $this->VbAbrufbarBis = $vbAbrufbarBis;

        return $this;
    }

    /**
     * Get Zulassungsfahrten value
     */
    public function getZulassungsfahrten(): ?string
    {
        return $this->Zulassungsfahrten;
    }

    /**
     * Set Zulassungsfahrten value
     */
    public function setZulassungsfahrten(?string $zulassungsfahrten = null): self
    {
        $this->Zulassungsfahrten = $zulassungsfahrten;

        return $this;
    }

    /**
     * Get Versicherung value
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }

    /**
     * Set Versicherung value
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;

        return $this;
    }

    /**
     * Get Versicherungsnehmer value
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }

    /**
     * Set Versicherungsnehmer value
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;

        return $this;
    }

    /**
     * Get Halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }

    /**
     * Set Halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;

        return $this;
    }

    /**
     * Get Fahrzeug value
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }

    /**
     * Set Fahrzeug value
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get WeitereDatensaetzeVorhanden value
     */
    public function getWeitereDatensaetzeVorhanden(): ?string
    {
        return $this->WeitereDatensaetzeVorhanden;
    }

    /**
     * Set WeitereDatensaetzeVorhanden value
     */
    public function setWeitereDatensaetzeVorhanden(?string $weitereDatensaetzeVorhanden = null): self
    {
        $this->WeitereDatensaetzeVorhanden = $weitereDatensaetzeVorhanden;

        return $this;
    }

    /**
     * Get ListeVbVerarbeitungshistorie value
     */
    public function getListeVbVerarbeitungshistorie(): ?\THAG\XKfz\StructType\ListeVbVerarbeitungshistorie
    {
        return $this->ListeVbVerarbeitungshistorie;
    }

    /**
     * Set ListeVbVerarbeitungshistorie value
     */
    public function setListeVbVerarbeitungshistorie(?\THAG\XKfz\StructType\ListeVbVerarbeitungshistorie $listeVbVerarbeitungshistorie = null): self
    {
        $this->ListeVbVerarbeitungshistorie = $listeVbVerarbeitungshistorie;

        return $this;
    }

    /**
     * Get UngebundenerVermittler value
     */
    public function getUngebundenerVermittler(): ?\THAG\XKfz\StructType\UngebundenerVermittler
    {
        return $this->UngebundenerVermittler;
    }

    /**
     * Set UngebundenerVermittler value
     */
    public function setUngebundenerVermittler(?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null): self
    {
        $this->UngebundenerVermittler = $ungebundenerVermittler;

        return $this;
    }

    /**
     * Get Nutzerkennung value
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }

    /**
     * Set Nutzerkennung value
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;

        return $this;
    }

    /**
     * Get GDVVermittlernummer value
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }

    /**
     * Set GDVVermittlernummer value
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;

        return $this;
    }

    /**
     * Get VUInterneVermittlernummer value
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }

    /**
     * Set VUInterneVermittlernummer value
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;

        return $this;
    }

    /**
     * Get VbEinstelldatum value
     */
    public function getVbEinstelldatum(): ?string
    {
        return $this->VbEinstelldatum;
    }

    /**
     * Set VbEinstelldatum value
     */
    public function setVbEinstelldatum(?string $vbEinstelldatum = null): self
    {
        $this->VbEinstelldatum = $vbEinstelldatum;

        return $this;
    }

    /**
     * Get Vorgangsnummer value
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * Set Vorgangsnummer value
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;

        return $this;
    }
}
