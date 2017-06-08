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
        sh '''docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)'''
        sh 'docker rmi $(docker images -q)'
        sh '''docker build . -t aboutjn
docker run -d -p 3000:3000 --name portfolio aboutjn'''
      }
    }
  }
}