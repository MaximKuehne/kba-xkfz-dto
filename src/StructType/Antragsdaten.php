<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for antragsdaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Antragsdaten extends AbstractStructBase
{
    /**
     * The vorgangskomponente
     * @var \THAG\XKfz\StructType\Type_Vorgangskomponente|null
     */
    public ?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null;
    /**
     * The zulassung
     * @var \THAG\XKfz\StructType\Type_AntragsdatenZulassung|null
     */
    public ?\THAG\XKfz\StructType\Type_AntragsdatenZulassung $zulassung = null;
    /**
     * The aenderung
     * @var \THAG\XKfz\StructType\Type_AntragsdatenAenderung|null
     */
    public ?\THAG\XKfz\StructType\Type_AntragsdatenAenderung $aenderung = null;
    /**
     * The ausserbetriebsetzung
     * @var \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung|null
     */
    public ?\THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung $ausserbetriebsetzung = null;
    /**
     * Constructor method for antragsdaten
     * @uses Antragsdaten::setVorgangskomponente()
     * @uses Antragsdaten::setZulassung()
     * @uses Antragsdaten::setAenderung()
     * @uses Antragsdaten::setAusserbetriebsetzung()
     * @param \THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente
     * @param \THAG\XKfz\StructType\Type_AntragsdatenZulassung $zulassung
     * @param \THAG\XKfz\StructType\Type_AntragsdatenAenderung $aenderung
     * @param \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung $ausserbetriebsetzung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null, ?\THAG\XKfz\StructType\Type_AntragsdatenZulassung $zulassung = null, ?\THAG\XKfz\StructType\Type_AntragsdatenAenderung $aenderung = null, ?\THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung $ausserbetriebsetzung = null)
    {
        $this
            ->setVorgangskomponente($vorgangskomponente)
            ->setZulassung($zulassung)
            ->setAenderung($aenderung)
            ->setAusserbetriebsetzung($ausserbetriebsetzung);
    }
    /**
     * Get vorgangskomponente value
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente|null
     */
    public function getVorgangskomponente(): ?\THAG\XKfz\StructType\Type_Vorgangskomponente
    {
        return $this->vorgangskomponente;
    }
    /**
     * Set vorgangskomponente value
     * @param \THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente
     * @return \THAG\XKfz\StructType\Antragsdaten
     */
    public function setVorgangskomponente(?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null): self
    {
        $this->vorgangskomponente = $vorgangskomponente;
        
        return $this;
    }
    /**
     * Get zulassung value
     * @return \THAG\XKfz\StructType\Type_AntragsdatenZulassung|null
     */
    public function getZulassung(): ?\THAG\XKfz\StructType\Type_AntragsdatenZulassung
    {
        return $this->zulassung;
    }
    /**
     * Set zulassung value
     * @param \THAG\XKfz\StructType\Type_AntragsdatenZulassung $zulassung
     * @return \THAG\XKfz\StructType\Antragsdaten
     */
    public function setZulassung(?\THAG\XKfz\StructType\Type_AntragsdatenZulassung $zulassung = null): self
    {
        $this->zulassung = $zulassung;
        
        return $this;
    }
    /**
     * Get aenderung value
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAenderung|null
     */
    public function getAenderung(): ?\THAG\XKfz\StructType\Type_AntragsdatenAenderung
    {
        return $this->aenderung;
    }
    /**
     * Set aenderung value
     * @param \THAG\XKfz\StructType\Type_AntragsdatenAenderung $aenderung
     * @return \THAG\XKfz\StructType\Antragsdaten
     */
    public function setAenderung(?\THAG\XKfz\StructType\Type_AntragsdatenAenderung $aenderung = null): self
    {
        $this->aenderung = $aenderung;
        
        return $this;
    }
    /**
     * Get ausserbetriebsetzung value
     * @return \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung|null
     */
    public function getAusserbetriebsetzung(): ?\THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
    {
        return $this->ausserbetriebsetzung;
    }
    /**
     * Set ausserbetriebsetzung value
     * @param \THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung $ausserbetriebsetzung
     * @return \THAG\XKfz\StructType\Antragsdaten
     */
    public function setAusserbetriebsetzung(?\THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung $ausserbetriebsetzung = null): self
    {
        $this->ausserbetriebsetzung = $ausserbetriebsetzung;
        
        return $this;
    }
}
