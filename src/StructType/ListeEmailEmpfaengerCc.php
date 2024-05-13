<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeEmailEmpfaengerCc StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeEmailEmpfaengerCc extends AbstractStructBase
{
    /**
     * The Email
     * @var string|null
     */
    public ?string $Email = null;
    /**
     * Constructor method for ListeEmailEmpfaengerCc
     * @uses ListeEmailEmpfaengerCc::setEmail()
     * @param string $email
     */
    public function __construct(?string $email = null)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \THAG\XKfz\StructType\ListeEmailEmpfaengerCc
     */
    public function setEmail(?string $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
}
