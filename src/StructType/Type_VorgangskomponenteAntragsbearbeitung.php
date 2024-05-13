<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAntragsbearbeitung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAntragsbearbeitung extends AbstractStructBase
{
    /**
     * The AntragPlausibel
     * @var string|null
     */
    public ?string $AntragPlausibel = null;
    /**
     * The merkmalInternetbasiert
     * @var bool|null
     */
    public ?bool $merkmalInternetbasiert = null;
    /**
     * The bearbeitungsart
     * @var \THAG\XKfz\StructType\Code_Bearbeitungsart|null
     */
    public ?\THAG\XKfz\StructType\Code_Bearbeitungsart $bearbeitungsart = null;
    /**
     * The merkmalGrosskundenantrag
     * @var bool|null
     */
    public ?bool $merkmalGrosskundenantrag = null;
    /**
     * The merkmalStichprobe
     * @var bool|null
     */
    public ?bool $merkmalStichprobe = null;
    /**
     * The datumWirksamkeit
     * @var string|null
     */
    public ?string $datumWirksamkeit = null;
    /**
     * The merkmalWunschkennzeichen
     * @var bool|null
     */
    public ?bool $merkmalWunschkennzeichen = null;
    /**
     * The Arbeitsgang
     * @var string|null
     */
    public ?string $Arbeitsgang = null;
    /**
     * Constructor method for Type.VorgangskomponenteAntragsbearbeitung
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setAntragPlausibel()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalInternetbasiert()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setBearbeitungsart()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalGrosskundenantrag()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalStichprobe()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setDatumWirksamkeit()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setMerkmalWunschkennzeichen()
     * @uses Type_VorgangskomponenteAntragsbearbeitung::setArbeitsgang()
     * @param string $antragPlausibel
     * @param bool $merkmalInternetbasiert
     * @param \THAG\XKfz\StructType\Code_Bearbeitungsart $bearbeitungsart
     * @param bool $merkmalGrosskundenantrag
     * @param bool $merkmalStichprobe
     * @param string $datumWirksamkeit
     * @param bool $merkmalWunschkennzeichen
     * @param string $arbeitsgang
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
     * @return string|null
     */
    public function getAntragPlausibel(): ?string
    {
        return $this->AntragPlausibel;
    }
    /**
     * Set AntragPlausibel value
     * @param string $antragPlausibel
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setAntragPlausibel(?string $antragPlausibel = null): self
    {
        $this->AntragPlausibel = $antragPlausibel;
        
        return $this;
    }
    /**
     * Get merkmalInternetbasiert value
     * @return bool|null
     */
    public function getMerkmalInternetbasiert(): ?bool
    {
        return $this->merkmalInternetbasiert;
    }
    /**
     * Set merkmalInternetbasiert value
     * @param bool $merkmalInternetbasiert
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setMerkmalInternetbasiert(?bool $merkmalInternetbasiert = null): self
    {
        $this->merkmalInternetbasiert = $merkmalInternetbasiert;
        
        return $this;
    }
    /**
     * Get bearbeitungsart value
     * @return \THAG\XKfz\StructType\Code_Bearbeitungsart|null
     */
    public function getBearbeitungsart(): ?\THAG\XKfz\StructType\Code_Bearbeitungsart
    {
        return $this->bearbeitungsart;
    }
    /**
     * Set bearbeitungsart value
     * @param \THAG\XKfz\StructType\Code_Bearbeitungsart $bearbeitungsart
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setBearbeitungsart(?\THAG\XKfz\StructType\Code_Bearbeitungsart $bearbeitungsart = null): self
    {
        $this->bearbeitungsart = $bearbeitungsart;
        
        return $this;
    }
    /**
     * Get merkmalGrosskundenantrag value
     * @return bool|null
     */
    public function getMerkmalGrosskundenantrag(): ?bool
    {
        return $this->merkmalGrosskundenantrag;
    }
    /**
     * Set merkmalGrosskundenantrag value
     * @param bool $merkmalGrosskundenantrag
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setMerkmalGrosskundenantrag(?bool $merkmalGrosskundenantrag = null): self
    {
        $this->merkmalGrosskundenantrag = $merkmalGrosskundenantrag;
        
        return $this;
    }
    /**
     * Get merkmalStichprobe value
     * @return bool|null
     */
    public function getMerkmalStichprobe(): ?bool
    {
        return $this->merkmalStichprobe;
    }
    /**
     * Set merkmalStichprobe value
     * @param bool $merkmalStichprobe
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setMerkmalStichprobe(?bool $merkmalStichprobe = null): self
    {
        $this->merkmalStichprobe = $merkmalStichprobe;
        
        return $this;
    }
    /**
     * Get datumWirksamkeit value
     * @return string|null
     */
    public function getDatumWirksamkeit(): ?string
    {
        return $this->datumWirksamkeit;
    }
    /**
     * Set datumWirksamkeit value
     * @param string $datumWirksamkeit
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setDatumWirksamkeit(?string $datumWirksamkeit = null): self
    {
        $this->datumWirksamkeit = $datumWirksamkeit;
        
        return $this;
    }
    /**
     * Get merkmalWunschkennzeichen value
     * @return bool|null
     */
    public function getMerkmalWunschkennzeichen(): ?bool
    {
        return $this->merkmalWunschkennzeichen;
    }
    /**
     * Set merkmalWunschkennzeichen value
     * @param bool $merkmalWunschkennzeichen
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setMerkmalWunschkennzeichen(?bool $merkmalWunschkennzeichen = null): self
    {
        $this->merkmalWunschkennzeichen = $merkmalWunschkennzeichen;
        
        return $this;
    }
    /**
     * Get Arbeitsgang value
     * @return string|null
     */
    public function getArbeitsgang(): ?string
    {
        return $this->Arbeitsgang;
    }
    /**
     * Set Arbeitsgang value
     * @param string $arbeitsgang
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragsbearbeitung
     */
    public function setArbeitsgang(?string $arbeitsgang = null): self
    {
        $this->Arbeitsgang = $arbeitsgang;
        
        return $this;
    }
}
