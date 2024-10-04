pipeline {
    agent any
    stages {
        stage('Clone repository') {
            steps {
                git branch: 'main', url: 'https://github.com/RobinSartini/symfonyPipline.git'
            }
        }
        stage('Install Composer') {
            steps {
                sh '''
                    curl -sS https://getcomposer.org/installer | php
                    mkdir -p /var/lib/jenkins/bin
                    mv composer.phar /var/lib/jenkins/bin/composer
                    export PATH=$PATH:/var/lib/jenkins/bin
                '''
            }
        }
        stage('Install dependencies') {
            steps {
                sh 'composer install'
            }
        }
        stage('Run Tests') {
            steps {
                sh 'vendor/bin/phpunit'
            }
        }
    }
    post {
        failure {
            echo 'Pipeline failed. Please check the logs.'
        }
    }
}
