<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnnexOBFCM StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnnexOBFCM extends AbstractStructBase
{
    /**
     * The energieverbrauchsdaten
     * @var \THAG\XKfz\StructType\Type_Energieverbrauchsdaten|null
     */
    public ?\THAG\XKfz\StructType\Type_Energieverbrauchsdaten $energieverbrauchsdaten = null;
    /**
     * The merkmalWiderspruchHalter
     * @var bool|null
     */
    public ?bool $merkmalWiderspruchHalter = null;
    /**
     * The merkmalNichtImAnwendungsbereich
     * @var bool|null
     */
    public ?bool $merkmalNichtImAnwendungsbereich = null;
    /**
     * The begruendungKeinOBFCM
     * @var \THAG\XKfz\StructType\Code_BegruendungKeinOBFCM|null
     */
    public ?\THAG\XKfz\StructType\Code_BegruendungKeinOBFCM $begruendungKeinOBFCM = null;
    /**
     * Constructor method for Type.AnnexOBFCM
     * @uses Type_AnnexOBFCM::setEnergieverbrauchsdaten()
     * @uses Type_AnnexOBFCM::setMerkmalWiderspruchHalter()
     * @uses Type_AnnexOBFCM::setMerkmalNichtImAnwendungsbereich()
     * @uses Type_AnnexOBFCM::setBegruendungKeinOBFCM()
     * @param \THAG\XKfz\StructType\Type_Energieverbrauchsdaten $energieverbrauchsdaten
     * @param bool $merkmalWiderspruchHalter
     * @param bool $merkmalNichtImAnwendungsbereich
     * @param \THAG\XKfz\StructType\Code_BegruendungKeinOBFCM $begruendungKeinOBFCM
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
     * @return \THAG\XKfz\StructType\Type_Energieverbrauchsdaten|null
     */
    public function getEnergieverbrauchsdaten(): ?\THAG\XKfz\StructType\Type_Energieverbrauchsdaten
    {
        return $this->energieverbrauchsdaten;
    }
    /**
     * Set energieverbrauchsdaten value
     * @param \THAG\XKfz\StructType\Type_Energieverbrauchsdaten $energieverbrauchsdaten
     * @return \THAG\XKfz\StructType\Type_AnnexOBFCM
     */
    public function setEnergieverbrauchsdaten(?\THAG\XKfz\StructType\Type_Energieverbrauchsdaten $energieverbrauchsdaten = null): self
    {
        $this->energieverbrauchsdaten = $energieverbrauchsdaten;
        
        return $this;
    }
    /**
     * Get merkmalWiderspruchHalter value
     * @return bool|null
     */
    public function getMerkmalWiderspruchHalter(): ?bool
    {
        return $this->merkmalWiderspruchHalter;
    }
    /**
     * Set merkmalWiderspruchHalter value
     * @param bool $merkmalWiderspruchHalter
     * @return \THAG\XKfz\StructType\Type_AnnexOBFCM
     */
    public function setMerkmalWiderspruchHalter(?bool $merkmalWiderspruchHalter = null): self
    {
        $this->merkmalWiderspruchHalter = $merkmalWiderspruchHalter;
        
        return $this;
    }
    /**
     * Get merkmalNichtImAnwendungsbereich value
     * @return bool|null
     */
    public function getMerkmalNichtImAnwendungsbereich(): ?bool
    {
        return $this->merkmalNichtImAnwendungsbereich;
    }
    /**
     * Set merkmalNichtImAnwendungsbereich value
     * @param bool $merkmalNichtImAnwendungsbereich
     * @return \THAG\XKfz\StructType\Type_AnnexOBFCM
     */
    public function setMerkmalNichtImAnwendungsbereich(?bool $merkmalNichtImAnwendungsbereich = null): self
    {
        $this->merkmalNichtImAnwendungsbereich = $merkmalNichtImAnwendungsbereich;
        
        return $this;
    }
    /**
     * Get begruendungKeinOBFCM value
     * @return \THAG\XKfz\StructType\Code_BegruendungKeinOBFCM|null
     */
    public function getBegruendungKeinOBFCM(): ?\THAG\XKfz\StructType\Code_BegruendungKeinOBFCM
    {
        return $this->begruendungKeinOBFCM;
    }
    /**
     * Set begruendungKeinOBFCM value
     * @param \THAG\XKfz\StructType\Code_BegruendungKeinOBFCM $begruendungKeinOBFCM
     * @return \THAG\XKfz\StructType\Type_AnnexOBFCM
     */
    public function setBegruendungKeinOBFCM(?\THAG\XKfz\StructType\Code_BegruendungKeinOBFCM $begruendungKeinOBFCM = null): self
    {
        $this->begruendungKeinOBFCM = $begruendungKeinOBFCM;
        
        return $this;
    }
}
