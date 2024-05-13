<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verarbeitungsschritt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verarbeitungsschritt extends AbstractStructBase
{
    /**
     * The ZeitpunktVerarbeitungsschritt
     * @var string|null
     */
    public ?string $ZeitpunktVerarbeitungsschritt = null;
    /**
     * The KategorieVerarbeitungsschritt
     * @var string|null
     */
    public ?string $KategorieVerarbeitungsschritt = null;
    /**
     * The Verarbeitungsschritt
     * @var string|null
     */
    public ?string $Verarbeitungsschritt = null;
    /**
     * The Prozessname
     * @var string|null
     */
    public ?string $Prozessname = null;
    /**
     * The Verarbeitungsdetail
     * @var string|null
     */
    public ?string $Verarbeitungsdetail = null;
    /**
     * The ErweitertesVerarbeitungsdetail
     * @var string|null
     */
    public ?string $ErweitertesVerarbeitungsdetail = null;
    /**
     * The Verarbeitungsdetaillevel
     * @var string|null
     */
    public ?string $Verarbeitungsdetaillevel = null;
    /**
     * The HierarchieEbene
     * @var string|null
     */
    public ?string $HierarchieEbene = null;
    /**
     * Constructor method for Verarbeitungsschritt
     * @uses Verarbeitungsschritt::setZeitpunktVerarbeitungsschritt()
     * @uses Verarbeitungsschritt::setKategorieVerarbeitungsschritt()
     * @uses Verarbeitungsschritt::setVerarbeitungsschritt()
     * @uses Verarbeitungsschritt::setProzessname()
     * @uses Verarbeitungsschritt::setVerarbeitungsdetail()
     * @uses Verarbeitungsschritt::setErweitertesVerarbeitungsdetail()
     * @uses Verarbeitungsschritt::setVerarbeitungsdetaillevel()
     * @uses Verarbeitungsschritt::setHierarchieEbene()
     * @param string $zeitpunktVerarbeitungsschritt
     * @param string $kategorieVerarbeitungsschritt
     * @param string $verarbeitungsschritt
     * @param string $prozessname
     * @param string $verarbeitungsdetail
     * @param string $erweitertesVerarbeitungsdetail
     * @param string $verarbeitungsdetaillevel
     * @param string $hierarchieEbene
     */
    public function __construct(?string $zeitpunktVerarbeitungsschritt = null, ?string $kategorieVerarbeitungsschritt = null, ?string $verarbeitungsschritt = null, ?string $prozessname = null, ?string $verarbeitungsdetail = null, ?string $erweitertesVerarbeitungsdetail = null, ?string $verarbeitungsdetaillevel = null, ?string $hierarchieEbene = null)
    {
        $this
            ->setZeitpunktVerarbeitungsschritt($zeitpunktVerarbeitungsschritt)
            ->setKategorieVerarbeitungsschritt($kategorieVerarbeitungsschritt)
            ->setVerarbeitungsschritt($verarbeitungsschritt)
            ->setProzessname($prozessname)
            ->setVerarbeitungsdetail($verarbeitungsdetail)
            ->setErweitertesVerarbeitungsdetail($erweitertesVerarbeitungsdetail)
            ->setVerarbeitungsdetaillevel($verarbeitungsdetaillevel)
            ->setHierarchieEbene($hierarchieEbene);
    }
    /**
     * Get ZeitpunktVerarbeitungsschritt value
     * @return string|null
     */
    public function getZeitpunktVerarbeitungsschritt(): ?string
    {
        return $this->ZeitpunktVerarbeitungsschritt;
    }
    /**
     * Set ZeitpunktVerarbeitungsschritt value
     * @param string $zeitpunktVerarbeitungsschritt
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setZeitpunktVerarbeitungsschritt(?string $zeitpunktVerarbeitungsschritt = null): self
    {
        $this->ZeitpunktVerarbeitungsschritt = $zeitpunktVerarbeitungsschritt;
        
        return $this;
    }
    /**
     * Get KategorieVerarbeitungsschritt value
     * @return string|null
     */
    public function getKategorieVerarbeitungsschritt(): ?string
    {
        return $this->KategorieVerarbeitungsschritt;
    }
    /**
     * Set KategorieVerarbeitungsschritt value
     * @param string $kategorieVerarbeitungsschritt
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setKategorieVerarbeitungsschritt(?string $kategorieVerarbeitungsschritt = null): self
    {
        $this->KategorieVerarbeitungsschritt = $kategorieVerarbeitungsschritt;
        
        return $this;
    }
    /**
     * Get Verarbeitungsschritt value
     * @return string|null
     */
    public function getVerarbeitungsschritt(): ?string
    {
        return $this->Verarbeitungsschritt;
    }
    /**
     * Set Verarbeitungsschritt value
     * @param string $verarbeitungsschritt
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setVerarbeitungsschritt(?string $verarbeitungsschritt = null): self
    {
        $this->Verarbeitungsschritt = $verarbeitungsschritt;
        
        return $this;
    }
    /**
     * Get Prozessname value
     * @return string|null
     */
    public function getProzessname(): ?string
    {
        return $this->Prozessname;
    }
    /**
     * Set Prozessname value
     * @param string $prozessname
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setProzessname(?string $prozessname = null): self
    {
        $this->Prozessname = $prozessname;
        
        return $this;
    }
    /**
     * Get Verarbeitungsdetail value
     * @return string|null
     */
    public function getVerarbeitungsdetail(): ?string
    {
        return $this->Verarbeitungsdetail;
    }
    /**
     * Set Verarbeitungsdetail value
     * @param string $verarbeitungsdetail
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setVerarbeitungsdetail(?string $verarbeitungsdetail = null): self
    {
        $this->Verarbeitungsdetail = $verarbeitungsdetail;
        
        return $this;
    }
    /**
     * Get ErweitertesVerarbeitungsdetail value
     * @return string|null
     */
    public function getErweitertesVerarbeitungsdetail(): ?string
    {
        return $this->ErweitertesVerarbeitungsdetail;
    }
    /**
     * Set ErweitertesVerarbeitungsdetail value
     * @param string $erweitertesVerarbeitungsdetail
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setErweitertesVerarbeitungsdetail(?string $erweitertesVerarbeitungsdetail = null): self
    {
        $this->ErweitertesVerarbeitungsdetail = $erweitertesVerarbeitungsdetail;
        
        return $this;
    }
    /**
     * Get Verarbeitungsdetaillevel value
     * @return string|null
     */
    public function getVerarbeitungsdetaillevel(): ?string
    {
        return $this->Verarbeitungsdetaillevel;
    }
    /**
     * Set Verarbeitungsdetaillevel value
     * @param string $verarbeitungsdetaillevel
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setVerarbeitungsdetaillevel(?string $verarbeitungsdetaillevel = null): self
    {
        $this->Verarbeitungsdetaillevel = $verarbeitungsdetaillevel;
        
        return $this;
    }
    /**
     * Get HierarchieEbene value
     * @return string|null
     */
    public function getHierarchieEbene(): ?string
    {
        return $this->HierarchieEbene;
    }
    /**
     * Set HierarchieEbene value
     * @param string $hierarchieEbene
     * @return \THAG\XKfz\StructType\Verarbeitungsschritt
     */
    public function setHierarchieEbene(?string $hierarchieEbene = null): self
    {
        $this->HierarchieEbene = $hierarchieEbene;
        
        return $this;
    }
}
