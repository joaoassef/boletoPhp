<?php return array(
    'root' => array(
        'name' => 'boletophp/boletophp',
        'pretty_version' => '1',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'boletophp/boletophp' => array(
            'pretty_version' => '1',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'openboleto/openboleto' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '2fa22045d58ab6fd90aa472f208ed07c4134787c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../openboleto/openboleto',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
