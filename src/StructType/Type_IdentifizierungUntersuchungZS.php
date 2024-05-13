<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungUntersuchungZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungUntersuchungZS extends AbstractStructBase
{
    /**
     * The Berichtsnummer
     */
    public ?string $Berichtsnummer = null;

    /**
     * The letzteHauptuntersuchung
     */
    public ?string $letzteHauptuntersuchung = null;

    /**
     * The ZeitpunktUntersuchung
     */
    public ?string $ZeitpunktUntersuchung = null;

    /**
     * The bundeslandUntersuchungsstelle
     */
    public ?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null;

    /**
     * The untersuchungsstelle
     */
    public ?\THAG\XKfz\StructType\Type_UntersuchungsstelleZS $untersuchungsstelle = null;

    /**
     * The versionVorgabenInformationssystem
     */
    public ?string $versionVorgabenInformationssystem = null;

    /**
     * Constructor method for Type.IdentifizierungUntersuchungZS
     *
     * @uses Type_IdentifizierungUntersuchungZS::setBerichtsnummer()
     * @uses Type_IdentifizierungUntersuchungZS::setLetzteHauptuntersuchung()
     * @uses Type_IdentifizierungUntersuchungZS::setZeitpunktUntersuchung()
     * @uses Type_IdentifizierungUntersuchungZS::setBundeslandUntersuchungsstelle()
     * @uses Type_IdentifizierungUntersuchungZS::setUntersuchungsstelle()
     * @uses Type_IdentifizierungUntersuchungZS::setVersionVorgabenInformationssystem()
     */
    public function __construct(?string $berichtsnummer = null, ?string $letzteHauptuntersuchung = null, ?string $zeitpunktUntersuchung = null, ?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null, ?\THAG\XKfz\StructType\Type_UntersuchungsstelleZS $untersuchungsstelle = null, ?string $versionVorgabenInformationssystem = null)
    {
        $this
            ->setBerichtsnummer($berichtsnummer)
            ->setLetzteHauptuntersuchung($letzteHauptuntersuchung)
            ->setZeitpunktUntersuchung($zeitpunktUntersuchung)
            ->setBundeslandUntersuchungsstelle($bundeslandUntersuchungsstelle)
            ->setUntersuchungsstelle($untersuchungsstelle)
            ->setVersionVorgabenInformationssystem($versionVorgabenInformationssystem);
    }

    /**
     * Get Berichtsnummer value
     */
    public function getBerichtsnummer(): ?string
    {
        return $this->Berichtsnummer;
    }

    /**
     * Set Berichtsnummer value
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;

        return $this;
    }

    /**
     * Get letzteHauptuntersuchung value
     */
    public function getLetzteHauptuntersuchung(): ?string
    {
        return $this->letzteHauptuntersuchung;
    }

    /**
     * Set letzteHauptuntersuchung value
     */
    public function setLetzteHauptuntersuchung(?string $letzteHauptuntersuchung = null): self
    {
        $this->letzteHauptuntersuchung = $letzteHauptuntersuchung;

        return $this;
    }

    /**
     * Get ZeitpunktUntersuchung value
     */
    public function getZeitpunktUntersuchung(): ?string
    {
        return $this->ZeitpunktUntersuchung;
    }

    /**
     * Set ZeitpunktUntersuchung value
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;

        return $this;
    }

    /**
     * Get bundeslandUntersuchungsstelle value
     */
    public function getBundeslandUntersuchungsstelle(): ?\THAG\XKfz\StructType\Code_Bundesland
    {
        return $this->bundeslandUntersuchungsstelle;
    }

    /**
     * Set bundeslandUntersuchungsstelle value
     */
    public function setBundeslandUntersuchungsstelle(?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null): self
    {
        $this->bundeslandUntersuchungsstelle = $bundeslandUntersuchungsstelle;

        return $this;
    }

    /**
     * Get untersuchungsstelle value
     */
    public function getUntersuchungsstelle(): ?\THAG\XKfz\StructType\Type_UntersuchungsstelleZS
    {
        return $this->untersuchungsstelle;
    }

    /**
     * Set untersuchungsstelle value
     */
    public function setUntersuchungsstelle(?\THAG\XKfz\StructType\Type_UntersuchungsstelleZS $untersuchungsstelle = null): self
    {
        $this->untersuchungsstelle = $untersuchungsstelle;

        return $this;
    }

    /**
     * Get versionVorgabenInformationssystem value
     */
    public function getVersionVorgabenInformationssystem(): ?string
    {
        return $this->versionVorgabenInformationssystem;
    }

    /**
     * Set versionVorgabenInformationssystem value
     */
    public function setVersionVorgabenInformationssystem(?string $versionVorgabenInformationssystem = null): self
    {
        $this->versionVorgabenInformationssystem = $versionVorgabenInformationssystem;

        return $this;
    }
}
