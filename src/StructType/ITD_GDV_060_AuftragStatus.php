<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_060.AuftragStatus StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_060_AuftragStatus extends AbstractStructBase
{
    /**
     * The VkzProduktionAuftragsnummer
     */
    public ?string $VkzProduktionAuftragsnummer = null;

    /**
     * The VkzProduktionStatus
     */
    public ?string $VkzProduktionStatus = null;

    /**
     * The AuftragsnummerZulieferer
     */
    public ?string $AuftragsnummerZulieferer = null;

    /**
     * The AuslieferdatumGeplant
     */
    public ?string $AuslieferdatumGeplant = null;

    /**
     * The ZeitpunktVersand
     */
    public ?string $ZeitpunktVersand = null;

    /**
     * The Versanddienstleister
     */
    public ?string $Versanddienstleister = null;

    /**
     * The ListeTrackingId
     */
    public ?\THAG\XKfz\StructType\ListeTrackingId $ListeTrackingId = null;

    /**
     * The TrackingLink
     */
    public ?string $TrackingLink = null;

    /**
     * The ListeVkzLogistikDaten
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten $ListeVkzLogistikDaten = null;

    /**
     * Constructor method for ITD_GDV_060.AuftragStatus
     *
     * @uses ITD_GDV_060_AuftragStatus::setVkzProduktionAuftragsnummer()
     * @uses ITD_GDV_060_AuftragStatus::setVkzProduktionStatus()
     * @uses ITD_GDV_060_AuftragStatus::setAuftragsnummerZulieferer()
     * @uses ITD_GDV_060_AuftragStatus::setAuslieferdatumGeplant()
     * @uses ITD_GDV_060_AuftragStatus::setZeitpunktVersand()
     * @uses ITD_GDV_060_AuftragStatus::setVersanddienstleister()
     * @uses ITD_GDV_060_AuftragStatus::setListeTrackingId()
     * @uses ITD_GDV_060_AuftragStatus::setTrackingLink()
     * @uses ITD_GDV_060_AuftragStatus::setListeVkzLogistikDaten()
     */
    public function __construct(?string $vkzProduktionAuftragsnummer = null, ?string $vkzProduktionStatus = null, ?string $auftragsnummerZulieferer = null, ?string $auslieferdatumGeplant = null, ?string $zeitpunktVersand = null, ?string $versanddienstleister = null, ?\THAG\XKfz\StructType\ListeTrackingId $listeTrackingId = null, ?string $trackingLink = null, ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten $listeVkzLogistikDaten = null)
    {
        $this
            ->setVkzProduktionAuftragsnummer($vkzProduktionAuftragsnummer)
            ->setVkzProduktionStatus($vkzProduktionStatus)
            ->setAuftragsnummerZulieferer($auftragsnummerZulieferer)
            ->setAuslieferdatumGeplant($auslieferdatumGeplant)
            ->setZeitpunktVersand($zeitpunktVersand)
            ->setVersanddienstleister($versanddienstleister)
            ->setListeTrackingId($listeTrackingId)
            ->setTrackingLink($trackingLink)
            ->setListeVkzLogistikDaten($listeVkzLogistikDaten);
    }

    /**
     * Get VkzProduktionAuftragsnummer value
     */
    public function getVkzProduktionAuftragsnummer(): ?string
    {
        return $this->VkzProduktionAuftragsnummer;
    }

    /**
     * Set VkzProduktionAuftragsnummer value
     */
    public function setVkzProduktionAuftragsnummer(?string $vkzProduktionAuftragsnummer = null): self
    {
        $this->VkzProduktionAuftragsnummer = $vkzProduktionAuftragsnummer;

        return $this;
    }

    /**
     * Get VkzProduktionStatus value
     */
    public function getVkzProduktionStatus(): ?string
    {
        return $this->VkzProduktionStatus;
    }

    /**
     * Set VkzProduktionStatus value
     */
    public function setVkzProduktionStatus(?string $vkzProduktionStatus = null): self
    {
        $this->VkzProduktionStatus = $vkzProduktionStatus;

        return $this;
    }

    /**
     * Get AuftragsnummerZulieferer value
     */
    public function getAuftragsnummerZulieferer(): ?string
    {
        return $this->AuftragsnummerZulieferer;
    }

    /**
     * Set AuftragsnummerZulieferer value
     */
    public function setAuftragsnummerZulieferer(?string $auftragsnummerZulieferer = null): self
    {
        $this->AuftragsnummerZulieferer = $auftragsnummerZulieferer;

        return $this;
    }

    /**
     * Get AuslieferdatumGeplant value
     */
    public function getAuslieferdatumGeplant(): ?string
    {
        return $this->AuslieferdatumGeplant;
    }

    /**
     * Set AuslieferdatumGeplant value
     */
    public function setAuslieferdatumGeplant(?string $auslieferdatumGeplant = null): self
    {
        $this->AuslieferdatumGeplant = $auslieferdatumGeplant;

        return $this;
    }

    /**
     * Get ZeitpunktVersand value
     */
    public function getZeitpunktVersand(): ?string
    {
        return $this->ZeitpunktVersand;
    }

    /**
     * Set ZeitpunktVersand value
     */
    public function setZeitpunktVersand(?string $zeitpunktVersand = null): self
    {
        $this->ZeitpunktVersand = $zeitpunktVersand;

        return $this;
    }

    /**
     * Get Versanddienstleister value
     */
    public function getVersanddienstleister(): ?string
    {
        return $this->Versanddienstleister;
    }

    /**
     * Set Versanddienstleister value
     */
    public function setVersanddienstleister(?string $versanddienstleister = null): self
    {
        $this->Versanddienstleister = $versanddienstleister;

        return $this;
    }

    /**
     * Get ListeTrackingId value
     */
    public function getListeTrackingId(): ?\THAG\XKfz\StructType\ListeTrackingId
    {
        return $this->ListeTrackingId;
    }

    /**
     * Set ListeTrackingId value
     */
    public function setListeTrackingId(?\THAG\XKfz\StructType\ListeTrackingId $listeTrackingId = null): self
    {
        $this->ListeTrackingId = $listeTrackingId;

        return $this;
    }

    /**
     * Get TrackingLink value
     */
    public function getTrackingLink(): ?string
    {
        return $this->TrackingLink;
    }

    /**
     * Set TrackingLink value
     */
    public function setTrackingLink(?string $trackingLink = null): self
    {
        $this->TrackingLink = $trackingLink;

        return $this;
    }

    /**
     * Get ListeVkzLogistikDaten value
     */
    public function getListeVkzLogistikDaten(): ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten
    {
        return $this->ListeVkzLogistikDaten;
    }

    /**
     * Set ListeVkzLogistikDaten value
     */
    public function setListeVkzLogistikDaten(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten $listeVkzLogistikDaten = null): self
    {
        $this->ListeVkzLogistikDaten = $listeVkzLogistikDaten;

        return $this;
    }
}
