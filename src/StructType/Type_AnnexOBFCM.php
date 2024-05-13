<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnnexOBFCM StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnnexOBFCM extends AbstractStructBase
{
    /**
     * The energieverbrauchsdaten
     */
    public ?\THAG\XKfz\StructType\Type_Energieverbrauchsdaten $energieverbrauchsdaten = null;

    /**
     * The merkmalWiderspruchHalter
     */
    public ?bool $merkmalWiderspruchHalter = null;

    /**
     * The merkmalNichtImAnwendungsbereich
     */
    public ?bool $merkmalNichtImAnwendungsbereich = null;

    /**
     * The begruendungKeinOBFCM
     */
    public ?\THAG\XKfz\StructType\Code_BegruendungKeinOBFCM $begruendungKeinOBFCM = null;

    /**
     * Constructor method for Type.AnnexOBFCM
     *
     * @uses Type_AnnexOBFCM::setEnergieverbrauchsdaten()
     * @uses Type_AnnexOBFCM::setMerkmalWiderspruchHalter()
     * @uses Type_AnnexOBFCM::setMerkmalNichtImAnwendungsbereich()
     * @uses Type_AnnexOBFCM::setBegruendungKeinOBFCM()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Energieverbrauchsdaten $energieverbrauchsdaten = null, ?bool $merkmalWiderspruchHalter = null, ?bool $merkmalNichtImAnwendungsbereich = null, ?\THAG\XKfz\StructType\Code_BegruendungKeinOBFCM $begruendungKeinOBFCM = null)
    {
        $this
            ->setEnergieverbrauchsdaten($energieverbrauchsdaten)
            ->setMerkmalWiderspruchHalter($merkmalWiderspruchHalter)
            ->setMerkmalNichtImAnwendungsbereich($merkmalNichtImAnwendungsbereich)
            ->setBegruendungKeinOBFCM($begruendungKeinOBFCM);
    }

    /**
     * Get energieverbrauchsdaten value
     */
    public function getEnergieverbrauchsdaten(): ?\THAG\XKfz\StructType\Type_Energieverbrauchsdaten
    {
        return $this->energieverbrauchsdaten;
    }

    /**
     * Set energieverbrauchsdaten value
     */
    public function setEnergieverbrauchsdaten(?\THAG\XKfz\StructType\Type_Energieverbrauchsdaten $energieverbrauchsdaten = null): self
    {
        $this->energieverbrauchsdaten = $energieverbrauchsdaten;

        return $this;
    }

    /**
     * Get merkmalWiderspruchHalter value
     */
    public function getMerkmalWiderspruchHalter(): ?bool
    {
        return $this->merkmalWiderspruchHalter;
    }

    /**
     * Set merkmalWiderspruchHalter value
     */
    public function setMerkmalWiderspruchHalter(?bool $merkmalWiderspruchHalter = null): self
    {
        $this->merkmalWiderspruchHalter = $merkmalWiderspruchHalter;

        return $this;
    }

    /**
     * Get merkmalNichtImAnwendungsbereich value
     */
    public function getMerkmalNichtImAnwendungsbereich(): ?bool
    {
        return $this->merkmalNichtImAnwendungsbereich;
    }

    /**
     * Set merkmalNichtImAnwendungsbereich value
     */
    public function setMerkmalNichtImAnwendungsbereich(?bool $merkmalNichtImAnwendungsbereich = null): self
    {
        $this->merkmalNichtImAnwendungsbereich = $merkmalNichtImAnwendungsbereich;

        return $this;
    }

    /**
     * Get begruendungKeinOBFCM value
     */
    public function getBegruendungKeinOBFCM(): ?\THAG\XKfz\StructType\Code_BegruendungKeinOBFCM
    {
        return $this->begruendungKeinOBFCM;
    }

    /**
     * Set begruendungKeinOBFCM value
     */
    public function setBegruendungKeinOBFCM(?\THAG\XKfz\StructType\Code_BegruendungKeinOBFCM $begruendungKeinOBFCM = null): self
    {
        $this->begruendungKeinOBFCM = $begruendungKeinOBFCM;

        return $this;
    }
}
