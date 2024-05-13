<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sabrinaErgebnisPosteingang StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class SabrinaErgebnisPosteingang extends AbstractStructBase
{
    /**
     * The kommunikationskanal
     * @var \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA|null
     */
    public ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null;
    /**
     * The anzahlDerNachrichten
     * @var int|null
     */
    public ?int $anzahlDerNachrichten = null;
    /**
     * The listeNachrichtenInfo
     * @var \THAG\XKfz\StructType\Type_ListeNachrichtenInfo|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo = null;
    /**
     * Constructor method for sabrinaErgebnisPosteingang
     * @uses SabrinaErgebnisPosteingang::setKommunikationskanal()
     * @uses SabrinaErgebnisPosteingang::setAnzahlDerNachrichten()
     * @uses SabrinaErgebnisPosteingang::setListeNachrichtenInfo()
     * @param \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal
     * @param int $anzahlDerNachrichten
     * @param \THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo
     */
    public function __construct(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null, ?int $anzahlDerNachrichten = null, ?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo = null)
    {
        $this
            ->setKommunikationskanal($kommunikationskanal)
            ->setAnzahlDerNachrichten($anzahlDerNachrichten)
            ->setListeNachrichtenInfo($listeNachrichtenInfo);
    }
    /**
     * Get kommunikationskanal value
     * @return \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA|null
     */
    public function getKommunikationskanal(): ?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA
    {
        return $this->kommunikationskanal;
    }
    /**
     * Set kommunikationskanal value
     * @param \THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal
     * @return \THAG\XKfz\StructType\SabrinaErgebnisPosteingang
     */
    public function setKommunikationskanal(?\THAG\XKfz\StructType\Code_KommunikationskanalSABRINA $kommunikationskanal = null): self
    {
        $this->kommunikationskanal = $kommunikationskanal;
        
        return $this;
    }
    /**
     * Get anzahlDerNachrichten value
     * @return int|null
     */
    public function getAnzahlDerNachrichten(): ?int
    {
        return $this->anzahlDerNachrichten;
    }
    /**
     * Set anzahlDerNachrichten value
     * @param int $anzahlDerNachrichten
     * @return \THAG\XKfz\StructType\SabrinaErgebnisPosteingang
     */
    public function setAnzahlDerNachrichten(?int $anzahlDerNachrichten = null): self
    {
        $this->anzahlDerNachrichten = $anzahlDerNachrichten;
        
        return $this;
    }
    /**
     * Get listeNachrichtenInfo value
     * @return \THAG\XKfz\StructType\Type_ListeNachrichtenInfo|null
     */
    public function getListeNachrichtenInfo(): ?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo
    {
        return $this->listeNachrichtenInfo;
    }
    /**
     * Set listeNachrichtenInfo value
     * @param \THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo
     * @return \THAG\XKfz\StructType\SabrinaErgebnisPosteingang
     */
    public function setListeNachrichtenInfo(?\THAG\XKfz\StructType\Type_ListeNachrichtenInfo $listeNachrichtenInfo = null): self
    {
        $this->listeNachrichtenInfo = $listeNachrichtenInfo;
        
        return $this;
    }
}
