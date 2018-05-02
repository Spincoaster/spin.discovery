# SPIN.DISCOVERY

SPIN.DISCOVERY web site with wordpress


## Development

### Install tools

- Install docker, docker-machine and docker-compose
- Install `wp-cli`
  - `brew install wp-cli`

### Running locally in Docker

1. Create .env. See .env.dist
2. docker-compose up

## Deployment

### Install tools

- Install eb cli: `brew install awsebcli`

### Deploy on AWS

We use RDS and Elastic Beanstalk

#### Create DB instance of RDS

You must run RDS DB instance on (default) VPC and create security group.
Refer [php-hawordpress-tutorial](https://docs.aws.amazon.com/ja_jp/elasticbeanstalk/latest/dg/php-hawordpress-tutorial.html)

#### Deploy wordpress with Elastic Beanstalk

1. Create .envrc. See .envrc.dist
2. Run `bin/setup`
3. Run `bin/deploy`

## Import/Export

- `bin/backup dump.sql`: Create database dump file from RDS
- `bin/restore dump.sql`: Restore database dump file to docker db
