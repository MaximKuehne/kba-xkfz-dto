<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzKopf StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzKopf extends AbstractStructBase
{
    /**
     * The nachrichtentyp
     * @var \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null;
    /**
     * The nachrichtenid
     * @var string|null
     */
    public ?string $nachrichtenid = null;
    /**
     * The zeitpunktDerErstellung
     * @var string|null
     */
    public ?string $zeitpunktDerErstellung = null;
    /**
     * The merkmalVersandart
     * @var \THAG\XKfz\StructType\Code_Versandart|null
     */
    public ?\THAG\XKfz\StructType\Code_Versandart $merkmalVersandart = null;
    /**
     * The merkmalAbweichenderZeichenvorrat
     * @var bool|null
     */
    public ?bool $merkmalAbweichenderZeichenvorrat = null;
    /**
     * The referenzAbsender
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null;
    /**
     * The referenzEmpfaenger
     * @var \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzEmpfaenger = null;
    /**
     * The sabrinaTransportauftrag
     * @var \THAG\XKfz\StructType\Type_SabrinaTransportauftrag|null
     */
    public ?\THAG\XKfz\StructType\Type_SabrinaTransportauftrag $sabrinaTransportauftrag = null;
    /**
     * The produkt
     * @var string|null
     */
    public ?string $produkt = null;
    /**
     * The produktHersteller
     * @var string|null
     */
    public ?string $produktHersteller = null;
    /**
     * The produktVersion
     * @var string|null
     */
    public ?string $produktVersion = null;
    /**
     * The version
     * @var string|null
     */
    public ?string $version = null;
    /**
     * Constructor method for Type.XKfzKopf
     * @uses Type_XKfzKopf::setNachrichtentyp()
     * @uses Type_XKfzKopf::setNachrichtenid()
     * @uses Type_XKfzKopf::setZeitpunktDerErstellung()
     * @uses Type_XKfzKopf::setMerkmalVersandart()
     * @uses Type_XKfzKopf::setMerkmalAbweichenderZeichenvorrat()
     * @uses Type_XKfzKopf::setReferenzAbsender()
     * @uses Type_XKfzKopf::setReferenzEmpfaenger()
     * @uses Type_XKfzKopf::setSabrinaTransportauftrag()
     * @uses Type_XKfzKopf::setProdukt()
     * @uses Type_XKfzKopf::setProduktHersteller()
     * @uses Type_XKfzKopf::setProduktVersion()
     * @uses Type_XKfzKopf::setVersion()
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp
     * @param string $nachrichtenid
     * @param string $zeitpunktDerErstellung
     * @param \THAG\XKfz\StructType\Code_Versandart $merkmalVersandart
     * @param bool $merkmalAbweichenderZeichenvorrat
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzEmpfaenger
     * @param \THAG\XKfz\StructType\Type_SabrinaTransportauftrag $sabrinaTransportauftrag
     * @param string $produkt
     * @param string $produktHersteller
     * @param string $produktVersion
     * @param string $version
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
     * @return \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public function getNachrichtentyp(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->nachrichtentyp;
    }
    /**
     * Set nachrichtentyp value
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setNachrichtentyp(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null): self
    {
        $this->nachrichtentyp = $nachrichtentyp;
        
        return $this;
    }
    /**
     * Get nachrichtenid value
     * @return string|null
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }
    /**
     * Set nachrichtenid value
     * @param string $nachrichtenid
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;
        
        return $this;
    }
    /**
     * Get zeitpunktDerErstellung value
     * @return string|null
     */
    public function getZeitpunktDerErstellung(): ?string
    {
        return $this->zeitpunktDerErstellung;
    }
    /**
     * Set zeitpunktDerErstellung value
     * @param string $zeitpunktDerErstellung
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setZeitpunktDerErstellung(?string $zeitpunktDerErstellung = null): self
    {
        $this->zeitpunktDerErstellung = $zeitpunktDerErstellung;
        
        return $this;
    }
    /**
     * Get merkmalVersandart value
     * @return \THAG\XKfz\StructType\Code_Versandart|null
     */
    public function getMerkmalVersandart(): ?\THAG\XKfz\StructType\Code_Versandart
    {
        return $this->merkmalVersandart;
    }
    /**
     * Set merkmalVersandart value
     * @param \THAG\XKfz\StructType\Code_Versandart $merkmalVersandart
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setMerkmalVersandart(?\THAG\XKfz\StructType\Code_Versandart $merkmalVersandart = null): self
    {
        $this->merkmalVersandart = $merkmalVersandart;
        
        return $this;
    }
    /**
     * Get merkmalAbweichenderZeichenvorrat value
     * @return bool|null
     */
    public function getMerkmalAbweichenderZeichenvorrat(): ?bool
    {
        return $this->merkmalAbweichenderZeichenvorrat;
    }
    /**
     * Set merkmalAbweichenderZeichenvorrat value
     * @param bool $merkmalAbweichenderZeichenvorrat
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setMerkmalAbweichenderZeichenvorrat(?bool $merkmalAbweichenderZeichenvorrat = null): self
    {
        $this->merkmalAbweichenderZeichenvorrat = $merkmalAbweichenderZeichenvorrat;
        
        return $this;
    }
    /**
     * Get referenzAbsender value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getReferenzAbsender(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzAbsender;
    }
    /**
     * Set referenzAbsender value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setReferenzAbsender(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzAbsender = null): self
    {
        $this->referenzAbsender = $referenzAbsender;
        
        return $this;
    }
    /**
     * Get referenzEmpfaenger value
     * @return \THAG\XKfz\StructType\Type_Kommunikationspartner|null
     */
    public function getReferenzEmpfaenger(): ?\THAG\XKfz\StructType\Type_Kommunikationspartner
    {
        return $this->referenzEmpfaenger;
    }
    /**
     * Set referenzEmpfaenger value
     * @param \THAG\XKfz\StructType\Type_Kommunikationspartner $referenzEmpfaenger
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setReferenzEmpfaenger(?\THAG\XKfz\StructType\Type_Kommunikationspartner $referenzEmpfaenger = null): self
    {
        $this->referenzEmpfaenger = $referenzEmpfaenger;
        
        return $this;
    }
    /**
     * Get sabrinaTransportauftrag value
     * @return \THAG\XKfz\StructType\Type_SabrinaTransportauftrag|null
     */
    public function getSabrinaTransportauftrag(): ?\THAG\XKfz\StructType\Type_SabrinaTransportauftrag
    {
        return $this->sabrinaTransportauftrag;
    }
    /**
     * Set sabrinaTransportauftrag value
     * @param \THAG\XKfz\StructType\Type_SabrinaTransportauftrag $sabrinaTransportauftrag
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setSabrinaTransportauftrag(?\THAG\XKfz\StructType\Type_SabrinaTransportauftrag $sabrinaTransportauftrag = null): self
    {
        $this->sabrinaTransportauftrag = $sabrinaTransportauftrag;
        
        return $this;
    }
    /**
     * Get produkt value
     * @return string|null
     */
    public function getProdukt(): ?string
    {
        return $this->produkt;
    }
    /**
     * Set produkt value
     * @param string $produkt
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setProdukt(?string $produkt = null): self
    {
        $this->produkt = $produkt;
        
        return $this;
    }
    /**
     * Get produktHersteller value
     * @return string|null
     */
    public function getProduktHersteller(): ?string
    {
        return $this->produktHersteller;
    }
    /**
     * Set produktHersteller value
     * @param string $produktHersteller
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setProduktHersteller(?string $produktHersteller = null): self
    {
        $this->produktHersteller = $produktHersteller;
        
        return $this;
    }
    /**
     * Get produktVersion value
     * @return string|null
     */
    public function getProduktVersion(): ?string
    {
        return $this->produktVersion;
    }
    /**
     * Set produktVersion value
     * @param string $produktVersion
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setProduktVersion(?string $produktVersion = null): self
    {
        $this->produktVersion = $produktVersion;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \THAG\XKfz\StructType\Type_XKfzKopf
     */
    public function setVersion(?string $version = null): self
    {
        $this->version = $version;
        
        return $this;
    }
}
