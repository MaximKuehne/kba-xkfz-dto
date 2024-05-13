<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verarbeitungskontext StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verarbeitungskontext extends AbstractStructBase
{
    /**
     * The DatensatzId
     * @var string|null
     */
    public ?string $DatensatzId = null;
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
     * The ListeVerarbeitungsschritt
     * @var \THAG\XKfz\StructType\ListeVerarbeitungsschritt|null
     */
    public ?\THAG\XKfz\StructType\ListeVerarbeitungsschritt $ListeVerarbeitungsschritt = null;
    /**
     * Constructor method for Verarbeitungskontext
     * @uses Verarbeitungskontext::setDatensatzId()
     * @uses Verarbeitungskontext::setZeitpunktVerarbeitungsschritt()
     * @uses Verarbeitungskontext::setKategorieVerarbeitungsschritt()
     * @uses Verarbeitungskontext::setVerarbeitungsschritt()
     * @uses Verarbeitungskontext::setVerarbeitungsdetail()
     * @uses Verarbeitungskontext::setErweitertesVerarbeitungsdetail()
     * @uses Verarbeitungskontext::setListeVerarbeitungsschritt()
     * @param string $datensatzId
     * @param string $zeitpunktVerarbeitungsschritt
     * @param string $kategorieVerarbeitungsschritt
     * @param string $verarbeitungsschritt
     * @param string $verarbeitungsdetail
     * @param string $erweitertesVerarbeitungsdetail
     * @param \THAG\XKfz\StructType\ListeVerarbeitungsschritt $listeVerarbeitungsschritt
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
     * @return string|null
     */
    public function getDatensatzId(): ?string
    {
        return $this->DatensatzId;
    }
    /**
     * Set DatensatzId value
     * @param string $datensatzId
     * @return \THAG\XKfz\StructType\Verarbeitungskontext
     */
    public function setDatensatzId(?string $datensatzId = null): self
    {
        $this->DatensatzId = $datensatzId;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Verarbeitungskontext
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
     * @return \THAG\XKfz\StructType\Verarbeitungskontext
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
     * @return \THAG\XKfz\StructType\Verarbeitungskontext
     */
    public function setVerarbeitungsschritt(?string $verarbeitungsschritt = null): self
    {
        $this->Verarbeitungsschritt = $verarbeitungsschritt;
        
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
     * @return \THAG\XKfz\StructType\Verarbeitungskontext
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
     * @return \THAG\XKfz\StructType\Verarbeitungskontext
     */
    public function setErweitertesVerarbeitungsdetail(?string $erweitertesVerarbeitungsdetail = null): self
    {
        $this->ErweitertesVerarbeitungsdetail = $erweitertesVerarbeitungsdetail;
        
        return $this;
    }
    /**
     * Get ListeVerarbeitungsschritt value
     * @return \THAG\XKfz\StructType\ListeVerarbeitungsschritt|null
     */
    public function getListeVerarbeitungsschritt(): ?\THAG\XKfz\StructType\ListeVerarbeitungsschritt
    {
        return $this->ListeVerarbeitungsschritt;
    }
    /**
     * Set ListeVerarbeitungsschritt value
     * @param \THAG\XKfz\StructType\ListeVerarbeitungsschritt $listeVerarbeitungsschritt
     * @return \THAG\XKfz\StructType\Verarbeitungskontext
     */
    public function setListeVerarbeitungsschritt(?\THAG\XKfz\StructType\ListeVerarbeitungsschritt $listeVerarbeitungsschritt = null): self
    {
        $this->ListeVerarbeitungsschritt = $listeVerarbeitungsschritt;
        
        return $this;
    }
}
