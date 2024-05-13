<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzQuittung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzQuittung extends AbstractStructBase
{
    /**
     * The nachrichtentyp
     * @var \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public ?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null;
    /**
     * The nachrichtenid
     * @var string|null
     */
    public ?string $nachrichtenid = null;
    /**
     * The supportinformation
     * @var \THAG\XKfz\StructType\Type_Supportinformation|null
     */
    public ?\THAG\XKfz\StructType\Type_Supportinformation $supportinformation = null;
    /**
     * The ebene
     * @var \THAG\XKfz\StructType\Code_Quittungsebene|null
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null;
    /**
     * The art
     * @var \THAG\XKfz\StructType\Code_Quittungsart|null
     */
    public ?\THAG\XKfz\StructType\Code_Quittungsart $art = null;
    /**
     * The code
     * @var \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz|null
     */
    public ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null;
    /**
     * Constructor method for Type.XKfzQuittung
     * @uses Type_XKfzQuittung::setNachrichtentyp()
     * @uses Type_XKfzQuittung::setNachrichtenid()
     * @uses Type_XKfzQuittung::setSupportinformation()
     * @uses Type_XKfzQuittung::setEbene()
     * @uses Type_XKfzQuittung::setArt()
     * @uses Type_XKfzQuittung::setCode()
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp
     * @param string $nachrichtenid
     * @param \THAG\XKfz\StructType\Type_Supportinformation $supportinformation
     * @param \THAG\XKfz\StructType\Code_Quittungsebene $ebene
     * @param \THAG\XKfz\StructType\Code_Quittungsart $art
     * @param \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code
     */
    public function __construct(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null, ?string $nachrichtenid = null, ?\THAG\XKfz\StructType\Type_Supportinformation $supportinformation = null, ?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null, ?\THAG\XKfz\StructType\Code_Quittungsart $art = null, ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null)
    {
        $this
            ->setNachrichtentyp($nachrichtentyp)
            ->setNachrichtenid($nachrichtenid)
            ->setSupportinformation($supportinformation)
            ->setEbene($ebene)
            ->setArt($art)
            ->setCode($code);
    }
    /**
     * Get nachrichtentyp value
     * @return \THAG\XKfz\StructType\Code_Nachrichtentyp|null
     */
    public function getNachrichtentyp(): ?\THAG\XKfz\StructType\Code_Nachrichtentyp
    {
        return $this->nachrichtentyp;
    }
    /**
     * Set nachrichtentyp value
     * @param \THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp
     * @return \THAG\XKfz\StructType\Type_XKfzQuittung
     */
    public function setNachrichtentyp(?\THAG\XKfz\StructType\Code_Nachrichtentyp $nachrichtentyp = null): self
    {
        $this->nachrichtentyp = $nachrichtentyp;
        
        return $this;
    }
    /**
     * Get nachrichtenid value
     * @return string|null
     */
    public function getNachrichtenid(): ?string
    {
        return $this->nachrichtenid;
    }
    /**
     * Set nachrichtenid value
     * @param string $nachrichtenid
     * @return \THAG\XKfz\StructType\Type_XKfzQuittung
     */
    public function setNachrichtenid(?string $nachrichtenid = null): self
    {
        $this->nachrichtenid = $nachrichtenid;
        
        return $this;
    }
    /**
     * Get supportinformation value
     * @return \THAG\XKfz\StructType\Type_Supportinformation|null
     */
    public function getSupportinformation(): ?\THAG\XKfz\StructType\Type_Supportinformation
    {
        return $this->supportinformation;
    }
    /**
     * Set supportinformation value
     * @param \THAG\XKfz\StructType\Type_Supportinformation $supportinformation
     * @return \THAG\XKfz\StructType\Type_XKfzQuittung
     */
    public function setSupportinformation(?\THAG\XKfz\StructType\Type_Supportinformation $supportinformation = null): self
    {
        $this->supportinformation = $supportinformation;
        
        return $this;
    }
    /**
     * Get ebene value
     * @return \THAG\XKfz\StructType\Code_Quittungsebene|null
     */
    public function getEbene(): ?\THAG\XKfz\StructType\Code_Quittungsebene
    {
        return $this->ebene;
    }
    /**
     * Set ebene value
     * @param \THAG\XKfz\StructType\Code_Quittungsebene $ebene
     * @return \THAG\XKfz\StructType\Type_XKfzQuittung
     */
    public function setEbene(?\THAG\XKfz\StructType\Code_Quittungsebene $ebene = null): self
    {
        $this->ebene = $ebene;
        
        return $this;
    }
    /**
     * Get art value
     * @return \THAG\XKfz\StructType\Code_Quittungsart|null
     */
    public function getArt(): ?\THAG\XKfz\StructType\Code_Quittungsart
    {
        return $this->art;
    }
    /**
     * Set art value
     * @param \THAG\XKfz\StructType\Code_Quittungsart $art
     * @return \THAG\XKfz\StructType\Type_XKfzQuittung
     */
    public function setArt(?\THAG\XKfz\StructType\Code_Quittungsart $art = null): self
    {
        $this->art = $art;
        
        return $this;
    }
    /**
     * Get code value
     * @return \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz|null
     */
    public function getCode(): ?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param \THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code
     * @return \THAG\XKfz\StructType\Type_XKfzQuittung
     */
    public function setCode(?\THAG\XKfz\StructType\Type_QuittungscodeMitZusatz $code = null): self
    {
        $this->code = $code;
        
        return $this;
    }
}
