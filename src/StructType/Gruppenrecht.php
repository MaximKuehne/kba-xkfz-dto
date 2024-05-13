<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gruppenrecht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Gruppenrecht extends AbstractStructBase
{
    /**
     * The Gruppennummer
     */
    public ?string $Gruppennummer = null;

    /**
     * The Gruppenname
     */
    public ?string $Gruppenname = null;

    /**
     * The Kommunikationspartnerkennung
     */
    public ?string $Kommunikationspartnerkennung = null;

    /**
     * The Rechteklassennummer
     */
    public ?string $Rechteklassennummer = null;

    /**
     * The Rechtnummer
     */
    public ?string $Rechtnummer = null;

    /**
     * The ListenrechtEintragKey
     */
    public ?string $ListenrechtEintragKey = null;

    /**
     * The ListenrechtEintragName
     */
    public ?string $ListenrechtEintragName = null;

    /**
     * The Minimalwert
     */
    public ?string $Minimalwert = null;

    /**
     * The Maximalwert
     */
    public ?string $Maximalwert = null;

    /**
     * The MinMinimalwert
     */
    public ?string $MinMinimalwert = null;

    /**
     * The MaxMaximalwert
     */
    public ?string $MaxMaximalwert = null;

    /**
     * The Rechtstatus
     */
    public ?string $Rechtstatus = null;

    /**
     * The NurReversierbar
     */
    public ?string $NurReversierbar = null;

    /**
     * Constructor method for Gruppenrecht
     *
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
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }

    /**
     * Set Gruppennummer value
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;

        return $this;
    }

    /**
     * Get Gruppenname value
     */
    public function getGruppenname(): ?string
    {
        return $this->Gruppenname;
    }

    /**
     * Set Gruppenname value
     */
    public function setGruppenname(?string $gruppenname = null): self
    {
        $this->Gruppenname = $gruppenname;

        return $this;
    }

    /**
     * Get Kommunikationspartnerkennung value
     */
    public function getKommunikationspartnerkennung(): ?string
    {
        return $this->Kommunikationspartnerkennung;
    }

    /**
     * Set Kommunikationspartnerkennung value
     */
    public function setKommunikationspartnerkennung(?string $kommunikationspartnerkennung = null): self
    {
        $this->Kommunikationspartnerkennung = $kommunikationspartnerkennung;

        return $this;
    }

    /**
     * Get Rechteklassennummer value
     */
    public function getRechteklassennummer(): ?string
    {
        return $this->Rechteklassennummer;
    }

    /**
     * Set Rechteklassennummer value
     */
    public function setRechteklassennummer(?string $rechteklassennummer = null): self
    {
        $this->Rechteklassennummer = $rechteklassennummer;

        return $this;
    }

    /**
     * Get Rechtnummer value
     */
    public function getRechtnummer(): ?string
    {
        return $this->Rechtnummer;
    }

    /**
     * Set Rechtnummer value
     */
    public function setRechtnummer(?string $rechtnummer = null): self
    {
        $this->Rechtnummer = $rechtnummer;

        return $this;
    }

    /**
     * Get ListenrechtEintragKey value
     */
    public function getListenrechtEintragKey(): ?string
    {
        return $this->ListenrechtEintragKey;
    }

    /**
     * Set ListenrechtEintragKey value
     */
    public function setListenrechtEintragKey(?string $listenrechtEintragKey = null): self
    {
        $this->ListenrechtEintragKey = $listenrechtEintragKey;

        return $this;
    }

    /**
     * Get ListenrechtEintragName value
     */
    public function getListenrechtEintragName(): ?string
    {
        return $this->ListenrechtEintragName;
    }

    /**
     * Set ListenrechtEintragName value
     */
    public function setListenrechtEintragName(?string $listenrechtEintragName = null): self
    {
        $this->ListenrechtEintragName = $listenrechtEintragName;

        return $this;
    }

    /**
     * Get Minimalwert value
     */
    public function getMinimalwert(): ?string
    {
        return $this->Minimalwert;
    }

    /**
     * Set Minimalwert value
     */
    public function setMinimalwert(?string $minimalwert = null): self
    {
        $this->Minimalwert = $minimalwert;

        return $this;
    }

    /**
     * Get Maximalwert value
     */
    public function getMaximalwert(): ?string
    {
        return $this->Maximalwert;
    }

    /**
     * Set Maximalwert value
     */
    public function setMaximalwert(?string $maximalwert = null): self
    {
        $this->Maximalwert = $maximalwert;

        return $this;
    }

    /**
     * Get MinMinimalwert value
     */
    public function getMinMinimalwert(): ?string
    {
        return $this->MinMinimalwert;
    }

    /**
     * Set MinMinimalwert value
     */
    public function setMinMinimalwert(?string $minMinimalwert = null): self
    {
        $this->MinMinimalwert = $minMinimalwert;

        return $this;
    }

    /**
     * Get MaxMaximalwert value
     */
    public function getMaxMaximalwert(): ?string
    {
        return $this->MaxMaximalwert;
    }

    /**
     * Set MaxMaximalwert value
     */
    public function setMaxMaximalwert(?string $maxMaximalwert = null): self
    {
        $this->MaxMaximalwert = $maxMaximalwert;

        return $this;
    }

    /**
     * Get Rechtstatus value
     */
    public function getRechtstatus(): ?string
    {
        return $this->Rechtstatus;
    }

    /**
     * Set Rechtstatus value
     */
    public function setRechtstatus(?string $rechtstatus = null): self
    {
        $this->Rechtstatus = $rechtstatus;

        return $this;
    }

    /**
     * Get NurReversierbar value
     */
    public function getNurReversierbar(): ?string
    {
        return $this->NurReversierbar;
    }

    /**
     * Set NurReversierbar value
     */
    public function setNurReversierbar(?string $nurReversierbar = null): self
    {
        $this->NurReversierbar = $nurReversierbar;

        return $this;
    }
}
