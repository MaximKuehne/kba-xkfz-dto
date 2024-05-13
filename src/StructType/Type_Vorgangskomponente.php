<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorgangskomponente StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorgangskomponente extends AbstractStructBase
{
    /**
     * The antragsbearbeitung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung $antragsbearbeitung = null;

    /**
     * The ausserbetriebsetzung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung $ausserbetriebsetzung = null;

    /**
     * The autonomesFahren
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren $autonomesFahren = null;

    /**
     * The bankverbindung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindung = null;

    /**
     * The bankverbindungNeu
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu $bankverbindungNeu = null;

    /**
     * The coc
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteCoC $coc = null;

    /**
     * The dokument
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null;

    /**
     * The fahrzeugverwendung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung $fahrzeugverwendung = null;

    /**
     * The feinstaubplakette
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette $feinstaubplakette = null;

    /**
     * The gebuehren
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehren = null;

    /**
     * The gutachten
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteGutachten $gutachten = null;

    /**
     * The hauptuntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung $hauptuntersuchung = null;

    /**
     * The identifikation
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikation = null;

    /**
     * The kennzeichen
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen $kennzeichen = null;

    /**
     * The kennzeichenSucheUndZuteilung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung $kennzeichenSucheUndZuteilung = null;

    /**
     * The lieferinformationen
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen $lieferinformationen = null;

    /**
     * The sicherungsuebereignung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung $sicherungsuebereignung = null;

    /**
     * The steuerdaten
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten $steuerdaten = null;

    /**
     * The versicherungsbestaetigung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung $versicherungsbestaetigung = null;

    /**
     * The verwertungsnachweis
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis $verwertungsnachweis = null;

    /**
     * The zahlung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlung = null;

    /**
     * The zulassungsbescheinigungTeilI
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI $zulassungsbescheinigungTeilI = null;

    /**
     * The zulassungsBescheinigungTeilII
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII $zulassungsBescheinigungTeilII = null;

    /**
     * The zulassungsentscheidung
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung $zulassungsentscheidung = null;

    /**
     * Constructor method for Type.Vorgangskomponente
     *
     * @uses Type_Vorgangskomponente::setAntragsbearbeitung()
     * @uses Type_Vorgangskomponente::setAusserbetriebsetzung()
     * @uses Type_Vorgangskomponente::setAutonomesFahren()
     * @uses Type_Vorgangskomponente::setBankverbindung()
     * @uses Type_Vorgangskomponente::setBankverbindungNeu()
     * @uses Type_Vorgangskomponente::setCoc()
     * @uses Type_Vorgangskomponente::setDokument()
     * @uses Type_Vorgangskomponente::setFahrzeugverwendung()
     * @uses Type_Vorgangskomponente::setFeinstaubplakette()
     * @uses Type_Vorgangskomponente::setGebuehren()
     * @uses Type_Vorgangskomponente::setGutachten()
     * @uses Type_Vorgangskomponente::setHauptuntersuchung()
     * @uses Type_Vorgangskomponente::setIdentifikation()
     * @uses Type_Vorgangskomponente::setKennzeichen()
     * @uses Type_Vorgangskomponente::setKennzeichenSucheUndZuteilung()
     * @uses Type_Vorgangskomponente::setLieferinformationen()
     * @uses Type_Vorgangskomponente::setSicherungsuebereignung()
     * @uses Type_Vorgangskomponente::setSteuerdaten()
     * @uses Type_Vorgangskomponente::setVersicherungsbestaetigung()
     * @uses Type_Vorgangskomponente::setVerwertungsnachweis()
     * @uses Type_Vorgangskomponente::setZahlung()
     * @uses Type_Vorgangskomponente::setZulassungsbescheinigungTeilI()
     * @uses Type_Vorgangskomponente::setZulassungsBescheinigungTeilII()
     * @uses Type_Vorgangskomponente::setZulassungsentscheidung()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung $antragsbearbeitung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung $ausserbetriebsetzung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren $autonomesFahren = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu $bankverbindungNeu = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteCoC $coc = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung $fahrzeugverwendung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette $feinstaubplakette = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehren = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteGutachten $gutachten = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung $hauptuntersuchung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikation = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung $kennzeichenSucheUndZuteilung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen $lieferinformationen = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung $sicherungsuebereignung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten $steuerdaten = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung $versicherungsbestaetigung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis $verwertungsnachweis = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlung = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI $zulassungsbescheinigungTeilI = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII $zulassungsBescheinigungTeilII = null, ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung $zulassungsentscheidung = null)
    {
        $this
            ->setAntragsbearbeitung($antragsbearbeitung)
            ->setAusserbetriebsetzung($ausserbetriebsetzung)
            ->setAutonomesFahren($autonomesFahren)
            ->setBankverbindung($bankverbindung)
            ->setBankverbindungNeu($bankverbindungNeu)
            ->setCoc($coc)
            ->setDokument($dokument)
            ->setFahrzeugverwendung($fahrzeugverwendung)
            ->setFeinstaubplakette($feinstaubplakette)
            ->setGebuehren($gebuehren)
            ->setGutachten($gutachten)
            ->setHauptuntersuchung($hauptuntersuchung)
            ->setIdentifikation($identifikation)
            ->setKennzeichen($kennzeichen)
            ->setKennzeichenSucheUndZuteilung($kennzeichenSucheUndZuteilung)
            ->setLieferinformationen($lieferinformationen)
            ->setSicherungsuebereignung($sicherungsuebereignung)
            ->setSteuerdaten($steuerdaten)
            ->setVersicherungsbestaetigung($versicherungsbestaetigung)
            ->setVerwertungsnachweis($verwertungsnachweis)
            ->setZahlung($zahlung)
            ->setZulassungsbescheinigungTeilI($zulassungsbescheinigungTeilI)
            ->setZulassungsBescheinigungTeilII($zulassungsBescheinigungTeilII)
            ->setZulassungsentscheidung($zulassungsentscheidung);
    }

    /**
     * Get antragsbearbeitung value
     */
    public function getAntragsbearbeitung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
    {
        return $this->antragsbearbeitung;
    }

    /**
     * Set antragsbearbeitung value
     */
    public function setAntragsbearbeitung(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung $antragsbearbeitung = null): self
    {
        $this->antragsbearbeitung = $antragsbearbeitung;

        return $this;
    }

    /**
     * Get ausserbetriebsetzung value
     */
    public function getAusserbetriebsetzung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
    {
        return $this->ausserbetriebsetzung;
    }

    /**
     * Set ausserbetriebsetzung value
     */
    public function setAusserbetriebsetzung(?\THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung $ausserbetriebsetzung = null): self
    {
        $this->ausserbetriebsetzung = $ausserbetriebsetzung;

        return $this;
    }

    /**
     * Get autonomesFahren value
     */
    public function getAutonomesFahren(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
    {
        return $this->autonomesFahren;
    }

    /**
     * Set autonomesFahren value
     */
    public function setAutonomesFahren(?\THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren $autonomesFahren = null): self
    {
        $this->autonomesFahren = $autonomesFahren;

        return $this;
    }

    /**
     * Get bankverbindung value
     */
    public function getBankverbindung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung
    {
        return $this->bankverbindung;
    }

    /**
     * Set bankverbindung value
     */
    public function setBankverbindung(?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindung = null): self
    {
        $this->bankverbindung = $bankverbindung;

        return $this;
    }

    /**
     * Get bankverbindungNeu value
     */
    public function getBankverbindungNeu(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu
    {
        return $this->bankverbindungNeu;
    }

    /**
     * Set bankverbindungNeu value
     */
    public function setBankverbindungNeu(?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu $bankverbindungNeu = null): self
    {
        $this->bankverbindungNeu = $bankverbindungNeu;

        return $this;
    }

    /**
     * Get coc value
     */
    public function getCoc(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteCoC
    {
        return $this->coc;
    }

    /**
     * Set coc value
     */
    public function setCoc(?\THAG\XKfz\StructType\Type_VorgangskomponenteCoC $coc = null): self
    {
        $this->coc = $coc;

        return $this;
    }

    /**
     * Get dokument value
     */
    public function getDokument(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->dokument;
    }

    /**
     * Set dokument value
     */
    public function setDokument(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null): self
    {
        $this->dokument = $dokument;

        return $this;
    }

    /**
     * Get fahrzeugverwendung value
     */
    public function getFahrzeugverwendung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung
    {
        return $this->fahrzeugverwendung;
    }

    /**
     * Set fahrzeugverwendung value
     */
    public function setFahrzeugverwendung(?\THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung $fahrzeugverwendung = null): self
    {
        $this->fahrzeugverwendung = $fahrzeugverwendung;

        return $this;
    }

    /**
     * Get feinstaubplakette value
     */
    public function getFeinstaubplakette(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette
    {
        return $this->feinstaubplakette;
    }

    /**
     * Set feinstaubplakette value
     */
    public function setFeinstaubplakette(?\THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette $feinstaubplakette = null): self
    {
        $this->feinstaubplakette = $feinstaubplakette;

        return $this;
    }

    /**
     * Get gebuehren value
     */
    public function getGebuehren(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
    {
        return $this->gebuehren;
    }

    /**
     * Set gebuehren value
     */
    public function setGebuehren(?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehren = null): self
    {
        $this->gebuehren = $gebuehren;

        return $this;
    }

    /**
     * Get gutachten value
     */
    public function getGutachten(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteGutachten
    {
        return $this->gutachten;
    }

    /**
     * Set gutachten value
     */
    public function setGutachten(?\THAG\XKfz\StructType\Type_VorgangskomponenteGutachten $gutachten = null): self
    {
        $this->gutachten = $gutachten;

        return $this;
    }

    /**
     * Get hauptuntersuchung value
     */
    public function getHauptuntersuchung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
    {
        return $this->hauptuntersuchung;
    }

    /**
     * Set hauptuntersuchung value
     */
    public function setHauptuntersuchung(?\THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung $hauptuntersuchung = null): self
    {
        $this->hauptuntersuchung = $hauptuntersuchung;

        return $this;
    }

    /**
     * Get identifikation value
     */
    public function getIdentifikation(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
    {
        return $this->identifikation;
    }

    /**
     * Set identifikation value
     */
    public function setIdentifikation(?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikation = null): self
    {
        $this->identifikation = $identifikation;

        return $this;
    }

    /**
     * Get kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen
    {
        return $this->kennzeichen;
    }

    /**
     * Set kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get kennzeichenSucheUndZuteilung value
     */
    public function getKennzeichenSucheUndZuteilung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung
    {
        return $this->kennzeichenSucheUndZuteilung;
    }

    /**
     * Set kennzeichenSucheUndZuteilung value
     */
    public function setKennzeichenSucheUndZuteilung(?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung $kennzeichenSucheUndZuteilung = null): self
    {
        $this->kennzeichenSucheUndZuteilung = $kennzeichenSucheUndZuteilung;

        return $this;
    }

    /**
     * Get lieferinformationen value
     */
    public function getLieferinformationen(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen
    {
        return $this->lieferinformationen;
    }

    /**
     * Set lieferinformationen value
     */
    public function setLieferinformationen(?\THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen $lieferinformationen = null): self
    {
        $this->lieferinformationen = $lieferinformationen;

        return $this;
    }

    /**
     * Get sicherungsuebereignung value
     */
    public function getSicherungsuebereignung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung
    {
        return $this->sicherungsuebereignung;
    }

    /**
     * Set sicherungsuebereignung value
     */
    public function setSicherungsuebereignung(?\THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung $sicherungsuebereignung = null): self
    {
        $this->sicherungsuebereignung = $sicherungsuebereignung;

        return $this;
    }

    /**
     * Get steuerdaten value
     */
    public function getSteuerdaten(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
    {
        return $this->steuerdaten;
    }

    /**
     * Set steuerdaten value
     */
    public function setSteuerdaten(?\THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten $steuerdaten = null): self
    {
        $this->steuerdaten = $steuerdaten;

        return $this;
    }

    /**
     * Get versicherungsbestaetigung value
     */
    public function getVersicherungsbestaetigung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung
    {
        return $this->versicherungsbestaetigung;
    }

    /**
     * Set versicherungsbestaetigung value
     */
    public function setVersicherungsbestaetigung(?\THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung $versicherungsbestaetigung = null): self
    {
        $this->versicherungsbestaetigung = $versicherungsbestaetigung;

        return $this;
    }

    /**
     * Get verwertungsnachweis value
     */
    public function getVerwertungsnachweis(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis
    {
        return $this->verwertungsnachweis;
    }

    /**
     * Set verwertungsnachweis value
     */
    public function setVerwertungsnachweis(?\THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis $verwertungsnachweis = null): self
    {
        $this->verwertungsnachweis = $verwertungsnachweis;

        return $this;
    }

    /**
     * Get zahlung value
     */
    public function getZahlung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung
    {
        return $this->zahlung;
    }

    /**
     * Set zahlung value
     */
    public function setZahlung(?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlung = null): self
    {
        $this->zahlung = $zahlung;

        return $this;
    }

    /**
     * Get zulassungsbescheinigungTeilI value
     */
    public function getZulassungsbescheinigungTeilI(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
    {
        return $this->zulassungsbescheinigungTeilI;
    }

    /**
     * Set zulassungsbescheinigungTeilI value
     */
    public function setZulassungsbescheinigungTeilI(?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI $zulassungsbescheinigungTeilI = null): self
    {
        $this->zulassungsbescheinigungTeilI = $zulassungsbescheinigungTeilI;

        return $this;
    }

    /**
     * Get zulassungsBescheinigungTeilII value
     */
    public function getZulassungsBescheinigungTeilII(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
    {
        return $this->zulassungsBescheinigungTeilII;
    }

    /**
     * Set zulassungsBescheinigungTeilII value
     */
    public function setZulassungsBescheinigungTeilII(?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII $zulassungsBescheinigungTeilII = null): self
    {
        $this->zulassungsBescheinigungTeilII = $zulassungsBescheinigungTeilII;

        return $this;
    }

    /**
     * Get zulassungsentscheidung value
     */
    public function getZulassungsentscheidung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung
    {
        return $this->zulassungsentscheidung;
    }

    /**
     * Set zulassungsentscheidung value
     */
    public function setZulassungsentscheidung(?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung $zulassungsentscheidung = null): self
    {
        $this->zulassungsentscheidung = $zulassungsentscheidung;

        return $this;
    }
}
