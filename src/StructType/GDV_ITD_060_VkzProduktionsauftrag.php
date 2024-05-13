<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_ITD_060.VkzProduktionsauftrag StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_ITD_060_VkzProduktionsauftrag extends AbstractStructBase
{
    /**
     * The VkzProduktionAuftragsnummer
     */
    public ?string $VkzProduktionAuftragsnummer = null;

    /**
     * The VkzGroesse
     */
    public ?string $VkzGroesse = null;

    /**
     * The Verkehrsjahr
     */
    public ?string $Verkehrsjahr = null;

    /**
     * The Farbe
     */
    public ?string $Farbe = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The ListeBuchstabenblock
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock $ListeBuchstabenblock = null;

    /**
     * The ZiffernblockIntervall
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall $ZiffernblockIntervall = null;

    /**
     * The AnzahlSchilder
     */
    public ?string $AnzahlSchilder = null;

    /**
     * The AuslieferdatumWunsch
     */
    public ?string $AuslieferdatumWunsch = null;

    /**
     * The LogistikEmpfaenger
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger $LogistikEmpfaenger = null;

    /**
     * The AbsenderIstGdvdl
     */
    public ?string $AbsenderIstGdvdl = null;

    /**
     * The Ansprechpartner
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner $Ansprechpartner = null;

    /**
     * Constructor method for GDV_ITD_060.VkzProduktionsauftrag
     *
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
     * Get VkzGroesse value
     */
    public function getVkzGroesse(): ?string
    {
        return $this->VkzGroesse;
    }

    /**
     * Set VkzGroesse value
     */
    public function setVkzGroesse(?string $vkzGroesse = null): self
    {
        $this->VkzGroesse = $vkzGroesse;

        return $this;
    }

    /**
     * Get Verkehrsjahr value
     */
    public function getVerkehrsjahr(): ?string
    {
        return $this->Verkehrsjahr;
    }

    /**
     * Set Verkehrsjahr value
     */
    public function setVerkehrsjahr(?string $verkehrsjahr = null): self
    {
        $this->Verkehrsjahr = $verkehrsjahr;

        return $this;
    }

    /**
     * Get Farbe value
     */
    public function getFarbe(): ?string
    {
        return $this->Farbe;
    }

    /**
     * Set Farbe value
     */
    public function setFarbe(?string $farbe = null): self
    {
        $this->Farbe = $farbe;

        return $this;
    }

    /**
     * Get Versicherungsunternehmensnummer value
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get ListeBuchstabenblock value
     */
    public function getListeBuchstabenblock(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock
    {
        return $this->ListeBuchstabenblock;
    }

    /**
     * Set ListeBuchstabenblock value
     */
    public function setListeBuchstabenblock(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ListeBuchstabenblock $listeBuchstabenblock = null): self
    {
        $this->ListeBuchstabenblock = $listeBuchstabenblock;

        return $this;
    }

    /**
     * Get ZiffernblockIntervall value
     */
    public function getZiffernblockIntervall(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall
    {
        return $this->ZiffernblockIntervall;
    }

    /**
     * Set ZiffernblockIntervall value
     */
    public function setZiffernblockIntervall(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_ZiffernblockIntervall $ziffernblockIntervall = null): self
    {
        $this->ZiffernblockIntervall = $ziffernblockIntervall;

        return $this;
    }

    /**
     * Get AnzahlSchilder value
     */
    public function getAnzahlSchilder(): ?string
    {
        return $this->AnzahlSchilder;
    }

    /**
     * Set AnzahlSchilder value
     */
    public function setAnzahlSchilder(?string $anzahlSchilder = null): self
    {
        $this->AnzahlSchilder = $anzahlSchilder;

        return $this;
    }

    /**
     * Get AuslieferdatumWunsch value
     */
    public function getAuslieferdatumWunsch(): ?string
    {
        return $this->AuslieferdatumWunsch;
    }

    /**
     * Set AuslieferdatumWunsch value
     */
    public function setAuslieferdatumWunsch(?string $auslieferdatumWunsch = null): self
    {
        $this->AuslieferdatumWunsch = $auslieferdatumWunsch;

        return $this;
    }

    /**
     * Get LogistikEmpfaenger value
     */
    public function getLogistikEmpfaenger(): ?\THAG\XKfz\StructType\LogistikEmpfaenger
    {
        return $this->LogistikEmpfaenger;
    }

    /**
     * Set LogistikEmpfaenger value
     */
    public function setLogistikEmpfaenger(?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null): self
    {
        $this->LogistikEmpfaenger = $logistikEmpfaenger;

        return $this;
    }

    /**
     * Get AbsenderIstGdvdl value
     */
    public function getAbsenderIstGdvdl(): ?string
    {
        return $this->AbsenderIstGdvdl;
    }

    /**
     * Set AbsenderIstGdvdl value
     */
    public function setAbsenderIstGdvdl(?string $absenderIstGdvdl = null): self
    {
        $this->AbsenderIstGdvdl = $absenderIstGdvdl;

        return $this;
    }

    /**
     * Get Ansprechpartner value
     */
    public function getAnsprechpartner(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner
    {
        return $this->Ansprechpartner;
    }

    /**
     * Set Ansprechpartner value
     */
    public function setAnsprechpartner(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag_Ansprechpartner $ansprechpartner = null): self
    {
        $this->Ansprechpartner = $ansprechpartner;

        return $this;
    }
}
