<?php

/*
 * This file is part of the SecurityBundle package.
 *
 * (c) EXSyst
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EXSyst\Bundle\SecurityBundle\TOTP;

interface TOTPAuthenticatableInterface
{
    public function getTOTPSecretKey();

    public function getTOTPLastTrialStamp();

    public function setTOTPLastTrialStamp($stamp);

    public function getTOTPLastSuccessStamp();

    public function setTOTPLastSuccessStamp($stamp);

    public function getTOTPTrialCount();

    public function setTOTPTrialCount($count);
}
