<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90bbf95869b4e88bf0dc5022e708a458
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/Controllers/LoginController.php',
        'App\\Controllers\\PostController' => __DIR__ . '/../..' . '/app/Controllers/PostController.php',
        'App\\Controllers\\SiteController' => __DIR__ . '/../..' . '/app/Controllers/SiteController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/Controllers/UserController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit90bbf95869b4e88bf0dc5022e708a458' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit90bbf95869b4e88bf0dc5022e708a458' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPMailer\\PHPMailer\\DSNConfigurator' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/DSNConfigurator.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\OAuthTokenProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'PHPMailer\\Test\\DebugLogTestListener' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/DebugLogTestListener.php',
        'PHPMailer\\Test\\Language\\TranslationCompletenessTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/Language/TranslationCompletenessTest.php',
        'PHPMailer\\Test\\OAuth\\DummyOauthProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/OAuth/OAuthTest.php',
        'PHPMailer\\Test\\OAuth\\OAuthTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/OAuth/OAuthTest.php',
        'PHPMailer\\Test\\PHPMailer\\AddEmbeddedImageTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/AddEmbeddedImageTest.php',
        'PHPMailer\\Test\\PHPMailer\\AddStringAttachmentTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/AddStringAttachmentTest.php',
        'PHPMailer\\Test\\PHPMailer\\AddStringEmbeddedImageTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/AddStringEmbeddedImageTest.php',
        'PHPMailer\\Test\\PHPMailer\\AddrFormatTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/AddrFormatTest.php',
        'PHPMailer\\Test\\PHPMailer\\AuthCRAMMD5Test' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/AuthCRAMMD5Test.php',
        'PHPMailer\\Test\\PHPMailer\\CustomHeaderTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/CustomHeaderTest.php',
        'PHPMailer\\Test\\PHPMailer\\DKIMTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/DKIMTest.php',
        'PHPMailer\\Test\\PHPMailer\\DKIMWithoutExceptionsTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/DKIMWithoutExceptionsTest.php',
        'PHPMailer\\Test\\PHPMailer\\DSNConfiguratorTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/DSNConfiguratorTest.php',
        'PHPMailer\\Test\\PHPMailer\\EncodeQTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/EncodeQTest.php',
        'PHPMailer\\Test\\PHPMailer\\EncodeStringTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/EncodeStringTest.php',
        'PHPMailer\\Test\\PHPMailer\\FileIsAccessibleTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/FileIsAccessibleTest.php',
        'PHPMailer\\Test\\PHPMailer\\FilenameToTypeTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/FilenameToTypeTest.php',
        'PHPMailer\\Test\\PHPMailer\\GenerateIdTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/GenerateIdTest.php',
        'PHPMailer\\Test\\PHPMailer\\GetLastMessageIDTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/GetLastMessageIDTest.php',
        'PHPMailer\\Test\\PHPMailer\\HasLineLongerThanMaxTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/HasLineLongerThanMaxTest.php',
        'PHPMailer\\Test\\PHPMailer\\Html2TextTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/Html2TextTest.php',
        'PHPMailer\\Test\\PHPMailer\\ICalTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/ICalTest.php',
        'PHPMailer\\Test\\PHPMailer\\IsPermittedPathTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/IsPermittedPathTest.php',
        'PHPMailer\\Test\\PHPMailer\\IsValidHostTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/IsValidHostTest.php',
        'PHPMailer\\Test\\PHPMailer\\LocalizationTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/LocalizationTest.php',
        'PHPMailer\\Test\\PHPMailer\\MailTransportTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/MailTransportTest.php',
        'PHPMailer\\Test\\PHPMailer\\MbPathinfoTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/MbPathinfoTest.php',
        'PHPMailer\\Test\\PHPMailer\\MimeTypesTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/MimeTypesTest.php',
        'PHPMailer\\Test\\PHPMailer\\NormalizeBreaksTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/NormalizeBreaksTest.php',
        'PHPMailer\\Test\\PHPMailer\\PHPMailerTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/PHPMailerTest.php',
        'PHPMailer\\Test\\PHPMailer\\ParseAddressesTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/ParseAddressesTest.php',
        'PHPMailer\\Test\\PHPMailer\\PunyencodeAddressTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/PunyencodeAddressTest.php',
        'PHPMailer\\Test\\PHPMailer\\QuotedStringTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/QuotedStringTest.php',
        'PHPMailer\\Test\\PHPMailer\\ReplyToGetSetClearTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/ReplyToGetSetClearTest.php',
        'PHPMailer\\Test\\PHPMailer\\SetErrorTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/SetErrorTest.php',
        'PHPMailer\\Test\\PHPMailer\\SetFromTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/SetFromTest.php',
        'PHPMailer\\Test\\PHPMailer\\SetTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/SetTest.php',
        'PHPMailer\\Test\\PHPMailer\\SetWordWrapTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/SetWordWrapTest.php',
        'PHPMailer\\Test\\PHPMailer\\Utf8CharBoundaryTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/Utf8CharBoundaryTest.php',
        'PHPMailer\\Test\\PHPMailer\\ValidateAddressCustomValidatorTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/ValidateAddressCustomValidatorTest.php',
        'PHPMailer\\Test\\PHPMailer\\ValidateAddressTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/ValidateAddressTest.php',
        'PHPMailer\\Test\\PHPMailer\\WrapTextTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/WrapTextTest.php',
        'PHPMailer\\Test\\PHPMailer\\XMailerTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PHPMailer/XMailerTest.php',
        'PHPMailer\\Test\\POP3\\PopBeforeSmtpTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/POP3/PopBeforeSmtpTest.php',
        'PHPMailer\\Test\\PreSendTestCase' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/PreSendTestCase.php',
        'PHPMailer\\Test\\Security\\DenialOfServiceVectorsTest' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/Security/DenialOfServiceVectorsTest.php',
        'PHPMailer\\Test\\SendTestCase' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/SendTestCase.php',
        'PHPMailer\\Test\\TestCase' => __DIR__ . '/..' . '/phpmailer/phpmailer/test/TestCase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90bbf95869b4e88bf0dc5022e708a458::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90bbf95869b4e88bf0dc5022e708a458::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90bbf95869b4e88bf0dc5022e708a458::$classMap;

        }, null, ClassLoader::class);
    }
}
