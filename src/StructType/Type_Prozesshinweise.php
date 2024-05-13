<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Prozesshinweise StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Prozesshinweise extends AbstractStructBase
{
    /**
     * The artDesGeschaeftsvorfallsImProzess
     * @var \THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess|null
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess $artDesGeschaeftsvorfallsImProzess = null;
    /**
     * The verarbeitungImProzess
     * @var string|null
     */
    public ?string $verarbeitungImProzess = null;
    /**
     * The prozessschritte
     * @var \THAG\XKfz\StructType\Type_Prozessschritte|null
     */
    public ?\THAG\XKfz\StructType\Type_Prozessschritte $prozessschritte = null;
    /**
     * The hinweiseUndBemerkungen
     * @var string|null
     */
    public ?string $hinweiseUndBemerkungen = null;
    /**
     * Constructor method for Type.Prozesshinweise
     * @uses Type_Prozesshinweise::setArtDesGeschaeftsvorfallsImProzess()
     * @uses Type_Prozesshinweise::setVerarbeitungImProzess()
     * @uses Type_Prozesshinweise::setProzessschritte()
     * @uses Type_Prozesshinweise::setHinweiseUndBemerkungen()
     * @param \THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess $artDesGeschaeftsvorfallsImProzess
     * @param string $verarbeitungImProzess
     * @param \THAG\XKfz\StructType\Type_Prozessschritte $prozessschritte
     * @param string $hinweiseUndBemerkungen
     */
    public function __construct(?\THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess $artDesGeschaeftsvorfallsImProzess = null, ?string $verarbeitungImProzess = null, ?\THAG\XKfz\StructType\Type_Prozessschritte $prozessschritte = null, ?string $hinweiseUndBemerkungen = null)
    {
        $this
            ->setArtDesGeschaeftsvorfallsImProzess($artDesGeschaeftsvorfallsImProzess)
            ->setVerarbeitungImProzess($verarbeitungImProzess)
            ->setProzessschritte($prozessschritte)
            ->setHinweiseUndBemerkungen($hinweiseUndBemerkungen);
    }
    /**
     * Get artDesGeschaeftsvorfallsImProzess value
     * @return \THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess|null
     */
    public function getArtDesGeschaeftsvorfallsImProzess(): ?\THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess
    {
        return $this->artDesGeschaeftsvorfallsImProzess;
    }
    /**
     * Set artDesGeschaeftsvorfallsImProzess value
     * @param \THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess $artDesGeschaeftsvorfallsImProzess
     * @return \THAG\XKfz\StructType\Type_Prozesshinweise
     */
    public function setArtDesGeschaeftsvorfallsImProzess(?\THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess $artDesGeschaeftsvorfallsImProzess = null): self
    {
        $this->artDesGeschaeftsvorfallsImProzess = $artDesGeschaeftsvorfallsImProzess;
        
        return $this;
    }
    /**
     * Get verarbeitungImProzess value
     * @return string|null
     */
    public function getVerarbeitungImProzess(): ?string
    {
        return $this->verarbeitungImProzess;
    }
    /**
     * Set verarbeitungImProzess value
     * @param string $verarbeitungImProzess
     * @return \THAG\XKfz\StructType\Type_Prozesshinweise
     */
    public function setVerarbeitungImProzess(?string $verarbeitungImProzess = null): self
    {
        $this->verarbeitungImProzess = $verarbeitungImProzess;
        
        return $this;
    }
    /**
     * Get prozessschritte value
     * @return \THAG\XKfz\StructType\Type_Prozessschritte|null
     */
    public function getProzessschritte(): ?\THAG\XKfz\StructType\Type_Prozessschritte
    {
        return $this->prozessschritte;
    }
    /**
     * Set prozessschritte value
     * @param \THAG\XKfz\StructType\Type_Prozessschritte $prozessschritte
     * @return \THAG\XKfz\StructType\Type_Prozesshinweise
     */
    public function setProzessschritte(?\THAG\XKfz\StructType\Type_Prozessschritte $prozessschritte = null): self
    {
        $this->prozessschritte = $prozessschritte;
        
        return $this;
    }
    /**
     * Get hinweiseUndBemerkungen value
     * @return string|null
     */
    public function getHinweiseUndBemerkungen(): ?string
    {
        return $this->hinweiseUndBemerkungen;
    }
    /**
     * Set hinweiseUndBemerkungen value
     * @param string $hinweiseUndBemerkungen
     * @return \THAG\XKfz\StructType\Type_Prozesshinweise
     */
    public function setHinweiseUndBemerkungen(?string $hinweiseUndBemerkungen = null): self
    {
        $this->hinweiseUndBemerkungen = $hinweiseUndBemerkungen;
        
        return $this;
    }
}
