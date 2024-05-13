<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AntragsdatenAenderung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AntragsdatenAenderung extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The SicherheitscodeZB1
     * @var string|null
     */
    public ?string $SicherheitscodeZB1 = null;
    /**
     * The NummerZulBeschTeil2
     * @var string|null
     */
    public ?string $NummerZulBeschTeil2 = null;
    /**
     * The SicherheitscodeZB2
     * @var string|null
     */
    public ?string $SicherheitscodeZB2 = null;
    /**
     * The sicherheitscodesKennzeichen
     * @var \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null;
    /**
     * The sicherheitscodesWechselkennzeichen
     * @var \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null;
    /**
     * The kennzeichenDaten
     * @var \THAG\XKfz\StructType\Type_InhaltKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten = null;
    /**
     * The kennzeichenReservierungsnummerPIN
     * @var string|null
     */
    public ?string $kennzeichenReservierungsnummerPIN = null;
    /**
     * The nachweisHauptuntersuchung
     * @var \THAG\XKfz\StructType\Type_NachweisHU|null
     */
    public ?\THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung = null;
    /**
     * The nachweisSicherheitspruefung
     * @var \THAG\XKfz\StructType\Type_NachweisSP|null
     */
    public ?\THAG\XKfz\StructType\Type_NachweisSP $nachweisSicherheitspruefung = null;
    /**
     * The merkmalBestellungFeinstaubplakette
     * @var bool|null
     */
    public ?bool $merkmalBestellungFeinstaubplakette = null;
    /**
     * The VerwendungFahrzeug
     * @var string|null
     */
    public ?string $VerwendungFahrzeug = null;
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The alternativeVersandadresse
     * @var \THAG\XKfz\StructType\Type_Versandadresse|null
     */
    public ?\THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse = null;
    /**
     * The sicherungsuebereignung
     * @var \THAG\XKfz\StructType\Type_Sicherungsuebereignung|null
     */
    public ?\THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung = null;
    /**
     * The zusaetzlichesDokument
     * @var \THAG\XKfz\StructType\Type_Dokument|null
     */
    public ?\THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument = null;
    /**
     * Constructor method for Type.AntragsdatenAenderung
     * @uses Type_AntragsdatenAenderung::setFahrzeugidentifizierungsnummer()
     * @uses Type_AntragsdatenAenderung::setSicherheitscodeZB1()
     * @uses Type_AntragsdatenAenderung::setNummerZulBeschTeil2()
     * @uses Type_AntragsdatenAenderung::setSicherheitscodeZB2()
     * @uses Type_AntragsdatenAenderung::setSicherheitscodesKennzeichen()
     * @uses Type_AntragsdatenAenderung::setSicherheitscodesWechselkennzeichen()
     * @uses Type_AntragsdatenAenderung::setKennzeichenDaten()
     * @uses Type_AntragsdatenAenderung::setKennzeichenReservierungsnummerPIN()
     * @uses Type_AntragsdatenAenderung::setNachweisHauptuntersuchung()
     * @uses Type_AntragsdatenAenderung::setNachweisSicherheitspruefung()
     * @uses Type_AntragsdatenAenderung::setMerkmalBestellungFeinstaubplakette()
     * @uses Type_AntragsdatenAenderung::setVerwendungFahrzeug()
     * @uses Type_AntragsdatenAenderung::setVersicherungsbestaetigungsnummer()
     * @uses Type_AntragsdatenAenderung::setAlternativeVersandadresse()
     * @uses Type_AntragsdatenAenderung::setSicherungsuebereignung()
     * @uses Type_AntragsdatenAenderung::setZusaetzlichesDokument()
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $sicherheitscodeZB1
     * @param string $nummerZulBeschTeil2
     * @param string $sicherheitscodeZB2
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen
     * @param \THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten
     * @param string $kennzeichenReservierungsnummerPIN
     * @param \THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung
     * @param \THAG\XKfz\StructType\Type_NachweisSP $nachweisSicherheitspruefung
     * @param bool $merkmalBestellungFeinstaubplakette
     * @param string $verwendungFahrzeug
     * @param string $versicherungsbestaetigungsnummer
     * @param \THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse
     * @param \THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung
     * @param \THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $sicherheitscodeZB1 = null, ?string $nummerZulBeschTeil2 = null, ?string $sicherheitscodeZB2 = null, ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null, ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null, ?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten = null, ?string $kennzeichenReservierungsnummerPIN = null, ?\THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung = null, ?\THAG\XKfz\StructType\Type_NachweisSP $nachweisSicherheitspruefung = null, ?bool $merkmalBestellungFeinstaubplakette = null, ?string $verwendungFahrzeug = null, ?string $versicherungsbestaetigungsnummer = null, ?\THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse = null, ?\THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung = null, ?\THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setSicherheitscodeZB1($sicherheitscodeZB1)
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setSicherheitscodeZB2($sicherheitscodeZB2)
            ->setSicherheitscodesKennzeichen($sicherheitscodesKennzeichen)
            ->setSicherheitscodesWechselkennzeichen($sicherheitscodesWechselkennzeichen)
            ->setKennzeichenDaten($kennzeichenDaten)
            ->setKennzeichenReservierungsnummerPIN($kennzeichenReservierungsnummerPIN)
            ->setNachweisHauptuntersuchung($nachweisHauptuntersuchung)
            ->setNachweisSicherheitspruefung($nachweisSicherheitspruefung)
            ->setMerkmalBestellungFeinstaubplakette($merkmalBestellungFeinstaubplakette)
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setAlternativeVersandadresse($alternativeVersandadresse)
            ->setSicherungsuebereignung($sicherungsuebereignung)
            ->setZusaetzlichesDokument($zusaetzlichesDokument);
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
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get SicherheitscodeZB1 value
     * @return string|null
     */
    public function getSicherheitscodeZB1(): ?string
    {
        return $this->SicherheitscodeZB1;
    }
    /**
     * Set SicherheitscodeZB1 value
     * @param string $sicherheitscodeZB1
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setSicherheitscodeZB1(?string $sicherheitscodeZB1 = null): self
    {
        $this->SicherheitscodeZB1 = $sicherheitscodeZB1;
        
        return $this;
    }
    /**
     * Get NummerZulBeschTeil2 value
     * @return string|null
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }
    /**
     * Set NummerZulBeschTeil2 value
     * @param string $nummerZulBeschTeil2
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;
        
        return $this;
    }
    /**
     * Get SicherheitscodeZB2 value
     * @return string|null
     */
    public function getSicherheitscodeZB2(): ?string
    {
        return $this->SicherheitscodeZB2;
    }
    /**
     * Set SicherheitscodeZB2 value
     * @param string $sicherheitscodeZB2
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setSicherheitscodeZB2(?string $sicherheitscodeZB2 = null): self
    {
        $this->SicherheitscodeZB2 = $sicherheitscodeZB2;
        
        return $this;
    }
    /**
     * Get sicherheitscodesKennzeichen value
     * @return \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen|null
     */
    public function getSicherheitscodesKennzeichen(): ?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen
    {
        return $this->sicherheitscodesKennzeichen;
    }
    /**
     * Set sicherheitscodesKennzeichen value
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setSicherheitscodesKennzeichen(?\THAG\XKfz\StructType\Type_SicherheitscodesKennzeichen $sicherheitscodesKennzeichen = null): self
    {
        $this->sicherheitscodesKennzeichen = $sicherheitscodesKennzeichen;
        
        return $this;
    }
    /**
     * Get sicherheitscodesWechselkennzeichen value
     * @return \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen|null
     */
    public function getSicherheitscodesWechselkennzeichen(): ?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen
    {
        return $this->sicherheitscodesWechselkennzeichen;
    }
    /**
     * Set sicherheitscodesWechselkennzeichen value
     * @param \THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setSicherheitscodesWechselkennzeichen(?\THAG\XKfz\StructType\Type_SicherheitscodesWechselkennzeichen $sicherheitscodesWechselkennzeichen = null): self
    {
        $this->sicherheitscodesWechselkennzeichen = $sicherheitscodesWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get kennzeichenDaten value
     * @return \THAG\XKfz\StructType\Type_InhaltKennzeichen|null
     */
    public function getKennzeichenDaten(): ?\THAG\XKfz\StructType\Type_InhaltKennzeichen
    {
        return $this->kennzeichenDaten;
    }
    /**
     * Set kennzeichenDaten value
     * @param \THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setKennzeichenDaten(?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten = null): self
    {
        $this->kennzeichenDaten = $kennzeichenDaten;
        
        return $this;
    }
    /**
     * Get kennzeichenReservierungsnummerPIN value
     * @return string|null
     */
    public function getKennzeichenReservierungsnummerPIN(): ?string
    {
        return $this->kennzeichenReservierungsnummerPIN;
    }
    /**
     * Set kennzeichenReservierungsnummerPIN value
     * @param string $kennzeichenReservierungsnummerPIN
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setKennzeichenReservierungsnummerPIN(?string $kennzeichenReservierungsnummerPIN = null): self
    {
        $this->kennzeichenReservierungsnummerPIN = $kennzeichenReservierungsnummerPIN;
        
        return $this;
    }
    /**
     * Get nachweisHauptuntersuchung value
     * @return \THAG\XKfz\StructType\Type_NachweisHU|null
     */
    public function getNachweisHauptuntersuchung(): ?\THAG\XKfz\StructType\Type_NachweisHU
    {
        return $this->nachweisHauptuntersuchung;
    }
    /**
     * Set nachweisHauptuntersuchung value
     * @param \THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setNachweisHauptuntersuchung(?\THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung = null): self
    {
        $this->nachweisHauptuntersuchung = $nachweisHauptuntersuchung;
        
        return $this;
    }
    /**
     * Get nachweisSicherheitspruefung value
     * @return \THAG\XKfz\StructType\Type_NachweisSP|null
     */
    public function getNachweisSicherheitspruefung(): ?\THAG\XKfz\StructType\Type_NachweisSP
    {
        return $this->nachweisSicherheitspruefung;
    }
    /**
     * Set nachweisSicherheitspruefung value
     * @param \THAG\XKfz\StructType\Type_NachweisSP $nachweisSicherheitspruefung
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setNachweisSicherheitspruefung(?\THAG\XKfz\StructType\Type_NachweisSP $nachweisSicherheitspruefung = null): self
    {
        $this->nachweisSicherheitspruefung = $nachweisSicherheitspruefung;
        
        return $this;
    }
    /**
     * Get merkmalBestellungFeinstaubplakette value
     * @return bool|null
     */
    public function getMerkmalBestellungFeinstaubplakette(): ?bool
    {
        return $this->merkmalBestellungFeinstaubplakette;
    }
    /**
     * Set merkmalBestellungFeinstaubplakette value
     * @param bool $merkmalBestellungFeinstaubplakette
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setMerkmalBestellungFeinstaubplakette(?bool $merkmalBestellungFeinstaubplakette = null): self
    {
        $this->merkmalBestellungFeinstaubplakette = $merkmalBestellungFeinstaubplakette;
        
        return $this;
    }
    /**
     * Get VerwendungFahrzeug value
     * @return string|null
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }
    /**
     * Set VerwendungFahrzeug value
     * @param string $verwendungFahrzeug
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get alternativeVersandadresse value
     * @return \THAG\XKfz\StructType\Type_Versandadresse|null
     */
    public function getAlternativeVersandadresse(): ?\THAG\XKfz\StructType\Type_Versandadresse
    {
        return $this->alternativeVersandadresse;
    }
    /**
     * Set alternativeVersandadresse value
     * @param \THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setAlternativeVersandadresse(?\THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse = null): self
    {
        $this->alternativeVersandadresse = $alternativeVersandadresse;
        
        return $this;
    }
    /**
     * Get sicherungsuebereignung value
     * @return \THAG\XKfz\StructType\Type_Sicherungsuebereignung|null
     */
    public function getSicherungsuebereignung(): ?\THAG\XKfz\StructType\Type_Sicherungsuebereignung
    {
        return $this->sicherungsuebereignung;
    }
    /**
     * Set sicherungsuebereignung value
     * @param \THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setSicherungsuebereignung(?\THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung = null): self
    {
        $this->sicherungsuebereignung = $sicherungsuebereignung;
        
        return $this;
    }
    /**
     * Get zusaetzlichesDokument value
     * @return \THAG\XKfz\StructType\Type_Dokument|null
     */
    public function getZusaetzlichesDokument(): ?\THAG\XKfz\StructType\Type_Dokument
    {
        return $this->zusaetzlichesDokument;
    }
    /**
     * Set zusaetzlichesDokument value
     * @param \THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung
     */
    public function setZusaetzlichesDokument(?\THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument = null): self
    {
        $this->zusaetzlichesDokument = $zusaetzlichesDokument;
        
        return $this;
    }
}
