@servers(['local' => ['localhost']])
@servers(['web' => ['user@192.168.1.1']])

@setup
    $serveurDistant = 'https://github.com/desmond8500/Yonkou.git';
    $serveurLocal = '';

@endsetup

@task('install', ['on' => 'local'])
    git clone {{ $serveurDistant }}
@endtask

@task('update', ['on' => 'local'])
    git pull {{ $serveurDistant }}
@endtask