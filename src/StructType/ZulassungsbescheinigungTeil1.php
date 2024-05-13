<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsbescheinigungTeil1 StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsbescheinigungTeil1 extends AbstractStructBase
{
    /**
     * The NummerZulBeschTeil1
     * @var string|null
     */
    public ?string $NummerZulBeschTeil1 = null;
    /**
     * The VordrucknummerZB1
     * @var string|null
     */
    public ?string $VordrucknummerZB1 = null;
    /**
     * The HinweisRueckgabeEinziehung
     * @var string|null
     */
    public ?string $HinweisRueckgabeEinziehung = null;
    /**
     * The ZeitpunktAusfertigungZulBeschTeil1
     * @var string|null
     */
    public ?string $ZeitpunktAusfertigungZulBeschTeil1 = null;
    /**
     * The DatumRueckgabeEinziehung
     * @var string|null
     */
    public ?string $DatumRueckgabeEinziehung = null;
    /**
     * The HinweisAusstellungZweitschrift
     * @var bool|null
     */
    public ?bool $HinweisAusstellungZweitschrift = null;
    /**
     * The DatumAusstellungZweitschrift
     * @var string|null
     */
    public ?string $DatumAusstellungZweitschrift = null;
    /**
     * The ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1
     * @var string|null
     */
    public ?string $ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 = null;
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
     * The NaechsteAbgasuntersuchung
     * @var string|null
     */
    public ?string $NaechsteAbgasuntersuchung = null;
    /**
     * The DruckstuecknummerZB1
     * @var string|null
     */
    public ?string $DruckstuecknummerZB1 = null;
    /**
     * Constructor method for ZulassungsbescheinigungTeil1
     * @uses ZulassungsbescheinigungTeil1::setNummerZulBeschTeil1()
     * @uses ZulassungsbescheinigungTeil1::setVordrucknummerZB1()
     * @uses ZulassungsbescheinigungTeil1::setHinweisRueckgabeEinziehung()
     * @uses ZulassungsbescheinigungTeil1::setZeitpunktAusfertigungZulBeschTeil1()
     * @uses ZulassungsbescheinigungTeil1::setDatumRueckgabeEinziehung()
     * @uses ZulassungsbescheinigungTeil1::setHinweisAusstellungZweitschrift()
     * @uses ZulassungsbescheinigungTeil1::setDatumAusstellungZweitschrift()
     * @uses ZulassungsbescheinigungTeil1::setZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1()
     * @uses ZulassungsbescheinigungTeil1::setNaechsteHauptuntersuchung()
     * @uses ZulassungsbescheinigungTeil1::setNaechsteSicherheitspruefung()
     * @uses ZulassungsbescheinigungTeil1::setNaechsteAbgasuntersuchung()
     * @uses ZulassungsbescheinigungTeil1::setDruckstuecknummerZB1()
     * @param string $nummerZulBeschTeil1
     * @param string $vordrucknummerZB1
     * @param string $hinweisRueckgabeEinziehung
     * @param string $zeitpunktAusfertigungZulBeschTeil1
     * @param string $datumRueckgabeEinziehung
     * @param bool $hinweisAusstellungZweitschrift
     * @param string $datumAusstellungZweitschrift
     * @param string $zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1
     * @param string $naechsteHauptuntersuchung
     * @param string $naechsteSicherheitspruefung
     * @param string $naechsteAbgasuntersuchung
     * @param string $druckstuecknummerZB1
     */
    public function __construct(?string $nummerZulBeschTeil1 = null, ?string $vordrucknummerZB1 = null, ?string $hinweisRueckgabeEinziehung = null, ?string $zeitpunktAusfertigungZulBeschTeil1 = null, ?string $datumRueckgabeEinziehung = null, ?bool $hinweisAusstellungZweitschrift = null, ?string $datumAusstellungZweitschrift = null, ?string $zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 = null, ?string $naechsteHauptuntersuchung = null, ?string $naechsteSicherheitspruefung = null, ?string $naechsteAbgasuntersuchung = null, ?string $druckstuecknummerZB1 = null)
    {
        $this
            ->setNummerZulBeschTeil1($nummerZulBeschTeil1)
            ->setVordrucknummerZB1($vordrucknummerZB1)
            ->setHinweisRueckgabeEinziehung($hinweisRueckgabeEinziehung)
            ->setZeitpunktAusfertigungZulBeschTeil1($zeitpunktAusfertigungZulBeschTeil1)
            ->setDatumRueckgabeEinziehung($datumRueckgabeEinziehung)
            ->setHinweisAusstellungZweitschrift($hinweisAusstellungZweitschrift)
            ->setDatumAusstellungZweitschrift($datumAusstellungZweitschrift)
            ->setZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1($zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1)
            ->setNaechsteHauptuntersuchung($naechsteHauptuntersuchung)
            ->setNaechsteSicherheitspruefung($naechsteSicherheitspruefung)
            ->setNaechsteAbgasuntersuchung($naechsteAbgasuntersuchung)
            ->setDruckstuecknummerZB1($druckstuecknummerZB1);
    }
    /**
     * Get NummerZulBeschTeil1 value
     * @return string|null
     */
    public function getNummerZulBeschTeil1(): ?string
    {
        return $this->NummerZulBeschTeil1;
    }
    /**
     * Set NummerZulBeschTeil1 value
     * @param string $nummerZulBeschTeil1
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;
        
        return $this;
    }
    /**
     * Get VordrucknummerZB1 value
     * @return string|null
     */
    public function getVordrucknummerZB1(): ?string
    {
        return $this->VordrucknummerZB1;
    }
    /**
     * Set VordrucknummerZB1 value
     * @param string $vordrucknummerZB1
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setVordrucknummerZB1(?string $vordrucknummerZB1 = null): self
    {
        $this->VordrucknummerZB1 = $vordrucknummerZB1;
        
        return $this;
    }
    /**
     * Get HinweisRueckgabeEinziehung value
     * @return string|null
     */
    public function getHinweisRueckgabeEinziehung(): ?string
    {
        return $this->HinweisRueckgabeEinziehung;
    }
    /**
     * Set HinweisRueckgabeEinziehung value
     * @param string $hinweisRueckgabeEinziehung
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setHinweisRueckgabeEinziehung(?string $hinweisRueckgabeEinziehung = null): self
    {
        $this->HinweisRueckgabeEinziehung = $hinweisRueckgabeEinziehung;
        
        return $this;
    }
    /**
     * Get ZeitpunktAusfertigungZulBeschTeil1 value
     * @return string|null
     */
    public function getZeitpunktAusfertigungZulBeschTeil1(): ?string
    {
        return $this->ZeitpunktAusfertigungZulBeschTeil1;
    }
    /**
     * Set ZeitpunktAusfertigungZulBeschTeil1 value
     * @param string $zeitpunktAusfertigungZulBeschTeil1
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setZeitpunktAusfertigungZulBeschTeil1(?string $zeitpunktAusfertigungZulBeschTeil1 = null): self
    {
        $this->ZeitpunktAusfertigungZulBeschTeil1 = $zeitpunktAusfertigungZulBeschTeil1;
        
        return $this;
    }
    /**
     * Get DatumRueckgabeEinziehung value
     * @return string|null
     */
    public function getDatumRueckgabeEinziehung(): ?string
    {
        return $this->DatumRueckgabeEinziehung;
    }
    /**
     * Set DatumRueckgabeEinziehung value
     * @param string $datumRueckgabeEinziehung
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setDatumRueckgabeEinziehung(?string $datumRueckgabeEinziehung = null): self
    {
        $this->DatumRueckgabeEinziehung = $datumRueckgabeEinziehung;
        
        return $this;
    }
    /**
     * Get HinweisAusstellungZweitschrift value
     * @return bool|null
     */
    public function getHinweisAusstellungZweitschrift(): ?bool
    {
        return $this->HinweisAusstellungZweitschrift;
    }
    /**
     * Set HinweisAusstellungZweitschrift value
     * @param bool $hinweisAusstellungZweitschrift
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setHinweisAusstellungZweitschrift(?bool $hinweisAusstellungZweitschrift = null): self
    {
        $this->HinweisAusstellungZweitschrift = $hinweisAusstellungZweitschrift;
        
        return $this;
    }
    /**
     * Get DatumAusstellungZweitschrift value
     * @return string|null
     */
    public function getDatumAusstellungZweitschrift(): ?string
    {
        return $this->DatumAusstellungZweitschrift;
    }
    /**
     * Set DatumAusstellungZweitschrift value
     * @param string $datumAusstellungZweitschrift
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setDatumAusstellungZweitschrift(?string $datumAusstellungZweitschrift = null): self
    {
        $this->DatumAusstellungZweitschrift = $datumAusstellungZweitschrift;
        
        return $this;
    }
    /**
     * Get ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 value
     * @return string|null
     */
    public function getZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1(): ?string
    {
        return $this->ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1;
    }
    /**
     * Set ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 value
     * @param string $zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1(?string $zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 = null): self
    {
        $this->ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 = $zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1;
        
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
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
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
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setNaechsteSicherheitspruefung(?string $naechsteSicherheitspruefung = null): self
    {
        $this->NaechsteSicherheitspruefung = $naechsteSicherheitspruefung;
        
        return $this;
    }
    /**
     * Get NaechsteAbgasuntersuchung value
     * @return string|null
     */
    public function getNaechsteAbgasuntersuchung(): ?string
    {
        return $this->NaechsteAbgasuntersuchung;
    }
    /**
     * Set NaechsteAbgasuntersuchung value
     * @param string $naechsteAbgasuntersuchung
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setNaechsteAbgasuntersuchung(?string $naechsteAbgasuntersuchung = null): self
    {
        $this->NaechsteAbgasuntersuchung = $naechsteAbgasuntersuchung;
        
        return $this;
    }
    /**
     * Get DruckstuecknummerZB1 value
     * @return string|null
     */
    public function getDruckstuecknummerZB1(): ?string
    {
        return $this->DruckstuecknummerZB1;
    }
    /**
     * Set DruckstuecknummerZB1 value
     * @param string $druckstuecknummerZB1
     * @return \THAG\XKfz\StructType\ZulassungsbescheinigungTeil1
     */
    public function setDruckstuecknummerZB1(?string $druckstuecknummerZB1 = null): self
    {
        $this->DruckstuecknummerZB1 = $druckstuecknummerZB1;
        
        return $this;
    }
}
