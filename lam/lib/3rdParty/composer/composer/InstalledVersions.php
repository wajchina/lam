<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-develop',
    'version' => 'dev-develop',
    'aliases' => 
    array (
    ),
    'reference' => '515c04fa1cb6ca63b5a0d01717fab1e318f2371e',
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => 'dev-develop',
      'version' => 'dev-develop',
      'aliases' => 
      array (
      ),
      'reference' => '515c04fa1cb6ca63b5a0d01717fab1e318f2371e',
    ),
    'beberlei/assert' => 
    array (
      'pretty_version' => 'v3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb70015c04be1baee6f5f5c953703347c0ac1655',
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.9.3',
      'version' => '0.9.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca57d18f028f84f777b2168cd1911b0dee2343ae',
    ),
    'christian-riesen/base32' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2e82dab3baa008e24a505649b0d583c31d31e894',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.6',
      'version' => '2.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
    ),
    'duosecurity/duo_universal_php' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '8734a47480d2d2f0539e8ee782675e052025d026',
    ),
    'facile-it/php-jose-verifier' => 
    array (
      'pretty_version' => '0.3.0',
      'version' => '0.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6a3d17896dec0c3e383c0ae83b7be855b8fd247',
    ),
    'facile-it/php-openid-client' => 
    array (
      'pretty_version' => '0.2.0',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8396adf100f32d96f9d943e729eb9608a9e15504',
    ),
    'fgrosse/phpasn1' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '42060ed45344789fb9f21f9f1864fc47b9e3507b',
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v6.4.0',
      'version' => '6.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4dd1e007f22a927ac77da5a3fbb067b42d3bc224',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4490cabc77465aaee90b20cfc9a770f8c04be6b',
    ),
    'http-interop/http-factory-guzzle' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8f06e92b95405216b237521cc64c804dd44c4a81',
    ),
    'illuminate/collections' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '705a4e1ef93cd492c45b9b3e7911cccc990a07f4',
    ),
    'illuminate/contracts' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e0fd287a1b22a6b346a9f7cd484d8cf0234585d',
    ),
    'illuminate/macroable' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aed81891a6e046fdee72edd497f822190f61c162',
    ),
    'illuminate/pagination' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '16fe8dc35f9d18c58a3471469af656a02e9ab692',
    ),
    'illuminate/support' => 
    array (
      'pretty_version' => 'v8.83.27',
      'version' => '8.83.27.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c79242468d3bbd9a0f7477df34f9647dde2a09b',
    ),
    'league/uri' => 
    array (
      'pretty_version' => '6.7.2',
      'version' => '6.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd3b50812dd51f3fbf176344cc2981db03d10fe06',
    ),
    'league/uri-interfaces' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.66.0',
      'version' => '2.66.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '496712849902241f04902033b0441b269effe001',
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.6.3',
      'version' => '2.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '58c3f47f650c94ec05a151692652a868995d2938',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v2.0.21',
      'version' => '2.0.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '96c132c7f2f7bc3230723b66e89f8f150b29d5ae',
    ),
    'php-http/async-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-http/client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-http/discovery' => 
    array (
      'pretty_version' => '1.15.3',
      'version' => '1.15.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3ccd28dd9fb34b52db946abea1b538568e34eae8',
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.8.0',
      'version' => '6.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df16b615e371d81fb79e506277faea67a1be18f1',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '3.0.19',
      'version' => '3.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc181005cf548bfd8a4896383bb825d859259f95',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
        1 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '^1.0',
        1 => '*',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.1',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
        1 => '1.0',
      ),
    ),
    'psr/http-server-handler' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '84c4fb66179be4caaf8e97bd239203245302e7d4',
    ),
    'psr/http-server-middleware' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1481f747daaa6a0782775cd6a8c26a1bf4a3829',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0 || 2.0.0 || 3.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad7475d1c9e70b190ecffc58f2d989416af339b4',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.2.3',
      'version' => '4.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.2.3',
      ),
    ),
    'spomky-labs/base64url' => 
    array (
      'pretty_version' => 'v2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '7752ce931ec285da4ed1f4c5aa27e45e097be61d',
    ),
    'spomky-labs/cbor-php' => 
    array (
      'pretty_version' => 'v2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '28e2712cfc0b48fae661a48ffc6896d7abe83684',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
    ),
    'symfony/http-client' => 
    array (
      'pretty_version' => 'v5.4.22',
      'version' => '5.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '4cd1b7e7ee846c8b22cb47cbc435344af9b2a8bf',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
    ),
    'symfony/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.4',
      ),
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.0.7',
      'version' => '5.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '26fb006a2c7b6cdd23d52157b05f8414ffa417b6',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.4.21',
      'version' => '5.4.21.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef57d9fb9cdd5e6b2ffc567d109865d10b6920cd',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '707403074c8ea6e2edaf8794b0157a0bfa52157a',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.4.22',
      'version' => '5.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b850da0cc3a2a9181c1ed407adbca4733dc839b',
    ),
    'symfony/psr-http-message-bridge' => 
    array (
      'pretty_version' => 'v1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d3e80d54d9ae747ad573cad796e8e247df7b796',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v5.4.22',
      'version' => '5.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a401392f01bc385aa42760eff481d213a0cc2ba',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3',
      ),
    ),
    'thecodingmachine/safe' => 
    array (
      'pretty_version' => 'v1.3.3',
      'version' => '1.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8ab0876305a4cdaef31b2350fcb9811b5608dbc',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '87337c91b9dfacee02452244ee14ab3c43bc485a',
    ),
    'web-auth/cose-lib' => 
    array (
      'pretty_version' => 'v3.3.12',
      'version' => '3.3.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'efa6ec2ba4e840bc1316a493973c9916028afeeb',
    ),
    'web-auth/metadata-service' => 
    array (
      'pretty_version' => 'v3.3.12',
      'version' => '3.3.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef40d2b7b68c4964247d13fab52e2fa8dbd65246',
    ),
    'web-auth/webauthn-lib' => 
    array (
      'pretty_version' => 'v3.3.12',
      'version' => '3.3.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '5ef9b21c8e9f8a817e524ac93290d08a9f065b33',
    ),
    'web-token/jwt-checker' => 
    array (
      'pretty_version' => 'v2.2.11',
      'version' => '2.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f31d98155951739e2fae7455e8466ccddd08f50',
    ),
    'web-token/jwt-core' => 
    array (
      'pretty_version' => 'v2.2.11',
      'version' => '2.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '53beb6f6c1eec4fa93c1c3e5d9e5701e71fa1678',
    ),
    'web-token/jwt-easy' => 
    array (
      'pretty_version' => 'v2.2.11',
      'version' => '2.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '01db23252bb53d4fd36975b55dd58466bab1bb30',
    ),
    'web-token/jwt-encryption' => 
    array (
      'pretty_version' => 'v2.2.11',
      'version' => '2.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b8d67d7c5c013750703e7c27f1001544407bbb2',
    ),
    'web-token/jwt-key-mgmt' => 
    array (
      'pretty_version' => 'v2.2.11',
      'version' => '2.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '0b116379515700d237b4e5de86879078ccb09d8a',
    ),
    'web-token/jwt-signature' => 
    array (
      'pretty_version' => 'v2.2.11',
      'version' => '2.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '015b59aaf3b6e8fb9f5bd1338845b7464c7d8103',
    ),
    'web-token/jwt-signature-algorithm-rsa' => 
    array (
      'pretty_version' => 'v2.2.11',
      'version' => '2.2.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '513ad90eb5ef1886ff176727a769bda4618141b0',
    ),
    'webklex/php-imap' => 
    array (
      'pretty_version' => '4.1.2',
      'version' => '4.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '94bf93ae8868ac1e073cfbaef377f0ca1acac2bc',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
