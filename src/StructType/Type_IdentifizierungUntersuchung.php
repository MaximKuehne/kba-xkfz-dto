<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifizierungUntersuchung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifizierungUntersuchung extends AbstractStructBase
{
    /**
     * The Berichtsnummer
     */
    public ?string $Berichtsnummer = null;

    /**
     * The artDerUntersuchung
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null;

    /**
     * The typDerUntersuchung
     */
    public ?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null;

    /**
     * The letzteHauptuntersuchung
     */
    public ?string $letzteHauptuntersuchung = null;

    /**
     * The ZeitpunktUntersuchung
     */
    public ?string $ZeitpunktUntersuchung = null;

    /**
     * The schluesselUntersuchungsort
     */
    public ?string $schluesselUntersuchungsort = null;

    /**
     * The TextUntersuchungsort
     */
    public ?string $TextUntersuchungsort = null;

    /**
     * The bundeslandUntersuchungsstelle
     */
    public ?\THAG\XKfz\StructType\Code_Bundesland $bundeslandUntersuchungsstelle = null;

    /**
     * The untersuchungsstelle
     */
    public ?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null;

    /**
     * The untersuchungUmweltvertraeglichkeit
     */
    public ?\THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit $untersuchungUmweltvertraeglichkeit = null;

    /**
     * Constructor method for Type.IdentifizierungUntersuchung
     *
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
     * Get artDerUntersuchung value
     */
    public function getArtDerUntersuchung(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchung
    {
        return $this->artDerUntersuchung;
    }

    /**
     * Set artDerUntersuchung value
     */
    public function setArtDerUntersuchung(?\THAG\XKfz\StructType\Code_ArtDerUntersuchung $artDerUntersuchung = null): self
    {
        $this->artDerUntersuchung = $artDerUntersuchung;

        return $this;
    }

    /**
     * Get typDerUntersuchung value
     */
    public function getTypDerUntersuchung(): ?\THAG\XKfz\StructType\Code_TypDerUntersuchung
    {
        return $this->typDerUntersuchung;
    }

    /**
     * Set typDerUntersuchung value
     */
    public function setTypDerUntersuchung(?\THAG\XKfz\StructType\Code_TypDerUntersuchung $typDerUntersuchung = null): self
    {
        $this->typDerUntersuchung = $typDerUntersuchung;

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
     * Get schluesselUntersuchungsort value
     */
    public function getSchluesselUntersuchungsort(): ?string
    {
        return $this->schluesselUntersuchungsort;
    }

    /**
     * Set schluesselUntersuchungsort value
     */
    public function setSchluesselUntersuchungsort(?string $schluesselUntersuchungsort = null): self
    {
        $this->schluesselUntersuchungsort = $schluesselUntersuchungsort;

        return $this;
    }

    /**
     * Get TextUntersuchungsort value
     */
    public function getTextUntersuchungsort(): ?string
    {
        return $this->TextUntersuchungsort;
    }

    /**
     * Set TextUntersuchungsort value
     */
    public function setTextUntersuchungsort(?string $textUntersuchungsort = null): self
    {
        $this->TextUntersuchungsort = $textUntersuchungsort;

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
    public function getUntersuchungsstelle(): ?\THAG\XKfz\StructType\Type_Untersuchungsstelle
    {
        return $this->untersuchungsstelle;
    }

    /**
     * Set untersuchungsstelle value
     */
    public function setUntersuchungsstelle(?\THAG\XKfz\StructType\Type_Untersuchungsstelle $untersuchungsstelle = null): self
    {
        $this->untersuchungsstelle = $untersuchungsstelle;

        return $this;
    }

    /**
     * Get untersuchungUmweltvertraeglichkeit value
     */
    public function getUntersuchungUmweltvertraeglichkeit(): ?\THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit
    {
        return $this->untersuchungUmweltvertraeglichkeit;
    }

    /**
     * Set untersuchungUmweltvertraeglichkeit value
     */
    public function setUntersuchungUmweltvertraeglichkeit(?\THAG\XKfz\StructType\Type_UntersuchungUmweltvertraeglichkeit $untersuchungUmweltvertraeglichkeit = null): self
    {
        $this->untersuchungUmweltvertraeglichkeit = $untersuchungUmweltvertraeglichkeit;

        return $this;
    }
}
