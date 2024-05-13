<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AuskunftZulBeschTeil2Vorhanden StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AuskunftZulBeschTeil2Vorhanden extends AbstractStructBase
{
    /**
     * The merkmalZB2Vorhanden
     * @var bool|null
     */
    public ?bool $merkmalZB2Vorhanden = null;
    /**
     * The antwort
     * @var string|null
     */
    public ?string $antwort = null;
    /**
     * The eingangsdatum
     * @var string|null
     */
    public ?string $eingangsdatum = null;
    /**
     * The aktenzeichen
     * @var string|null
     */
    public ?string $aktenzeichen = null;
    /**
     * The vertragsnummer
     * @var string|null
     */
    public ?string $vertragsnummer = null;
    /**
     * The ausgangsdatum
     * @var string|null
     */
    public ?string $ausgangsdatum = null;
    /**
     * The hinweis
     * @var string|null
     */
    public ?string $hinweis = null;
    /**
     * The ablageort
     * @var string|null
     */
    public ?string $ablageort = null;
    /**
     * Constructor method for Type.AuskunftZulBeschTeil2Vorhanden
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setMerkmalZB2Vorhanden()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAntwort()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setEingangsdatum()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAktenzeichen()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setVertragsnummer()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAusgangsdatum()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setHinweis()
     * @uses Type_AuskunftZulBeschTeil2Vorhanden::setAblageort()
     * @param bool $merkmalZB2Vorhanden
     * @param string $antwort
     * @param string $eingangsdatum
     * @param string $aktenzeichen
     * @param string $vertragsnummer
     * @param string $ausgangsdatum
     * @param string $hinweis
     * @param string $ablageort
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
     * @return bool|null
     */
    public function getMerkmalZB2Vorhanden(): ?bool
    {
        return $this->merkmalZB2Vorhanden;
    }
    /**
     * Set merkmalZB2Vorhanden value
     * @param bool $merkmalZB2Vorhanden
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setMerkmalZB2Vorhanden(?bool $merkmalZB2Vorhanden = null): self
    {
        $this->merkmalZB2Vorhanden = $merkmalZB2Vorhanden;
        
        return $this;
    }
    /**
     * Get antwort value
     * @return string|null
     */
    public function getAntwort(): ?string
    {
        return $this->antwort;
    }
    /**
     * Set antwort value
     * @param string $antwort
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setAntwort(?string $antwort = null): self
    {
        $this->antwort = $antwort;
        
        return $this;
    }
    /**
     * Get eingangsdatum value
     * @return string|null
     */
    public function getEingangsdatum(): ?string
    {
        return $this->eingangsdatum;
    }
    /**
     * Set eingangsdatum value
     * @param string $eingangsdatum
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setEingangsdatum(?string $eingangsdatum = null): self
    {
        $this->eingangsdatum = $eingangsdatum;
        
        return $this;
    }
    /**
     * Get aktenzeichen value
     * @return string|null
     */
    public function getAktenzeichen(): ?string
    {
        return $this->aktenzeichen;
    }
    /**
     * Set aktenzeichen value
     * @param string $aktenzeichen
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setAktenzeichen(?string $aktenzeichen = null): self
    {
        $this->aktenzeichen = $aktenzeichen;
        
        return $this;
    }
    /**
     * Get vertragsnummer value
     * @return string|null
     */
    public function getVertragsnummer(): ?string
    {
        return $this->vertragsnummer;
    }
    /**
     * Set vertragsnummer value
     * @param string $vertragsnummer
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setVertragsnummer(?string $vertragsnummer = null): self
    {
        $this->vertragsnummer = $vertragsnummer;
        
        return $this;
    }
    /**
     * Get ausgangsdatum value
     * @return string|null
     */
    public function getAusgangsdatum(): ?string
    {
        return $this->ausgangsdatum;
    }
    /**
     * Set ausgangsdatum value
     * @param string $ausgangsdatum
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setAusgangsdatum(?string $ausgangsdatum = null): self
    {
        $this->ausgangsdatum = $ausgangsdatum;
        
        return $this;
    }
    /**
     * Get hinweis value
     * @return string|null
     */
    public function getHinweis(): ?string
    {
        return $this->hinweis;
    }
    /**
     * Set hinweis value
     * @param string $hinweis
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setHinweis(?string $hinweis = null): self
    {
        $this->hinweis = $hinweis;
        
        return $this;
    }
    /**
     * Get ablageort value
     * @return string|null
     */
    public function getAblageort(): ?string
    {
        return $this->ablageort;
    }
    /**
     * Set ablageort value
     * @param string $ablageort
     * @return \THAG\XKfz\StructType\Type_AuskunftZulBeschTeil2Vorhanden
     */
    public function setAblageort(?string $ablageort = null): self
    {
        $this->ablageort = $ablageort;
        
        return $this;
    }
}
