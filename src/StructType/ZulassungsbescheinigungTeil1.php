<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZulassungsbescheinigungTeil1 StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ZulassungsbescheinigungTeil1 extends AbstractStructBase
{
    /**
     * The NummerZulBeschTeil1
     */
    public ?string $NummerZulBeschTeil1 = null;

    /**
     * The VordrucknummerZB1
     */
    public ?string $VordrucknummerZB1 = null;

    /**
     * The HinweisRueckgabeEinziehung
     */
    public ?string $HinweisRueckgabeEinziehung = null;

    /**
     * The ZeitpunktAusfertigungZulBeschTeil1
     */
    public ?string $ZeitpunktAusfertigungZulBeschTeil1 = null;

    /**
     * The DatumRueckgabeEinziehung
     */
    public ?string $DatumRueckgabeEinziehung = null;

    /**
     * The HinweisAusstellungZweitschrift
     */
    public ?bool $HinweisAusstellungZweitschrift = null;

    /**
     * The DatumAusstellungZweitschrift
     */
    public ?string $DatumAusstellungZweitschrift = null;

    /**
     * The ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1
     */
    public ?string $ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 = null;

    /**
     * The NaechsteHauptuntersuchung
     */
    public ?string $NaechsteHauptuntersuchung = null;

    /**
     * The NaechsteSicherheitspruefung
     */
    public ?string $NaechsteSicherheitspruefung = null;

    /**
     * The NaechsteAbgasuntersuchung
     */
    public ?string $NaechsteAbgasuntersuchung = null;

    /**
     * The DruckstuecknummerZB1
     */
    public ?string $DruckstuecknummerZB1 = null;

    /**
     * Constructor method for ZulassungsbescheinigungTeil1
     *
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
     */
    public function getNummerZulBeschTeil1(): ?string
    {
        return $this->NummerZulBeschTeil1;
    }

    /**
     * Set NummerZulBeschTeil1 value
     */
    public function setNummerZulBeschTeil1(?string $nummerZulBeschTeil1 = null): self
    {
        $this->NummerZulBeschTeil1 = $nummerZulBeschTeil1;

        return $this;
    }

    /**
     * Get VordrucknummerZB1 value
     */
    public function getVordrucknummerZB1(): ?string
    {
        return $this->VordrucknummerZB1;
    }

    /**
     * Set VordrucknummerZB1 value
     */
    public function setVordrucknummerZB1(?string $vordrucknummerZB1 = null): self
    {
        $this->VordrucknummerZB1 = $vordrucknummerZB1;

        return $this;
    }

    /**
     * Get HinweisRueckgabeEinziehung value
     */
    public function getHinweisRueckgabeEinziehung(): ?string
    {
        return $this->HinweisRueckgabeEinziehung;
    }

    /**
     * Set HinweisRueckgabeEinziehung value
     */
    public function setHinweisRueckgabeEinziehung(?string $hinweisRueckgabeEinziehung = null): self
    {
        $this->HinweisRueckgabeEinziehung = $hinweisRueckgabeEinziehung;

        return $this;
    }

    /**
     * Get ZeitpunktAusfertigungZulBeschTeil1 value
     */
    public function getZeitpunktAusfertigungZulBeschTeil1(): ?string
    {
        return $this->ZeitpunktAusfertigungZulBeschTeil1;
    }

    /**
     * Set ZeitpunktAusfertigungZulBeschTeil1 value
     */
    public function setZeitpunktAusfertigungZulBeschTeil1(?string $zeitpunktAusfertigungZulBeschTeil1 = null): self
    {
        $this->ZeitpunktAusfertigungZulBeschTeil1 = $zeitpunktAusfertigungZulBeschTeil1;

        return $this;
    }

    /**
     * Get DatumRueckgabeEinziehung value
     */
    public function getDatumRueckgabeEinziehung(): ?string
    {
        return $this->DatumRueckgabeEinziehung;
    }

    /**
     * Set DatumRueckgabeEinziehung value
     */
    public function setDatumRueckgabeEinziehung(?string $datumRueckgabeEinziehung = null): self
    {
        $this->DatumRueckgabeEinziehung = $datumRueckgabeEinziehung;

        return $this;
    }

    /**
     * Get HinweisAusstellungZweitschrift value
     */
    public function getHinweisAusstellungZweitschrift(): ?bool
    {
        return $this->HinweisAusstellungZweitschrift;
    }

    /**
     * Set HinweisAusstellungZweitschrift value
     */
    public function setHinweisAusstellungZweitschrift(?bool $hinweisAusstellungZweitschrift = null): self
    {
        $this->HinweisAusstellungZweitschrift = $hinweisAusstellungZweitschrift;

        return $this;
    }

    /**
     * Get DatumAusstellungZweitschrift value
     */
    public function getDatumAusstellungZweitschrift(): ?string
    {
        return $this->DatumAusstellungZweitschrift;
    }

    /**
     * Set DatumAusstellungZweitschrift value
     */
    public function setDatumAusstellungZweitschrift(?string $datumAusstellungZweitschrift = null): self
    {
        $this->DatumAusstellungZweitschrift = $datumAusstellungZweitschrift;

        return $this;
    }

    /**
     * Get ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 value
     */
    public function getZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1(): ?string
    {
        return $this->ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1;
    }

    /**
     * Set ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 value
     */
    public function setZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1(?string $zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 = null): self
    {
        $this->ZeitpunktEintragungAusserbetriebsetzungZulBeschTeil1 = $zeitpunktEintragungAusserbetriebsetzungZulBeschTeil1;

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
     * Get NaechsteAbgasuntersuchung value
     */
    public function getNaechsteAbgasuntersuchung(): ?string
    {
        return $this->NaechsteAbgasuntersuchung;
    }

    /**
     * Set NaechsteAbgasuntersuchung value
     */
    public function setNaechsteAbgasuntersuchung(?string $naechsteAbgasuntersuchung = null): self
    {
        $this->NaechsteAbgasuntersuchung = $naechsteAbgasuntersuchung;

        return $this;
    }

    /**
     * Get DruckstuecknummerZB1 value
     */
    public function getDruckstuecknummerZB1(): ?string
    {
        return $this->DruckstuecknummerZB1;
    }

    /**
     * Set DruckstuecknummerZB1 value
     */
    public function setDruckstuecknummerZB1(?string $druckstuecknummerZB1 = null): self
    {
        $this->DruckstuecknummerZB1 = $druckstuecknummerZB1;

        return $this;
    }
}
