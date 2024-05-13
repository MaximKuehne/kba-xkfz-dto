<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.IdentifikationsDokument StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_IdentifikationsDokument extends AbstractStructBase
{
    /**
     * The typIdentifikationsdokument
     */
    public ?\THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments $typIdentifikationsdokument = null;

    /**
     * The nummerIdentifikationsdokument
     */
    public ?string $nummerIdentifikationsdokument = null;

    /**
     * The datumDerAusstellung
     */
    public ?string $datumDerAusstellung = null;

    /**
     * The datumGueltigBis
     */
    public ?string $datumGueltigBis = null;

    /**
     * The samlToken
     */
    public ?\THAG\XKfz\StructType\Type_ElektronischesDokument $samlToken = null;

    /**
     * Constructor method for Type.IdentifikationsDokument
     *
     * @uses Type_IdentifikationsDokument::setTypIdentifikationsdokument()
     * @uses Type_IdentifikationsDokument::setNummerIdentifikationsdokument()
     * @uses Type_IdentifikationsDokument::setDatumDerAusstellung()
     * @uses Type_IdentifikationsDokument::setDatumGueltigBis()
     * @uses Type_IdentifikationsDokument::setSamlToken()
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
     */
    public function getTypIdentifikationsdokument(): ?\THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments
    {
        return $this->typIdentifikationsdokument;
    }

    /**
     * Set typIdentifikationsdokument value
     */
    public function setTypIdentifikationsdokument(?\THAG\XKfz\StructType\Code_TypDesIdentifikationsdokuments $typIdentifikationsdokument = null): self
    {
        $this->typIdentifikationsdokument = $typIdentifikationsdokument;

        return $this;
    }

    /**
     * Get nummerIdentifikationsdokument value
     */
    public function getNummerIdentifikationsdokument(): ?string
    {
        return $this->nummerIdentifikationsdokument;
    }

    /**
     * Set nummerIdentifikationsdokument value
     */
    public function setNummerIdentifikationsdokument(?string $nummerIdentifikationsdokument = null): self
    {
        $this->nummerIdentifikationsdokument = $nummerIdentifikationsdokument;

        return $this;
    }

    /**
     * Get datumDerAusstellung value
     */
    public function getDatumDerAusstellung(): ?string
    {
        return $this->datumDerAusstellung;
    }

    /**
     * Set datumDerAusstellung value
     */
    public function setDatumDerAusstellung(?string $datumDerAusstellung = null): self
    {
        $this->datumDerAusstellung = $datumDerAusstellung;

        return $this;
    }

    /**
     * Get datumGueltigBis value
     */
    public function getDatumGueltigBis(): ?string
    {
        return $this->datumGueltigBis;
    }

    /**
     * Set datumGueltigBis value
     */
    public function setDatumGueltigBis(?string $datumGueltigBis = null): self
    {
        $this->datumGueltigBis = $datumGueltigBis;

        return $this;
    }

    /**
     * Get samlToken value
     */
    public function getSamlToken(): ?\THAG\XKfz\StructType\Type_ElektronischesDokument
    {
        return $this->samlToken;
    }

    /**
     * Set samlToken value
     */
    public function setSamlToken(?\THAG\XKfz\StructType\Type_ElektronischesDokument $samlToken = null): self
    {
        $this->samlToken = $samlToken;

        return $this;
    }
}
