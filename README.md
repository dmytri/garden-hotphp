# Question

How might me use php's built in webserver to do live code syncing in dev mode?

# Why

So developers working on php based services can use code syncing to see their changes running and test as they code

# How

Create a php scrit that sets passed argments as environment varbiables, starts the dev server running the service

# Steps

- create dev.php script
- use dev.php in devMode command

# Running Example

## Requires

- Minikube or other local-kubernetes

## Test Plan

- clone repo
- from repo root `garden dev`
- open ingress for hotphp service in browser
- edit `app/component.php` with small change
- refresh browser

## Expected Result

Change is visible when browser refreshed


