<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITD_GDV_060.AuftragStatus StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ITD_GDV_060_AuftragStatus extends AbstractStructBase
{
    /**
     * The VkzProduktionAuftragsnummer
     * @var string|null
     */
    public ?string $VkzProduktionAuftragsnummer = null;
    /**
     * The VkzProduktionStatus
     * @var string|null
     */
    public ?string $VkzProduktionStatus = null;
    /**
     * The AuftragsnummerZulieferer
     * @var string|null
     */
    public ?string $AuftragsnummerZulieferer = null;
    /**
     * The AuslieferdatumGeplant
     * @var string|null
     */
    public ?string $AuslieferdatumGeplant = null;
    /**
     * The ZeitpunktVersand
     * @var string|null
     */
    public ?string $ZeitpunktVersand = null;
    /**
     * The Versanddienstleister
     * @var string|null
     */
    public ?string $Versanddienstleister = null;
    /**
     * The ListeTrackingId
     * @var \THAG\XKfz\StructType\ListeTrackingId|null
     */
    public ?\THAG\XKfz\StructType\ListeTrackingId $ListeTrackingId = null;
    /**
     * The TrackingLink
     * @var string|null
     */
    public ?string $TrackingLink = null;
    /**
     * The ListeVkzLogistikDaten
     * @var \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten|null
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten $ListeVkzLogistikDaten = null;
    /**
     * Constructor method for ITD_GDV_060.AuftragStatus
     * @uses ITD_GDV_060_AuftragStatus::setVkzProduktionAuftragsnummer()
     * @uses ITD_GDV_060_AuftragStatus::setVkzProduktionStatus()
     * @uses ITD_GDV_060_AuftragStatus::setAuftragsnummerZulieferer()
     * @uses ITD_GDV_060_AuftragStatus::setAuslieferdatumGeplant()
     * @uses ITD_GDV_060_AuftragStatus::setZeitpunktVersand()
     * @uses ITD_GDV_060_AuftragStatus::setVersanddienstleister()
     * @uses ITD_GDV_060_AuftragStatus::setListeTrackingId()
     * @uses ITD_GDV_060_AuftragStatus::setTrackingLink()
     * @uses ITD_GDV_060_AuftragStatus::setListeVkzLogistikDaten()
     * @param string $vkzProduktionAuftragsnummer
     * @param string $vkzProduktionStatus
     * @param string $auftragsnummerZulieferer
     * @param string $auslieferdatumGeplant
     * @param string $zeitpunktVersand
     * @param string $versanddienstleister
     * @param \THAG\XKfz\StructType\ListeTrackingId $listeTrackingId
     * @param string $trackingLink
     * @param \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten $listeVkzLogistikDaten
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
     * @return string|null
     */
    public function getVkzProduktionAuftragsnummer(): ?string
    {
        return $this->VkzProduktionAuftragsnummer;
    }
    /**
     * Set VkzProduktionAuftragsnummer value
     * @param string $vkzProduktionAuftragsnummer
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setVkzProduktionAuftragsnummer(?string $vkzProduktionAuftragsnummer = null): self
    {
        $this->VkzProduktionAuftragsnummer = $vkzProduktionAuftragsnummer;
        
        return $this;
    }
    /**
     * Get VkzProduktionStatus value
     * @return string|null
     */
    public function getVkzProduktionStatus(): ?string
    {
        return $this->VkzProduktionStatus;
    }
    /**
     * Set VkzProduktionStatus value
     * @param string $vkzProduktionStatus
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setVkzProduktionStatus(?string $vkzProduktionStatus = null): self
    {
        $this->VkzProduktionStatus = $vkzProduktionStatus;
        
        return $this;
    }
    /**
     * Get AuftragsnummerZulieferer value
     * @return string|null
     */
    public function getAuftragsnummerZulieferer(): ?string
    {
        return $this->AuftragsnummerZulieferer;
    }
    /**
     * Set AuftragsnummerZulieferer value
     * @param string $auftragsnummerZulieferer
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setAuftragsnummerZulieferer(?string $auftragsnummerZulieferer = null): self
    {
        $this->AuftragsnummerZulieferer = $auftragsnummerZulieferer;
        
        return $this;
    }
    /**
     * Get AuslieferdatumGeplant value
     * @return string|null
     */
    public function getAuslieferdatumGeplant(): ?string
    {
        return $this->AuslieferdatumGeplant;
    }
    /**
     * Set AuslieferdatumGeplant value
     * @param string $auslieferdatumGeplant
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setAuslieferdatumGeplant(?string $auslieferdatumGeplant = null): self
    {
        $this->AuslieferdatumGeplant = $auslieferdatumGeplant;
        
        return $this;
    }
    /**
     * Get ZeitpunktVersand value
     * @return string|null
     */
    public function getZeitpunktVersand(): ?string
    {
        return $this->ZeitpunktVersand;
    }
    /**
     * Set ZeitpunktVersand value
     * @param string $zeitpunktVersand
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setZeitpunktVersand(?string $zeitpunktVersand = null): self
    {
        $this->ZeitpunktVersand = $zeitpunktVersand;
        
        return $this;
    }
    /**
     * Get Versanddienstleister value
     * @return string|null
     */
    public function getVersanddienstleister(): ?string
    {
        return $this->Versanddienstleister;
    }
    /**
     * Set Versanddienstleister value
     * @param string $versanddienstleister
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setVersanddienstleister(?string $versanddienstleister = null): self
    {
        $this->Versanddienstleister = $versanddienstleister;
        
        return $this;
    }
    /**
     * Get ListeTrackingId value
     * @return \THAG\XKfz\StructType\ListeTrackingId|null
     */
    public function getListeTrackingId(): ?\THAG\XKfz\StructType\ListeTrackingId
    {
        return $this->ListeTrackingId;
    }
    /**
     * Set ListeTrackingId value
     * @param \THAG\XKfz\StructType\ListeTrackingId $listeTrackingId
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setListeTrackingId(?\THAG\XKfz\StructType\ListeTrackingId $listeTrackingId = null): self
    {
        $this->ListeTrackingId = $listeTrackingId;
        
        return $this;
    }
    /**
     * Get TrackingLink value
     * @return string|null
     */
    public function getTrackingLink(): ?string
    {
        return $this->TrackingLink;
    }
    /**
     * Set TrackingLink value
     * @param string $trackingLink
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setTrackingLink(?string $trackingLink = null): self
    {
        $this->TrackingLink = $trackingLink;
        
        return $this;
    }
    /**
     * Get ListeVkzLogistikDaten value
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten|null
     */
    public function getListeVkzLogistikDaten(): ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten
    {
        return $this->ListeVkzLogistikDaten;
    }
    /**
     * Set ListeVkzLogistikDaten value
     * @param \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten $listeVkzLogistikDaten
     * @return \THAG\XKfz\StructType\ITD_GDV_060_AuftragStatus
     */
    public function setListeVkzLogistikDaten(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus_ListeVkzLogistikDaten $listeVkzLogistikDaten = null): self
    {
        $this->ListeVkzLogistikDaten = $listeVkzLogistikDaten;
        
        return $this;
    }
}
