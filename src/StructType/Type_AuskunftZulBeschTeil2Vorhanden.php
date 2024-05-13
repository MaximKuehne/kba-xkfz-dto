<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftZulBeschTeil2Vorhanden StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftZulBeschTeil2Vorhanden extends AbstractStructBase
{
    /**
     * The merkmalZB2Vorhanden
     */
    public ?bool $merkmalZB2Vorhanden = null;

    /**
     * The antwort
     */
    public ?string $antwort = null;

    /**
     * The eingangsdatum
     */
    public ?string $eingangsdatum = null;

    /**
     * The aktenzeichen
     */
    public ?string $aktenzeichen = null;

    /**
     * The vertragsnummer
     */
    public ?string $vertragsnummer = null;

    /**
     * The ausgangsdatum
     */
    public ?string $ausgangsdatum = null;

    /**
     * The hinweis
     */
    public ?string $hinweis = null;

    /**
     * The ablageort
     */
    public ?string $ablageort = null;

    /**
     * Constructor method for Type.AuskunftZulBeschTeil2Vorhanden
     *
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setMerkmalZB2Vorhanden()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAntwort()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setEingangsdatum()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAktenzeichen()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setVertragsnummer()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAusgangsdatum()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setHinweis()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAblageort()
     */
    public function __construct(?bool $merkmalZB2Vorhanden = null, ?string $antwort = null, ?string $eingangsdatum = null, ?string $aktenzeichen = null, ?string $vertragsnummer = null, ?string $ausgangsdatum = null, ?string $hinweis = null, ?string $ablageort = null)
    {
        $this
            ->setMerkmalZB2Vorhanden($merkmalZB2Vorhanden)
            ->setAntwort($antwort)
            ->setEingangsdatum($eingangsdatum)
            ->setAktenzeichen($aktenzeichen)
            ->setVertragsnummer($vertragsnummer)
            ->setAusgangsdatum($ausgangsdatum)
            ->setHinweis($hinweis)
            ->setAblageort($ablageort);
    }

    /**
     * Get merkmalZB2Vorhanden value
     */
    public function getMerkmalZB2Vorhanden(): ?bool
    {
        return $this->merkmalZB2Vorhanden;
    }

    /**
     * Set merkmalZB2Vorhanden value
     */
    public function setMerkmalZB2Vorhanden(?bool $merkmalZB2Vorhanden = null): self
    {
        $this->merkmalZB2Vorhanden = $merkmalZB2Vorhanden;

        return $this;
    }

    /**
     * Get antwort value
     */
    public function getAntwort(): ?string
    {
        return $this->antwort;
    }

    /**
     * Set antwort value
     */
    public function setAntwort(?string $antwort = null): self
    {
        $this->antwort = $antwort;

        return $this;
    }

    /**
     * Get eingangsdatum value
     */
    public function getEingangsdatum(): ?string
    {
        return $this->eingangsdatum;
    }

    /**
     * Set eingangsdatum value
     */
    public function setEingangsdatum(?string $eingangsdatum = null): self
    {
        $this->eingangsdatum = $eingangsdatum;

        return $this;
    }

    /**
     * Get aktenzeichen value
     */
    public function getAktenzeichen(): ?string
    {
        return $this->aktenzeichen;
    }

    /**
     * Set aktenzeichen value
     */
    public function setAktenzeichen(?string $aktenzeichen = null): self
    {
        $this->aktenzeichen = $aktenzeichen;

        return $this;
    }

    /**
     * Get vertragsnummer value
     */
    public function getVertragsnummer(): ?string
    {
        return $this->vertragsnummer;
    }

    /**
     * Set vertragsnummer value
     */
    public function setVertragsnummer(?string $vertragsnummer = null): self
    {
        $this->vertragsnummer = $vertragsnummer;

        return $this;
    }

    /**
     * Get ausgangsdatum value
     */
    public function getAusgangsdatum(): ?string
    {
        return $this->ausgangsdatum;
    }

    /**
     * Set ausgangsdatum value
     */
    public function setAusgangsdatum(?string $ausgangsdatum = null): self
    {
        $this->ausgangsdatum = $ausgangsdatum;

        return $this;
    }

    /**
     * Get hinweis value
     */
    public function getHinweis(): ?string
    {
        return $this->hinweis;
    }

    /**
     * Set hinweis value
     */
    public function setHinweis(?string $hinweis = null): self
    {
        $this->hinweis = $hinweis;

        return $this;
    }

    /**
     * Get ablageort value
     */
    public function getAblageort(): ?string
    {
        return $this->ablageort;
    }

    /**
     * Set ablageort value
     */
    public function setAblageort(?string $ablageort = null): self
    {
        $this->ablageort = $ablageort;

        return $this;
    }
}
