<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAntragsbearbeitung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAntragsbearbeitung extends AbstractStructBase
{
    /**
     * The AntragPlausibel
     */
    public ?string $AntragPlausibel = null;

    /**
     * The merkmalInternetbasiert
     */
    public ?bool $merkmalInternetbasiert = null;

    /**
     * The bearbeitungsart
     */
    public ?\THAG\XKfz\StructType\Code_Bearbeitungsart $bearbeitungsart = null;

    /**
     * The merkmalGrosskundenantrag
     */
    public ?bool $merkmalGrosskundenantrag = null;

    /**
     * The merkmalStichprobe
     */
    public ?bool $merkmalStichprobe = null;

    /**
     * The datumWirksamkeit
     */
    public ?string $datumWirksamkeit = null;

    /**
     * The merkmalWunschkennzeichen
     */
    public ?bool $merkmalWunschkennzeichen = null;

    /**
     * The Arbeitsgang
     */
    public ?string $Arbeitsgang = null;

    /**
     * Constructor method for Type.VorgangskomponenteAntragsbearbeitung
     *
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setAntragPlausibel()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalInternetbasiert()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setBearbeitungsart()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalGrosskundenantrag()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalStichprobe()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setDatumWirksamkeit()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalWunschkennzeichen()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setArbeitsgang()
     */
    public function __construct(?string $antragPlausibel = null, ?bool $merkmalInternetbasiert = null, ?\THAG\XKfz\StructType\Code_Bearbeitungsart $bearbeitungsart = null, ?bool $merkmalGrosskundenantrag = null, ?bool $merkmalStichprobe = null, ?string $datumWirksamkeit = null, ?bool $merkmalWunschkennzeichen = null, ?string $arbeitsgang = null)
    {
        $this
            ->setAntragPlausibel($antragPlausibel)
            ->setMerkmalInternetbasiert($merkmalInternetbasiert)
            ->setBearbeitungsart($bearbeitungsart)
            ->setMerkmalGrosskundenantrag($merkmalGrosskundenantrag)
            ->setMerkmalStichprobe($merkmalStichprobe)
            ->setDatumWirksamkeit($datumWirksamkeit)
            ->setMerkmalWunschkennzeichen($merkmalWunschkennzeichen)
            ->setArbeitsgang($arbeitsgang);
    }

    /**
     * Get AntragPlausibel value
     */
    public function getAntragPlausibel(): ?string
    {
        return $this->AntragPlausibel;
    }

    /**
     * Set AntragPlausibel value
     */
    public function setAntragPlausibel(?string $antragPlausibel = null): self
    {
        $this->AntragPlausibel = $antragPlausibel;

        return $this;
    }

    /**
     * Get merkmalInternetbasiert value
     */
    public function getMerkmalInternetbasiert(): ?bool
    {
        return $this->merkmalInternetbasiert;
    }

    /**
     * Set merkmalInternetbasiert value
     */
    public function setMerkmalInternetbasiert(?bool $merkmalInternetbasiert = null): self
    {
        $this->merkmalInternetbasiert = $merkmalInternetbasiert;

        return $this;
    }

    /**
     * Get bearbeitungsart value
     */
    public function getBearbeitungsart(): ?\THAG\XKfz\StructType\Code_Bearbeitungsart
    {
        return $this->bearbeitungsart;
    }

    /**
     * Set bearbeitungsart value
     */
    public function setBearbeitungsart(?\THAG\XKfz\StructType\Code_Bearbeitungsart $bearbeitungsart = null): self
    {
        $this->bearbeitungsart = $bearbeitungsart;

        return $this;
    }

    /**
     * Get merkmalGrosskundenantrag value
     */
    public function getMerkmalGrosskundenantrag(): ?bool
    {
        return $this->merkmalGrosskundenantrag;
    }

    /**
     * Set merkmalGrosskundenantrag value
     */
    public function setMerkmalGrosskundenantrag(?bool $merkmalGrosskundenantrag = null): self
    {
        $this->merkmalGrosskundenantrag = $merkmalGrosskundenantrag;

        return $this;
    }

    /**
     * Get merkmalStichprobe value
     */
    public function getMerkmalStichprobe(): ?bool
    {
        return $this->merkmalStichprobe;
    }

    /**
     * Set merkmalStichprobe value
     */
    public function setMerkmalStichprobe(?bool $merkmalStichprobe = null): self
    {
        $this->merkmalStichprobe = $merkmalStichprobe;

        return $this;
    }

    /**
     * Get datumWirksamkeit value
     */
    public function getDatumWirksamkeit(): ?string
    {
        return $this->datumWirksamkeit;
    }

    /**
     * Set datumWirksamkeit value
     */
    public function setDatumWirksamkeit(?string $datumWirksamkeit = null): self
    {
        $this->datumWirksamkeit = $datumWirksamkeit;

        return $this;
    }

    /**
     * Get merkmalWunschkennzeichen value
     */
    public function getMerkmalWunschkennzeichen(): ?bool
    {
        return $this->merkmalWunschkennzeichen;
    }

    /**
     * Set merkmalWunschkennzeichen value
     */
    public function setMerkmalWunschkennzeichen(?bool $merkmalWunschkennzeichen = null): self
    {
        $this->merkmalWunschkennzeichen = $merkmalWunschkennzeichen;

        return $this;
    }

    /**
     * Get Arbeitsgang value
     */
    public function getArbeitsgang(): ?string
    {
        return $this->Arbeitsgang;
    }

    /**
     * Set Arbeitsgang value
     */
    public function setArbeitsgang(?string $arbeitsgang = null): self
    {
        $this->Arbeitsgang = $arbeitsgang;

        return $this;
    }
}
