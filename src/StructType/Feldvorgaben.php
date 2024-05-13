<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feldvorgaben StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Feldvorgaben extends AbstractStructBase
{
    /**
     * The HinweistextWeb
     * @var string|null
     */
    public ?string $HinweistextWeb = null;
    /**
     * The HinweistextMobile
     * @var string|null
     */
    public ?string $HinweistextMobile = null;
    /**
     * The HinweistextIPhone
     * @var string|null
     */
    public ?string $HinweistextIPhone = null;
    /**
     * The FeldStatus
     * @var string|null
     */
    public ?string $FeldStatus = null;
    /**
     * The FreitextZulassen
     * @var string|null
     */
    public ?string $FreitextZulassen = null;
    /**
     * The ListeVorgangsart
     * @var \THAG\XKfz\StructType\ListeVorgangsart|null
     */
    public ?\THAG\XKfz\StructType\ListeVorgangsart $ListeVorgangsart = null;
    /**
     * Constructor method for Feldvorgaben
     * @uses Feldvorgaben::setHinweistextWeb()
     * @uses Feldvorgaben::setHinweistextMobile()
     * @uses Feldvorgaben::setHinweistextIPhone()
     * @uses Feldvorgaben::setFeldStatus()
     * @uses Feldvorgaben::setFreitextZulassen()
     * @uses Feldvorgaben::setListeVorgangsart()
     * @param string $hinweistextWeb
     * @param string $hinweistextMobile
     * @param string $hinweistextIPhone
     * @param string $feldStatus
     * @param string $freitextZulassen
     * @param \THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart
     */
    public function __construct(?string $hinweistextWeb = null, ?string $hinweistextMobile = null, ?string $hinweistextIPhone = null, ?string $feldStatus = null, ?string $freitextZulassen = null, ?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null)
    {
        $this
            ->setHinweistextWeb($hinweistextWeb)
            ->setHinweistextMobile($hinweistextMobile)
            ->setHinweistextIPhone($hinweistextIPhone)
            ->setFeldStatus($feldStatus)
            ->setFreitextZulassen($freitextZulassen)
            ->setListeVorgangsart($listeVorgangsart);
    }
    /**
     * Get HinweistextWeb value
     * @return string|null
     */
    public function getHinweistextWeb(): ?string
    {
        return $this->HinweistextWeb;
    }
    /**
     * Set HinweistextWeb value
     * @param string $hinweistextWeb
     * @return \THAG\XKfz\StructType\Feldvorgaben
     */
    public function setHinweistextWeb(?string $hinweistextWeb = null): self
    {
        $this->HinweistextWeb = $hinweistextWeb;
        
        return $this;
    }
    /**
     * Get HinweistextMobile value
     * @return string|null
     */
    public function getHinweistextMobile(): ?string
    {
        return $this->HinweistextMobile;
    }
    /**
     * Set HinweistextMobile value
     * @param string $hinweistextMobile
     * @return \THAG\XKfz\StructType\Feldvorgaben
     */
    public function setHinweistextMobile(?string $hinweistextMobile = null): self
    {
        $this->HinweistextMobile = $hinweistextMobile;
        
        return $this;
    }
    /**
     * Get HinweistextIPhone value
     * @return string|null
     */
    public function getHinweistextIPhone(): ?string
    {
        return $this->HinweistextIPhone;
    }
    /**
     * Set HinweistextIPhone value
     * @param string $hinweistextIPhone
     * @return \THAG\XKfz\StructType\Feldvorgaben
     */
    public function setHinweistextIPhone(?string $hinweistextIPhone = null): self
    {
        $this->HinweistextIPhone = $hinweistextIPhone;
        
        return $this;
    }
    /**
     * Get FeldStatus value
     * @return string|null
     */
    public function getFeldStatus(): ?string
    {
        return $this->FeldStatus;
    }
    /**
     * Set FeldStatus value
     * @param string $feldStatus
     * @return \THAG\XKfz\StructType\Feldvorgaben
     */
    public function setFeldStatus(?string $feldStatus = null): self
    {
        $this->FeldStatus = $feldStatus;
        
        return $this;
    }
    /**
     * Get FreitextZulassen value
     * @return string|null
     */
    public function getFreitextZulassen(): ?string
    {
        return $this->FreitextZulassen;
    }
    /**
     * Set FreitextZulassen value
     * @param string $freitextZulassen
     * @return \THAG\XKfz\StructType\Feldvorgaben
     */
    public function setFreitextZulassen(?string $freitextZulassen = null): self
    {
        $this->FreitextZulassen = $freitextZulassen;
        
        return $this;
    }
    /**
     * Get ListeVorgangsart value
     * @return \THAG\XKfz\StructType\ListeVorgangsart|null
     */
    public function getListeVorgangsart(): ?\THAG\XKfz\StructType\ListeVorgangsart
    {
        return $this->ListeVorgangsart;
    }
    /**
     * Set ListeVorgangsart value
     * @param \THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart
     * @return \THAG\XKfz\StructType\Feldvorgaben
     */
    public function setListeVorgangsart(?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null): self
    {
        $this->ListeVorgangsart = $listeVorgangsart;
        
        return $this;
    }
}
