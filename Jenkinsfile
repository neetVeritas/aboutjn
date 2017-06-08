pipeline {
  agent {
    node {
      label 'remote'
    }
    
  }
  stages {
    stage('error') {
      steps {
        sh 'npm install'
        sh 'npm run build'
      }
    }
  }
}