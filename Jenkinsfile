pipeline {
  agent {
    node {
      label 'web_general'
    }
    
  }
  stages {
    stage('error') {
      steps {
        sh 'npm run build'
      }
    }
  }
}