<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeldVuIndividualisierung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class FeldVuIndividualisierung extends AbstractStructBase
{
    /**
     * The FeldXmlPfad
     * @var string|null
     */
    public ?string $FeldXmlPfad = null;
    /**
     * The ListeFeldvorgaben
     * @var \THAG\XKfz\StructType\ListeFeldvorgaben|null
     */
    public ?\THAG\XKfz\StructType\ListeFeldvorgaben $ListeFeldvorgaben = null;
    /**
     * The ListeFeldauspraegung
     * @var \THAG\XKfz\StructType\ListeFeldauspraegung|null
     */
    public ?\THAG\XKfz\StructType\ListeFeldauspraegung $ListeFeldauspraegung = null;
    /**
     * Constructor method for FeldVuIndividualisierung
     * @uses FeldVuIndividualisierung::setFeldXmlPfad()
     * @uses FeldVuIndividualisierung::setListeFeldvorgaben()
     * @uses FeldVuIndividualisierung::setListeFeldauspraegung()
     * @param string $feldXmlPfad
     * @param \THAG\XKfz\StructType\ListeFeldvorgaben $listeFeldvorgaben
     * @param \THAG\XKfz\StructType\ListeFeldauspraegung $listeFeldauspraegung
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
     * @return string|null
     */
    public function getFeldXmlPfad(): ?string
    {
        return $this->FeldXmlPfad;
    }
    /**
     * Set FeldXmlPfad value
     * @param string $feldXmlPfad
     * @return \THAG\XKfz\StructType\FeldVuIndividualisierung
     */
    public function setFeldXmlPfad(?string $feldXmlPfad = null): self
    {
        $this->FeldXmlPfad = $feldXmlPfad;
        
        return $this;
    }
    /**
     * Get ListeFeldvorgaben value
     * @return \THAG\XKfz\StructType\ListeFeldvorgaben|null
     */
    public function getListeFeldvorgaben(): ?\THAG\XKfz\StructType\ListeFeldvorgaben
    {
        return $this->ListeFeldvorgaben;
    }
    /**
     * Set ListeFeldvorgaben value
     * @param \THAG\XKfz\StructType\ListeFeldvorgaben $listeFeldvorgaben
     * @return \THAG\XKfz\StructType\FeldVuIndividualisierung
     */
    public function setListeFeldvorgaben(?\THAG\XKfz\StructType\ListeFeldvorgaben $listeFeldvorgaben = null): self
    {
        $this->ListeFeldvorgaben = $listeFeldvorgaben;
        
        return $this;
    }
    /**
     * Get ListeFeldauspraegung value
     * @return \THAG\XKfz\StructType\ListeFeldauspraegung|null
     */
    public function getListeFeldauspraegung(): ?\THAG\XKfz\StructType\ListeFeldauspraegung
    {
        return $this->ListeFeldauspraegung;
    }
    /**
     * Set ListeFeldauspraegung value
     * @param \THAG\XKfz\StructType\ListeFeldauspraegung $listeFeldauspraegung
     * @return \THAG\XKfz\StructType\FeldVuIndividualisierung
     */
    public function setListeFeldauspraegung(?\THAG\XKfz\StructType\ListeFeldauspraegung $listeFeldauspraegung = null): self
    {
        $this->ListeFeldauspraegung = $listeFeldauspraegung;
        
        return $this;
    }
}
