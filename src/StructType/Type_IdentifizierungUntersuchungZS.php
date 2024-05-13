<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungUntersuchungZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungUntersuchungZS extends AbstractStructBase
{
    /**
     * The Berichtsnummer
     * @var string|null
     */
    public ?string $Berichtsnummer = null;
    /**
     * The letzteHauptuntersuchung
     * @var string|null
     */
    public ?string $letzteHauptuntersuchung = null;
    /**
     * The ZeitpunktUntersuchung
     * @var string|null
     */
    public ?string $ZeitpunktUntersuchung = null;
    /**
     * The bundeslandUntersuchungsstelle
     * @var \THAG\XKfz\StructType\Code_Bundesland|null
     */
    public ?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null;
    /**
     * The untersuchungsstelle
     * @var \THAG\XKfz\StructType\Type_UntersuchungsstelleZS|null
     */
    public ?\THAG\XKfz\StructType\Type_UntersuchungsstelleZS $untersuchungsstelle = null;
    /**
     * The versionVorgabenInformationssystem
     * @var string|null
     */
    public ?string $versionVorgabenInformationssystem = null;
    /**
     * Constructor method for Type.IdentifizierungUntersuchungZS
     * @uses Type_IdentifizierungUntersuchungZS::setBerichtsnummer()
     * @uses Type_IdentifizierungUntersuchungZS::setLetzteHauptuntersuchung()
     * @uses Type_IdentifizierungUntersuchungZS::setZeitpunktUntersuchung()
     * @uses Type_IdentifizierungUntersuchungZS::setBundeslandUntersuchungsstelle()
     * @uses Type_IdentifizierungUntersuchungZS::setUntersuchungsstelle()
     * @uses Type_IdentifizierungUntersuchungZS::setVersionVorgabenInformationssystem()
     * @param string $berichtsnummer
     * @param string $letzteHauptuntersuchung
     * @param string $zeitpunktUntersuchung
     * @param \THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle
     * @param \THAG\XKfz\StructType\Type_UntersuchungsstelleZS $untersuchungsstelle
     * @param string $versionVorgabenInformationssystem
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
     * @return string|null
     */
    public function getBerichtsnummer(): ?string
    {
        return $this->Berichtsnummer;
    }
    /**
     * Set Berichtsnummer value
     * @param string $berichtsnummer
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;
        
        return $this;
    }
    /**
     * Get letzteHauptuntersuchung value
     * @return string|null
     */
    public function getLetzteHauptuntersuchung(): ?string
    {
        return $this->letzteHauptuntersuchung;
    }
    /**
     * Set letzteHauptuntersuchung value
     * @param string $letzteHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
     */
    public function setLetzteHauptuntersuchung(?string $letzteHauptuntersuchung = null): self
    {
        $this->letzteHauptuntersuchung = $letzteHauptuntersuchung;
        
        return $this;
    }
    /**
     * Get ZeitpunktUntersuchung value
     * @return string|null
     */
    public function getZeitpunktUntersuchung(): ?string
    {
        return $this->ZeitpunktUntersuchung;
    }
    /**
     * Set ZeitpunktUntersuchung value
     * @param string $zeitpunktUntersuchung
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;
        
        return $this;
    }
    /**
     * Get bundeslandUntersuchungsstelle value
     * @return \THAG\XKfz\StructType\Code_Bundesland|null
     */
    public function getBundeslandUntersuchungsstelle(): ?\THAG\XKfz\StructType\Code_Bundesland
    {
        return $this->bundeslandUntersuchungsstelle;
    }
    /**
     * Set bundeslandUntersuchungsstelle value
     * @param \THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
     */
    public function setBundeslandUntersuchungsstelle(?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null): self
    {
        $this->bundeslandUntersuchungsstelle = $bundeslandUntersuchungsstelle;
        
        return $this;
    }
    /**
     * Get untersuchungsstelle value
     * @return \THAG\XKfz\StructType\Type_UntersuchungsstelleZS|null
     */
    public function getUntersuchungsstelle(): ?\THAG\XKfz\StructType\Type_UntersuchungsstelleZS
    {
        return $this->untersuchungsstelle;
    }
    /**
     * Set untersuchungsstelle value
     * @param \THAG\XKfz\StructType\Type_UntersuchungsstelleZS $untersuchungsstelle
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
     */
    public function setUntersuchungsstelle(?\THAG\XKfz\StructType\Type_UntersuchungsstelleZS $untersuchungsstelle = null): self
    {
        $this->untersuchungsstelle = $untersuchungsstelle;
        
        return $this;
    }
    /**
     * Get versionVorgabenInformationssystem value
     * @return string|null
     */
    public function getVersionVorgabenInformationssystem(): ?string
    {
        return $this->versionVorgabenInformationssystem;
    }
    /**
     * Set versionVorgabenInformationssystem value
     * @param string $versionVorgabenInformationssystem
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchungZS
     */
    public function setVersionVorgabenInformationssystem(?string $versionVorgabenInformationssystem = null): self
    {
        $this->versionVorgabenInformationssystem = $versionVorgabenInformationssystem;
        
        return $this;
    }
}
