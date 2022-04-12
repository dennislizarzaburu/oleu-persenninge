<?php
namespace Deployer;

require 'recipe/symfony4.php';

// Project name
set('application', 'oleu-persenninge');

set('bin/php', function () {
    return '/opt/plesk/php/8.0/bin/php';
});

set('bin/composer', function () {
    return '/opt/plesk/php/8.0/bin/php /usr/lib/plesk-9.0/composer.phar';
});

// Project repository
set('repository', 'ssh://git@gitlab.braune-digital.com:2224/oleu/oleu-persenninge.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', [
    'public/uploads',
    'public/media'
]);

// Writable dirs by web server 
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts
inventory('hosts.yml');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'database:migrate');

