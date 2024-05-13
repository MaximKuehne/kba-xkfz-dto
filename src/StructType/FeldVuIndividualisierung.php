<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeldVuIndividualisierung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FeldVuIndividualisierung extends AbstractStructBase
{
    /**
     * The FeldXmlPfad
     */
    public ?string $FeldXmlPfad = null;

    /**
     * The ListeFeldvorgaben
     */
    public ?\THAG\XKfz\StructType\ListeFeldvorgaben $ListeFeldvorgaben = null;

    /**
     * The ListeFeldauspraegung
     */
    public ?\THAG\XKfz\StructType\ListeFeldauspraegung $ListeFeldauspraegung = null;

    /**
     * Constructor method for FeldVuIndividualisierung
     *
     * @uses FeldVuIndividualisierung::setFeldXmlPfad()
     * @uses FeldVuIndividualisierung::setListeFeldvorgaben()
     * @uses FeldVuIndividualisierung::setListeFeldauspraegung()
     */
    public function __construct(?string $feldXmlPfad = null, ?\THAG\XKfz\StructType\ListeFeldvorgaben $listeFeldvorgaben = null, ?\THAG\XKfz\StructType\ListeFeldauspraegung $listeFeldauspraegung = null)
    {
        $this
            ->setFeldXmlPfad($feldXmlPfad)
            ->setListeFeldvorgaben($listeFeldvorgaben)
            ->setListeFeldauspraegung($listeFeldauspraegung);
    }

    /**
     * Get FeldXmlPfad value
     */
    public function getFeldXmlPfad(): ?string
    {
        return $this->FeldXmlPfad;
    }

    /**
     * Set FeldXmlPfad value
     */
    public function setFeldXmlPfad(?string $feldXmlPfad = null): self
    {
        $this->FeldXmlPfad = $feldXmlPfad;

        return $this;
    }

    /**
     * Get ListeFeldvorgaben value
     */
    public function getListeFeldvorgaben(): ?\THAG\XKfz\StructType\ListeFeldvorgaben
    {
        return $this->ListeFeldvorgaben;
    }

    /**
     * Set ListeFeldvorgaben value
     */
    public function setListeFeldvorgaben(?\THAG\XKfz\StructType\ListeFeldvorgaben $listeFeldvorgaben = null): self
    {
        $this->ListeFeldvorgaben = $listeFeldvorgaben;

        return $this;
    }

    /**
     * Get ListeFeldauspraegung value
     */
    public function getListeFeldauspraegung(): ?\THAG\XKfz\StructType\ListeFeldauspraegung
    {
        return $this->ListeFeldauspraegung;
    }

    /**
     * Set ListeFeldauspraegung value
     */
    public function setListeFeldauspraegung(?\THAG\XKfz\StructType\ListeFeldauspraegung $listeFeldauspraegung = null): self
    {
        $this->ListeFeldauspraegung = $listeFeldauspraegung;

        return $this;
    }
}
