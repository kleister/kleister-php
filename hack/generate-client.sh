#!/usr/bin/env bash
set -eo pipefail

if [ -L "${0}" ]
then
    ROOT=$(realpath -e "$(dirname "$(readlink -e "${0}")")/..")
else
    ROOT=$(realpath -e "$(dirname "${0}")/..")
fi

SPEC_VERSION="1.0.0-alpha1"
SPEC_DOWNLOAD=${SPEC:-https://dl.kleister.eu/openapi/${SPEC_VERSION}.yaml}

pushd "${ROOT}" >/dev/null
    echo "> deleting library folder"
    rm -rf lib openapitools.json

    openapi-generator-cli \
        generate \
        -c openapi.yml \
        -g php \
        --git-repo-id kleister-php \
        --git-user-id kleister \
        --http-user-agent "kleister-php/${SPEC_VERSION}" \
        -i "${SPEC_DOWNLOAD}" \
        -o . \
        -t hack/openapi/templates \
        --strict-spec true
popd >/dev/null
