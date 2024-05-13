<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ErgebnisUntersuchung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ErgebnisUntersuchung extends AbstractStructBase
{
    /**
     * The merkmalZuteilungPlakette
     */
    public ?bool $merkmalZuteilungPlakette = null;

    /**
     * The ergebnisVorMaengelschleife
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null;

    /**
     * The ergebnisNachMaengelschleife
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisNachMaengelschleife = null;

    /**
     * The ZeitpunktDerMaengelbehebung
     */
    public ?string $ZeitpunktDerMaengelbehebung = null;

    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * The merkmalWiedervorfuehrpflicht
     */
    public ?bool $merkmalWiedervorfuehrpflicht = null;

    /**
     * The messwerteUntersuchung
     */
    public ?\THAG\XKfz\StructType\Type_MesswerteUntersuchung $messwerteUntersuchung = null;

    /**
     * Constructor method for Type.ErgebnisUntersuchung
     *
     * @uses Type_ErgebnisUntersuchung::setMerkmalZuteilungPlakette()
     * @uses Type_ErgebnisUntersuchung::setErgebnisVorMaengelschleife()
     * @uses Type_ErgebnisUntersuchung::setErgebnisNachMaengelschleife()
     * @uses Type_ErgebnisUntersuchung::setZeitpunktDerMaengelbehebung()
     * @uses Type_ErgebnisUntersuchung::setNaechsteHauptuntersuchung()
     * @uses Type_ErgebnisUntersuchung::setNaechsteSicherheitspruefung()
     * @uses Type_ErgebnisUntersuchung::setMerkmalWiedervorfuehrpflicht()
     * @uses Type_ErgebnisUntersuchung::setMesswerteUntersuchung()
     */
    public function __construct(?bool $merkmalZuteilungPlakette = null, ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null, ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisNachMaengelschleife = null, ?string $zeitpunktDerMaengelbehebung = null, ?string $naechsteHauptuntersuchung = null, ?string $naechsteSicherheitspruefung = null, ?bool $merkmalWiedervorfuehrpflicht = null, ?\THAG\XKfz\StructType\Type_MesswerteUntersuchung $messwerteUntersuchung = null)
    {
        $this
            ->setMerkmalZuteilungPlakette($merkmalZuteilungPlakette)
            ->setErgebnisVorMaengelschleife($ergebnisVorMaengelschleife)
            ->setErgebnisNachMaengelschleife($ergebnisNachMaengelschleife)
            ->setZeitpunktDerMaengelbehebung($zeitpunktDerMaengelbehebung)
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung)
            ->setMerkmalWiedervorfuehrpflicht($merkmalWiedervorfuehrpflicht)
            ->setMesswerteUntersuchung($messwerteUntersuchung);
    }

    /**
     * Get merkmalZuteilungPlakette value
     */
    public function getMerkmalZuteilungPlakette(): ?bool
    {
        return $this->merkmalZuteilungPlakette;
    }

    /**
     * Set merkmalZuteilungPlakette value
     */
    public function setMerkmalZuteilungPlakette(?bool $merkmalZuteilungPlakette = null): self
    {
        $this->merkmalZuteilungPlakette = $merkmalZuteilungPlakette;

        return $this;
    }

    /**
     * Get ergebnisVorMaengelschleife value
     */
    public function getErgebnisVorMaengelschleife(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisVorMaengelschleife;
    }

    /**
     * Set ergebnisVorMaengelschleife value
     */
    public function setErgebnisVorMaengelschleife(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null): self
    {
        $this->ergebnisVorMaengelschleife = $ergebnisVorMaengelschleife;

        return $this;
    }

    /**
     * Get ergebnisNachMaengelschleife value
     */
    public function getErgebnisNachMaengelschleife(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisNachMaengelschleife;
    }

    /**
     * Set ergebnisNachMaengelschleife value
     */
    public function setErgebnisNachMaengelschleife(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisNachMaengelschleife = null): self
    {
        $this->ergebnisNachMaengelschleife = $ergebnisNachMaengelschleife;

        return $this;
    }

    /**
     * Get ZeitpunktDerMaengelbehebung value
     */
    public function getZeitpunktDerMaengelbehebung(): ?string
    {
        return $this->ZeitpunktDerMaengelbehebung;
    }

    /**
     * Set ZeitpunktDerMaengelbehebung value
     */
    public function setZeitpunktDerMaengelbehebung(?string $zeitpunktDerMaengelbehebung = null): self
    {
        $this->ZeitpunktDerMaengelbehebung = $zeitpunktDerMaengelbehebung;

        return $this;
    }

    /**
     * Get NaechsteHauptuntersuchung value
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }

    /**
     * Set NaechsteHauptuntersuchung value
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;

        return $this;
    }

    /**
     * Get NaechsteSicherheitspruefung value
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }

    /**
     * Set NaechsteSicherheitspruefung value
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;

        return $this;
    }

    /**
     * Get merkmalWiedervorfuehrpflicht value
     */
    public function getMerkmalWiedervorfuehrpflicht(): ?bool
    {
        return $this->merkmalWiedervorfuehrpflicht;
    }

    /**
     * Set merkmalWiedervorfuehrpflicht value
     */
    public function setMerkmalWiedervorfuehrpflicht(?bool $merkmalWiedervorfuehrpflicht = null): self
    {
        $this->merkmalWiedervorfuehrpflicht = $merkmalWiedervorfuehrpflicht;

        return $this;
    }

    /**
     * Get messwerteUntersuchung value
     */
    public function getMesswerteUntersuchung(): ?\THAG\XKfz\StructType\Type_MesswerteUntersuchung
    {
        return $this->messwerteUntersuchung;
    }

    /**
     * Set messwerteUntersuchung value
     */
    public function setMesswerteUntersuchung(?\THAG\XKfz\StructType\Type_MesswerteUntersuchung $messwerteUntersuchung = null): self
    {
        $this->messwerteUntersuchung = $messwerteUntersuchung;

        return $this;
    }
}
