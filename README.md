# Gardeb Hot PHP

## Question

How do we use Garden's live code syncing to see code changes running in cluster?

- [Web App Example](## Web App Example)
- [CLI Example](## CLI Example)

## Why

So developers working on php-based services can use code syncing to see their changes running and test as they code.

## Requires

- Minikube or other local-kubernetes

## Web App Example

### It should

 - Run a php base web service
 - Load a php component passed by way of a command line argrument

### How

Create a php script that sets passed argments as environment varbiables, starts the dev server running the service

### Steps

- create dev.php script
- use dev.php in devMode command

### Running Example

#### Test Plan

- Clone repo
- From repo root `garden dev`
- Open ingress for hotphp service in browser
- Edit `app/component.php` with small change
- Refresh browser

## Expected Result

Change made to component is visible when browser refreshed

## CLI Example

### How

Create a php cli script that displaces arguments passed from the command line, and a garden task to execute it in cluster.

### Steps

- create cli.ph
- create garden task to run it

### Running Example

#### Test Plan

- Clone repo
- From repo root `garden run task cli`
- Edit `app/cli.php` with small change
- Run `garden run task cli` again

## Expected Result

Change made to cli.php output is visible when task run again

# See
- [site/Dockerfile](site/Dockerfile)
- [site/garden.yml](site/garden.yml)
- [https://docs.garden.io/guides/code-synchronization-dev-mode](https://docs.garden.io/guides/code-synchronization-dev-mode)
- [https://garden.io](https://garden.io)


