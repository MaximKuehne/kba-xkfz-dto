<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NachrichtenUebersicht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class NachrichtenUebersicht extends AbstractStructBase
{
    /**
     * The Zeitstempel
     * @var string|null
     */
    public ?string $Zeitstempel = null;
    /**
     * The Nachrichtentyp
     * @var string|null
     */
    public ?string $Nachrichtentyp = null;
    /**
     * The NachrichtenId
     * @var string|null
     */
    public ?string $NachrichtenId = null;
    /**
     * Constructor method for NachrichtenUebersicht
     * @uses NachrichtenUebersicht::setZeitstempel()
     * @uses NachrichtenUebersicht::setNachrichtentyp()
     * @uses NachrichtenUebersicht::setNachrichtenId()
     * @param string $zeitstempel
     * @param string $nachrichtentyp
     * @param string $nachrichtenId
     */
    public function __construct(?string $zeitstempel = null, ?string $nachrichtentyp = null, ?string $nachrichtenId = null)
    {
        $this
            ->setZeitstempel($zeitstempel)
            ->setNachrichtentyp($nachrichtentyp)
            ->setNachrichtenId($nachrichtenId);
    }
    /**
     * Get Zeitstempel value
     * @return string|null
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }
    /**
     * Set Zeitstempel value
     * @param string $zeitstempel
     * @return \THAG\XKfz\StructType\NachrichtenUebersicht
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\NachrichtenUebersicht
     */
    public function setNachrichtentyp(?string $nachrichtentyp = null): self
    {
        $this->Nachrichtentyp = $nachrichtentyp;
        
        return $this;
    }
    /**
     * Get NachrichtenId value
     * @return string|null
     */
    public function getNachrichtenId(): ?string
    {
        return $this->NachrichtenId;
    }
    /**
     * Set NachrichtenId value
     * @param string $nachrichtenId
     * @return \THAG\XKfz\StructType\NachrichtenUebersicht
     */
    public function setNachrichtenId(?string $nachrichtenId = null): self
    {
        $this->NachrichtenId = $nachrichtenId;
        
        return $this;
    }
}
