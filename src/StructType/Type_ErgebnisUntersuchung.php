<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.ErgebnisUntersuchung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_ErgebnisUntersuchung extends AbstractStructBase
{
    /**
     * The merkmalZuteilungPlakette
     * @var bool|null
     */
    public ?bool $merkmalZuteilungPlakette = null;
    /**
     * The ergebnisVorMaengelschleife
     * @var \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null;
    /**
     * The ergebnisNachMaengelschleife
     * @var \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisNachMaengelschleife = null;
    /**
     * The ZeitpunktDerMaengelbehebung
     * @var string|null
     */
    public ?string $ZeitpunktDerMaengelbehebung = null;
    /**
     * The NaechsteHauptuntersuchung
     * @var string|null
     */
    public ?string $NaechsteHauptuntersuchung = null;
    /**
     * The NaechsteSicherheitspruefung
     * @var string|null
     */
    public ?string $NaechsteSicherheitspruefung = null;
    /**
     * The merkmalWiedervorfuehrpflicht
     * @var bool|null
     */
    public ?bool $merkmalWiedervorfuehrpflicht = null;
    /**
     * The messwerteUntersuchung
     * @var \THAG\XKfz\StructType\Type_MesswerteUntersuchung|null
     */
    public ?\THAG\XKfz\StructType\Type_MesswerteUntersuchung $messwerteUntersuchung = null;
    /**
     * Constructor method for Type.ErgebnisUntersuchung
     * @uses Type_ErgebnisUntersuchung::setMerkmalZuteilungPlakette()
     * @uses Type_ErgebnisUntersuchung::setErgebnisVorMaengelschleife()
     * @uses Type_ErgebnisUntersuchung::setErgebnisNachMaengelschleife()
     * @uses Type_ErgebnisUntersuchung::setZeitpunktDerMaengelbehebung()
     * @uses Type_ErgebnisUntersuchung::setNaechsteHauptuntersuchung()
     * @uses Type_ErgebnisUntersuchung::setNaechsteSicherheitspruefung()
     * @uses Type_ErgebnisUntersuchung::setMerkmalWiedervorfuehrpflicht()
     * @uses Type_ErgebnisUntersuchung::setMesswerteUntersuchung()
     * @param bool $merkmalZuteilungPlakette
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisNachMaengelschleife
     * @param string $zeitpunktDerMaengelbehebung
     * @param string $naechsteHauptuntersuchung
     * @param string $naechsteSicherheitspruefung
     * @param bool $merkmalWiedervorfuehrpflicht
     * @param \THAG\XKfz\StructType\Type_MesswerteUntersuchung $messwerteUntersuchung
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
     * @return bool|null
     */
    public function getMerkmalZuteilungPlakette(): ?bool
    {
        return $this->merkmalZuteilungPlakette;
    }
    /**
     * Set merkmalZuteilungPlakette value
     * @param bool $merkmalZuteilungPlakette
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setMerkmalZuteilungPlakette(?bool $merkmalZuteilungPlakette = null): self
    {
        $this->merkmalZuteilungPlakette = $merkmalZuteilungPlakette;
        
        return $this;
    }
    /**
     * Get ergebnisVorMaengelschleife value
     * @return \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public function getErgebnisVorMaengelschleife(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisVorMaengelschleife;
    }
    /**
     * Set ergebnisVorMaengelschleife value
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setErgebnisVorMaengelschleife(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisVorMaengelschleife = null): self
    {
        $this->ergebnisVorMaengelschleife = $ergebnisVorMaengelschleife;
        
        return $this;
    }
    /**
     * Get ergebnisNachMaengelschleife value
     * @return \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung|null
     */
    public function getErgebnisNachMaengelschleife(): ?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung
    {
        return $this->ergebnisNachMaengelschleife;
    }
    /**
     * Set ergebnisNachMaengelschleife value
     * @param \THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisNachMaengelschleife
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setErgebnisNachMaengelschleife(?\THAG\XKfz\StructType\Code_ErgebnisDerUntersuchung $ergebnisNachMaengelschleife = null): self
    {
        $this->ergebnisNachMaengelschleife = $ergebnisNachMaengelschleife;
        
        return $this;
    }
    /**
     * Get ZeitpunktDerMaengelbehebung value
     * @return string|null
     */
    public function getZeitpunktDerMaengelbehebung(): ?string
    {
        return $this->ZeitpunktDerMaengelbehebung;
    }
    /**
     * Set ZeitpunktDerMaengelbehebung value
     * @param string $zeitpunktDerMaengelbehebung
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setZeitpunktDerMaengelbehebung(?string $zeitpunktDerMaengelbehebung = null): self
    {
        $this->ZeitpunktDerMaengelbehebung = $zeitpunktDerMaengelbehebung;
        
        return $this;
    }
    /**
     * Get NaechsteHauptuntersuchung value
     * @return string|null
     */
    public function getNaechsteHauptuntersuchung(): ?string
    {
        return $this->NaechsteHauptuntersuchung;
    }
    /**
     * Set NaechsteHauptuntersuchung value
     * @param string $naechsteHauptuntersuchung
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setNaechsteHauptuntersuchung(?string $naechsteHauptuntersuchung = null): self
    {
        $this->NaechsteHauptuntersuchung = $naechsteHauptuntersuchung;
        
        return $this;
    }
    /**
     * Get NaechsteSicherheitspruefung value
     * @return string|null
     */
    public function getNaechsteSicherheitspruefung(): ?string
    {
        return $this->NaechsteSicherheitspruefung;
    }
    /**
     * Set NaechsteSicherheitspruefung value
     * @param string $naechsteSicherheitspruefung
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;
        
        return $this;
    }
    /**
     * Get merkmalWiedervorfuehrpflicht value
     * @return bool|null
     */
    public function getMerkmalWiedervorfuehrpflicht(): ?bool
    {
        return $this->merkmalWiedervorfuehrpflicht;
    }
    /**
     * Set merkmalWiedervorfuehrpflicht value
     * @param bool $merkmalWiedervorfuehrpflicht
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setMerkmalWiedervorfuehrpflicht(?bool $merkmalWiedervorfuehrpflicht = null): self
    {
        $this->merkmalWiedervorfuehrpflicht = $merkmalWiedervorfuehrpflicht;
        
        return $this;
    }
    /**
     * Get messwerteUntersuchung value
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchung|null
     */
    public function getMesswerteUntersuchung(): ?\THAG\XKfz\StructType\Type_MesswerteUntersuchung
    {
        return $this->messwerteUntersuchung;
    }
    /**
     * Set messwerteUntersuchung value
     * @param \THAG\XKfz\StructType\Type_MesswerteUntersuchung $messwerteUntersuchung
     * @return \THAG\XKfz\StructType\Type_ErgebnisUntersuchung
     */
    public function setMesswerteUntersuchung(?\THAG\XKfz\StructType\Type_MesswerteUntersuchung $messwerteUntersuchung = null): self
    {
        $this->messwerteUntersuchung = $messwerteUntersuchung;
        
        return $this;
    }
}
