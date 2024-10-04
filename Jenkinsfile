pipeline {
    agent any

    stages {
        stage('Clone repository') {
            steps {
                // Cloner le dépôt depuis GitHub
                git branch: 'main', url: 'https://github.com/RobinSartini/symfonyPipline.git'
            }
        }
        stage('Install dependencies') {
            steps {
                // Configurer Composer pour permettre les plugins et installer les dépendances
                sh 'composer config --no-plugins allow-plugins.symfony/flex true'
                sh 'composer install'
            }
        }
        stage('Run Tests') {
            steps {
                // Exécuter PHPUnit à partir du bon chemin
                sh 'vendor/bin/phpunit tests'
            }
        }
    }
    
    post {
        success {
            echo 'Pipeline completed successfully!'
        }
        failure {
            echo 'Pipeline failed. Please check the logs.'
        }
    }
}
