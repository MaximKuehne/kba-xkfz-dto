<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for antragsdaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Antragsdaten extends AbstractStructBase
{
    /**
     * The vorgangskomponente
     */
    public ?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null;

    /**
     * The zulassung
     */
    public ?\THAG\XKfz\StructType\Type_AntragsdatenZulassung $zulassung = null;

    /**
     * The aenderung
     */
    public ?\THAG\XKfz\StructType\Type_AntragsdatenAenderung $aenderung = null;

    /**
     * The ausserbetriebsetzung
     */
    public ?\THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung $ausserbetriebsetzung = null;

    /**
     * Constructor method for antragsdaten
     *
     * @uses Antragsdaten::setVorgangskomponente()
     * @uses Antragsdaten::setZulassung()
     * @uses Antragsdaten::setAenderung()
     * @uses Antragsdaten::setAusserbetriebsetzung()
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
     */
    public function getVorgangskomponente(): ?\THAG\XKfz\StructType\Type_Vorgangskomponente
    {
        return $this->vorgangskomponente;
    }

    /**
     * Set vorgangskomponente value
     */
    public function setVorgangskomponente(?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null): self
    {
        $this->vorgangskomponente = $vorgangskomponente;

        return $this;
    }

    /**
     * Get zulassung value
     */
    public function getZulassung(): ?\THAG\XKfz\StructType\Type_AntragsdatenZulassung
    {
        return $this->zulassung;
    }

    /**
     * Set zulassung value
     */
    public function setZulassung(?\THAG\XKfz\StructType\Type_AntragsdatenZulassung $zulassung = null): self
    {
        $this->zulassung = $zulassung;

        return $this;
    }

    /**
     * Get aenderung value
     */
    public function getAenderung(): ?\THAG\XKfz\StructType\Type_AntragsdatenAenderung
    {
        return $this->aenderung;
    }

    /**
     * Set aenderung value
     */
    public function setAenderung(?\THAG\XKfz\StructType\Type_AntragsdatenAenderung $aenderung = null): self
    {
        $this->aenderung = $aenderung;

        return $this;
    }

    /**
     * Get ausserbetriebsetzung value
     */
    public function getAusserbetriebsetzung(): ?\THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung
    {
        return $this->ausserbetriebsetzung;
    }

    /**
     * Set ausserbetriebsetzung value
     */
    public function setAusserbetriebsetzung(?\THAG\XKfz\StructType\Type_AntragsdatenAusserbetriebsetzung $ausserbetriebsetzung = null): self
    {
        $this->ausserbetriebsetzung = $ausserbetriebsetzung;

        return $this;
    }
}
