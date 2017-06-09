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
set +e
[ $(docker ps -f name=portfolio --format="{{.ID}}") ] && docker rm -f portfolio'''
        sh '''#!/bin/sh
set +e
[ $( docker images -q aboutjn) ] && docker rmi -f aboutjn'''
        sh '''#!/bin/sh
set -e
docker build . -t aboutjn
docker run -d -p 3000:3000 --name portfolio aboutjn'''
      }
    }
  }
}