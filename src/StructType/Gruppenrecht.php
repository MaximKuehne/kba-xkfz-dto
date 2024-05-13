<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gruppenrecht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Gruppenrecht extends AbstractStructBase
{
    /**
     * The Gruppennummer
     * @var string|null
     */
    public ?string $Gruppennummer = null;
    /**
     * The Gruppenname
     * @var string|null
     */
    public ?string $Gruppenname = null;
    /**
     * The Kommunikationspartnerkennung
     * @var string|null
     */
    public ?string $Kommunikationspartnerkennung = null;
    /**
     * The Rechteklassennummer
     * @var string|null
     */
    public ?string $Rechteklassennummer = null;
    /**
     * The Rechtnummer
     * @var string|null
     */
    public ?string $Rechtnummer = null;
    /**
     * The ListenrechtEintragKey
     * @var string|null
     */
    public ?string $ListenrechtEintragKey = null;
    /**
     * The ListenrechtEintragName
     * @var string|null
     */
    public ?string $ListenrechtEintragName = null;
    /**
     * The Minimalwert
     * @var string|null
     */
    public ?string $Minimalwert = null;
    /**
     * The Maximalwert
     * @var string|null
     */
    public ?string $Maximalwert = null;
    /**
     * The MinMinimalwert
     * @var string|null
     */
    public ?string $MinMinimalwert = null;
    /**
     * The MaxMaximalwert
     * @var string|null
     */
    public ?string $MaxMaximalwert = null;
    /**
     * The Rechtstatus
     * @var string|null
     */
    public ?string $Rechtstatus = null;
    /**
     * The NurReversierbar
     * @var string|null
     */
    public ?string $NurReversierbar = null;
    /**
     * Constructor method for Gruppenrecht
     * @uses Gruppenrecht::setGruppennummer()
     * @uses Gruppenrecht::setGruppenname()
     * @uses Gruppenrecht::setKommunikationspartnerkennung()
     * @uses Gruppenrecht::setRechteklassennummer()
     * @uses Gruppenrecht::setRechtnummer()
     * @uses Gruppenrecht::setListenrechtEintragKey()
     * @uses Gruppenrecht::setListenrechtEintragName()
     * @uses Gruppenrecht::setMinimalwert()
     * @uses Gruppenrecht::setMaximalwert()
     * @uses Gruppenrecht::setMinMinimalwert()
     * @uses Gruppenrecht::setMaxMaximalwert()
     * @uses Gruppenrecht::setRechtstatus()
     * @uses Gruppenrecht::setNurReversierbar()
     * @param string $gruppennummer
     * @param string $gruppenname
     * @param string $kommunikationspartnerkennung
     * @param string $rechteklassennummer
     * @param string $rechtnummer
     * @param string $listenrechtEintragKey
     * @param string $listenrechtEintragName
     * @param string $minimalwert
     * @param string $maximalwert
     * @param string $minMinimalwert
     * @param string $maxMaximalwert
     * @param string $rechtstatus
     * @param string $nurReversierbar
     */
    public function __construct(?string $gruppennummer = null, ?string $gruppenname = null, ?string $kommunikationspartnerkennung = null, ?string $rechteklassennummer = null, ?string $rechtnummer = null, ?string $listenrechtEintragKey = null, ?string $listenrechtEintragName = null, ?string $minimalwert = null, ?string $maximalwert = null, ?string $minMinimalwert = null, ?string $maxMaximalwert = null, ?string $rechtstatus = null, ?string $nurReversierbar = null)
    {
        $this
            ->setGruppennummer($gruppennummer)
            ->setGruppenname($gruppenname)
            ->setKommunikationspartnerkennung($kommunikationspartnerkennung)
            ->setRechteklassennummer($rechteklassennummer)
            ->setRechtnummer($rechtnummer)
            ->setListenrechtEintragKey($listenrechtEintragKey)
            ->setListenrechtEintragName($listenrechtEintragName)
            ->setMinimalwert($minimalwert)
            ->setMaximalwert($maximalwert)
            ->setMinMinimalwert($minMinimalwert)
            ->setMaxMaximalwert($maxMaximalwert)
            ->setRechtstatus($rechtstatus)
            ->setNurReversierbar($nurReversierbar);
    }
    /**
     * Get Gruppennummer value
     * @return string|null
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }
    /**
     * Set Gruppennummer value
     * @param string $gruppennummer
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;
        
        return $this;
    }
    /**
     * Get Gruppenname value
     * @return string|null
     */
    public function getGruppenname(): ?string
    {
        return $this->Gruppenname;
    }
    /**
     * Set Gruppenname value
     * @param string $gruppenname
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setGruppenname(?string $gruppenname = null): self
    {
        $this->Gruppenname = $gruppenname;
        
        return $this;
    }
    /**
     * Get Kommunikationspartnerkennung value
     * @return string|null
     */
    public function getKommunikationspartnerkennung(): ?string
    {
        return $this->Kommunikationspartnerkennung;
    }
    /**
     * Set Kommunikationspartnerkennung value
     * @param string $kommunikationspartnerkennung
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setKommunikationspartnerkennung(?string $kommunikationspartnerkennung = null): self
    {
        $this->Kommunikationspartnerkennung = $kommunikationspartnerkennung;
        
        return $this;
    }
    /**
     * Get Rechteklassennummer value
     * @return string|null
     */
    public function getRechteklassennummer(): ?string
    {
        return $this->Rechteklassennummer;
    }
    /**
     * Set Rechteklassennummer value
     * @param string $rechteklassennummer
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setRechteklassennummer(?string $rechteklassennummer = null): self
    {
        $this->Rechteklassennummer = $rechteklassennummer;
        
        return $this;
    }
    /**
     * Get Rechtnummer value
     * @return string|null
     */
    public function getRechtnummer(): ?string
    {
        return $this->Rechtnummer;
    }
    /**
     * Set Rechtnummer value
     * @param string $rechtnummer
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setRechtnummer(?string $rechtnummer = null): self
    {
        $this->Rechtnummer = $rechtnummer;
        
        return $this;
    }
    /**
     * Get ListenrechtEintragKey value
     * @return string|null
     */
    public function getListenrechtEintragKey(): ?string
    {
        return $this->ListenrechtEintragKey;
    }
    /**
     * Set ListenrechtEintragKey value
     * @param string $listenrechtEintragKey
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setListenrechtEintragKey(?string $listenrechtEintragKey = null): self
    {
        $this->ListenrechtEintragKey = $listenrechtEintragKey;
        
        return $this;
    }
    /**
     * Get ListenrechtEintragName value
     * @return string|null
     */
    public function getListenrechtEintragName(): ?string
    {
        return $this->ListenrechtEintragName;
    }
    /**
     * Set ListenrechtEintragName value
     * @param string $listenrechtEintragName
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setListenrechtEintragName(?string $listenrechtEintragName = null): self
    {
        $this->ListenrechtEintragName = $listenrechtEintragName;
        
        return $this;
    }
    /**
     * Get Minimalwert value
     * @return string|null
     */
    public function getMinimalwert(): ?string
    {
        return $this->Minimalwert;
    }
    /**
     * Set Minimalwert value
     * @param string $minimalwert
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setMinimalwert(?string $minimalwert = null): self
    {
        $this->Minimalwert = $minimalwert;
        
        return $this;
    }
    /**
     * Get Maximalwert value
     * @return string|null
     */
    public function getMaximalwert(): ?string
    {
        return $this->Maximalwert;
    }
    /**
     * Set Maximalwert value
     * @param string $maximalwert
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setMaximalwert(?string $maximalwert = null): self
    {
        $this->Maximalwert = $maximalwert;
        
        return $this;
    }
    /**
     * Get MinMinimalwert value
     * @return string|null
     */
    public function getMinMinimalwert(): ?string
    {
        return $this->MinMinimalwert;
    }
    /**
     * Set MinMinimalwert value
     * @param string $minMinimalwert
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setMinMinimalwert(?string $minMinimalwert = null): self
    {
        $this->MinMinimalwert = $minMinimalwert;
        
        return $this;
    }
    /**
     * Get MaxMaximalwert value
     * @return string|null
     */
    public function getMaxMaximalwert(): ?string
    {
        return $this->MaxMaximalwert;
    }
    /**
     * Set MaxMaximalwert value
     * @param string $maxMaximalwert
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setMaxMaximalwert(?string $maxMaximalwert = null): self
    {
        $this->MaxMaximalwert = $maxMaximalwert;
        
        return $this;
    }
    /**
     * Get Rechtstatus value
     * @return string|null
     */
    public function getRechtstatus(): ?string
    {
        return $this->Rechtstatus;
    }
    /**
     * Set Rechtstatus value
     * @param string $rechtstatus
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setRechtstatus(?string $rechtstatus = null): self
    {
        $this->Rechtstatus = $rechtstatus;
        
        return $this;
    }
    /**
     * Get NurReversierbar value
     * @return string|null
     */
    public function getNurReversierbar(): ?string
    {
        return $this->NurReversierbar;
    }
    /**
     * Set NurReversierbar value
     * @param string $nurReversierbar
     * @return \THAG\XKfz\StructType\Gruppenrecht
     */
    public function setNurReversierbar(?string $nurReversierbar = null): self
    {
        $this->NurReversierbar = $nurReversierbar;
        
        return $this;
    }
}
