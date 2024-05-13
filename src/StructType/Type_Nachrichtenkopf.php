<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Nachrichtenkopf StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Nachrichtenkopf extends AbstractStructBase
{
    /**
     * The nachrichtentyp
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null;

    /**
     * The nachrichtenid
     */
    public ?string $nachrichtenid = null;

    /**
     * The zeitpunktDerErstellung
     */
    public ?string $zeitpunktDerErstellung = null;

    /**
     * The merkmalVersandart
     */
    public ?\THAG\XKfz\StructType\Code_Versandart $merkmalVersandart = null;

    /**
     * The merkmalAbweichenderZeichenvorrat
     */
    public ?bool $merkmalAbweichenderZeichenvorrat = null;

    /**
     * The referenzAbsender
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null;

    /**
     * The referenzEmpfaenger
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzEmpfaenger = null;

    /**
     * The sabrinaTransportauftrag
     */
    public ?\THAG\XKfz\StructType\Type_SabrinaTransportauftrag $sabrinaTransportauftrag = null;

    /**
     * The produkt
     */
    public ?string $produkt = null;

    /**
     * The produktHersteller
     */
    public ?string $produktHersteller = null;

    /**
     * The produktVersion
     */
    public ?string $produktVersion = null;

    /**
     * The version
     */
    public ?string $version = null;

    /**
     * Constructor method for Type.Nachrichtenkopf
     *
     * @uses Type_Nachrichtenkopf::setNachrichtentyp()
     * @uses Type_Nachrichtenkopf::setNachrichtenid()
     * @uses Type_Nachrichtenkopf::setZeitpunktDerErstellung()
     * @uses Type_Nachrichtenkopf::setMerkmalVersandart()
     * @uses Type_Nachrichtenkopf::setMerkmalAbweichenderZeichenvorrat()
     * @uses Type_Nachrichtenkopf::setReferenzAbsender()
     * @uses Type_Nachrichtenkopf::setReferenzEmpfaenger()
     * @uses Type_Nachrichtenkopf::setSabrinaTransportauftrag()
     * @uses Type_Nachrichtenkopf::setProdukt()
     * @uses Type_Nachrichtenkopf::setProduktHersteller()
     * @uses Type_Nachrichtenkopf::setProduktVersion()
     * @uses Type_Nachrichtenkopf::setVersion()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null, ?string $nachrichtenid = null, ?string $zeitpunktDerErstellung = null, ?\THAG\XKfz\StructType\Code_Versandart $merkmalVersandart = null, ?bool $merkmalAbweichenderZeichenvorrat = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null, ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzEmpfaenger = null, ?\THAG\XKfz\StructType\Type_SabrinaTransportauftrag $sabrinaTransportauftrag = null, ?string $produkt = null, ?string $produktHersteller = null, ?string $produktVersion = null, ?string $version = null)
    {
        $this
            ->setNachrichtentyp($nachrichtentyp)
            ->setNachrichtenid($nachrichtenid)
            ->setZeitpunktDerErstellung($zeitpunktDerErstellung)
            ->setMerkmalVersandart($merkmalVersandart)
            ->setMerkmalAbweichenderZeichenvorrat($merkmalAbweichenderZeichenvorrat)
            ->setReferenzAbsender($referenzAbsender)
            ->setReferenzEmpfaenger($referenzEmpfaenger)
            ->setSabrinaTransportauftrag($sabrinaTransportauftrag)
            ->setProdukt($produkt)
            ->setProduktHersteller($produktHersteller)
            ->setProduktVersion($produktVersion)
            ->setVersion($version);
    }

    /**
     * Get nachrichtentyp value
     */
    public function getNachrichtentyp(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->nachrichtentyp;
    }

    /**
     * Set nachrichtentyp value
     */
    public function setNachrichtentyp(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null): self
    {
        $this->nachrichtentyp = $nachrichtentyp;

        return $this;
    }

    /**
     * Get nachrichtenid value
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }

    /**
     * Set nachrichtenid value
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;

        return $this;
    }

    /**
     * Get zeitpunktDerErstellung value
     */
    public function getZeitpunktDerErstellung(): ?string
    {
        return $this->zeitpunktDerErstellung;
    }

    /**
     * Set zeitpunktDerErstellung value
     */
    public function setZeitpunktDerErstellung(?string $zeitpunktDerErstellung = null): self
    {
        $this->zeitpunktDerErstellung = $zeitpunktDerErstellung;

        return $this;
    }

    /**
     * Get merkmalVersandart value
     */
    public function getMerkmalVersandart(): ?\THAG\XKfz\StructType\Code_Versandart
    {
        return $this->merkmalVersandart;
    }

    /**
     * Set merkmalVersandart value
     */
    public function setMerkmalVersandart(?\THAG\XKfz\StructType\Code_Versandart $merkmalVersandart = null): self
    {
        $this->merkmalVersandart = $merkmalVersandart;

        return $this;
    }

    /**
     * Get merkmalAbweichenderZeichenvorrat value
     */
    public function getMerkmalAbweichenderZeichenvorrat(): ?bool
    {
        return $this->merkmalAbweichenderZeichenvorrat;
    }

    /**
     * Set merkmalAbweichenderZeichenvorrat value
     */
    public function setMerkmalAbweichenderZeichenvorrat(?bool $merkmalAbweichenderZeichenvorrat = null): self
    {
        $this->merkmalAbweichenderZeichenvorrat = $merkmalAbweichenderZeichenvorrat;

        return $this;
    }

    /**
     * Get referenzAbsender value
     */
    public function getReferenzAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzAbsender;
    }

    /**
     * Set referenzAbsender value
     */
    public function setReferenzAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null): self
    {
        $this->referenzAbsender = $referenzAbsender;

        return $this;
    }

    /**
     * Get referenzEmpfaenger value
     */
    public function getReferenzEmpfaenger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzEmpfaenger;
    }

    /**
     * Set referenzEmpfaenger value
     */
    public function setReferenzEmpfaenger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzEmpfaenger = null): self
    {
        $this->referenzEmpfaenger = $referenzEmpfaenger;

        return $this;
    }

    /**
     * Get sabrinaTransportauftrag value
     */
    public function getSabrinaTransportauftrag(): ?\THAG\XKfz\StructType\Type_SabrinaTransportauftrag
    {
        return $this->sabrinaTransportauftrag;
    }

    /**
     * Set sabrinaTransportauftrag value
     */
    public function setSabrinaTransportauftrag(?\THAG\XKfz\StructType\Type_SabrinaTransportauftrag $sabrinaTransportauftrag = null): self
    {
        $this->sabrinaTransportauftrag = $sabrinaTransportauftrag;

        return $this;
    }

    /**
     * Get produkt value
     */
    public function getProdukt(): ?string
    {
        return $this->produkt;
    }

    /**
     * Set produkt value
     */
    public function setProdukt(?string $produkt = null): self
    {
        $this->produkt = $produkt;

        return $this;
    }

    /**
     * Get produktHersteller value
     */
    public function getProduktHersteller(): ?string
    {
        return $this->produktHersteller;
    }

    /**
     * Set produktHersteller value
     */
    public function setProduktHersteller(?string $produktHersteller = null): self
    {
        $this->produktHersteller = $produktHersteller;

        return $this;
    }

    /**
     * Get produktVersion value
     */
    public function getProduktVersion(): ?string
    {
        return $this->produktVersion;
    }

    /**
     * Set produktVersion value
     */
    public function setProduktVersion(?string $produktVersion = null): self
    {
        $this->produktVersion = $produktVersion;

        return $this;
    }

    /**
     * Get version value
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Set version value
     */
    public function setVersion(?string $version = null): self
    {
        $this->version = $version;

        return $this;
    }
}
