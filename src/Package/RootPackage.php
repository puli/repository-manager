<?php

/*
 * This file is part of the puli/repository-manager package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Puli\RepositoryManager\Package;

use Puli\RepositoryManager\Package\PackageFile\RootPackageFile;

/**
 * The root package.
 *
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RootPackage extends Package
{
    /**
     * @var string|null
     */
    protected static $defaultName = '__root__';

    /**
     * Creates a new root package.
     *
     * @param RootPackageFile $packageFile The package file.
     * @param string          $installPath The absolute install path.
     */
    public function __construct(RootPackageFile $packageFile, $installPath)
    {
        parent::__construct($packageFile, $installPath);
    }

    /**
     * Returns the package file of the package.
     *
     * @return RootPackageFile The package file.
     */
    public function getPackageFile()
    {
        return parent::getPackageFile();
    }
}
