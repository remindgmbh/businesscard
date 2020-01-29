#!/usr/bin/env groovy

pipeline {

    agent any

    stages {

        stage('Clean') {

            steps {
                sh 'rm -rf ./.build/bin'
                sh 'rm -rf ./.build/coverage'
                sh 'rm -rf ./.build/logs'
                sh 'rm -rf ./.build/pdepend'
                sh 'rm -rf ./.build/vendor'
                sh 'rm -rf ./.build/web'

                sh 'mkdir ./.build/coverage'
                sh 'mkdir ./.build/logs'
                sh 'mkdir ./.build/pdepend'
            }
        }

        stage('Build') {

            steps {
                sh '/usr/bin/wget https://getcomposer.org/composer.phar'
                sh '/usr/bin/php7.2 ./composer.phar update --no-progress'
            }
        }

        stage('Analyze and Document') {

            parallel {

                stage('Analyze') {

                    steps {
                        sh '/usr/bin/php7.2 ./composer.phar run pdepend'
                        sh '/usr/bin/php7.2 ./composer.phar run phploc'
                        sh '/usr/bin/php7.2 ./composer.phar run pmd'
                        sh(returnStatus: true, script:'/usr/bin/php7.2 ./composer.phar run codesniffer')
                        sh(returnStatus: true, script:'/usr/bin/php7.2 ./composer.phar run phpcpd')
                        sh '/usr/bin/php7.2 ./composer.phar run test'
                    }
                }

                stage('PHP Documentation') {

                    steps {
                        sh '/usr/bin/php7.2 ./composer.phar run phpdox'
                    }
                }

                stage('Confluence Changelog') {

                    steps {

                        withCredentials([string(credentialsId: 'confluence-rest-api-token-hschulz', variable: 'TOKEN')]) {
                            sh(returnStatus: true, script: '/usr/bin/php7.2 ./composer.phar run conflog -- --token ${TOKEN}')
                        }
                    }
                }
            }
        }
    }

    post {

        always {
            recordIssues enabledForFailure: true, tool: pmdParser(pattern: '**/.build/logs/pmd.xml')
            recordIssues enabledForFailure: true, tool: checkStyle(pattern: '**/.build/logs/phpcs-results.xml')
            recordIssues enabledForFailure: true, tool: cpd(pattern: '**/.build/logs/pmd-cpd.xml')

            junit '**/.build/logs/unitreport.xml'

            publishHTML (target: [
                allowMissing: false,
                alwaysLinkToLastBuild: false,
                keepAll: true,
                reportDir: '.build/phpdox/html',
                reportFiles: 'index.html',
                reportName: "PHP Documentation"
            ])
        }

        success {
            slackSend(color: 'good', message: "${env.JOB_NAME} - #${env.BUILD_NUMBER} Success (<${env.BUILD_URL}|Open>)")
        }

        failure {
            slackSend(color: 'danger', message: "${env.JOB_NAME} - #${env.BUILD_NUMBER} Failure (<${env.BUILD_URL}|Open>)")
        }
    }
}
