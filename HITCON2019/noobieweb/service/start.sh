#!/bin/bash

# `./start.sh` will cleanup and run the service at local. (bind on localhost)
# `./start.sh cleanup` will only cleanup the service files

set -e

ABSDIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

pushd "$ABSDIR" >/dev/null

pushd volumes >/dev/null
find . -delete
popd >/dev/null

touch ./volumes/EMPTY

mkdir -p ./volumes/data/ && chmod 777 ./volumes/data/
sqlite3 ./volumes/db.sqlite < db.schema && chmod 666 ./volumes/db.sqlite
mkdir -p ./volumes/log/nginx
mkdir -p ./volumes/log/php

# Up the service
if [[ -z $1 ]]; then
    # We will use the other config with the following command on prod service.
    # docker-compose up --force-recreate -d
    docker-compose -f docker-compose-dev.yml up --build --force-recreate
fi

popd >/dev/null
