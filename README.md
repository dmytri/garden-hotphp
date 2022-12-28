# Question

How might me use php's built in webserver to do live code syncing in dev mode?

## It should
 - Run a php service
 - Load a php component passed by way of a command line argrument

# Why

So developers working on php-based services can use code syncing to see their changes running and test as they code.

# How

Create a php script that sets passed argments as environment varbiables, starts the dev server running the service

# Steps

- create dev.php script
- use dev.php in devMode command

# Running Example

## Requires

- Minikube or other local-kubernetes

## Test Plan

- Clone repo
- From repo root `garden dev`
- Open ingress for hotphp service in browser
- Edit `app/component.php` with small change
- Refresh browser

## Expected Result

Change made to component is visible when browser refreshed

# See
- [site/Dockerfile](site/Dockerfile)
- [site/garden.yml](site/garden.yml)
- [https://docs.garden.io/guides/code-synchronization-dev-mode](https://docs.garden.io/guides/code-synchronization-dev-mode)
- [https://garden.io](https://garden.io)

