<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verarbeitungskontext StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verarbeitungskontext extends AbstractStructBase
{
    /**
     * The DatensatzId
     */
    public ?string $DatensatzId = null;

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
     * The Verarbeitungsdetail
     */
    public ?string $Verarbeitungsdetail = null;

    /**
     * The ErweitertesVerarbeitungsdetail
     */
    public ?string $ErweitertesVerarbeitungsdetail = null;

    /**
     * The ListeVerarbeitungsschritt
     */
    public ?\THAG\XKfz\StructType\ListeVerarbeitungsschritt $ListeVerarbeitungsschritt = null;

    /**
     * Constructor method for Verarbeitungskontext
     *
     * @uses Verarbeitungskontext::setDatensatzId()
     * @uses Verarbeitungskontext::setZeitpunktVerarbeitungsschritt()
     * @uses Verarbeitungskontext::setKategorieVerarbeitungsschritt()
     * @uses Verarbeitungskontext::setVerarbeitungsschritt()
     * @uses Verarbeitungskontext::setVerarbeitungsdetail()
     * @uses Verarbeitungskontext::setErweitertesVerarbeitungsdetail()
     * @uses Verarbeitungskontext::setListeVerarbeitungsschritt()
     */
    public function __construct(?string $datensatzId = null, ?string $zeitpunktVerarbeitungsschritt = null, ?string $kategorieVerarbeitungsschritt = null, ?string $verarbeitungsschritt = null, ?string $verarbeitungsdetail = null, ?string $erweitertesVerarbeitungsdetail = null, ?\THAG\XKfz\StructType\ListeVerarbeitungsschritt $listeVerarbeitungsschritt = null)
    {
        $this
            ->setDatensatzId($datensatzId)
            ->setZeitpunktVerarbeitungsschritt($zeitpunktVerarbeitungsschritt)
            ->setKategorieVerarbeitungsschritt($kategorieVerarbeitungsschritt)
            ->setVerarbeitungsschritt($verarbeitungsschritt)
            ->setVerarbeitungsdetail($verarbeitungsdetail)
            ->setErweitertesVerarbeitungsdetail($erweitertesVerarbeitungsdetail)
            ->setListeVerarbeitungsschritt($listeVerarbeitungsschritt);
    }

    /**
     * Get DatensatzId value
     */
    public function getDatensatzId(): ?string
    {
        return $this->DatensatzId;
    }

    /**
     * Set DatensatzId value
     */
    public function setDatensatzId(?string $datensatzId = null): self
    {
        $this->DatensatzId = $datensatzId;

        return $this;
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
     * Get ListeVerarbeitungsschritt value
     */
    public function getListeVerarbeitungsschritt(): ?\THAG\XKfz\StructType\ListeVerarbeitungsschritt
    {
        return $this->ListeVerarbeitungsschritt;
    }

    /**
     * Set ListeVerarbeitungsschritt value
     */
    public function setListeVerarbeitungsschritt(?\THAG\XKfz\StructType\ListeVerarbeitungsschritt $listeVerarbeitungsschritt = null): self
    {
        $this->ListeVerarbeitungsschritt = $listeVerarbeitungsschritt;

        return $this;
    }
}
