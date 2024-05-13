<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifikationsDokument StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifikationsDokument extends AbstractStructBase
{
    /**
     * The typIdentifikationsdokument
     * @var \THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments|null
     */
    public ?\THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments $typIdentifikationsdokument = null;
    /**
     * The nummerIdentifikationsdokument
     * @var string|null
     */
    public ?string $nummerIdentifikationsdokument = null;
    /**
     * The datumDerAusstellung
     * @var string|null
     */
    public ?string $datumDerAusstellung = null;
    /**
     * The datumGueltigBis
     * @var string|null
     */
    public ?string $datumGueltigBis = null;
    /**
     * The samlToken
     * @var \THAG\XKfz\StructType\Type_ElektronischesDokument|null
     */
    public ?\THAG\XKfz\StructType\Type_ElektronischesDokument $samlToken = null;
    /**
     * Constructor method for Type.IdentifikationsDokument
     * @uses Type_IdentifikationsDokument::setTypIdentifikationsdokument()
     * @uses Type_IdentifikationsDokument::setNummerIdentifikationsdokument()
     * @uses Type_IdentifikationsDokument::setDatumDerAusstellung()
     * @uses Type_IdentifikationsDokument::setDatumGueltigBis()
     * @uses Type_IdentifikationsDokument::setSamlToken()
     * @param \THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments $typIdentifikationsdokument
     * @param string $nummerIdentifikationsdokument
     * @param string $datumDerAusstellung
     * @param string $datumGueltigBis
     * @param \THAG\XKfz\StructType\Type_ElektronischesDokument $samlToken
     */
    public function __construct(?\THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments $typIdentifikationsdokument = null, ?string $nummerIdentifikationsdokument = null, ?string $datumDerAusstellung = null, ?string $datumGueltigBis = null, ?\THAG\XKfz\StructType\Type_ElektronischesDokument $samlToken = null)
    {
        $this
            ->setTypIdentifikationsdokument($typIdentifikationsdokument)
            ->setNummerIdentifikationsdokument($nummerIdentifikationsdokument)
            ->setDatumDerAusstellung($datumDerAusstellung)
            ->setDatumGueltigBis($datumGueltigBis)
            ->setSamlToken($samlToken);
    }
    /**
     * Get typIdentifikationsdokument value
     * @return \THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments|null
     */
    public function getTypIdentifikationsdokument(): ?\THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments
    {
        return $this->typIdentifikationsdokument;
    }
    /**
     * Set typIdentifikationsdokument value
     * @param \THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments $typIdentifikationsdokument
     * @return \THAG\XKfz\StructType\Type_IdentifikationsDokument
     */
    public function setTypIdentifikationsdokument(?\THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments $typIdentifikationsdokument = null): self
    {
        $this->typIdentifikationsdokument = $typIdentifikationsdokument;
        
        return $this;
    }
    /**
     * Get nummerIdentifikationsdokument value
     * @return string|null
     */
    public function getNummerIdentifikationsdokument(): ?string
    {
        return $this->nummerIdentifikationsdokument;
    }
    /**
     * Set nummerIdentifikationsdokument value
     * @param string $nummerIdentifikationsdokument
     * @return \THAG\XKfz\StructType\Type_IdentifikationsDokument
     */
    public function setNummerIdentifikationsdokument(?string $nummerIdentifikationsdokument = null): self
    {
        $this->nummerIdentifikationsdokument = $nummerIdentifikationsdokument;
        
        return $this;
    }
    /**
     * Get datumDerAusstellung value
     * @return string|null
     */
    public function getDatumDerAusstellung(): ?string
    {
        return $this->datumDerAusstellung;
    }
    /**
     * Set datumDerAusstellung value
     * @param string $datumDerAusstellung
     * @return \THAG\XKfz\StructType\Type_IdentifikationsDokument
     */
    public function setDatumDerAusstellung(?string $datumDerAusstellung = null): self
    {
        $this->datumDerAusstellung = $datumDerAusstellung;
        
        return $this;
    }
    /**
     * Get datumGueltigBis value
     * @return string|null
     */
    public function getDatumGueltigBis(): ?string
    {
        return $this->datumGueltigBis;
    }
    /**
     * Set datumGueltigBis value
     * @param string $datumGueltigBis
     * @return \THAG\XKfz\StructType\Type_IdentifikationsDokument
     */
    public function setDatumGueltigBis(?string $datumGueltigBis = null): self
    {
        $this->datumGueltigBis = $datumGueltigBis;
        
        return $this;
    }
    /**
     * Get samlToken value
     * @return \THAG\XKfz\StructType\Type_ElektronischesDokument|null
     */
    public function getSamlToken(): ?\THAG\XKfz\StructType\Type_ElektronischesDokument
    {
        return $this->samlToken;
    }
    /**
     * Set samlToken value
     * @param \THAG\XKfz\StructType\Type_ElektronischesDokument $samlToken
     * @return \THAG\XKfz\StructType\Type_IdentifikationsDokument
     */
    public function setSamlToken(?\THAG\XKfz\StructType\Type_ElektronischesDokument $samlToken = null): self
    {
        $this->samlToken = $samlToken;
        
        return $this;
    }
}
