pipeline {
 agent any
 stages {
 stage('Clone repository') {
 steps {
 git branch: 'main', url: 'https://github.com/RobinSartini/symfonyPipline.git'
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
