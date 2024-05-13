<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verarbeitungsschritt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verarbeitungsschritt extends AbstractStructBase
{
    /**
     * The ZeitpunktVerarbeitungsschritt
     */
    public ?string $ZeitpunktVerarbeitungsschritt = null;

    /**
     * The KategorieVerarbeitungsschritt
     */
    public ?string $KategorieVerarbeitungsschritt = null;

    /**
     * The Verarbeitungsschritt
     */
    public ?string $Verarbeitungsschritt = null;

    /**
     * The Prozessname
     */
    public ?string $Prozessname = null;

    /**
     * The Verarbeitungsdetail
     */
    public ?string $Verarbeitungsdetail = null;

    /**
     * The ErweitertesVerarbeitungsdetail
     */
    public ?string $ErweitertesVerarbeitungsdetail = null;

    /**
     * The Verarbeitungsdetaillevel
     */
    public ?string $Verarbeitungsdetaillevel = null;

    /**
     * The HierarchieEbene
     */
    public ?string $HierarchieEbene = null;

    /**
     * Constructor method for Verarbeitungsschritt
     *
     * @uses Verarbeitungsschritt::setZeitpunktVerarbeitungsschritt()
     * @uses Verarbeitungsschritt::setKategorieVerarbeitungsschritt()
     * @uses Verarbeitungsschritt::setVerarbeitungsschritt()
     * @uses Verarbeitungsschritt::setProzessname()
     * @uses Verarbeitungsschritt::setVerarbeitungsdetail()
     * @uses Verarbeitungsschritt::setErweitertesVerarbeitungsdetail()
     * @uses Verarbeitungsschritt::setVerarbeitungsdetaillevel()
     * @uses Verarbeitungsschritt::setHierarchieEbene()
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
     */
    public function getZeitpunktVerarbeitungsschritt(): ?string
    {
        return $this->ZeitpunktVerarbeitungsschritt;
    }

    /**
     * Set ZeitpunktVerarbeitungsschritt value
     */
    public function setZeitpunktVerarbeitungsschritt(?string $zeitpunktVerarbeitungsschritt = null): self
    {
        $this->ZeitpunktVerarbeitungsschritt = $zeitpunktVerarbeitungsschritt;

        return $this;
    }

    /**
     * Get KategorieVerarbeitungsschritt value
     */
    public function getKategorieVerarbeitungsschritt(): ?string
    {
        return $this->KategorieVerarbeitungsschritt;
    }

    /**
     * Set KategorieVerarbeitungsschritt value
     */
    public function setKategorieVerarbeitungsschritt(?string $kategorieVerarbeitungsschritt = null): self
    {
        $this->KategorieVerarbeitungsschritt = $kategorieVerarbeitungsschritt;

        return $this;
    }

    /**
     * Get Verarbeitungsschritt value
     */
    public function getVerarbeitungsschritt(): ?string
    {
        return $this->Verarbeitungsschritt;
    }

    /**
     * Set Verarbeitungsschritt value
     */
    public function setVerarbeitungsschritt(?string $verarbeitungsschritt = null): self
    {
        $this->Verarbeitungsschritt = $verarbeitungsschritt;

        return $this;
    }

    /**
     * Get Prozessname value
     */
    public function getProzessname(): ?string
    {
        return $this->Prozessname;
    }

    /**
     * Set Prozessname value
     */
    public function setProzessname(?string $prozessname = null): self
    {
        $this->Prozessname = $prozessname;

        return $this;
    }

    /**
     * Get Verarbeitungsdetail value
     */
    public function getVerarbeitungsdetail(): ?string
    {
        return $this->Verarbeitungsdetail;
    }

    /**
     * Set Verarbeitungsdetail value
     */
    public function setVerarbeitungsdetail(?string $verarbeitungsdetail = null): self
    {
        $this->Verarbeitungsdetail = $verarbeitungsdetail;

        return $this;
    }

    /**
     * Get ErweitertesVerarbeitungsdetail value
     */
    public function getErweitertesVerarbeitungsdetail(): ?string
    {
        return $this->ErweitertesVerarbeitungsdetail;
    }

    /**
     * Set ErweitertesVerarbeitungsdetail value
     */
    public function setErweitertesVerarbeitungsdetail(?string $erweitertesVerarbeitungsdetail = null): self
    {
        $this->ErweitertesVerarbeitungsdetail = $erweitertesVerarbeitungsdetail;

        return $this;
    }

    /**
     * Get Verarbeitungsdetaillevel value
     */
    public function getVerarbeitungsdetaillevel(): ?string
    {
        return $this->Verarbeitungsdetaillevel;
    }

    /**
     * Set Verarbeitungsdetaillevel value
     */
    public function setVerarbeitungsdetaillevel(?string $verarbeitungsdetaillevel = null): self
    {
        $this->Verarbeitungsdetaillevel = $verarbeitungsdetaillevel;

        return $this;
    }

    /**
     * Get HierarchieEbene value
     */
    public function getHierarchieEbene(): ?string
    {
        return $this->HierarchieEbene;
    }

    /**
     * Set HierarchieEbene value
     */
    public function setHierarchieEbene(?string $hierarchieEbene = null): self
    {
        $this->HierarchieEbene = $hierarchieEbene;

        return $this;
    }
}
