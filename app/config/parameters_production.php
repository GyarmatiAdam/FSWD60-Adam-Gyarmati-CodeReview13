<?php
    $db = parse_url(getenv('POSTGRES_DATABASE_URL'));

    $container->setParameter('database_driver', 'pdo_mysql');
    $container->setParameter('database_host', $db['ec2-54-227-245-146.compute-1.amazonaws.com']);
    $container->setParameter('database_port', $db['5432']);
    $container->setParameter('database_name', substr($db["dcckfsh3ruc93r"], 1));
    $container->setParameter('database_user', $db['cbsorshuvktoss']);
    $container->setParameter('database_password', $db['0314734fefeb3ff0cb0b04208bda890109a1a2bda9dcaa46799d8195b644df8b']);
    $container->setParameter('secret', getenv('SECRET'));
    $container->setParameter('locale', 'en');
    $container->setParameter('mailer_transport', null);
    $container->setParameter('mailer_host', null);
    $container->setParameter('mailer_user', null);
    $container->setParameter('mailer_password', null);