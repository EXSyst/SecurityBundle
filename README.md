EXSystSecurityBundle
====================

[![Build Status](https://travis-ci.org/EXSyst/SecurityBundle.svg?branch=master)](https://travis-ci.org/EXSyst/SecurityBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/EXSyst/SecurityBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/EXSyst/SecurityBundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/EXSyst/SecurityBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/EXSyst/SecurityBundle/?branch=master)
[![Total Downloads](https://poser.pugx.org/EXSyst/security-bundle/downloads.svg)](https://packagist.org/packages/EXSyst/security-bundle)
[![Latest Stable Version](https://poser.pugx.org/EXSyst/security-bundle/v/stable.svg)](https://packagist.org/packages/EXSyst/security-bundle)

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require exsyst/security-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new EXSyst\Bundle\SecurityBundle\EXSystSecurityBundle(),
        );

        // ...
    }

    // ...
}
```
