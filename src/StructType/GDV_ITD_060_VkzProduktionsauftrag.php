<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_ITD_060.VkzProduktionsauftrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_VkzProduktionsauftrag extends AbstractStructBase
{
    /**
     * The VkzProduktionAuftragsnummer
     * @var string|null
     */
    public ?string $VkzProduktionAuftragsnummer = null;
    /**
     * The VkzGroesse
     * @var string|null
     */
    public ?string $VkzGroesse = null;
    /**
     * The Verkehrsjahr
     * @var string|null
     */
    public ?string $Verkehrsjahr = null;
    /**
     * The Farbe
     * @var string|null
     */
    public ?string $Farbe = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The ListeBuchstabenblock
     * @var \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock|null
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock $ListeBuchstabenblock = null;
    /**
     * The ZiffernblockIntervall
     * @var \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall|null
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall $ZiffernblockIntervall = null;
    /**
     * The AnzahlSchilder
     * @var string|null
     */
    public ?string $AnzahlSchilder = null;
    /**
     * The AuslieferdatumWunsch
     * @var string|null
     */
    public ?string $AuslieferdatumWunsch = null;
    /**
     * The LogistikEmpfaenger
     * @var \THAG\XKfz\StructType\LogistikEmpfaenger|null
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger $LogistikEmpfaenger = null;
    /**
     * The AbsenderIstGdvdl
     * @var string|null
     */
    public ?string $AbsenderIstGdvdl = null;
    /**
     * The Ansprechpartner
     * @var \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner|null
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner $Ansprechpartner = null;
    /**
     * Constructor method for GDV_ITD_060.VkzProduktionsauftrag
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setVkzProduktionAuftragsnummer()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setVkzGroesse()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setVerkehrsjahr()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setFarbe()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setVersicherungsunternehmensnummer()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setListeBuchstabenblock()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setZiffernblockIntervall()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setAnzahlSchilder()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setAuslieferdatumWunsch()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setLogistikEmpfaenger()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setAbsenderIstGdvdl()
     * @uses GDV_ITD_060_VkzProduktionsauftrag::setAnsprechpartner()
     * @param string $vkzProduktionAuftragsnummer
     * @param string $vkzGroesse
     * @param string $verkehrsjahr
     * @param string $farbe
     * @param string $versicherungsunternehmensnummer
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock $listeBuchstabenblock
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall $ziffernblockIntervall
     * @param string $anzahlSchilder
     * @param string $auslieferdatumWunsch
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger
     * @param string $absenderIstGdvdl
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner $ansprechpartner
     */
    public function __construct(?string $vkzProduktionAuftragsnummer = null, ?string $vkzGroesse = null, ?string $verkehrsjahr = null, ?string $farbe = null, ?string $versicherungsunternehmensnummer = null, ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock $listeBuchstabenblock = null, ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall $ziffernblockIntervall = null, ?string $anzahlSchilder = null, ?string $auslieferdatumWunsch = null, ?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null, ?string $absenderIstGdvdl = null, ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner $ansprechpartner = null)
    {
        $this
            ->setVkzProduktionAuftragsnummer($vkzProduktionAuftragsnummer)
            ->setVkzGroesse($vkzGroesse)
            ->setVerkehrsjahr($verkehrsjahr)
            ->setFarbe($farbe)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setListeBuchstabenblock($listeBuchstabenblock)
            ->setZiffernblockIntervall($ziffernblockIntervall)
            ->setAnzahlSchilder($anzahlSchilder)
            ->setAuslieferdatumWunsch($auslieferdatumWunsch)
            ->setLogistikEmpfaenger($logistikEmpfaenger)
            ->setAbsenderIstGdvdl($absenderIstGdvdl)
            ->setAnsprechpartner($ansprechpartner);
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
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setVkzProduktionAuftragsnummer(?string $vkzProduktionAuftragsnummer = null): self
    {
        $this->VkzProduktionAuftragsnummer = $vkzProduktionAuftragsnummer;
        
        return $this;
    }
    /**
     * Get VkzGroesse value
     * @return string|null
     */
    public function getVkzGroesse(): ?string
    {
        return $this->VkzGroesse;
    }
    /**
     * Set VkzGroesse value
     * @param string $vkzGroesse
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setVkzGroesse(?string $vkzGroesse = null): self
    {
        $this->VkzGroesse = $vkzGroesse;
        
        return $this;
    }
    /**
     * Get Verkehrsjahr value
     * @return string|null
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }
    /**
     * Set Verkehrsjahr value
     * @param string $verkehrsjahr
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;
        
        return $this;
    }
    /**
     * Get Farbe value
     * @return string|null
     */
    public function getFarbe(): ?string
    {
        return $this->Farbe;
    }
    /**
     * Set Farbe value
     * @param string $farbe
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setFarbe(?string $farbe = null): self
    {
        $this->Farbe = $farbe;
        
        return $this;
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get ListeBuchstabenblock value
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock|null
     */
    public function getListeBuchstabenblock(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock
    {
        return $this->ListeBuchstabenblock;
    }
    /**
     * Set ListeBuchstabenblock value
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock $listeBuchstabenblock
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setListeBuchstabenblock(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock $listeBuchstabenblock = null): self
    {
        $this->ListeBuchstabenblock = $listeBuchstabenblock;
        
        return $this;
    }
    /**
     * Get ZiffernblockIntervall value
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall|null
     */
    public function getZiffernblockIntervall(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall
    {
        return $this->ZiffernblockIntervall;
    }
    /**
     * Set ZiffernblockIntervall value
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall $ziffernblockIntervall
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setZiffernblockIntervall(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall $ziffernblockIntervall = null): self
    {
        $this->ZiffernblockIntervall = $ziffernblockIntervall;
        
        return $this;
    }
    /**
     * Get AnzahlSchilder value
     * @return string|null
     */
    public function getAnzahlSchilder(): ?string
    {
        return $this->AnzahlSchilder;
    }
    /**
     * Set AnzahlSchilder value
     * @param string $anzahlSchilder
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setAnzahlSchilder(?string $anzahlSchilder = null): self
    {
        $this->AnzahlSchilder = $anzahlSchilder;
        
        return $this;
    }
    /**
     * Get AuslieferdatumWunsch value
     * @return string|null
     */
    public function getAuslieferdatumWunsch(): ?string
    {
        return $this->AuslieferdatumWunsch;
    }
    /**
     * Set AuslieferdatumWunsch value
     * @param string $auslieferdatumWunsch
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setAuslieferdatumWunsch(?string $auslieferdatumWunsch = null): self
    {
        $this->AuslieferdatumWunsch = $auslieferdatumWunsch;
        
        return $this;
    }
    /**
     * Get LogistikEmpfaenger value
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger|null
     */
    public function getLogistikEmpfaenger(): ?\THAG\XKfz\StructType\LogistikEmpfaenger
    {
        return $this->LogistikEmpfaenger;
    }
    /**
     * Set LogistikEmpfaenger value
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setLogistikEmpfaenger(?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null): self
    {
        $this->LogistikEmpfaenger = $logistikEmpfaenger;
        
        return $this;
    }
    /**
     * Get AbsenderIstGdvdl value
     * @return string|null
     */
    public function getAbsenderIstGdvdl(): ?string
    {
        return $this->AbsenderIstGdvdl;
    }
    /**
     * Set AbsenderIstGdvdl value
     * @param string $absenderIstGdvdl
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setAbsenderIstGdvdl(?string $absenderIstGdvdl = null): self
    {
        $this->AbsenderIstGdvdl = $absenderIstGdvdl;
        
        return $this;
    }
    /**
     * Get Ansprechpartner value
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner|null
     */
    public function getAnsprechpartner(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner
    {
        return $this->Ansprechpartner;
    }
    /**
     * Set Ansprechpartner value
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner $ansprechpartner
     * @return \THAG\XKfz\StructType\GDV_ITD_060_VkzProduktionsauftrag
     */
    public function setAnsprechpartner(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner $ansprechpartner = null): self
    {
        $this->Ansprechpartner = $ansprechpartner;
        
        return $this;
    }
}
