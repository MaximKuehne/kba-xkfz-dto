<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorgangskomponente StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorgangskomponente extends AbstractStructBase
{
    /**
     * The antragsbearbeitung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung $antragsbearbeitung = null;
    /**
     * The ausserbetriebsetzung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung $ausserbetriebsetzung = null;
    /**
     * The autonomesFahren
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren $autonomesFahren = null;
    /**
     * The bankverbindung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindung = null;
    /**
     * The bankverbindungNeu
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu $bankverbindungNeu = null;
    /**
     * The coc
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteCoC|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteCoC $coc = null;
    /**
     * The dokument
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null;
    /**
     * The fahrzeugverwendung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung $fahrzeugverwendung = null;
    /**
     * The feinstaubplakette
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette $feinstaubplakette = null;
    /**
     * The gebuehren
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehren = null;
    /**
     * The gutachten
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteGutachten|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteGutachten $gutachten = null;
    /**
     * The hauptuntersuchung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung $hauptuntersuchung = null;
    /**
     * The identifikation
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikation = null;
    /**
     * The kennzeichen
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen $kennzeichen = null;
    /**
     * The kennzeichenSucheUndZuteilung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung $kennzeichenSucheUndZuteilung = null;
    /**
     * The lieferinformationen
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen $lieferinformationen = null;
    /**
     * The sicherungsuebereignung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung $sicherungsuebereignung = null;
    /**
     * The steuerdaten
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten $steuerdaten = null;
    /**
     * The versicherungsbestaetigung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung $versicherungsbestaetigung = null;
    /**
     * The verwertungsnachweis
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis $verwertungsnachweis = null;
    /**
     * The zahlung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteZahlung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlung = null;
    /**
     * The zulassungsbescheinigungTeilI
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI $zulassungsbescheinigungTeilI = null;
    /**
     * The zulassungsBescheinigungTeilII
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII $zulassungsBescheinigungTeilII = null;
    /**
     * The zulassungsentscheidung
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung $zulassungsentscheidung = null;
    /**
     * Constructor method for Type.Vorgangskomponente
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
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung $antragsbearbeitung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung $ausserbetriebsetzung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren $autonomesFahren
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu $bankverbindungNeu
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteCoC $coc
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung $fahrzeugverwendung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette $feinstaubplakette
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehren
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteGutachten $gutachten
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung $hauptuntersuchung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikation
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen $kennzeichen
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung $kennzeichenSucheUndZuteilung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen $lieferinformationen
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung $sicherungsuebereignung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten $steuerdaten
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung $versicherungsbestaetigung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis $verwertungsnachweis
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlung
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI $zulassungsbescheinigungTeilI
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII $zulassungsBescheinigungTeilII
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung $zulassungsentscheidung
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
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung|null
     */
    public function getAntragsbearbeitung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
    {
        return $this->antragsbearbeitung;
    }
    /**
     * Set antragsbearbeitung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung $antragsbearbeitung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setAntragsbearbeitung(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung $antragsbearbeitung = null): self
    {
        $this->antragsbearbeitung = $antragsbearbeitung;
        
        return $this;
    }
    /**
     * Get ausserbetriebsetzung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung|null
     */
    public function getAusserbetriebsetzung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung
    {
        return $this->ausserbetriebsetzung;
    }
    /**
     * Set ausserbetriebsetzung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung $ausserbetriebsetzung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setAusserbetriebsetzung(?\THAG\XKfz\StructType\Type_VorgangskomponenteAusserbetriebsetzung $ausserbetriebsetzung = null): self
    {
        $this->ausserbetriebsetzung = $ausserbetriebsetzung;
        
        return $this;
    }
    /**
     * Get autonomesFahren value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren|null
     */
    public function getAutonomesFahren(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
    {
        return $this->autonomesFahren;
    }
    /**
     * Set autonomesFahren value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren $autonomesFahren
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setAutonomesFahren(?\THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren $autonomesFahren = null): self
    {
        $this->autonomesFahren = $autonomesFahren;
        
        return $this;
    }
    /**
     * Get bankverbindung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung|null
     */
    public function getBankverbindung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung
    {
        return $this->bankverbindung;
    }
    /**
     * Set bankverbindung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setBankverbindung(?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindung $bankverbindung = null): self
    {
        $this->bankverbindung = $bankverbindung;
        
        return $this;
    }
    /**
     * Get bankverbindungNeu value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu|null
     */
    public function getBankverbindungNeu(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu
    {
        return $this->bankverbindungNeu;
    }
    /**
     * Set bankverbindungNeu value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu $bankverbindungNeu
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setBankverbindungNeu(?\THAG\XKfz\StructType\Type_VorgangskomponenteBankverbindungNeu $bankverbindungNeu = null): self
    {
        $this->bankverbindungNeu = $bankverbindungNeu;
        
        return $this;
    }
    /**
     * Get coc value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteCoC|null
     */
    public function getCoc(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteCoC
    {
        return $this->coc;
    }
    /**
     * Set coc value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteCoC $coc
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setCoc(?\THAG\XKfz\StructType\Type_VorgangskomponenteCoC $coc = null): self
    {
        $this->coc = $coc;
        
        return $this;
    }
    /**
     * Get dokument value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteDokument|null
     */
    public function getDokument(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument
    {
        return $this->dokument;
    }
    /**
     * Set dokument value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setDokument(?\THAG\XKfz\StructType\Type_VorgangskomponenteDokument $dokument = null): self
    {
        $this->dokument = $dokument;
        
        return $this;
    }
    /**
     * Get fahrzeugverwendung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung|null
     */
    public function getFahrzeugverwendung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung
    {
        return $this->fahrzeugverwendung;
    }
    /**
     * Set fahrzeugverwendung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung $fahrzeugverwendung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setFahrzeugverwendung(?\THAG\XKfz\StructType\Type_VorgangskomponenteFahrzeugverwendung $fahrzeugverwendung = null): self
    {
        $this->fahrzeugverwendung = $fahrzeugverwendung;
        
        return $this;
    }
    /**
     * Get feinstaubplakette value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette|null
     */
    public function getFeinstaubplakette(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette
    {
        return $this->feinstaubplakette;
    }
    /**
     * Set feinstaubplakette value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette $feinstaubplakette
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setFeinstaubplakette(?\THAG\XKfz\StructType\Type_VorgangskomponenteFeinstaubplakette $feinstaubplakette = null): self
    {
        $this->feinstaubplakette = $feinstaubplakette;
        
        return $this;
    }
    /**
     * Get gebuehren value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren|null
     */
    public function getGebuehren(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren
    {
        return $this->gebuehren;
    }
    /**
     * Set gebuehren value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehren
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setGebuehren(?\THAG\XKfz\StructType\Type_VorgangskomponenteGebuehren $gebuehren = null): self
    {
        $this->gebuehren = $gebuehren;
        
        return $this;
    }
    /**
     * Get gutachten value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteGutachten|null
     */
    public function getGutachten(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteGutachten
    {
        return $this->gutachten;
    }
    /**
     * Set gutachten value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteGutachten $gutachten
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setGutachten(?\THAG\XKfz\StructType\Type_VorgangskomponenteGutachten $gutachten = null): self
    {
        $this->gutachten = $gutachten;
        
        return $this;
    }
    /**
     * Get hauptuntersuchung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung|null
     */
    public function getHauptuntersuchung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung
    {
        return $this->hauptuntersuchung;
    }
    /**
     * Set hauptuntersuchung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung $hauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setHauptuntersuchung(?\THAG\XKfz\StructType\Type_VorgangskomponenteHauptuntersuchung $hauptuntersuchung = null): self
    {
        $this->hauptuntersuchung = $hauptuntersuchung;
        
        return $this;
    }
    /**
     * Get identifikation value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation|null
     */
    public function getIdentifikation(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation
    {
        return $this->identifikation;
    }
    /**
     * Set identifikation value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikation
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setIdentifikation(?\THAG\XKfz\StructType\Type_VorgangskomponenteIdentifikation $identifikation = null): self
    {
        $this->identifikation = $identifikation;
        
        return $this;
    }
    /**
     * Get kennzeichen value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen
    {
        return $this->kennzeichen;
    }
    /**
     * Set kennzeichen value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichen $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get kennzeichenSucheUndZuteilung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung|null
     */
    public function getKennzeichenSucheUndZuteilung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung
    {
        return $this->kennzeichenSucheUndZuteilung;
    }
    /**
     * Set kennzeichenSucheUndZuteilung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung $kennzeichenSucheUndZuteilung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setKennzeichenSucheUndZuteilung(?\THAG\XKfz\StructType\Type_VorgangskomponenteKennzeichenSucheUndZuteilung $kennzeichenSucheUndZuteilung = null): self
    {
        $this->kennzeichenSucheUndZuteilung = $kennzeichenSucheUndZuteilung;
        
        return $this;
    }
    /**
     * Get lieferinformationen value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen|null
     */
    public function getLieferinformationen(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen
    {
        return $this->lieferinformationen;
    }
    /**
     * Set lieferinformationen value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen $lieferinformationen
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setLieferinformationen(?\THAG\XKfz\StructType\Type_VorgangskomponenteLieferinformationen $lieferinformationen = null): self
    {
        $this->lieferinformationen = $lieferinformationen;
        
        return $this;
    }
    /**
     * Get sicherungsuebereignung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung|null
     */
    public function getSicherungsuebereignung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung
    {
        return $this->sicherungsuebereignung;
    }
    /**
     * Set sicherungsuebereignung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung $sicherungsuebereignung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setSicherungsuebereignung(?\THAG\XKfz\StructType\Type_VorgangskomponenteSicherungsuebereignung $sicherungsuebereignung = null): self
    {
        $this->sicherungsuebereignung = $sicherungsuebereignung;
        
        return $this;
    }
    /**
     * Get steuerdaten value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten|null
     */
    public function getSteuerdaten(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten
    {
        return $this->steuerdaten;
    }
    /**
     * Set steuerdaten value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten $steuerdaten
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setSteuerdaten(?\THAG\XKfz\StructType\Type_VorgangskomponenteSteuerdaten $steuerdaten = null): self
    {
        $this->steuerdaten = $steuerdaten;
        
        return $this;
    }
    /**
     * Get versicherungsbestaetigung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung|null
     */
    public function getVersicherungsbestaetigung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung
    {
        return $this->versicherungsbestaetigung;
    }
    /**
     * Set versicherungsbestaetigung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung $versicherungsbestaetigung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setVersicherungsbestaetigung(?\THAG\XKfz\StructType\Type_VorgangskomponenteVersicherungsbestaetigung $versicherungsbestaetigung = null): self
    {
        $this->versicherungsbestaetigung = $versicherungsbestaetigung;
        
        return $this;
    }
    /**
     * Get verwertungsnachweis value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis|null
     */
    public function getVerwertungsnachweis(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis
    {
        return $this->verwertungsnachweis;
    }
    /**
     * Set verwertungsnachweis value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis $verwertungsnachweis
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setVerwertungsnachweis(?\THAG\XKfz\StructType\Type_VorgangskomponenteVerwertungsnachweis $verwertungsnachweis = null): self
    {
        $this->verwertungsnachweis = $verwertungsnachweis;
        
        return $this;
    }
    /**
     * Get zahlung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZahlung|null
     */
    public function getZahlung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung
    {
        return $this->zahlung;
    }
    /**
     * Set zahlung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setZahlung(?\THAG\XKfz\StructType\Type_VorgangskomponenteZahlung $zahlung = null): self
    {
        $this->zahlung = $zahlung;
        
        return $this;
    }
    /**
     * Get zulassungsbescheinigungTeilI value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI|null
     */
    public function getZulassungsbescheinigungTeilI(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI
    {
        return $this->zulassungsbescheinigungTeilI;
    }
    /**
     * Set zulassungsbescheinigungTeilI value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI $zulassungsbescheinigungTeilI
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setZulassungsbescheinigungTeilI(?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilI $zulassungsbescheinigungTeilI = null): self
    {
        $this->zulassungsbescheinigungTeilI = $zulassungsbescheinigungTeilI;
        
        return $this;
    }
    /**
     * Get zulassungsBescheinigungTeilII value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII|null
     */
    public function getZulassungsBescheinigungTeilII(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII
    {
        return $this->zulassungsBescheinigungTeilII;
    }
    /**
     * Set zulassungsBescheinigungTeilII value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII $zulassungsBescheinigungTeilII
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setZulassungsBescheinigungTeilII(?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsbescheinigungTeilII $zulassungsBescheinigungTeilII = null): self
    {
        $this->zulassungsBescheinigungTeilII = $zulassungsBescheinigungTeilII;
        
        return $this;
    }
    /**
     * Get zulassungsentscheidung value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung|null
     */
    public function getZulassungsentscheidung(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung
    {
        return $this->zulassungsentscheidung;
    }
    /**
     * Set zulassungsentscheidung value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung $zulassungsentscheidung
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente
     */
    public function setZulassungsentscheidung(?\THAG\XKfz\StructType\Type_VorgangskomponenteZulassungsentscheidung $zulassungsentscheidung = null): self
    {
        $this->zulassungsentscheidung = $zulassungsentscheidung;
        
        return $this;
    }
}
