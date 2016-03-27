<?php
namespace In2code\Powermail\Domain\Validator\SpamShield;

use In2code\Powermail\Domain\Model\Mail;

/**
 * Interface MethodInterface
 * @package In2code\Powermail\Domain\Validator\SpamShield
 */
interface MethodInterface
{

    /**
     * @param Mail $mail
     * @param array $settings
     * @param array $configuration
     */
    public function __construct(Mail $mail, array $settings, array $configuration = []);

    /**
     * @return void
     */
    public function initialize();

    /**
     * @return void
     */
    public function initializeSpamCheck();

    /**
     * @param int $int
     * @return int
     */
    public function spamCheck($int);
}
