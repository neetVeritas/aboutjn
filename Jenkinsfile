pipeline {
  agent {
    node {
      label 'web_general'
    }
    
  }
  stages {
    stage('error') {
      steps {
        sh '''sudo bash
su root
cd $aboutjn_xyz
git pull origin master
npm install
./node_modules/bin/webpack --config build/webpack.base.config.js
'''
      }
    }
  }
}