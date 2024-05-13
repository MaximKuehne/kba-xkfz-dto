<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeEmailEmpfaenger StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ListeEmailEmpfaenger extends AbstractStructBase
{
    /**
     * The Email
     */
    public ?string $Email = null;

    /**
     * Constructor method for ListeEmailEmpfaenger
     *
     * @uses ListeEmailEmpfaenger::setEmail()
     */
    public function __construct(?string $email = null)
    {
        $this
            ->setEmail($email);
    }

    /**
     * Get Email value
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * Set Email value
     */
    public function setEmail(?string $email = null): self
    {
        $this->Email = $email;

        return $this;
    }
}
