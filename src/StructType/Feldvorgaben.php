<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feldvorgaben StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Feldvorgaben extends AbstractStructBase
{
    /**
     * The HinweistextWeb
     */
    public ?string $HinweistextWeb = null;

    /**
     * The HinweistextMobile
     */
    public ?string $HinweistextMobile = null;

    /**
     * The HinweistextIPhone
     */
    public ?string $HinweistextIPhone = null;

    /**
     * The FeldStatus
     */
    public ?string $FeldStatus = null;

    /**
     * The FreitextZulassen
     */
    public ?string $FreitextZulassen = null;

    /**
     * The ListeVorgangsart
     */
    public ?\THAG\XKfz\StructType\ListeVorgangsart $ListeVorgangsart = null;

    /**
     * Constructor method for Feldvorgaben
     *
     * @uses Feldvorgaben::setHinweistextWeb()
     * @uses Feldvorgaben::setHinweistextMobile()
     * @uses Feldvorgaben::setHinweistextIPhone()
     * @uses Feldvorgaben::setFeldStatus()
     * @uses Feldvorgaben::setFreitextZulassen()
     * @uses Feldvorgaben::setListeVorgangsart()
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
     */
    public function getHinweistextWeb(): ?string
    {
        return $this->HinweistextWeb;
    }

    /**
     * Set HinweistextWeb value
     */
    public function setHinweistextWeb(?string $hinweistextWeb = null): self
    {
        $this->HinweistextWeb = $hinweistextWeb;

        return $this;
    }

    /**
     * Get HinweistextMobile value
     */
    public function getHinweistextMobile(): ?string
    {
        return $this->HinweistextMobile;
    }

    /**
     * Set HinweistextMobile value
     */
    public function setHinweistextMobile(?string $hinweistextMobile = null): self
    {
        $this->HinweistextMobile = $hinweistextMobile;

        return $this;
    }

    /**
     * Get HinweistextIPhone value
     */
    public function getHinweistextIPhone(): ?string
    {
        return $this->HinweistextIPhone;
    }

    /**
     * Set HinweistextIPhone value
     */
    public function setHinweistextIPhone(?string $hinweistextIPhone = null): self
    {
        $this->HinweistextIPhone = $hinweistextIPhone;

        return $this;
    }

    /**
     * Get FeldStatus value
     */
    public function getFeldStatus(): ?string
    {
        return $this->FeldStatus;
    }

    /**
     * Set FeldStatus value
     */
    public function setFeldStatus(?string $feldStatus = null): self
    {
        $this->FeldStatus = $feldStatus;

        return $this;
    }

    /**
     * Get FreitextZulassen value
     */
    public function getFreitextZulassen(): ?string
    {
        return $this->FreitextZulassen;
    }

    /**
     * Set FreitextZulassen value
     */
    public function setFreitextZulassen(?string $freitextZulassen = null): self
    {
        $this->FreitextZulassen = $freitextZulassen;

        return $this;
    }

    /**
     * Get ListeVorgangsart value
     */
    public function getListeVorgangsart(): ?\THAG\XKfz\StructType\ListeVorgangsart
    {
        return $this->ListeVorgangsart;
    }

    /**
     * Set ListeVorgangsart value
     */
    public function setListeVorgangsart(?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null): self
    {
        $this->ListeVorgangsart = $listeVorgangsart;

        return $this;
    }
}
