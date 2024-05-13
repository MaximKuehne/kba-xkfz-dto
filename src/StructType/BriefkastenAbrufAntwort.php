<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BriefkastenAbrufAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BriefkastenAbrufAntwort extends AbstractStructBase
{
    /**
     * The ListeNachricht
     * @var \THAG\XKfz\StructType\ListeNachricht|null
     */
    public ?\THAG\XKfz\StructType\ListeNachricht $ListeNachricht = null;
    /**
     * The ListeQuittung
     * @var \THAG\XKfz\StructType\ListeQuittung|null
     */
    public ?\THAG\XKfz\StructType\ListeQuittung $ListeQuittung = null;
    /**
     * Constructor method for BriefkastenAbrufAntwort
     * @uses BriefkastenAbrufAntwort::setListeNachricht()
     * @uses BriefkastenAbrufAntwort::setListeQuittung()
     * @param \THAG\XKfz\StructType\ListeNachricht $listeNachricht
     * @param \THAG\XKfz\StructType\ListeQuittung $listeQuittung
     */
    public function __construct(?\THAG\XKfz\StructType\ListeNachricht $listeNachricht = null, ?\THAG\XKfz\StructType\ListeQuittung $listeQuittung = null)
    {
        $this
            ->setListeNachricht($listeNachricht)
            ->setListeQuittung($listeQuittung);
    }
    /**
     * Get ListeNachricht value
     * @return \THAG\XKfz\StructType\ListeNachricht|null
     */
    public function getListeNachricht(): ?\THAG\XKfz\StructType\ListeNachricht
    {
        return $this->ListeNachricht;
    }
    /**
     * Set ListeNachricht value
     * @param \THAG\XKfz\StructType\ListeNachricht $listeNachricht
     * @return \THAG\XKfz\StructType\BriefkastenAbrufAntwort
     */
    public function setListeNachricht(?\THAG\XKfz\StructType\ListeNachricht $listeNachricht = null): self
    {
        $this->ListeNachricht = $listeNachricht;
        
        return $this;
    }
    /**
     * Get ListeQuittung value
     * @return \THAG\XKfz\StructType\ListeQuittung|null
     */
    public function getListeQuittung(): ?\THAG\XKfz\StructType\ListeQuittung
    {
        return $this->ListeQuittung;
    }
    /**
     * Set ListeQuittung value
     * @param \THAG\XKfz\StructType\ListeQuittung $listeQuittung
     * @return \THAG\XKfz\StructType\BriefkastenAbrufAntwort
     */
    public function setListeQuittung(?\THAG\XKfz\StructType\ListeQuittung $listeQuittung = null): self
    {
        $this->ListeQuittung = $listeQuittung;
        
        return $this;
    }
}
