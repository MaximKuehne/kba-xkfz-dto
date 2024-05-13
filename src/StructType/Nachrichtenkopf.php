<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nachrichtenkopf StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Nachrichtenkopf extends AbstractStructBase
{
    /**
     * The Nachrichtentyp
     * @var string|null
     */
    public ?string $Nachrichtentyp = null;
    /**
     * The Betriebsart
     * @var string|null
     */
    public ?string $Betriebsart = null;
    /**
     * The ListeNachrichtenId
     * @var \THAG\XKfz\StructType\ListeNachrichtenId|null
     */
    public ?\THAG\XKfz\StructType\ListeNachrichtenId $ListeNachrichtenId = null;
    /**
     * The ListeTechnischeAbsenderinformationen
     * @var \THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen|null
     */
    public ?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $ListeTechnischeAbsenderinformationen = null;
    /**
     * Constructor method for Nachrichtenkopf
     * @uses Nachrichtenkopf::setNachrichtentyp()
     * @uses Nachrichtenkopf::setBetriebsart()
     * @uses Nachrichtenkopf::setListeNachrichtenId()
     * @uses Nachrichtenkopf::setListeTechnischeAbsenderinformationen()
     * @param string $nachrichtentyp
     * @param string $betriebsart
     * @param \THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId
     * @param \THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $listeTechnischeAbsenderinformationen
     */
    public function __construct(?string $nachrichtentyp = null, ?string $betriebsart = null, ?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null, ?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $listeTechnischeAbsenderinformationen = null)
    {
        $this
            ->setNachrichtentyp($nachrichtentyp)
            ->setBetriebsart($betriebsart)
            ->setListeNachrichtenId($listeNachrichtenId)
            ->setListeTechnischeAbsenderinformationen($listeTechnischeAbsenderinformationen);
    }
    /**
     * Get Nachrichtentyp value
     * @return string|null
     */
    public function getNachrichtentyp(): ?string
    {
        return $this->Nachrichtentyp;
    }
    /**
     * Set Nachrichtentyp value
     * @param string $nachrichtentyp
     * @return \THAG\XKfz\StructType\Nachrichtenkopf
     */
    public function setNachrichtentyp(?string $nachrichtentyp = null): self
    {
        $this->Nachrichtentyp = $nachrichtentyp;
        
        return $this;
    }
    /**
     * Get Betriebsart value
     * @return string|null
     */
    public function getBetriebsart(): ?string
    {
        return $this->Betriebsart;
    }
    /**
     * Set Betriebsart value
     * @param string $betriebsart
     * @return \THAG\XKfz\StructType\Nachrichtenkopf
     */
    public function setBetriebsart(?string $betriebsart = null): self
    {
        $this->Betriebsart = $betriebsart;
        
        return $this;
    }
    /**
     * Get ListeNachrichtenId value
     * @return \THAG\XKfz\StructType\ListeNachrichtenId|null
     */
    public function getListeNachrichtenId(): ?\THAG\XKfz\StructType\ListeNachrichtenId
    {
        return $this->ListeNachrichtenId;
    }
    /**
     * Set ListeNachrichtenId value
     * @param \THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId
     * @return \THAG\XKfz\StructType\Nachrichtenkopf
     */
    public function setListeNachrichtenId(?\THAG\XKfz\StructType\ListeNachrichtenId $listeNachrichtenId = null): self
    {
        $this->ListeNachrichtenId = $listeNachrichtenId;
        
        return $this;
    }
    /**
     * Get ListeTechnischeAbsenderinformationen value
     * @return \THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen|null
     */
    public function getListeTechnischeAbsenderinformationen(): ?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen
    {
        return $this->ListeTechnischeAbsenderinformationen;
    }
    /**
     * Set ListeTechnischeAbsenderinformationen value
     * @param \THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $listeTechnischeAbsenderinformationen
     * @return \THAG\XKfz\StructType\Nachrichtenkopf
     */
    public function setListeTechnischeAbsenderinformationen(?\THAG\XKfz\StructType\ListeTechnischeAbsenderinformationen $listeTechnischeAbsenderinformationen = null): self
    {
        $this->ListeTechnischeAbsenderinformationen = $listeTechnischeAbsenderinformationen;
        
        return $this;
    }
}
