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
        sh '''#!/bin/sh
[ $(docker ps -f name=portfolio --format="{{.ID}}") ] && docker rm -f portfolio'''
        sh '''[ $( docker images -q aboutjn) ] && docker rmi -f aboutjn
set -e'''
        sh '''docker build . -t aboutjn
docker run -d -p 3000:3000 --name portfolio aboutjn'''
      }
    }
  }
}