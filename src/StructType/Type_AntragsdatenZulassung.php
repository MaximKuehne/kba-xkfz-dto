<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AntragsdatenZulassung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AntragsdatenZulassung extends AbstractStructBase
{
    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The NummerZulBeschTeil2
     */
    public ?string $NummerZulBeschTeil2 = null;

    /**
     * The SicherheitscodeZB2
     */
    public ?string $SicherheitscodeZB2 = null;

    /**
     * The kennzeichenDaten
     */
    public ?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten = null;

    /**
     * The kennzeichenReservierungsnummerPIN
     */
    public ?string $kennzeichenReservierungsnummerPIN = null;

    /**
     * The nachweisHauptuntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung = null;

    /**
     * The merkmalBestellungFeinstaubplakette
     */
    public ?bool $merkmalBestellungFeinstaubplakette = null;

    /**
     * The VerwendungFahrzeug
     */
    public ?string $VerwendungFahrzeug = null;

    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The alternativeVersandadresse
     */
    public ?\THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse = null;

    /**
     * The sicherungsuebereignung
     */
    public ?\THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung = null;

    /**
     * The zusaetzlichesDokument
     */
    public ?\THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument = null;

    /**
     * Constructor method for Type.AntragsdatenZulassung
     *
     * @uses Type_AntragsdatenZulassung::setFahrzeugidentifizierungsnummer()
     * @uses Type_AntragsdatenZulassung::setNummerZulBeschTeil2()
     * @uses Type_AntragsdatenZulassung::setSicherheitscodeZB2()
     * @uses Type_AntragsdatenZulassung::setKennzeichenDaten()
     * @uses Type_AntragsdatenZulassung::setKennzeichenReservierungsnummerPIN()
     * @uses Type_AntragsdatenZulassung::setNachweisHauptuntersuchung()
     * @uses Type_AntragsdatenZulassung::setMerkmalBestellungFeinstaubplakette()
     * @uses Type_AntragsdatenZulassung::setVerwendungFahrzeug()
     * @uses Type_AntragsdatenZulassung::setVersicherungsbestaetigungsnummer()
     * @uses Type_AntragsdatenZulassung::setAlternativeVersandadresse()
     * @uses Type_AntragsdatenZulassung::setSicherungsuebereignung()
     * @uses Type_AntragsdatenZulassung::setZusaetzlichesDokument()
     */
    public function __construct(?string $fahrzeugidentifizierungsnummer = null, ?string $nummerZulBeschTeil2 = null, ?string $sicherheitscodeZB2 = null, ?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten = null, ?string $kennzeichenReservierungsnummerPIN = null, ?\THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung = null, ?bool $merkmalBestellungFeinstaubplakette = null, ?string $verwendungFahrzeug = null, ?string $versicherungsbestaetigungsnummer = null, ?\THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse = null, ?\THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung = null, ?\THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument = null)
    {
        $this
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setNummerZulBeschTeil2($nummerZulBeschTeil2)
            ->setSicherheitscodeZB2($sicherheitscodeZB2)
            ->setKennzeichenDaten($kennzeichenDaten)
            ->setKennzeichenReservierungsnummerPIN($kennzeichenReservierungsnummerPIN)
            ->setNachweisHauptuntersuchung($nachweisHauptuntersuchung)
            ->setMerkmalBestellungFeinstaubplakette($merkmalBestellungFeinstaubplakette)
            ->setVerwendungFahrzeug($verwendungFahrzeug)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setAlternativeVersandadresse($alternativeVersandadresse)
            ->setSicherungsuebereignung($sicherungsuebereignung)
            ->setZusaetzlichesDokument($zusaetzlichesDokument);
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
     * Get NummerZulBeschTeil2 value
     */
    public function getNummerZulBeschTeil2(): ?string
    {
        return $this->NummerZulBeschTeil2;
    }

    /**
     * Set NummerZulBeschTeil2 value
     */
    public function setNummerZulBeschTeil2(?string $nummerZulBeschTeil2 = null): self
    {
        $this->NummerZulBeschTeil2 = $nummerZulBeschTeil2;

        return $this;
    }

    /**
     * Get SicherheitscodeZB2 value
     */
    public function getSicherheitscodeZB2(): ?string
    {
        return $this->SicherheitscodeZB2;
    }

    /**
     * Set SicherheitscodeZB2 value
     */
    public function setSicherheitscodeZB2(?string $sicherheitscodeZB2 = null): self
    {
        $this->SicherheitscodeZB2 = $sicherheitscodeZB2;

        return $this;
    }

    /**
     * Get kennzeichenDaten value
     */
    public function getKennzeichenDaten(): ?\THAG\XKfz\StructType\Type_InhaltKennzeichen
    {
        return $this->kennzeichenDaten;
    }

    /**
     * Set kennzeichenDaten value
     */
    public function setKennzeichenDaten(?\THAG\XKfz\StructType\Type_InhaltKennzeichen $kennzeichenDaten = null): self
    {
        $this->kennzeichenDaten = $kennzeichenDaten;

        return $this;
    }

    /**
     * Get kennzeichenReservierungsnummerPIN value
     */
    public function getKennzeichenReservierungsnummerPIN(): ?string
    {
        return $this->kennzeichenReservierungsnummerPIN;
    }

    /**
     * Set kennzeichenReservierungsnummerPIN value
     */
    public function setKennzeichenReservierungsnummerPIN(?string $kennzeichenReservierungsnummerPIN = null): self
    {
        $this->kennzeichenReservierungsnummerPIN = $kennzeichenReservierungsnummerPIN;

        return $this;
    }

    /**
     * Get nachweisHauptuntersuchung value
     */
    public function getNachweisHauptuntersuchung(): ?\THAG\XKfz\StructType\Type_NachweisHU
    {
        return $this->nachweisHauptuntersuchung;
    }

    /**
     * Set nachweisHauptuntersuchung value
     */
    public function setNachweisHauptuntersuchung(?\THAG\XKfz\StructType\Type_NachweisHU $nachweisHauptuntersuchung = null): self
    {
        $this->nachweisHauptuntersuchung = $nachweisHauptuntersuchung;

        return $this;
    }

    /**
     * Get merkmalBestellungFeinstaubplakette value
     */
    public function getMerkmalBestellungFeinstaubplakette(): ?bool
    {
        return $this->merkmalBestellungFeinstaubplakette;
    }

    /**
     * Set merkmalBestellungFeinstaubplakette value
     */
    public function setMerkmalBestellungFeinstaubplakette(?bool $merkmalBestellungFeinstaubplakette = null): self
    {
        $this->merkmalBestellungFeinstaubplakette = $merkmalBestellungFeinstaubplakette;

        return $this;
    }

    /**
     * Get VerwendungFahrzeug value
     */
    public function getVerwendungFahrzeug(): ?string
    {
        return $this->VerwendungFahrzeug;
    }

    /**
     * Set VerwendungFahrzeug value
     */
    public function setVerwendungFahrzeug(?string $verwendungFahrzeug = null): self
    {
        $this->VerwendungFahrzeug = $verwendungFahrzeug;

        return $this;
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
     * Get alternativeVersandadresse value
     */
    public function getAlternativeVersandadresse(): ?\THAG\XKfz\StructType\Type_Versandadresse
    {
        return $this->alternativeVersandadresse;
    }

    /**
     * Set alternativeVersandadresse value
     */
    public function setAlternativeVersandadresse(?\THAG\XKfz\StructType\Type_Versandadresse $alternativeVersandadresse = null): self
    {
        $this->alternativeVersandadresse = $alternativeVersandadresse;

        return $this;
    }

    /**
     * Get sicherungsuebereignung value
     */
    public function getSicherungsuebereignung(): ?\THAG\XKfz\StructType\Type_Sicherungsuebereignung
    {
        return $this->sicherungsuebereignung;
    }

    /**
     * Set sicherungsuebereignung value
     */
    public function setSicherungsuebereignung(?\THAG\XKfz\StructType\Type_Sicherungsuebereignung $sicherungsuebereignung = null): self
    {
        $this->sicherungsuebereignung = $sicherungsuebereignung;

        return $this;
    }

    /**
     * Get zusaetzlichesDokument value
     */
    public function getZusaetzlichesDokument(): ?\THAG\XKfz\StructType\Type_Dokument
    {
        return $this->zusaetzlichesDokument;
    }

    /**
     * Set zusaetzlichesDokument value
     */
    public function setZusaetzlichesDokument(?\THAG\XKfz\StructType\Type_Dokument $zusaetzlichesDokument = null): self
    {
        $this->zusaetzlichesDokument = $zusaetzlichesDokument;

        return $this;
    }
}
