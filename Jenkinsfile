pipeline {
 agent any
 stages {
 stage('Clone repository') {
 steps {
 git branch: 'main', url: 'https://github.com/RobinSartini/symfonyPipline.git'
 }
 }
 stage('Install dependencies') {
 steps {
 
 }
 }
 stage('Run Tests') {
 steps {
 sh './bin/phpunit'
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
