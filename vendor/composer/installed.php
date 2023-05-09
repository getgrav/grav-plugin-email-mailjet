<?php return array(
    'root' => array(
        'name' => 'getgrav/email-mailjet',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'grav-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'getgrav/email-mailjet' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'grav-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/event-dispatcher' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/mailer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/mailjet-mailer' => array(
            'pretty_version' => 'v5.4.8',
            'version' => '5.4.8.0',
            'reference' => 'c186b0240d691236fe848c748566e987925d2e1c',
            'type' => 'symfony-mailer-bridge',
            'install_path' => __DIR__ . '/../symfony/mailjet-mailer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
