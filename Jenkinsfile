pipeline {
  agent {
    node {
      label 'remote'
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