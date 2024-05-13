<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDV_EMAIL_001.ListeEmailParameter StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class GDV_EMAIL_001_ListeEmailParameter extends AbstractStructBase
{
    /**
     * The EmailParameter
     * @var \THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter|null
     */
    public ?\THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter $EmailParameter = null;
    /**
     * Constructor method for GDV_EMAIL_001.ListeEmailParameter
     * @uses GDV_EMAIL_001_ListeEmailParameter::setEmailParameter()
     * @param \THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter $emailParameter
     */
    public function __construct(?\THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter $emailParameter = null)
    {
        $this
            ->setEmailParameter($emailParameter);
    }
    /**
     * Get EmailParameter value
     * @return \THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter|null
     */
    public function getEmailParameter(): ?\THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter
    {
        return $this->EmailParameter;
    }
    /**
     * Set EmailParameter value
     * @param \THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter $emailParameter
     * @return \THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter
     */
    public function setEmailParameter(?\THAG\XKfz\StructType\GDV_EMAIL_001_EmailParameter $emailParameter = null): self
    {
        $this->EmailParameter = $emailParameter;
        
        return $this;
    }
}
