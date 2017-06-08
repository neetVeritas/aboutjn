pipeline {
  agent {
    node {
      label 'remote'
    }
    
  }
  stages {
    stage('build') {
      steps {
        sh 'npm install'
        sh 'npm run build'
      }
    }
  }
}