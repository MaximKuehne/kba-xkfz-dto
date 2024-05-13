<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Prozesshinweise StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Prozesshinweise extends AbstractStructBase
{
    /**
     * The artDesGeschaeftsvorfallsImProzess
     */
    public ?\THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess $artDesGeschaeftsvorfallsImProzess = null;

    /**
     * The verarbeitungImProzess
     */
    public ?string $verarbeitungImProzess = null;

    /**
     * The prozessschritte
     */
    public ?\THAG\XKfz\StructType\Type_Prozessschritte $prozessschritte = null;

    /**
     * The hinweiseUndBemerkungen
     */
    public ?string $hinweiseUndBemerkungen = null;

    /**
     * Constructor method for Type.Prozesshinweise
     *
     * @uses Type_Prozesshinweise::setArtDesGeschaeftsvorfallsImProzess()
     * @uses Type_Prozesshinweise::setVerarbeitungImProzess()
     * @uses Type_Prozesshinweise::setProzessschritte()
     * @uses Type_Prozesshinweise::setHinweiseUndBemerkungen()
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
     */
    public function getArtDesGeschaeftsvorfallsImProzess(): ?\THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess
    {
        return $this->artDesGeschaeftsvorfallsImProzess;
    }

    /**
     * Set artDesGeschaeftsvorfallsImProzess value
     */
    public function setArtDesGeschaeftsvorfallsImProzess(?\THAG\XKfz\StructType\Type_ArtDesGeschaeftsvorfallsImProzess $artDesGeschaeftsvorfallsImProzess = null): self
    {
        $this->artDesGeschaeftsvorfallsImProzess = $artDesGeschaeftsvorfallsImProzess;

        return $this;
    }

    /**
     * Get verarbeitungImProzess value
     */
    public function getVerarbeitungImProzess(): ?string
    {
        return $this->verarbeitungImProzess;
    }

    /**
     * Set verarbeitungImProzess value
     */
    public function setVerarbeitungImProzess(?string $verarbeitungImProzess = null): self
    {
        $this->verarbeitungImProzess = $verarbeitungImProzess;

        return $this;
    }

    /**
     * Get prozessschritte value
     */
    public function getProzessschritte(): ?\THAG\XKfz\StructType\Type_Prozessschritte
    {
        return $this->prozessschritte;
    }

    /**
     * Set prozessschritte value
     */
    public function setProzessschritte(?\THAG\XKfz\StructType\Type_Prozessschritte $prozessschritte = null): self
    {
        $this->prozessschritte = $prozessschritte;

        return $this;
    }

    /**
     * Get hinweiseUndBemerkungen value
     */
    public function getHinweiseUndBemerkungen(): ?string
    {
        return $this->hinweiseUndBemerkungen;
    }

    /**
     * Set hinweiseUndBemerkungen value
     */
    public function setHinweiseUndBemerkungen(?string $hinweiseUndBemerkungen = null): self
    {
        $this->hinweiseUndBemerkungen = $hinweiseUndBemerkungen;

        return $this;
    }
}
