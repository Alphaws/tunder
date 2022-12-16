<?php
namespace Deployer;

require 'recipe/laravel.php';
set('bin/php', 'docker exec tundermosoly-php php');
set('bin/composer', 'docker run --rm --interactive --volume={{release_path}}:/app --user $(id -u):$(id -g) composer');
task('build-frontend', function () {
    run('cd {{release_path}} && docker run --volume="$PWD":/app -w /app  node:16 npm install');
    run('cd {{release_path}} && docker run --volume="$PWD":/app -w /app  node:16 npm run build');
});

// Config
set('repository', 'git@github.com:Alphaws/tunder.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('prhosting.hu')
    ->set('remote_user', 'alphaws')
    ->set('deploy_path', '/var/www/tundermosoly')
    ->set('docker_path', '/var/www/tundermosoly/docker');

// Hooks
after('deploy:success', 'build-frontend');
after('deploy:failed', 'deploy:unlock');
