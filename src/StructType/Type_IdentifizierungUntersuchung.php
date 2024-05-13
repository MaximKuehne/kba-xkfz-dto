<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungUntersuchung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungUntersuchung extends AbstractStructBase
{
    /**
     * The Berichtsnummer
     * @var string|null
     */
    public ?string $Berichtsnummer = null;
    /**
     * The artDerUntersuchung
     * @var \THAG\XKfz\StructType\Code_ArtDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;
    /**
     * The typDerUntersuchung
     * @var \THAG\XKfz\StructType\Code_TypDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null;
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
     * The schluesselUntersuchungsort
     * @var string|null
     */
    public ?string $schluesselUntersuchungsort = null;
    /**
     * The TextUntersuchungsort
     * @var string|null
     */
    public ?string $TextUntersuchungsort = null;
    /**
     * The bundeslandUntersuchungsstelle
     * @var \THAG\XKfz\StructType\Code_Bundesland|null
     */
    public ?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null;
    /**
     * The untersuchungsstelle
     * @var \THAG\XKfz\StructType\Type_Untersuchungsstelle|null
     */
    public ?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null;
    /**
     * The untersuchungUmweltvertraeglichkeit
     * @var \THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit|null
     */
    public ?\THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit $untersuchungUmweltvertraeglichkeit = null;
    /**
     * Constructor method for Type.IdentifizierungUntersuchung
     * @uses Type_IdentifizierungUntersuchung::setBerichtsnummer()
     * @uses Type_IdentifizierungUntersuchung::setArtDerUntersuchung()
     * @uses Type_IdentifizierungUntersuchung::setTypDerUntersuchung()
     * @uses Type_IdentifizierungUntersuchung::setLetzteHauptuntersuchung()
     * @uses Type_IdentifizierungUntersuchung::setZeitpunktUntersuchung()
     * @uses Type_IdentifizierungUntersuchung::setSchluesselUntersuchungsort()
     * @uses Type_IdentifizierungUntersuchung::setTextUntersuchungsort()
     * @uses Type_IdentifizierungUntersuchung::setBundeslandUntersuchungsstelle()
     * @uses Type_IdentifizierungUntersuchung::setUntersuchungsstelle()
     * @uses Type_IdentifizierungUntersuchung::setUntersuchungUmweltvertraeglichkeit()
     * @param string $berichtsnummer
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung
     * @param \THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung
     * @param string $letzteHauptuntersuchung
     * @param string $zeitpunktUntersuchung
     * @param string $schluesselUntersuchungsort
     * @param string $textUntersuchungsort
     * @param \THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle
     * @param \THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle
     * @param \THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit $untersuchungUmweltvertraeglichkeit
     */
    public function __construct(?string $berichtsnummer = null, ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null, ?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null, ?string $letzteHauptuntersuchung = null, ?string $zeitpunktUntersuchung = null, ?string $schluesselUntersuchungsort = null, ?string $textUntersuchungsort = null, ?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null, ?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null, ?\THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit $untersuchungUmweltvertraeglichkeit = null)
    {
        $this
            ->setBerichtsnummer($berichtsnummer)
            ->setArtDerUntersuchung($artDerUntersuchung)
            ->setTypDerUntersuchung($typDerUntersuchung)
            ->setLetzteHauptuntersuchung($letzteHauptuntersuchung)
            ->setZeitpunktUntersuchung($zeitpunktUntersuchung)
            ->setSchluesselUntersuchungsort($schluesselUntersuchungsort)
            ->setTextUntersuchungsort($textUntersuchungsort)
            ->setBundeslandUntersuchungsstelle($bundeslandUntersuchungsstelle)
            ->setUntersuchungsstelle($untersuchungsstelle)
            ->setUntersuchungUmweltvertraeglichkeit($untersuchungUmweltvertraeglichkeit);
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setBerichtsnummer(?string $berichtsnummer = null): self
    {
        $this->Berichtsnummer = $berichtsnummer;
        
        return $this;
    }
    /**
     * Get artDerUntersuchung value
     * @return \THAG\XKfz\StructType\Code_ArtDerUntersuchung|null
     */
    public function getArtDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung
    {
        return $this->artDerUntersuchung;
    }
    /**
     * Set artDerUntersuchung value
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setArtDerUntersuchung(?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null): self
    {
        $this->artDerUntersuchung = $artDerUntersuchung;
        
        return $this;
    }
    /**
     * Get typDerUntersuchung value
     * @return \THAG\XKfz\StructType\Code_TypDerUntersuchung|null
     */
    public function getTypDerUntersuchung(): ?\THAG\XKfz\StructType\Code_TypDerUntersuchung
    {
        return $this->typDerUntersuchung;
    }
    /**
     * Set typDerUntersuchung value
     * @param \THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setTypDerUntersuchung(?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null): self
    {
        $this->typDerUntersuchung = $typDerUntersuchung;
        
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setZeitpunktUntersuchung(?string $zeitpunktUntersuchung = null): self
    {
        $this->ZeitpunktUntersuchung = $zeitpunktUntersuchung;
        
        return $this;
    }
    /**
     * Get schluesselUntersuchungsort value
     * @return string|null
     */
    public function getSchluesselUntersuchungsort(): ?string
    {
        return $this->schluesselUntersuchungsort;
    }
    /**
     * Set schluesselUntersuchungsort value
     * @param string $schluesselUntersuchungsort
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setSchluesselUntersuchungsort(?string $schluesselUntersuchungsort = null): self
    {
        $this->schluesselUntersuchungsort = $schluesselUntersuchungsort;
        
        return $this;
    }
    /**
     * Get TextUntersuchungsort value
     * @return string|null
     */
    public function getTextUntersuchungsort(): ?string
    {
        return $this->TextUntersuchungsort;
    }
    /**
     * Set TextUntersuchungsort value
     * @param string $textUntersuchungsort
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setTextUntersuchungsort(?string $textUntersuchungsort = null): self
    {
        $this->TextUntersuchungsort = $textUntersuchungsort;
        
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
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setBundeslandUntersuchungsstelle(?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null): self
    {
        $this->bundeslandUntersuchungsstelle = $bundeslandUntersuchungsstelle;
        
        return $this;
    }
    /**
     * Get untersuchungsstelle value
     * @return \THAG\XKfz\StructType\Type_Untersuchungsstelle|null
     */
    public function getUntersuchungsstelle(): ?\THAG\XKfz\StructType\Type_Untersuchungsstelle
    {
        return $this->untersuchungsstelle;
    }
    /**
     * Set untersuchungsstelle value
     * @param \THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setUntersuchungsstelle(?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null): self
    {
        $this->untersuchungsstelle = $untersuchungsstelle;
        
        return $this;
    }
    /**
     * Get untersuchungUmweltvertraeglichkeit value
     * @return \THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit|null
     */
    public function getUntersuchungUmweltvertraeglichkeit(): ?\THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit
    {
        return $this->untersuchungUmweltvertraeglichkeit;
    }
    /**
     * Set untersuchungUmweltvertraeglichkeit value
     * @param \THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit $untersuchungUmweltvertraeglichkeit
     * @return \THAG\XKfz\StructType\Type_IdentifizierungUntersuchung
     */
    public function setUntersuchungUmweltvertraeglichkeit(?\THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit $untersuchungUmweltvertraeglichkeit = null): self
    {
        $this->untersuchungUmweltvertraeglichkeit = $untersuchungUmweltvertraeglichkeit;
        
        return $this;
    }
}
