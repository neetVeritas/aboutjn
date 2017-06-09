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
    stage('deploy') {
      steps {
        sh 'docker ps -f name=portfolio --format="{{.ID}}" | xargs --no-run-if-empty docker rm -f'
        sh 'docker images -q aboutjn | xargs --no-run-if-empty docker rmi -f'
        sh '''docker build . -t aboutjn
docker run -d -p 3000:3000 --name portfolio aboutjn'''
      }
    }
  }
}